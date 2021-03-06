<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->

	<?php if ( have_comments() ) : ?>
	<h3><?php comments_number('No Comment', 'One Comment', '% Comments' );?></h3>


	 	<ul class="commentlist">
		<?php wp_list_comments('type=comment&avatar_size=48'); ?>
	 	</ul>


	<div class="navigation">
		<div class="fl"><?php previous_comments_link() ?></div>
		<div class="fr"><?php next_comments_link() ?></div>
	</div>

	<?php if ( !empty($comments_by_type['pings']) ) :  ?>
	<h3>Trackbacks</h3>
	<b>Check out what others are saying about this post...</b>
	<ol class="commentlist">
	<?php wp_list_comments('type=pings'); ?>
	</ol><br /><br />
	<?php endif; ?>

 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">Comments are closed.</p>

	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>

<div id="respond">

<h3>Leave a Comment</h3>

<div class="cancel-comment-reply">
	<?php cancel_comment_reply_link(); ?>
</div>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p></div>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
  <?php if ( $user_ID ) : ?>
  <p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Logout &raquo;</a></p>
  <?php else : ?>
  <p>
    <label for="author">
    <?php _e('Name <span class="indicate">*</span>'); ?>
    </label>
    <input type="text" name="author" id="author" class="form-control" value="<?php echo $comment_author; ?>" size="28" tabindex="1" />

  </p>
  <p>
    <label for="email">
    <?php _e('E-mail <span class="indicate">*</span>'); ?>
    </label>
    <input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="28" tabindex="2" class="form-control" />

  </p>
  <p>
    <label for="url">
    <?php _e('<acronym title="Uniform Resource Identifier">URI</acronym>'); ?>
    </label>

    <input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="28" tabindex="3" class="form-control" />
  </p>
  <?php endif; ?>
  <p>
    <label for="comment">Your Comment</label><br/>

    <textarea name="comment" id="comment" cols="60" rows="10" tabindex="4" class="form-control"></textarea>
  </p>
  <p>
    <?php // global $wp_subscribe_reloaded; if (isset($wp_subscribe_reloaded)){ $wp_subscribe_reloaded->stcr->subscribe_reloaded_show(); } ?>
    <input name="submit" id="submit" type="submit" tabindex="5" value="<?php _e('Submit'); ?>" class="btn btn-primary" />
    <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
    <input type="hidden" name="redirect_to" value="<?php echo esc_html($_SERVER['REQUEST_URI']); ?>" />
  </p>
  <?php do_action('comment_form', $post->ID); ?>
</form>
</div>

<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>