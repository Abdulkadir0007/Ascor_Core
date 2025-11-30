<?php

/**
 * Ascora For Script.
 *
 *  @package Ascora
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access
};

function ascora_scripts()
{
    global $ascora;
    ?>
<script>
    <?php print $ascora['jc_editor']; ?>
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        <?php
            $logo = (!empty($ascora['logo-img']['url']))
                ? '<a href="' . home_url() . '" class="logo-img"><img src="' . esc_url($ascora['logo-img']['url']) . '" alt="' . get_bloginfo('name') . '"></a>'
                : '<a href="' . home_url() . '">' . esc_html($ascora['logo-text']) . '</a>';
    ?>

        let logo =
        `<?php echo $logo; ?>`; // PHP থেকে JavaScript-এ ভ্যালু পাঠানো

        const selectLogo = document.querySelector(".middle-logo ul"); // UL সিলেক্ট করা
        if (!selectLogo) return; // UL না থাকলে কিছু করবে না

        const logoLi = selectLogo.querySelectorAll(":scope > li"); // শুধু ডিরেক্ট `li` নির্বাচন
        let totalLi = logoLi.length; // মোট `li` সংখ্যা
        totalLi += 1; // মোট `li` সংখ্যা

        if (totalLi > 0) {
            const middleLI = Math.floor(totalLi / 2); // মাঝখানের ইনডেক্স বের করা

            const newLogo = document.createElement("li"); // নতুন `li` তৈরি করা
            newLogo.innerHTML = logo; // `li` এর ভিতরে `<a>` যোগ করা

            selectLogo.insertBefore(newLogo, logoLi[middleLI]); // মাঝখানে ইনসার্ট করা
        }
    });
</script>


<?php

}
add_action('wp_head', 'ascora_scripts');
?>