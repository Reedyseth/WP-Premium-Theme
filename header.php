<!DOCTYPE html>
<html lang="en">

<head>

    <title>

        <?php if ( is_home() ) { ?><?php bloginfo('description'); ?>&nbsp;|&nbsp;<?php bloginfo('name'); ?><?php } ?>

        <?php if ( is_search() ) { ?>Search Results&nbsp;|&nbsp;<?php bloginfo('name'); ?><?php } ?>

        <?php if ( is_author() ) { ?>Author Archives&nbsp;|&nbsp;<?php bloginfo('name'); ?><?php } ?>

        <?php if ( is_single() ) { ?><?php wp_title(''); ?><?php } ?>

        <?php if ( is_page() ) { ?><?php wp_title(''); ?><?php } ?>

        <?php if ( is_category() ) { ?><?php single_cat_title(); ?>&nbsp;|&nbsp;<?php bloginfo('name'); ?><?php } ?>

        <?php if ( is_month() ) { ?><?php the_time('F'); ?>&nbsp;|&nbsp;<?php bloginfo('name'); ?><?php } ?>

        <?php if (function_exists('is_tag')) { if ( is_tag() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Tag Archive&nbsp;|&nbsp;<?php single_tag_title("", true); } } ?>

    </title>



    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php if (is_home()) { ?>

        <?php if ( get_option('ptthemes_meta_description') <> "" ) { ?>

            <meta name="description" content="<?php echo stripslashes(get_option('ptthemes_meta_description')); ?>" />

        <?php } ?>

        <?php if ( get_option('ptthemes_meta_keywords') <> "" ) { ?>

            <meta name="keywords" content="<?php echo stripslashes(get_option('ptthemes_meta_keywords')); ?>" />

        <?php } ?>

        <?php if ( get_option('ptthemes_meta_author') <> "" ) { ?>

            <meta name="author" content="<?php echo stripslashes(get_option('ptthemes_meta_author')); ?>" />

        <?php } ?>

    <?php } ?>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />



    <!-- My Styles -->

    <!-- <link rel="stylesheet" type="text/css" href="https://behstant.com/includes/css/estilos.css" media="screen" /> -->

    <!-- <link rel="stylesheet" type="text/css" href="https://behstant.com/includes/css/jquery-ui-1.8.19.custom.css" media="screen" /> -->

    <!-- End My Styles -->







    <?php if ( get_option('ptthemes_favicon') <> "" ) { ?>

        <link rel="shortcut icon" type="image/png" href="<?php echo get_option('ptthemes_favicon'); ?>" />

    <?php } ?>

    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php if ( get_option('ptthemes_feedburner_url') <> "" ) { echo get_option('ptthemes_feedburner_url'); } else { echo get_bloginfo_rss('rss2_url'); } ?>" />

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />



    <?php if ( get_option('ptthemes_scripts_header') <> "" ) { echo stripslashes(get_option('ptthemes_scripts_header')); } ?>



    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/library/js/taber.js" language="javascript" ></script>

    <script type="text/javascript" language="javascript" src="<?php bloginfo('stylesheet_directory'); ?>/library/js/hmenu.js"></script>



    <link href="<?php bloginfo('template_directory'); ?>/library/css/dropmenu.css" rel="stylesheet" type="text/css" />



    <?php wp_head(); ?>



    <?php if ( get_option('ptthemes_customcss') ) { ?>

        <link href="<?php bloginfo('template_directory'); ?>/custom.css" rel="stylesheet" type="text/css">

    <?php } ?>

</head>







<body <?php body_class(); ?>>



<div id="header">

    <div id="header-in">

        <div class="title">

            <?php if ( get_option('ptthemes_show_blog_title') ) { ?>



                <a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a>

                <p class="description"><?php bloginfo('description'); ?></p>



            <?php } else { ?>

                <a href="<?php echo get_option('home'); ?>/">
                    <img src="<?php if ( get_option('ptthemes_logo_url') <> "" ) {
                        echo get_option('ptthemes_logo_url');
                    } else { echo bloginfo('template_directory').'/images/logo.gif'; } ?>" alt="<?php bloginfo('name'); ?>"  /></a>



                <p class="description"><?php bloginfo('description'); ?></p>

            <?php } ?>

        </div>

    <!-- <div class="subscribe">

    <span class="rss">

        <a href="<?php if ( get_option('ptthemes_feedburner_url') <> "" ) { echo get_option('ptthemes_feedburner_url'); } else { echo get_bloginfo_rss('rss2_url'); } ?>" rel="alternate" type="application/rss+xml">

        <img src="<?php bloginfo('template_url'); ?>/images/rss.gif" alt="" /></a></span>

     <div class="subscribeform">

      <p>Subscribe via Email </p>
            <form  action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow"  onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=<?php echo stripslashes(get_option('ptthemes_feedburner_id'));  ?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
     <input type="text" class="textfield"   onFocus="if (this.value == 'Your Email Address') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Your Email Address';}" name="email"/>

      <input type="hidden" value="<?php echo stripslashes(get_option('ptthemes_feedburner_id'));  ?>" name="uri"/><input type="hidden" name="loc" value="en_US"/>

       <input type="image" value="" src="<?php bloginfo('template_url'); ?>/images/blank.png" class="sbutton" />

      </form>

       </div>


    -->
    </div>

</div>

<div class="header-banner">
<!--    <script src="https://www.gstatic.com/xads/publisher_badge/contributor_badge.js" data-width="350" data-height="190" data-theme="light" data-pub-name="The Code" data-pub-id="ca-pub-4673344568091096"></script>-->
    <?php
        /*
        $imgr = rand(1,3);
        $websharks = array(
            1 => array("ZenCache","http://affiliates.websharks-inc.com/3944-3-3-25.html", "s2Member The best Membership plugin for WordPress" ),
            2 => array("s2Member","http://affiliates.websharks-inc.com/3944-9-3-26.html", "ZenCache - A Caching plugin for WordPresss" ),
            3 => array("Comment Mail","http://affiliates.websharks-inc.com/3944-10-3-27.html", "Comment Mail - Manage your subscriptions like a PRO." )
        );
        echo '<a href="'.$websharks[$imgr][1].'" target="_blank"><img src="https://behstant.com/blog/wp-content/uploads/2016/01/0'.$imgr.'.png" width="550" height="190" alt="'.$websharks[$imgr][2].'"/></a>';
        */
    ?>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- Leader_Header_Behstant -->
    <ins class="adsbygoogle"
         style="display:inline-block;width:728px;height:90px"
         data-ad-client="ca-pub-4673344568091096"
         data-ad-slot="5945116368"></ins>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
</div>
</div>



<div id="navmenu-h" >

    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Header Navigation') ){}else{  ?>

        <ul>

            <li class="<?php if (is_home()) { echo "current_page_item"; } ?>"><a href="<?php echo get_option('home'); ?>">Home</a></li>

            <?php wp_list_pages('title_li=&depth=0&exclude=' . get_inc_pages("pag_exclude_") .'&sort_column=menu_order'); ?>

        </ul>

    <?php }?>

</div>

<div class="clearfix"></div>

<div id="container" class="container-fluid">

    <!--header.php end-->

