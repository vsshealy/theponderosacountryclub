<?php 
    /**
     * php/menus/menu-header-mobile.php
     * @package theponderosacountryclub
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 2023
    **/
?>

<?php 
    wp_nav_menu(
        array(
            'theme_location' => 'menu-5',
            'menu_id' => 'Header-Mobile'
        )
    );
?>