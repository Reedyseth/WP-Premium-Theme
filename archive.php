<?php get_header(); ?>
<div class="row">
<div id="content" class="col-md-8">
	<!--the loop-->
	<?php if (have_posts()) : ?>
	<div class="post-wrapper">
	<h1>
	<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
	<?php /* If this is a category archive */ if (is_category()) { ?>
	<?php echo single_cat_title(); ?>

 	<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
	Posts Tagged &#8216;<?php single_tag_title(); ?>

	<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
	Archive for <?php the_time('F jS, Y'); ?>

	<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
	Archive for <?php the_time('F, Y'); ?>

	<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
	Archive for <?php the_time('Y'); ?>

	<?php /* If this is a search */ } elseif (is_search()) { ?>
	Search Results

	<?php /* If this is an author archive */ } elseif (is_author()) { ?>
	Author Archive

	<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
	Blog Archives

	<!--do not delete-->
	<?php } ?>
	</h1>
	</div>

	<!--loop article begin-->
	<?php while (have_posts()) : the_post(); ?>
	<div class="post-wrapper">
	<!--post title as a link-->
		<div class="comm"><?php comments_popup_link ('0','1','%','CSSclass','0'); ?></div>

	<h3 class="post-title" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>

	<div class="post-meta-top">
	<div class="date">Posted at <?php the_time('F j, Y'); ?> // <?php the_category(', ') ?> </div>
 	</div> <!-- post-meta-top #end -->


	<?php if ( get_option( 'ptthemes_postcontent_full' )) { ?>

					    <?php the_content('<br />Read the rest of this entry &raquo;'); ?>

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
       <!--one post end-->
	<?php endwhile; ?>

    <div class="page-nav">
      <div class="nav-previous">
        <?php previous_posts_link('Previous Page') ?>
      </div>
      <div class="nav-next">
        <?php next_posts_link('Next Page') ?>
      </div>
    </div>

	<!-- do not delete-->
	<?php else : ?>

				<?php include(TEMPLATEPATH."/nopost.php");?>

	<!--do not delete-->
	<?php endif; ?>


<!--archive.php end-->

</div>
<!--include sidebar-->
<?php get_sidebar();?>
</div>
<!--include footer-->
<?php get_footer(); ?>