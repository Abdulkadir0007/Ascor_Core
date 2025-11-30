document.addEventListener('DOMContentLoaded', function () {
  // ফর্ম গ্রুপ এবং ইনপুট ফিল্ড সিলেক্ট করুন
  const formGroups = document.querySelectorAll('.form-group, .text-area');

  formGroups.forEach((group) => {
    const input = group.querySelector('input, textarea');
    const label = group.querySelector('label');

    // ফোকাস ইভেন্ট
    input.addEventListener('focus', () => {
      group.classList.add('focused');
    });

    // ব্লার ইভেন্ট
    input.addEventListener('blur', () => {
      if (input.value === '') {
        group.classList.remove('focused', 'filled');
      } else {
        group.classList.add('filled');
      }
    });

    // পেইজ লোড হলে চেক করুন যদি ভ্যালু থাকে
    if (input.value !== '') {
      group.classList.add('filled');
    }
  });
});
document.addEventListener('DOMContentLoaded', function () {
  var header = document.querySelector('.header'); 

  // Redux থেকে Sticky Header অপশন পাও
  var isStickyHeaderEnabled = stickyHeaderSettings.isSticky; 

  if (isStickyHeaderEnabled) {
    var headerOffset = header.offsetTop;

    window.addEventListener('scroll', function () {
      if (window.scrollY > headerOffset) {
        header.classList.add('sticky-header');
      } else {
        header.classList.remove('sticky-header');
      }
    });
  }
});


document.addEventListener('DOMContentLoaded', function () {
  console.log(ascora_ajax.blog_more_load_type); // মান চেক করুন (1, 2, বা 3)

  if (ascora_ajax.blog_more_load_type === '2') {
      console.log('Load More Button System');
  } else if (ascora_ajax.blog_more_load_type === '3') {
      console.log('Infinite Scroll System');
  } else {
      console.log('Pagination System');
  }
});