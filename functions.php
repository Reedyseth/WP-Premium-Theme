<?php // Theme variables

require_once (TEMPLATEPATH . '/library/functions/theme_variables.php');



//** ADMINISTRATION FILES **//



    // Theme admin functions

    require_once ($functions_path . 'admin_functions.php');



    // Theme admin options

    require_once ($functions_path . 'admin_options.php');



    // Theme admin Settings

    require_once ($functions_path . 'admin_settings.php');





//** FRONT-END FILES **//



    // Widgets

    require_once ($functions_path . 'widgets_functions.php');



    // Custom

    require_once ($functions_path . 'custom_functions.php');

    // TinyMCE Functions
    function enable_more_buttons($buttons) {

        $buttons[] = 'fontselect';
        $buttons[] = 'fontsizeselect';
        $buttons[] = 'styleselect';
        $buttons[] = 'backcolor';
        $buttons[] = 'newdocument';
        $buttons[] = 'cut';
        $buttons[] = 'copy';
        $buttons[] = 'charmap';
        $buttons[] = 'hr';
        $buttons[] = 'visualaid';

        return $buttons;
    }
    add_filter("mce_buttons_3", "enable_more_buttons");

    add_filter( 'tiny_mce_before_init', 'myformatTinyMCE' );

    function myformatTinyMCE( $in ) {

        $in['wordpress_adv_hidden'] = FALSE;

    return $in;
    }

    add_action('after_setup_theme', 'wpp_add_post_feature_image');
    // Adding feature image support
    function wpp_add_post_feature_image() {
        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 163, 160, array('center','center'));
    }
?>