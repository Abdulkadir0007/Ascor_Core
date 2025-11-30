/* Ascora Load-More : Button + Infinite Scroll */
document.addEventListener('DOMContentLoaded', () => {
  const container = document.getElementById('posts-container');
  const loading   = document.getElementById('loading');
  const btn       = document.getElementById('load-more-btn');
  const { ajax_url, nonce, blog_more_load_type } = ascora_ajax ?? {};

  if (!ajax_url || !container) return;

  let page  = 2; // প্রথম পেজ skip
  let lock  = false;
  let done  = false;

  const load = async () => {
    if (lock || done) return;
    lock = true;
    loading.style.display = 'block';

    try {
      const res = await fetch(ajax_url, {
        method : 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body   : `action=ascora_load_more_posts&page=${page}&security=${nonce}`
      });
      const data = await res.json();

      if (data.data === 'No More Posts') {
        done = true;
        if (btn) btn.style.display = 'none';
        if (!document.getElementById('no-more')) {
          const p = document.createElement('p');
          p.id = 'no-more'; p.style.textAlign = 'center'; p.textContent = 'No more posts.';
          container.appendChild(p);
        }
      } else {
        container.insertAdjacentHTML('beforeend', data.data);
        page++;
      }
    } catch (e) {
      console.error(e);
    } finally {
      lock = false;
      loading.style.display = 'none';
    }
  };

  /* ---------- Button Mode ---------- */
  if (blog_more_load_type === '2' && btn) {
    btn.addEventListener('click', load);
    return;
  }

  /* ---------- Infinite Scroll Mode ---------- */
  if (blog_more_load_type === '3') {
    const observe = () => {
      const trigger = document.createElement('div');
      trigger.id = 'scroll-trigger';
      trigger.style.height = '1px';
      container.appendChild(trigger);

      const obs = new IntersectionObserver(([entry]) => {
        if (entry.isIntersecting && !done) {
          obs.disconnect(); // পুরনো trigger অফ
          load().then(() => {
            if (!done) observe(); // নতুন trigger
          });
        }
      }, { threshold: 0.1 });

      obs.observe(trigger);
    };

    observe();
  }
});