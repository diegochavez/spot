<?php get_header(); ?>	
<div id="content">
	<div class="container">
	
		<div id="posts_cont">
		
			
			
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>		

<div class="home_blog_box home_blog_box_full home_blog_box_only">
						<div>
							<?php if(get_post_meta( get_the_ID(), 'page_featured_type', true ) == 'youtube') { ?>
								<iframe width="560" height="315" src="http://www.youtube.com/embed/<?php echo get_post_meta( get_the_ID(), 'page_video_id', true ); ?>" frameborder="0" allowfullscreen></iframe>
							<?php } elseif(get_post_meta( get_the_ID(), 'page_featured_type', true ) == 'vimeo') { ?>
								<iframe src="http://player.vimeo.com/video/<?php echo get_post_meta( get_the_ID(), 'page_video_id', true ); ?>?title=0&amp;byline=0&amp;portrait=0&amp;color=3399ff" width="500" height="338" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
							<?php } else { ?>
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('pano-blog-image'); ?></a>
							<?php } ?>
						</div>
						</div>

					<div class="title_top">
					<h1 class="single_title"><?php the_title(); ?></h1>
					<div class="next_prev_cont">
						<div class="left">
							 <?php previous_post_link('%link', ''); ?> 
						</div>
						<div class="right">
							 <?php next_post_link('%link', ''); ?> 
						</div>
					</div>
						<div class="clear"></div>
						
					</div><!--//next_prev_cont-->
					<div class="clear"></div>
					
					<div class="single_inside_content">
					
						<?php the_content(); ?>
						
					</div><!--//single_inside_content-->
					
					<br />
					
					<?php comments_template(); ?>	
																
				
				<?php endwhile; else: ?>
				
					<h3>Sorry, no posts matched your criteria.</h3>
				<?php endif; ?>                    																
			
			
			
			<?php // get_sidebar(); ?>
			
			<div class="clear"></div>
		
		</div><!--//posts_cont-->
		
	</div><!--//container-->
</div><!--//content-->
<?php get_footer(); ?> 		