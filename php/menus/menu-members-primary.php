<?php 
    /**
     * php/menus/menu-members-primary.php
     * @package theponderosacountryclub
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 2023
    **/
?>

<?php 
    wp_nav_menu(
        array(
            'theme_location' => 'menu-9',
            'menu_id' => 'Members-Primary'
        )
    );
?>