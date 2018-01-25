
<?php
/* Template Name: Subscribe To Comments */
if (isset($wp_subscribe_reloaded)){ global $posts; $posts = $wp_subscribe_reloaded->stcr->subscribe_reloaded_manage(); }
get_header(); ?>
<!--subcribe.php-->
<div class="row">
	<div id="content" class="col-md-8">

		<!--loop-->
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post-wrapper">
			<!--post title-->
			<h1 class="btmspace" id="post-<?php the_ID(); ?>"><?php the_title(); ?></h1>
			<!--post with more link -->
			<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

			<!--if you paginate pages-->
			<?php wp_link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>

		<!--end of post and end of loop-->
		<?php endwhile; endif; ?>

		<?php comments_template(); ?>
		</div>
	</div>

<!--page.php end-->
<!--include sidebar-->
<?php get_sidebar();?>
</div> <!--row-->
<!--include footer-->
<?php get_footer(); ?>