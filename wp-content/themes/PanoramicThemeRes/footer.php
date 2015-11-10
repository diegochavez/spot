<?php $shortname = "panoramic_theme"; ?>
<?php //if (!is_home() && !is_front_page() && !is_archive()) { ?>
<?php if (!is_home()) { ?>
	<div class="container">
		<div class="home_bottom_box_cont">
			<div class="home_bottom_box">
				<?php if( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Col 1') ) : ?>
				<?php endif; ?>
			</div> <!-- //home_bottom_box -->
			<div class="home_bottom_box">
				
				<?php if( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Col 2') ) : ?>
				<?php endif; ?>
			</div> <!-- //home_bottom_box -->
			<div class="home_bottom_box home_bottom_box_last">
				
				
				<?php if( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Col 3') ) : ?>
				<?php endif; ?>
			</div> <!-- //home_bottom_box -->
			<div class="clear"></div>
		</div> <!-- //home_bottom_box_cont -->
	</div> <!-- //container -->
	<div class="footer_copyright_cont">
	<div class="footer_copyright">
		<div class="container">
			
			<!-- DELETE THIS -->
			<div class="footer_social" style="display: none;">
				<?php if(get_option($shortname.'_twitter_link','') != '') { ?>
					<a href="<?php echo get_option($shortname.'_twitter_link',''); ?>"target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter-icon.png" alt="twitter" /></a>
				<?php } ?>
				<?php if(get_option($shortname.'_facebook_link','') != '') { ?>
					<a href="<?php echo get_option($shortname.'_facebook_link',''); ?>"target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook-icon.png" alt="facebook" /></a>
				<?php } ?>
				<?php if(get_option($shortname.'_google_plus_link','') != '') { ?>
					<a href="<?php echo get_option($shortname.'_google_plus_link',''); ?>"target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/google-plus-icon.png" alt="google plus" /></a>
				<?php } ?>
				<?php if(get_option($shortname.'_picasa_link','') != '') { ?>
					<a href="<?php echo get_option($shortname.'_picasa_link',''); ?>"target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/picasa-icon.png" alt="Instagram" /></a>
				<?php } ?>
				<?php if(get_option($shortname.'_pinterest_link','') != '') { ?>
					<a href="<?php echo get_option($shortname.'_pinterest_link',''); ?>"target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/pinterest-icon.png" alt="pinterest" /></a>
				<?php } ?>
				<?php if(get_option($shortname.'_vimeo_link','') != '') { ?>
					<a href="<?php echo get_option($shortname.'_vimeo_link',''); ?>"target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/vimeo-icon.png" alt="vimeo" /></a>
				<?php } ?>
				<?php if(get_option($shortname.'_youtube_link','') != '') { ?>
					<a href="<?php echo get_option($shortname.'_youtube_link',''); ?>"target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/youtube-icon.png" alt="youtube" /></a>
				<?php } ?>
				<?php if(get_option($shortname.'_flickr_link','') != '') { ?>
					<a href="<?php echo get_option($shortname.'_flickr_link',''); ?>"target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/flickr-icon.png" alt="youtube" /></a>
				<?php } ?>				
				<div class="clear"></div>
			</div><!--//footer_social-->			
			
			<?php echo stripslashes(stripslashes(get_option($shortname.'_copyright_text','&copy; Copyright 2014 Powered by Wordpress'))); ?>
			<div class="clear"></div>
		</div><!--//container-->
	</div><!--//footer_copyright-->
	</div><!--//footer_copyright_cont-->
<?php } ?>
<?php //} ?>
<?php wp_footer(); ?>
</body>
</html>