<?php get_header(); ?>                          
<center><h1><?php echo get_search_query(); ?></h1>  </center>
		<div class="content">
			<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
			<div class="post-main"> 
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span>(<?php the_date_xml(); ?>)</span></h1>
				<div class="post">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					<?php the_excerpt(); ?>
				</div>
			</div> 
			<?php endwhile; ?>
			<div class="nav">
				<?php posts_nav_link(); ?>
			</div>
			<?php else : ?>
			<div class="post-main"> 
				<h1><?php _e( 'Not found.', 'whitepaper' ); ?></h1>
			</div> 		
			<?php endif; ?>
		</div>
<aside class="widget">	
	<div class="row">
		<div class="sidebar-left span2">
			<?php dynamic_sidebar( 'sidebar-left' ); ?>
		</div>
	<div class="row">
		<div class="sidebar-center span2">
			<?php dynamic_sidebar( 'sidebar-center' ); ?>
		</div>
	</div>
	<div class="row">
		<div class="sidebar-right span2">
			<?php dynamic_sidebar( 'sidebar-right' ); ?>
		</div>
	</div></div>
</aside>
	</div>
	
<?php get_footer(); ?>