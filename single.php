<?php get_header(); ?>
<div id="content">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<!--post title-->
	<h1 id="post-<?php the_ID(); ?>"><a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h1>

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

	<!--post paging-->
	<?php //link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
	<?php wp_link_pages('before<p><strong>Pages:</strong>&after=</p>&next_or_number=number'); ?>


 <?php the_tags('<p class="tags">Tags : ', ', ', '<br /> </p>'); ?>

	<!--Post Meta-->
	<div class="post-bottom">
	<h3>Share the Post</h3>
    <ul class="social">
    	<li class="i_facebook" ><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>" target="_blank">Facebook</a></li>
        <li class="i_twitter" ><a href="http://twitter.com/home?status=<?php the_permalink(); ?>" target="_blank">Twitter </a></li>
        <li class="i_gplus" ><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="_blank">Google+</a></li>
        <li class="i_linked" ><a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>&amp;summary=&amp;source=" target="_blank">LinkedIn</a></li>
    </ul> <!-- social bookmark section-->


	</div> <!-- post bottom #end -->

	<!-- Google AdSense -->
	<p>
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- LeaderGreen_728x90 -->
		<ins class="adsbygoogle"
		     style="display:inline-block;width:728px;height:90px"
		     data-ad-client="ca-pub-4673344568091096"
		     data-ad-slot="8732477562"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</p>
	<!-- End Google AdSense -->
<?php

$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 5, 'post__not_in' => array($post->ID) ) );
if( $related ){
 echo "<h3>Related Posts</h3>";
 echo "<ul class='relatedpost'>";
 foreach( $related as $post ) {
	setup_postdata($post); ?>
        <li>
        	<span><?php the_post_thumbnail(); ?></span>
        	<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><h3><?php the_title(); ?></h3></a>
        	<p class="relatedtags"><?php the_tags('',' '); ?></p>
        </li>
<?php }
	echo "</ul>";
 }
wp_reset_postdata(); ?>
	<div class="clearfix"></div>
	<p>
		<strong>If you enjoyed this post, please consider to <a href="#comments">leave a comment</a>
			or <a href="<?php if( isset($db_feedburner_address) && $db_feedburner_address) {
						echo $db_feedburner_address;
					} else {
						bloginfo('rss2_url'); } ?>">
				subscribe to the feed</a> and get future articles delivered to your feed reader.
    </strong></p>



	<!--include comments template-->
	<?php comments_template(); ?>

	<!--do not delete-->
	<?php endwhile; else: ?>

		<?php include(TEMPLATEPATH."/nopost.php");?>

	<!--do not delete-->
	<?php endif; ?>


<!--single.php end-->
</div>

<!--include sidebar-->
<?php get_sidebar();?>
<!--include footer-->
<?php get_footer(); ?>