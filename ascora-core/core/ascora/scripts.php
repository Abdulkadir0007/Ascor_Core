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
         function middleLogo() {
        <?php
            $logo = (!empty($ascora['logo-img']['url']))
                ? '<a href="' . home_url() . '" class="logo-img"><img src="' . esc_url($ascora['logo-img']['url']) . '" alt="' . get_bloginfo('name') . '"></a>'
                : '<a href="' . home_url() . '">' . esc_html($ascora['logo-text']) . '</a>';
    ?>

        let logo =
        `<?php echo $logo; ?>`; 

        const selectLogo = document.querySelector(".middle-logo ul"); 
        if (!selectLogo) return; 
        const logoLi = selectLogo.querySelectorAll(":scope > li"); 
        let totalLi = logoLi.length; 
        totalLi += 1;

        if (totalLi > 0) {
            const middleLI = Math.floor(totalLi / 2);

            const newLogo = document.createElement("li"); 
                    newLogo.className = 'website-logo';
                    newLogo.innerHTML = logo; 

            selectLogo.insertBefore(newLogo, logoLi[middleLI]); 
        }
    }
    middleLogo();
    });
</script>


<?php

}
add_action('wp_head', 'ascora_scripts');
?>