<?php
/**
 * The header template
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Starter_Theme
 */
?>


<!DOCTYPE html>

<!--[if lt IE 9]>
<html id="ie" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->


<head>
    <meta charset="<?php bloginfo( "charset" ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php wp_title( "|", true, "right" ); ?></title>

    <!-- favicon & links -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
    <link rel="pingback" href="<?php bloginfo( "pingback_url" ); ?>" />

    <!-- stylesheets are enqueued via functions.php -->
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( "stylesheet_url" ); ?>" />


    <!-- scripts -->
    <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/html5shiv.min.js" type="text/javascript"></script>
    <![endif]-->

    <?php // Lets other plugins and files tie into our theme's <head>:
    wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<div id="page">
    <header id="site-header" role="banner">            
            <h1>
    <a href="<?php echo esc_url( home_url( "/" ) ); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php bloginfo("name"); ?>" />
    </a>
</h1>            <nav id="access" role="navigation">
                <?php wp_nav_menu( array( "theme_location" => "primary" ) ); ?>
            </nav><!-- #access -->  
    </header><!-- #branding -->


    <div id="main">