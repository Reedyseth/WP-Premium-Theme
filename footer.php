</div>


<div id="footer">
  <div id="footer-wrap">

    <div class="footer_left"> <span  class="copyright" >&copy; 2008-<?php echo date('Y'); ?> <?php bloginfo('name'); ?> All rights reserved.  </span>

     <?php if ( get_option('ptthemes_footerpages') <> "" ) { ?>
			<ul id="nav-footer">
			<?php wp_list_pages('title_li=&depth=0&include=' . get_option('ptthemes_footerpages') . '&sort_column=menu_order'); ?>
			</ul>
		<?php } ?>

     </div>


         <p class="footer_right">
            <span class="designby">Theme by
              <a title="datasoftengineering.com" href="http://datasoftengineering.com">
                <strong style="color: white;">Datasoft Engineering</strong>
              </a>
            </span>
          </p>

    <?php wp_footer(); ?>

  </div>
  </div> <!-- footer #end -->
 <?php wp_footer(); ?><?php if ( get_option('ptthemes_google_analytics') <> "" ) { echo stripslashes(get_option('ptthemes_google_analytics')); } ?>
</body>
</html>