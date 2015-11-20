<?php

// Register widgetized areas
if ( function_exists('register_sidebar') ) {
    register_sidebars(1,array('name' => 'Sidebar','before_widget' => '<div class="widget">','after_widget' => '</div>','before_title' => '<h3><span>','after_title' => '</span></h3>'));
    register_sidebars(1,array('name' => 'Sub Sidebar Left','before_widget' => '<div class="widget">','after_widget' => '</div>','before_title' => '<h3><span>','after_title' => '</span></h3>'));
	register_sidebars(1,array('name' => 'Sub Sidebar Right','before_widget' => '<div class="widget">','after_widget' => '</div>','before_title' => '<h3><span>','after_title' => '</span></h3>'));
	register_sidebars(1,array('name' => 'Header Navigation','before_widget' => '<div class="widget">','after_widget' => '</div>','before_title' => '<h3><span>','after_title' => '</span></h3>'));
}

// Check for widgets in widget-ready areas http://wordpress.org/support/topic/190184?replies=7#post-808787
// Thanks to Chaos Kaizer http://blog.kaizeku.com/
function is_sidebar_active( $index = 1){
	$sidebars	= wp_get_sidebars_widgets();
	$key		= (string) 'sidebar-'.$index;

	return (isset($sidebars[$key]));
}



// =============================== 4 advertisment Widget ======================================
class fouradvt extends WP_Widget {
	function fouradvt() {
	//Constructor
		$widget_ops = array('classname' => 'widget Four Advertise', 'description' => '4 Banner Advertise add in sidebar 125x125px' );
		$this->__construct('widget_fouradvt', 'PT &rarr; Four Advertise', $widget_ops);
	}
	function widget($args, $instance) {
	// prints the widget
		extract($args, EXTR_SKIP);
		$title = empty($instance['title']) ? '' : apply_filters('widget_title', $instance['title']);
		$ad1 = empty($instance['ad1']) ? '' : apply_filters('widget_ad1', $instance['ad1']);
		$ad1link = empty($instance['ad1link']) ? '' : apply_filters('widget_ad1link', $instance['ad1link']);
		$ad2 = empty($instance['ad2']) ? '' : apply_filters('widget_ad2', $instance['ad2']);
		$ad2link = empty($instance['ad2link']) ? '' : apply_filters('widget_ad2link', $instance['ad2link']);
		$ad3 = empty($instance['ad3']) ? '' : apply_filters('widget_ad3', $instance['ad3']);
		$ad3link = empty($instance['ad3link']) ? '' : apply_filters('widget_ad3link', $instance['ad3link']);
		$ad4 = empty($instance['ad4']) ? '' : apply_filters('widget_ad4', $instance['ad4']);
		$ad4link = empty($instance['ad4link']) ? '' : apply_filters('widget_ad4link', $instance['ad4link']);
		 ?>

         <div class="advertise">

			<?php if ( $ad1 <> "" ) { ?>
                <a href="<?php echo $ad1link; ?>"><img src="<?php echo $ad1; ?>" alt="" border="0"  class="ads" /></a>
             <?php } ?>

             <?php if ( $ad2 <> "" ) { ?>
                <a href="<?php echo $ad2link; ?>"><img src="<?php echo $ad2; ?>" alt="" border="0"  class="ads" /></a>
             <?php } ?>


             <?php if ( $ad3 <> "" ) { ?>
                <a href="<?php echo $ad3link; ?>"><img src="<?php echo $ad3; ?>" alt="" border="0"  class="ads" /></a>
             <?php } ?>


             <?php if ( $ad4 <> "" ) { ?>
                <a href="<?php echo $ad4link; ?>"><img src="<?php echo $ad4; ?>" alt="" border="0"  class="ads" /></a>
             <?php } ?>


           </div><!-- advt #end -->



	<?php
	}
	function update($new_instance, $old_instance) {
	//save the widget
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['ad1'] = ($new_instance['ad1']);
		$instance['ad1link'] = ($new_instance['ad1link']);
		$instance['ad2'] = ($new_instance['ad2']);
		$instance['ad2link'] = ($new_instance['ad2link']);
		$instance['ad3'] = ($new_instance['ad3']);
		$instance['ad3link'] = ($new_instance['ad3link']);
		$instance['ad4'] = ($new_instance['ad4']);
		$instance['ad4link'] = ($new_instance['ad4link']);
		return $instance;
	}
	function form($instance) {
	//widgetform in backend
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'ad1' => '', 'ad1link' => '', 'ad2' => '',  'ad2link' => '', 'ad3' => '','ad3link' => '','ad4' => '','ad4link' => '' ) );
		$title = strip_tags($instance['title']);
		$ad1 = ($instance['ad1']);
		$ad1link = ($instance['ad1link']);
		$ad2 = ($instance['ad2']);
		$ad2link = ($instance['ad2link']);
		$ad3 = ($instance['ad3']);
		$ad3link = ($instance['ad3link']);
		$ad4 = ($instance['ad4']);
		$ad4link = ($instance['ad4link']);
?>
		<?php /*?><p><label for="<?php echo $this->get_field_id('title'); ?>">Widget Title: <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" /></label></p><?php */?>
        <?php /*?><p><label for="<?php echo $this->get_field_id('desc1'); ?>">Company Address <textarea class="widefat" rows="6" cols="20" id="<?php echo $this->get_field_id('desc1'); ?>" name="<?php echo $this->get_field_name('desc1'); ?>"><?php echo attribute_escape($desc1); ?></textarea></label></p><?php */?>
 <p><label for="<?php echo $this->get_field_id('ad1'); ?>">Advt 1 image url (ex.http://templatic.com/banner1.jpg) <input class="widefat" id="<?php echo $this->get_field_id('ad1'); ?>" name="<?php echo $this->get_field_name('ad1'); ?>" type="text" value="<?php echo attribute_escape($ad1); ?>" /></label></p>
 <p><label for="<?php echo $this->get_field_id('ad1linkad1link'); ?>">Advt 1 Banner link (ex.http://templatic.com/store) <input class="widefat" id="<?php echo $this->get_field_id('ad1link'); ?>" name="<?php echo $this->get_field_name('ad1link'); ?>" type="text" value="<?php echo attribute_escape($ad1link); ?>" /></label></p>

 <p><label for="<?php echo $this->get_field_id('ad2'); ?>">Advt 2 image url (ex.http://templatic.com/banner2.jpg) <input class="widefat" id="<?php echo $this->get_field_id('ad2'); ?>" name="<?php echo $this->get_field_name('ad2'); ?>" type="text" value="<?php echo attribute_escape($ad2); ?>" /></label></p>
 <p><label for="<?php echo $this->get_field_id('ad2link'); ?>">Advt 2 Banner link (ex.http://templatic.com/store) <input class="widefat" id="<?php echo $this->get_field_id('ad2link'); ?>" name="<?php echo $this->get_field_name('ad2link'); ?>" type="text" value="<?php echo attribute_escape($ad2link); ?>" /></label></p>

  <p><label for="<?php echo $this->get_field_id('ad3'); ?>">Advt 3 image url (ex.http://templatic.com/banner3.jpg) <input class="widefat" id="<?php echo $this->get_field_id('ad3'); ?>" name="<?php echo $this->get_field_name('ad3'); ?>" type="text" value="<?php echo attribute_escape($ad2); ?>" /></label></p>
 <p><label for="<?php echo $this->get_field_id('ad3link'); ?>">Advt 2 Banner link (ex.http://templatic.com/store) <input class="widefat" id="<?php echo $this->get_field_id('ad3link'); ?>" name="<?php echo $this->get_field_name('ad3link'); ?>" type="text" value="<?php echo attribute_escape($ad2link); ?>" /></label></p>

 <p><label for="<?php echo $this->get_field_id('ad4'); ?>">Advt 4 image url (ex.http://templatic.com/banner4.jpg) <input class="widefat" id="<?php echo $this->get_field_id('ad4'); ?>" name="<?php echo $this->get_field_name('ad4'); ?>" type="text" value="<?php echo attribute_escape($ad4); ?>" /></label></p>
 <p><label for="<?php echo $this->get_field_id('ad4link'); ?>">Advt 4 Banner link (ex.http://templatic.com/store) <input class="widefat" id="<?php echo $this->get_field_id('ad4link'); ?>" name="<?php echo $this->get_field_name('ad4link'); ?>" type="text" value="<?php echo attribute_escape($ad4link); ?>" /></label></p>

<?php
	}}
register_widget('fouradvt');


// =============================== About Me ======================================
class TextWidget extends WP_Widget {
	function TextWidget() {
	//Constructor
		$widget_ops = array('classname' => 'About Me', 'description' => 'Front Page Text Widget' );
		$this->__construct('widget_text', 'PT &rarr; About Me', $widget_ops);
	}
	function widget($args, $instance) {
	// prints the widget
		extract($args, EXTR_SKIP);
		$title = empty($instance['title']) ? '&nbsp;' : apply_filters('widget_title', $instance['title']);
		$desc1 = empty($instance['desc1']) ? '&nbsp;' : apply_filters('widget_desc1', $instance['desc1']);
		 ?>

 			<div class="about_widget">
      		<h3><?php echo $title; ?> </h3>

			<?php if ( $desc1 <> "" ) { ?>
             <?php echo $desc1; ?>
             <?php } ?>

             </div>


	<?php
	}
	function update($new_instance, $old_instance) {
	//save the widget
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['desc1'] = ($new_instance['desc1']);
		return $instance;
	}
	function form($instance) {
	//widgetform in backend
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 't1' => '', 't2' => '', 't3' => '',  'img1' => '', 'desc1' => '' ) );
		$title = strip_tags($instance['title']);
		$desc1 = ($instance['desc1']);
?>
		<p><label for="<?php echo $this->get_field_id('title'); ?>">Widget Title: <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" /></label></p>

        <p><label for="<?php echo $this->get_field_id('desc1'); ?>">Description <textarea class="widefat" rows="6" cols="20" id="<?php echo $this->get_field_id('desc1'); ?>" name="<?php echo $this->get_field_name('desc1'); ?>"><?php echo attribute_escape($desc1); ?></textarea></label></p>

<?php
	}}
register_widget('TextWidget');



// =============================== 3 section - Search, Archive, Categories ======================================
class threesection extends WP_Widget {
	function threesection() {
	//Constructor
		$widget_ops = array('classname' => '3 in 1', 'description' => 'Tab option - Search, Archive, Categories' );
		$this->__construct('threesection', 'PT &rarr; 3 in 1', $widget_ops);
	}
	function widget($args, $instance) {
	// prints the widget
		extract($args, EXTR_SKIP);
		$title = empty($instance['title']) ? '&nbsp;' : apply_filters('widget_title', $instance['title']);
		$desc1 = empty($instance['desc1']) ? '&nbsp;' : apply_filters('widget_desc1', $instance['desc1']);
		 ?>


      		<?php /*?><h3><?php echo $title; ?> </h3>

			<?php if ( $desc1 <> "" ) { ?>
             <?php echo $desc1; ?>
             <?php } ?><?php */?>


             <div id="xsnazzy">
    <!--Search Box Start -->
    <b class="xtop"><b class="xb1"></b><b class="xb2"></b><b class="xb3"></b><b class="xb4"></b></b>
    <div class="xboxcontent">


      <div class="tabber">
        <div class="tabbertab">
          <h2>Search</h2>
         	<div class="searchform">
<form method="get" id="searchform" action="<?php bloginfo('home'); ?>">
<input type="text" value="Search on this blog..." name="s" class="s" onfocus="if (this.value == 'Search on this blog...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search on this blog...';}"/>
<input type="image" class="button" src="<?php bloginfo('template_url'); ?>/images/none.gif" alt="Submit button" />
</form>
</div>
        </div>

        <div class="tabbertab">
          <h2>Archives</h2>
          <ul class="tablist">
            <?php wp_get_archives('type=monthly'); ?>
          </ul>
        </div>


        <div class="tabbertab">
          <h2>Categories</h2>
          <ul class="tablist">
            <?php wp_list_categories('orderby=name&title_li'); ?>
          </ul>
        </div>
      </div>
      <!--Tabber end -->


    </div>
    <b class="xbottom"><b class="xb4"></b><b class="xb3"></b><b class="xb2"></b><b class="xb1"></b></b> </div>
  <!--Search box end -->



	<?php
	}
	function update($new_instance, $old_instance) {
	//save the widget
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['desc1'] = ($new_instance['desc1']);
		return $instance;
	}
	function form($instance) {
	//widgetform in backend
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 't1' => '', 't2' => '', 't3' => '',  'img1' => '', 'desc1' => '' ) );
		$title = strip_tags($instance['title']);
		$desc1 = ($instance['desc1']);
?>
		<?php /*?><p><label for="<?php echo $this->get_field_id('title'); ?>">Widget Title: <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" /></label></p>

        <p><label for="<?php echo $this->get_field_id('desc1'); ?>">Description <textarea class="widefat" rows="6" cols="20" id="<?php echo $this->get_field_id('desc1'); ?>" name="<?php echo $this->get_field_name('desc1'); ?>"><?php echo attribute_escape($desc1); ?></textarea></label></p><?php */?>

<?php
	}}
register_widget('threesection');









// =============================== Flickr widget ======================================

function flickrWidget()
{
	$settings = get_option("widget_flickrwidget");

	$id = $settings['id'];
	$number = $settings['number'];

?>

<div class="widget flickr">

        <h3 class="hl">Flickr </h3>

		<div class="fix"></div>

            <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=<?php echo $number; ?>&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=<?php echo $id; ?>"></script>

		<div class="fix"></div>

</div>

<?php
}
function flickrWidgetAdmin() {

	$settings = get_option("widget_flickrwidget");

	// check if anything's been sent
	if (isset($_POST['update_flickr'])) {
		$settings['id'] = strip_tags(stripslashes($_POST['flickr_id']));
		$settings['number'] = strip_tags(stripslashes($_POST['flickr_number']));

		update_option("widget_flickrwidget",$settings);
	}

	echo '<p>
			<label for="flickr_id">Flickr ID (<a href="http://www.idgettr.com">idGettr</a>):
			<input id="flickr_id" name="flickr_id" type="text" class="widefat" value="'.$settings['id'].'" /></label></p>';
	echo '<p>
			<label for="flickr_number">Number of photos:
			<input id="flickr_number" name="flickr_number" type="text" class="widefat" value="'.$settings['number'].'" /></label></p>';
	echo '<input type="hidden" id="update_flickr" name="update_flickr" value="1" />';

}

wp_register_sidebar_widget('flickrWidget_id','PT &rarr; Flickr Photos', 'flickrWidget');
wp_register_widget_control('flickrWidgetAdmin_id','PT &rarr; Flickr Photos', 'flickrWidgetAdmin', 250, 200);



 // =============================== Latest Posts Widget (particular category) ======================================

class LatestPostsParticular2 extends WP_Widget {
	function LatestPostsParticular2() {

	//Constructor
		$widget_ops = array('classname' => 'widget latest posts', 'description' => 'List of latest menus in particular category' );
		$this->__construct('widget_posts', 'PT &rarr; Latest Posts', $widget_ops);
	}



	function widget($args, $instance) {
	// prints the widget

		extract($args, EXTR_SKIP);
		echo $before_widget;
		$title = empty($instance['title']) ? '&nbsp;' : apply_filters('widget_title', $instance['title']);
		$category = empty($instance['category']) ? '&nbsp;' : apply_filters('widget_category', $instance['category']);
		$post_number = empty($instance['post_number']) ? '&nbsp;' : apply_filters('widget_post_number', $instance['post_number']);


		echo '<div id="pxsnazzy"> <b class="pxtop"><b class="pxb1"></b><b class="pxb2"></b><b class="pxb3"></b><b class="pxb4"></b></b>
      <div class="pxboxcontent">

        <div class="popular">
           <ul>
            <li>
			 <ul>';
		        ?>
				<h2><?php echo $title; ?></h2>

				<?php
			        global $post;
			        $latest_menus = get_posts('numberposts='.$post_number.'postlink='.$post_link.'&category='.$category.'');
                    foreach($latest_menus as $post) :
                    setup_postdata($post);

			    ?>
            <li><p> <a class="widget-title" href="<?php the_permalink(); ?>"><?php the_title(); ?>
                </a>  <br /> <span class="posted"> by <?php the_author(); ?> on <?php the_time('F j, Y') ?>  </span> </p>
            </li>
		<?php endforeach; ?>
        <?php

	    echo ' </ul>
            </li>
          </ul>
        </div>
      </div>
      <b class="pxbottom"><b class="pxb4"></b><b class="pxb3"></b><b class="pxb2"></b><b class="pxb1"></b></b> </div>';


		echo $after_widget;
	}

	function update($new_instance, $old_instance) {

	//save the widget

		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['category'] = strip_tags($new_instance['category']);
		$instance['post_number'] = strip_tags($new_instance['post_number']);
		$instance['post_link'] = strip_tags($new_instance['post_link']);
		return $instance;

	}



	function form($instance) {

	//widgetform in backend
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'category' => '', 'post_number' => '' ) );
		$title = strip_tags($instance['title']);
		$category = strip_tags($instance['category']);
		$post_number = strip_tags($instance['post_number']);
		$post_link = strip_tags($instance['post_link']);

?>
<p>
  <label for="<?php echo $this->get_field_id('title'); ?>">Title:
    <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" />
  </label>
</p>
<p>
  <label for="<?php echo $this->get_field_id('category'); ?>">Categories (<code>IDs</code> separated by commas):
    <input class="widefat" id="<?php echo $this->get_field_id('category'); ?>" name="<?php echo $this->get_field_name('category'); ?>" type="text" value="<?php echo attribute_escape($category); ?>" />
  </label>
</p>
<p>
  <label for="<?php echo $this->get_field_id('post_number'); ?>">Number of posts:
    <input class="widefat" id="<?php echo $this->get_field_id('post_number'); ?>" name="<?php echo $this->get_field_name('post_number'); ?>" type="text" value="<?php echo attribute_escape($post_number); ?>" />
  </label>
</p>
<?php

	}

}

register_widget('LatestPostsParticular2');





// =============================== Popular Posts Widget ======================================

function PopularPostsSidebar()
{

    $settings_pop = get_option("widget_popularposts");

	$name = $settings_pop['name'];
	$number = $settings_pop['number'];
	if ($name <> "") { $popname = $name; } else { $popname = 'Popular Posts'; }
	if ($number <> "") { $popnumber = $number; } else { $popnumber = '10'; }

?>

<div id="pxsnazzy"> <b class="pxtop"><b class="pxb1"></b><b class="pxb2"></b><b class="pxb3"></b><b class="pxb4"></b></b>
      <div class="pxboxcontent">


		 <div class="popular">
           <ul>
            <li>
            <h2 ><?php echo $popname; ?></h2>
			 <ul>
			<?php
			global $wpdb;
            $now = gmdate("Y-m-d H:i:s",time());
            $lastmonth = gmdate("Y-m-d H:i:s",gmmktime(date("H"), date("i"), date("s"), date("m")-12,date("d"),date("Y")));
            $popularposts = "SELECT ID, post_title, COUNT($wpdb->comments.comment_post_ID) AS 'stammy' FROM $wpdb->posts, $wpdb->comments WHERE comment_approved = '1' AND $wpdb->posts.ID=$wpdb->comments.comment_post_ID AND post_status = 'publish' AND post_date < '$now' AND post_date > '$lastmonth' AND comment_status = 'open' GROUP BY $wpdb->comments.comment_post_ID ORDER BY stammy DESC LIMIT $popnumber";
            $posts = $wpdb->get_results($popularposts);
            $popular = '';
            if($posts){
                foreach($posts as $post){
	                $post_title = stripslashes($post->post_title);
		               $guid = get_permalink($post->ID);

					      $first_post_title=substr($post_title,0,26);
            ?>
		        <li>
                    <a href="<?php echo $guid; ?>" title="<?php echo $post_title; ?>"><?php echo $first_post_title; ?></a>
                    <br style="clear:both" />
                </li>
            <?php } } ?>

		</ul>
            </li>
          </ul>
        </div>
</div>
      <b class="pxbottom"><b class="pxb4"></b><b class="pxb3"></b><b class="pxb2"></b><b class="pxb1"></b></b> </div>

<?php
}
function PopularPostsAdmin() {

	$settings_pop = get_option("widget_popularposts");

	// check if anything's been sent
	if (isset($_POST['update_popular'])) {
		$settings_pop['name'] = strip_tags(stripslashes($_POST['popular_name']));
		$settings_pop['number'] = strip_tags(stripslashes($_POST['popular_number']));

		update_option("widget_popularposts",$settings_pop);
	}

	echo '<p>
			<label for="popular_name">Title:
			<input id="popular_name" name="popular_name" type="text" class="widefat" value="'.$settings_pop['name'].'" /></label></p>';
	echo '<p>
			<label for="popular_number">Number of popular posts:
			<input id="popular_number" name="popular_number" type="text" class="widefat" value="'.$settings_pop['number'].'" /></label></p>';
	echo '<input type="hidden" id="update_popular" name="update_popular" value="1" />';

}

wp_register_sidebar_widget('PopularPostsSidebar_id','PT &rarr; Popular Posts', 'PopularPostsSidebar');
wp_register_widget_control('PopularPostsAdmin_id','PT &rarr; Popular Posts', 'PopularPostsAdmin', 250, 200);


// =============================== Twitter widget ======================================
// Plugin Name: Twitter Widget
// Plugin URI: http://seanys.com/2007/10/12/twitter-wordpress-widget/
// Description: Adds a sidebar widget to display Twitter updates (uses the Javascript <a href="http://twitter.com/badges/which_badge">Twitter 'badge'</a>)
// Version: 1.0.3
// Author: Sean Spalding
// Author URI: http://seanys.com/
// License: GPL

function widget_Twidget_init() {

	if ( !function_exists('wp_register_sidebar_widget') )
		return;

	function widget_Twidget($args) {

		// "$args is an array of strings that help widgets to conform to
		// the active theme: before_widget, before_title, after_widget,
		// and after_title are the array keys." - These are set up by the theme
		extract($args);

		// These are our own options
		$options = get_option('widget_Twidget');
		$account = $options['account'];  // Your Twitter account name
		$title = $options['title'];  // Title in sidebar for widget
		$show = $options['show'];  // # of Updates to show
		$follow = $options['follow'];  // # of Updates to show

        // Output
		echo $before_widget ;

		// start
		echo '<div id="txsnazzy"> <b class="txtop"><b class="txb1"></b><b class="txb2"></b><b class="txb3"></b><b class="txb4"></b></b>
  <div class="txboxcontent">
    <div class="popular">
      <ul>
        <li> <h2 class="i_twitter"><a href="http://www.twitter.com/'.$account.'/" title="'.$follow.'">'.$title.' </h2> </a>';
		echo '<div id="twitter">';
		echo '<ul id="twitter_update_list"><li></li> </ul>
		      <script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>';
		echo '<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/'.$account.'.json?callback=twitterCallback2&amp;count='.$show.'"></script>';
		echo '</li>


      </ul>
	  		<p class="twit">  <a href="http://www.twitter.com/'.$account.'/" title="'.$follow.'">Follow us on Twitter &raquo;</a> </p>
    </div>
  </div>
  <b class="txbottom"><b class="txb4"></b><b class="txb3"></b><b class="txb2"></b><b class="txb1"></b></b> </div>';


		// echo widget closing tag
		echo $after_widget;
	}

	// Settings form
	function widget_Twidget_control() {

		// Get options
		$options = get_option('widget_Twidget');
		// options exist? if not set defaults
		if ( !is_array($options) )
			$options = array('account'=>'rbhavesh', 'title'=>'Twitter Updates', 'show'=>'3');

        // form posted?
		if ( $_POST['Twitter-submit'] ) {

			// Remember to sanitize and format use input appropriately.
			$options['account'] = strip_tags(stripslashes($_POST['Twitter-account']));
			$options['title'] = strip_tags(stripslashes($_POST['Twitter-title']));
			$options['show'] = strip_tags(stripslashes($_POST['Twitter-show']));
			$options['follow'] = strip_tags(stripslashes($_POST['Twitter-follow']));
			$options['linkedin'] = strip_tags(stripslashes($_POST['Twitter-linkedin']));
			$options['facebook'] = strip_tags(stripslashes($_POST['Twitter-facebook']));
			update_option('widget_Twidget', $options);
		}

		// Get options for form fields to show
		$account = htmlspecialchars($options['account'], ENT_QUOTES);
		$title = htmlspecialchars($options['title'], ENT_QUOTES);
		$show = htmlspecialchars($options['show'], ENT_QUOTES);
		$follow = htmlspecialchars($options['follow'], ENT_QUOTES);

		// The form fields
		echo '<p style="text-align:left;">
				<label for="Twitter-account">' . __('Twitter Account ID:') . '
				<input style="width: 280px;" id="Twitter-account" name="Twitter-account" type="text" value="'.$account.'" />
				</label></p>';
		echo '<p style="text-align:left;">
				<label for="Twitter-title">' . __('Title:') . '
				<input style="width: 280px;" id="Twitter-title" name="Twitter-title" type="text" value="'.$title.'" />
				</label></p>';
		echo '<p style="text-align:left;">
				<label for="Twitter-show">' . __('Show Twitter Posts:') . '
				<input style="width: 280px;" id="Twitter-show" name="Twitter-show" type="text" value="'.$show.'" />
				</label></p>';
		echo '<input type="hidden" id="Twitter-submit" name="Twitter-submit" value="1" />';
	}


	// Register widget for use
	wp_register_sidebar_widget('Widget_Twidget_id',array('PT &rarr; Twitter', 'widgets'), 'Widget_Twidget');

	// Register settings for use, 300x200 pixel form
	wp_register_widget_control('Widget_Twidget_control_',array('PT &rarr; Twitter', 'widgets'), 'Widget_Twidget_control', 300, 200);

}

// Run code and init
add_action('widgets_init', 'widget_Twidget_init');
?>