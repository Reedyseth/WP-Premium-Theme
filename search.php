<?php get_header(); ?>

<div id="content">
  <!--the loop-->
  <?php if (have_posts()) : ?>

  <h1 class="btmspace">Search Results</h1>
  
  <!--loop article begin-->
  <?php while (have_posts()) : the_post(); ?>
  
 	<div class="comm"><?php comments_popup_link ('0','1','%','CSSclass','0'); ?></div>
    
  <h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
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
     
    <ul class="social">
    	<li class="i_digg" ><a href="http://digg.com/submit?phase=2&amp;url=<?php the_permalink() ?>">  Digg</a></li>            
        <li class="i_stumb" ><a href="http://www.stumbleupon.com/submit?url=<?php the_permalink() ?>;title=<?php the_title(); ?>">Stumbleupon   </a></li>       
        <li class="i_del" ><a href="http://del.icio.us/post?url=<?php the_permalink() ?>;title=x<?php the_title(); ?>">Del.icio.us</a></li>          
        <li class="i_twitter" ><a href="http://twitter.com/home?status=<?php the_permalink() ?>;title=<?php the_title(); ?>">twitter </a></li>             
        <li class="i_technorati" ><a href="http://technorati.com/faves?add=<?php the_permalink() ?>" title="Add to Technorati Favorites"> Technorati</a></li> 
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

<?php get_sidebar();?> <!--include sidebar-->
<?php get_footer(); ?> <!--include footer-->
