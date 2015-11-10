<?php get_header(); ?>   
		<div class="content">
			
			<div class="post-main">
				<div class="post-woocommerce">
					<?php woocommerce_content(); ?>
				</div>
			</div>
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