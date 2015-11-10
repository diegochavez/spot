<?php
/*
	Template Name: Blog
*/
?>
<?php get_header(); ?>	

<div class="header-ad-holder">
	<?php 
 // Custom widget Area Start
 if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Header') ) : ?>
<?php endif;
// Custom widget Area End  
?>
</div>
		
				<?php
				$args = array(
					 'category_name' => 'featured',
					 'post_type' => 'post',
					 'posts_per_page' => 1,
					 'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1)
					 );
				query_posts($args);
				$x = 0;
				while (have_posts()) : the_post(); 
				$do_not_duplicate = $post->ID;
				?> 
				<div class="featured-post">
				<div id="posts_cont">                                           		
					<div class="home_blog_box home_blog_box_full home_blog_box_only">
						<div>
							<?php if(get_post_meta( get_the_ID(), 'page_featured_type', true ) == 'youtube') { ?>


								<div class="video-box">
											<?php $videoID = get_post_meta( get_the_ID(), 'page_video_id', true );?>
											<video id="video-<?php echo $videoID; ?>" class="video-js vjs-default-skin" controls
											preload="auto" width="800" height="450" poster="https://i.ytimg.com/vi/<?php echo $videoID; ?>/hqdefault.jpg"
											data-setup='{"children": { "controlBar": { "children": { "playToggle": false } } }}'>
											<source src="http://volumens.com/proyectos/spot/wp-content/uploads/2015/08/Vans-Wafflecup-en-Buenos-Aires-Argentina-Teaser.mp4" type='video/mp4'>
											<p class="vjs-no-js">
											To view this video please enable JavaScript, and consider upgrading to a web browser
											that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
											</p>
											</video>

											<script type="text/javascript">
													$(document).ready( function() {
													$('#frame-<?php echo $videoID; ?>').hide();
													});

													var player = videojs('video-<?php echo $videoID; ?>', { /* Options */
													}, function() {
													console.log('Playing video <?php echo $videoID; ?>');

													//this.play(); // if you don't trust autoplay for some reason

this.on('play', function() {
//$('#video-<?php echo $videoID; ?>').addClass('vjs-controls-disabled');
});

															// How about an event listener?
															this.on('ended', function() {
															$('#video-<?php echo $videoID; ?>').remove();
															$('#frame-<?php echo $videoID; ?>').show();
															$("#frame-<?php echo $videoID; ?>").attr("src", "http://www.youtube.com/embed/<?php echo $videoID; ?>?rel=0&autoplay=1");
															console.log('Removed video & added youtube');
															});
													});
											</script>
											
											<iframe style="display:none" id="frame-<?php echo $videoID; ?>" src="" width="800" height="450" frameborder="0" allowfullscreen></iframe>
								</div>




							<?php } elseif(get_post_meta( get_the_ID(), 'page_featured_type', true ) == 'vimeo') { ?>
								<iframe src="http://player.vimeo.com/video/<?php echo get_post_meta( get_the_ID(), 'page_video_id', true ); ?>?title=0&amp;byline=0&amp;portrait=0&amp;color=3399ff" width="500" height="338" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
							<?php } else { ?>
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('pano-blog-image'); ?></a>
							<?php } ?>
						</div>
						<div class="center_cont">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<div class="home_blog_meta"> <?php the_time('F j, Y'); ?></div>
							<p><?php echo ds_get_excerpt('450'); ?></p>
							<a class="readmore" href="<?php the_permalink(); ?>"> READ MORE </a>
						</div>
						<div class="clear"></div>
					</div> <!-- //home_blog_box -->	

						<div class="clear"></div>			
				
			</div><!--//posts_cont-->

</div>
			<div class="post-ad-holder">
					<?php 
					// Custom widget Area Start
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('After Post') ) : ?>
					<?php endif;
					// Custom widget Area End  
					?>
					</div>
									
				<?php $x++; ?>
				<?php endwhile; ?>
				
			
<?php wp_reset_query(); ?>  




<div id="content">
	<div class="container">
	
		<div class="single_full_cont single_full_cont2">
		
			<div id="posts_cont">
		
				<?php
				$args = array(
					 'post_type' => 'post',
					 'posts_per_page' => 5,
					 'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1)
					 );
				query_posts($args);
				$x = 0;
				while (have_posts()) : the_post(); 
				if( $post->ID == $do_not_duplicate ) continue;
				?>                                            		
					<div class="home_blog_box home_blog_box_full home_blog_box_only">
						<div>
							<?php if(get_post_meta( get_the_ID(), 'page_featured_type', true ) == 'youtube') { ?>

								<div class="video-box">
											<?php $videoID = get_post_meta( get_the_ID(), 'page_video_id', true );?>
											<video id="video-<?php echo $videoID; ?>" class="video-js vjs-default-skin" controls
											preload="auto" width="800" height="450" poster="https://i.ytimg.com/vi/<?php echo $videoID; ?>/hqdefault.jpg"
											data-setup='{}'>
											<source src="http://volumens.com/proyectos/spot/wp-content/uploads/2015/08/Vans-Wafflecup-en-Buenos-Aires-Argentina-Teaser.mp4" type='video/mp4'>
											<p class="vjs-no-js">
											To view this video please enable JavaScript, and consider upgrading to a web browser
											that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
											</p>
											</video>

											<script type="text/javascript">
									
													var player = videojs('video-<?php echo $videoID; ?>', { /* Options */
													}, function() {
													console.log('Playing video <?php echo $videoID; ?>');

													//this.play(); // if you don't trust autoplay for some reason

this.on('play', function() {
//$('#video-<?php echo $videoID; ?>').addClass('vjs-controls-disabled');
});

															// How about an event listener?
															this.on('ended', function() {
															$('#video-<?php echo $videoID; ?>').remove();
															$('#frame-<?php echo $videoID; ?>').show();
															$("#frame-<?php echo $videoID; ?>").attr("src", "http://www.youtube.com/embed/<?php echo $videoID; ?>?rel=0&autoplay=1");
															console.log('Removed video & added youtube');
															});
													});
											</script>
											
											<iframe style="display:none" id="frame-<?php echo $videoID; ?>" src="" width="800" height="450" frameborder="0" allowfullscreen></iframe>
								</div>

									<?php } elseif(get_post_meta( get_the_ID(), 'page_featured_type', true ) == 'vimeo') { ?>
								<iframe src="http://player.vimeo.com/video/<?php echo get_post_meta( get_the_ID(), 'page_video_id', true ); ?>?title=0&amp;byline=0&amp;portrait=0&amp;color=3399ff" width="500" height="338" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
							<?php } else { ?>
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('pano-blog-image'); ?></a>
							<?php } ?>
						</div>
						<div class="center_cont">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<div class="home_blog_meta"> <?php the_time('F j, Y'); ?></div>
							<p><?php echo ds_get_excerpt('450'); ?></p>
							<a class="readmore" href="<?php the_permalink(); ?>"> READ MORE </a>
						</div>
						<div class="clear"></div>
					</div> <!-- //home_blog_box -->	
						
					<div class="post-ad-holder">
					<?php 
					// Custom widget Area Start
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('After Post') ) : ?>
					<?php endif;
					// Custom widget Area End  
					?>
					</div>			
					
				<?php $x++; ?>
				<?php endwhile; ?>
				
				<div class="clear"></div>			
				
			</div><!--//posts_cont-->
			
			<div class="load_more_cont">
				<div align="center"><div class="load_more_text">
				<?php
				ob_start();
				//next_posts_link('<img src="' . get_bloginfo('stylesheet_directory') . '/images/loading-button.png" />');
				next_posts_link('LOAD &#9660; MORE');
				$buffer = ob_get_contents();
				ob_end_clean();
				if(!empty($buffer)) echo $buffer;
				?>
				</div></div>
			</div><!--//load_more_cont-->     					
			<?php
			global $wp_query;
			//echo '**' . $wp_query->max_num_pages . '**';	
			$max_pages = $wp_query->max_num_pages;
			?>			
			<div id="max_pages_id" style="display: none;"><?php echo ceil($wp_query->found_posts / 3); //echo $max_pages-1; ?></div>					
			
			<?php wp_reset_query(); ?>                        
		
		</div><!--//single_full_cont-->
		
		<?php //get_sidebar(); ?>
		
		<div class="clear"></div>	
		
		
	</div><!--//container-->
</div><!--//content-->
<script type="text/javascript">
$(document).ready(
function($){
var curPage = 1;
var pagesNum = $("#max_pages_id").html();   // Number of pages	
if(pagesNum == 1)
	$('.load_more_text a').css('display','none');	
  $('#posts_cont').infinitescroll({
 
    navSelector  : "div.load_more_text",            
		   // selector for the paged navigation (it will be hidden)
    nextSelector : "div.load_more_text a:first",    
		   // selector for the NEXT link (to page 2)
    itemSelector : "#posts_cont .home_blog_box",
		   // selector for all items you'll retrieve
	behavior: "twitter",
    maxPage: <?php echo $max_pages; ?>
  },function(arrayOfNewElems){
  
  $('#posts_cont').append('<div class="clear"></div>');
  
      //$('.home_post_cont img').hover_caption();
      $('.load_more_text a').css('visibility','visible');
            curPage++;
//            alert(curPage + '**' + pagesNum);
            if(curPage == pagesNum) {
                //$(window).unbind('.infscr');
                $('.load_more_text a').css('display','none');
            } else {}  		      
 
     // optional callback when new content is successfully loaded in.
 
     // keyword `this` will refer to the new DOM content that was just added.
     // as of 1.5, `this` matches the element you called the plugin on (e.g. #content)
     //                   all the new elements that were found are passed in as an array
 
  });  
}  
);
</script>	
<?php get_footer(); ?> 		