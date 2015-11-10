<?php get_header(); ?>   
		<div class="content">
			<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
			<div class="post-main"> 
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span><?php the_date(); ?></span></h1>
				<div class="post">
					<?php the_content(); ?> <hr />
					<?php wp_link_pages( $args ); ?>
						<div class="categories"><div class="tagi"><?php the_tags(); ?></div>	<?php _e( 'Categories ', 'whitepaper' ); ?> <?php the_category(' '); ?></div>
						<span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'WhitePaper' ) . '</span> %title' ); ?></span>
						<span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'WhitePaper' ) . '</span>' ); ?></span>
					<?php comments_template(); ?>
				</div>
			</div>
			<?php endwhile; ?>
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