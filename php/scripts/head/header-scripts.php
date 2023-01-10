<?php 
    /**
     * php/scripts/head/header-scripts.php
     * @package theponderosacountryclub
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 2023
    **/
?>

<!-- FAVICON -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/icon-theponderosacountryclub-160x160.png" rel="icon"/>

<!-- FONTS -->
<?php include(get_stylesheet_directory().'/php/scripts/external/fonts/merriweather.php'); ?>
<?php include(get_stylesheet_directory().'/php/scripts/external/fonts/roboto.php'); ?>

<!-- FONT-AWESOME -->
<?php include(get_stylesheet_directory().'/php/scripts/external/font-awesome/header.php'); ?>

<!-- FRAMEWORK -->
<?php include(get_stylesheet_directory().'/php/scripts/external/bootstrap/header.php'); ?>

<!-- WP-HEAD -->
<?php wp_head(); ?>

<!-- GOOGLE-ANALYTICS -->
<?php include(get_stylesheet_directory().'/php/scripts/external/google-analytics/header.php'); ?>

<!-- STYLESHEET -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/style.min.css" rel="stylesheet"/>