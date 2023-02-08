<?php
/**
* Cinekourt Theme's functions and definitions
*
* @package Cinekourt
* @since Cinekourt 1.0
*/

if ( ! function_exists( 'cinekourt_setup' ) ) :

function cinekourt_setup() {

/**
* Make theme available for translation.
* Translations can be placed in the /languages/ directory.
*/
load_theme_textdomain( 'cinekourt', get_template_directory() . '/languages' );

/**
* Add default posts and comments RSS feed links to <head>.
    */
    add_theme_support( 'automatic-feed-links' );

    /**
    * Enable support for post thumbnails and featured images.
    */
    add_theme_support( 'post-thumbnails' );

    /**
    * Add support for two custom navigation menus.
    */
    register_nav_menus( array(
    'primary'   => __( 'Primary Menu', 'cinekourt' ),
    'secondary' => __( 'Secondary Menu', 'cinekourt' ),
    ) );

    /**
    * Enable support for the following post formats:
    * aside, gallery, quote, image, and video
    */
    add_theme_support( 'post-formats', array( 'aside', 'gallery', 'quote', 'image', 'video' ) );
    }
    endif; // cinekourt_setup
    add_action( 'after_setup_theme', 'cinekourt_setup' );
