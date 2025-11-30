<?php

declare(strict_types=1);

/**
 * Ascora Custom Editor.
 *
 * @package Ascora
 * @since 1.0.0
 */

defined('ABSPATH') || exit;

Redux::set_section(
    $opt_name,
    [
        'title'  => esc_html__('Custom Editor', 'ascora-core'),
        'id'     => 'custom-css',
        'desc'   => esc_html__('Manage Your Breadcrumb.', 'ascora-core'),
        'icon'   => 'el el-css',
        'fields' => [
            [
                'id'     => 'projectsingle-import',
                'type'   => 'info',
                'style'  => 'info',
                'notice' => false,
                'desc'   => wp_kses_post(__('<strong>IMPORTANT NOTE:</strong> This tab contains heading typography options. Additional typography options for specific areas can be found within other tabs. Example: For menu typography options go to the menu tab.', 'ascora-core')),
            ],
            [
                'id'         => 'css_editor',
                'type'       => 'ace_editor',
                'title'      => esc_html__('CSS Code', 'ascora-core'),
                'subtitle'   => esc_html__("Enter your CSS code in the field below. Do not include any tags or HTML in the field. Custom CSS entered here will override the theme CSS. In some cases, the !important tag may be needed. Don't URL encode image or svg paths. Contents of this field will be auto encoded.", 'ascora-core'),
                'mode'       => 'css',
                'full_width' => true,
                'theme'      => 'monokai',
                'default'    => "#header{\nmargin: 0 auto;\n}",
            ],
            [
                'id'         => 'jc_editor',
                'type'       => 'ace_editor',
                'title'      => esc_html__('Js Code', 'ascora-core'),
                'subtitle'   => esc_html__('Enter your Js code in the field below.', 'ascora-core'),
                'mode'       => 'javascript',
                'theme'      => 'monokai',
                'full_width' => true,
                'default'    => '(function($){

    $(document).ready(function(){

        //code start from here



    });

})(jQuery)',
            ],
        ],
    ]
);
