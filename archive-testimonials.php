<?php get_header(); ?>

<?php nectar_page_header(get_option('page_for_posts')); ?>
<div id="testimnonials">
<div class="container-wrap">
		
	<div class="container main-content">
		
		<?php if(!is_home()) { ?>
			<div class="row">
				<div class="col span_12 section-title blog-title">
					<h1>
						<?php if(is_author()){

							printf( __( 'All posts by %s', NECTAR_THEME_NAME ), get_the_author() );

						} else if(is_category()) {

							printf( __( 'Category Archives: %s', NECTAR_THEME_NAME ), single_cat_title( '', false ) );

						} else if(is_date()){

							if ( is_day() ) :
								printf( __( 'Daily Archives: %s', NECTAR_THEME_NAME ), get_the_date() );

							elseif ( is_month() ) :
								printf( __( 'Monthly Archives: %s', NECTAR_THEME_NAME ), get_the_date( _x( 'F Y', 'monthly archives date format', NECTAR_THEME_NAME ) ) );

							elseif ( is_year() ) :
								printf( __( 'Yearly Archives: %s', NECTAR_THEME_NAME ), get_the_date( _x( 'Y', 'yearly archives date format', NECTAR_THEME_NAME ) ) );

							else :
								_e( 'Archives', NECTAR_THEME_NAME );

							endif;
						} else {
							wp_title("",true); 
						} ?>
					</h1>
				</div>
			</div>
		<?php } ?>
		
		<div class="row">
			
			<?php 
	
				if(have_posts()) : while(have_posts()) : the_post(); ?>
					
					<h4><?php the_title();?></h4>
					<div><?php the_content();?></div>
	
				<?php endwhile; endif; ?>
				
				</div><!--/posts container-->
				
			<?php nectar_pagination(); ?>
				
			</div><!--/span_9-->
			
			<?php  if($blog_type == 'std-blog-sidebar' || $blog_type == 'masonry-blog-sidebar') { ?>
				<div id="sidebar" class="col span_3 col_last">
					<?php get_sidebar(); ?>
				</div><!--/span_3-->
			<?php } ?>
			
		</div><!--/row-->
		
	</div><!--/container-->

</div><!--/container-wrap-->
</div>	
<?php get_footer(); ?>