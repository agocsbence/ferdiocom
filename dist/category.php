<?php get_header(); ?>

<div class="site-title category--site-title bg--gold">
	<h1><?php echo the_category(' '); ?></h1>
</div>

<main class="grid grid-2-1 container single-post-content">
	<div id="post-content">
		<div class="grid grid-2">
			<?php $loop = new WP_Query( array( 'posts_per_page' => 8 ) );
			if ( $loop->have_posts() ) : 

				while ( $loop->have_posts() ) : $loop->the_post();
					
					include get_theme_file_path( '/includes/article.php' );	
				
				endwhile; wp_reset_query();

			endif; ?>
			
			<div style="background: tomato; padding: 60px 20px; grid-area: 5 / 1 / 6 / 3;"><h1>Hirdetési zóna<h1></div>

			<?php $loop = new WP_Query( array( 'offset' => 8 ) );
			if ( $loop->have_posts() ) : 

				while ( $loop->have_posts() ) : $loop->the_post();
					
					include get_theme_file_path( '/includes/article.php' );	
				
				endwhile; wp_reset_query();

			endif; ?>
        
		</div>
	</div>
	<?php get_sidebar(); ?>
</main>

<?php get_footer();