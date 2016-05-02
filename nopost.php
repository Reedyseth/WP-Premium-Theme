<div class="post-wrapper">
<h3>Sorry, no posts matched your criteria.</h3>
    <p>Please try searching again here...</p>
        <div class="search404">
         <?php include(TEMPLATEPATH."/searchform.php");?>
    </div>
    <p class="clear"><strong>Or, take a look at Archives and Categories</strong></p>

    <div class="category">
    	<h2><?php _e('Category'); ?></h2>
    	<ul>
        <?php wp_list_categories('orderby=name&title_li'); ?>
      </ul>
    </div>

    <div class="archives">
     <h2 class="sidebartitle">
      <?php _e('Archives'); ?>
    </h2>
    <ul>
      <?php wp_get_archives('type=monthly'); ?>
    </ul>
     </div>

  <div class="clearfix"></div>
