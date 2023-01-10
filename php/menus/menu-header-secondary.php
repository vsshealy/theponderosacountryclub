<?php 
    /**
     * php/menus/menu-header-secondary.php
     * @package theponderosacountryclub
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 2023
    **/
?>

<?php 
    wp_nav_menu(
        array(
            'theme_location' => 'menu-4',
            'menu_id' => 'Header-Secondary'
        )
    );
?>