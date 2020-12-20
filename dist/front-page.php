<?php
/*

Template Name: Main Page

*/

get_header();

include get_theme_file_path( '/includes/home-hero.php' );

?>

<div class="main-content">
	<?php include get_theme_file_path( '/includes/home-work.php' ); ?>
	<?php include get_theme_file_path( '/includes/home-services.php' ); ?>
	<?php include get_theme_file_path( '/includes/home-clients.php' ); ?>
	<?php include get_theme_file_path( '/includes/chat.php' ); ?>				
</div>

<?php get_footer(); ?>
