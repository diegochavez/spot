<?php get_header(); ?>	
<?php $shortname = "travel_blog"; ?>
<div id="slideshow_cont">
		<div class="fotorama" data-nav="thumbs" data-width="100%" data-height="90%" data-ratio="800/600" data-fit="cover">		
			<?php
			$slider_arr = array();
			$x = 0;
			$args = array(
				 //'category_name' => 'blog',
				 'post_type' => 'post',
				 'meta_key' => 'ex_show_in_slideshow',
				 'meta_value' => 'Yes',
				 'posts_per_page' => 99
				 );
			query_posts($args);
			while (have_posts()) : the_post(); 
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full' );
				//$thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'large' );
				$img_url = $thumb['0']; 
			?>		
				
  					<img src="<?php echo $img_url; ?>">
			
				<!--
				<li data-background="<?php echo $img_url; ?>" onclick="location.href='<?php the_permalink(); ?>';" style="cursor:pointer;">
					<div class="flick-title"><?php the_title(); ?></div>
					<div class="flick-sub-text"><?php echo ds_get_excerpt('90'); ?></div>
				</li>
				-->		
			<?php array_push($slider_arr,get_the_ID()); ?>
			<?php $x++; ?>
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>                                    		
	
		</div>
		
	
</div> <!-- //slideshow_cont -->
<?php get_footer(); ?> 		