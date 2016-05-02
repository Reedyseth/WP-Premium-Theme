<?php get_header(); ?>
<div class="row">
<div id="content" class="col-md-8">
  <!--the loop-->
  <?php if (have_posts()) : ?>

  <div class="post-wrapper">
  <h1 class="btmspace">Search Results</h1>

  <!--loop article begin-->
  <?php while (have_posts()) : the_post(); ?>

 	<div class="comm"><?php comments_popup_link ('0','1','%','CSSclass','0'); ?></div>

  <h3 class="post-title" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
    <?php the_title(); ?>
    </a></h3>


  <div class="post-meta-top">
    <div class="date">Posted at <?php the_time('F j, Y'); ?> // <?php the_category(', ') ?> </div>
  </div>  <!-- post-meta-top #end -->

   <?php if ( get_option( 'ptthemes_postcontent_full' )) { ?>

					    <?php the_content('<br />Read the rest of this entry &raquo;'); ?>

					<?php } else { ?>

					    <?php the_excerpt(); ?>

					<?php } ?>


  <?php the_tags('<p class="tags">Tags : ', ', ', '<br /> </p>'); ?>

  <div class="post-bottom">
    <h1>Share the Post</h1>
      <ul class="social">
        <li class="i_facebook" ><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>" target="_blank">Facebook</a></li>
          <li class="i_twitter" ><a href="http://twitter.com/home?status=<?php the_permalink(); ?>" target="_blank">Twitter </a></li>
          <li class="i_gplus" ><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="_blank">Google+</a></li>
          <li class="i_linked" ><a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>&amp;summary=&amp;source=" target="_blank">LinkedIn</a></li>
      </ul> <!-- social bookmark section-->

  </div>  <!-- post bottom #end -->



  <?php endwhile; ?>
    <div class="page-nav">
      <div class="nav-previous">
        <?php previous_posts_link('Previous Page') ?>
      </div>
      <div class="nav-next">
        <?php next_posts_link('Next Page') ?>
      </div>
    </div>


	<?php else : ?>

  <?php include(TEMPLATEPATH."/nopost.php");?>

	<?php endif; ?>
  </div>

</div>

<?php get_sidebar();?> <!--include sidebar-->
</div>
<?php get_footer(); ?> <!--include footer-->
