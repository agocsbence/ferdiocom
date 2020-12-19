<?php get_header(); the_post(); ?>

<main class="grid grid-2-1 container single-post-content">
	<div id="post-content">
		<div class="grid grid-1">

			<?php if ( have_posts() ) : ?>

			<div class="article-header">
				<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
			</div>

			<?php while ( have_posts() ) : the_post();

				echo 'Szerző leírása'; ?>
				
				<div class="article-content">
					<?php the_content();?> 
				</div>
				
			<?php endwhile;

			else :
			
				echo 'No posts found';

			endif;
			?>
        
		</div>
	</div>
	<?php get_sidebar(); ?>
</main>

<?php get_footer();