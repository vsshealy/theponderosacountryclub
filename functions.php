<?php 
    /**
     * functions.php
     * @package theponderosacountryclub
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 2023
    **/
?>

<?php 

    // REGISTER MENUS
        $hook_result = apply_filters_deprecated('elementor_hello_theme_register_menus', [true], '2.0', 'hello_elementor_register_menus');

        if (apply_filters('hello_elementor_register_menus', $hook_result)) {
            register_nav_menus(['menu-3' => __('Header-Primary', 'theponderosacountryclub')]);
            register_nav_menus(['menu-4' => __('Header-Secondary', 'theponderosacountryclub')]);
            register_nav_menus(['menu-5' => __('Header-Mobile', 'theponderosacountryclub')]);
            register_nav_menus(['menu-6' => __('Footer-Primary', 'theponderosacountryclub')]);
            register_nav_menus(['menu-7' => __('Footer-Secondary', 'theponderosacountryclub')]);
            register_nav_menus(['menu-8' => __('Footer-Mobile', 'theponderosacountryclub')]);
            register_nav_menus(['menu-9' => __('Members-Primary', 'theponderosacountryclub')]);
            register_nav_menus(['menu-10' => __('Members-Secondary', 'theponderosacountryclub')]);
            register_nav_menus(['menu-11' => __('Members-Mobile', 'theponderosacountryclub')]);
        }
    
    // REMOVE WP_HEAD
        remove_action('wp_head', '_wp_render_title_tag', 1);
?>