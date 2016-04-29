<?php get_header(); ?>
<div class="row">
<div id="content" class="col-md-8 col-md-offset-1">
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>

  <div class="post-wrapper">

	<!--comment count on right-->
		<div class="comm"><?php comments_popup_link ('0','1','%','CSSclass','0'); ?></div>

    <!--post title link-->
	<h3 class="h1" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>


	<div class="post-meta-top">
	<div class="date">Posted at <?php the_time('F j, Y'); ?> // <?php the_category(', ') ?> </div>
 	</div> <!-- post-meta-top #end -->


	<!--read more-->



    <?php if ( get_option( 'ptthemes_postcontent_full' )) { ?>

					    <?php the_content('<br />Continue reading &raquo;'); ?>

					<?php } else { ?>

					    <?php the_excerpt(); ?>

					<?php } ?>

      <!--Rateing-->
    <?php if(function_exists('the_ratings')) { the_ratings(); } ?>
    <!--Rateing end-->


     <?php the_tags('<p class="tags">Tags : ', ', ', '<br /> </p>'); ?>

	<div class="post-bottom">
    <h3>Share the Post</h3>
    <ul class="social">
    	<li class="i_facebook" ><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>" target="_blank">Facebook</a></li>
        <li class="i_twitter" ><a href="http://twitter.com/home?status=<?php the_permalink(); ?>" target="_blank">Twitter </a></li>
        <li class="i_gplus" ><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="_blank">Google+</a></li>
        <li class="i_linked" ><a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>&amp;summary=&amp;source=" target="_blank">LinkedIn</a></li>
    </ul> <!-- social bookmark section-->

	</div> <!-- post bottom #end -->

  </div>

	<?php endwhile; ?>

    <!-- Prev/Next page navigation -->
    <div class="pagenavi">
    <?php if(function_exists('wp_pagenavi')) { ?>
    <div class="wp-pagenavi">
      <?php wp_pagenavi();  ?>
    </div>
    <?php }


 else {?>
    <div class="page-nav">
      <div class="nav-previous">
        <?php previous_posts_link('Previous Page') ?>
      </div>
      <div class="nav-next">
        <?php next_posts_link('Next Page') ?>
      </div>
    </div>
    <?php } ?>
  </div>

	<?php else : ?>

			  <?php include(TEMPLATEPATH."/nopost.php");?>

	<?php endif; ?>

</div>

<!--include sidebar-->
<?php get_sidebar(); ?>

</div>

<!--include footer-->
<?php get_footer(); ?>