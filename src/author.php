<?php get_header(); the_post();
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_display_name) : get_userdata(intval($author));
?>

<div class="single-post-page-header-image" style="background-image: url('https://3hywdj13z8cdwz0r92br9l51-wpengine.netdna-ssl.com/wp-content/uploads/2015/05/photo-1416339306562-f3d12fefd36f.jpeg');"></div>

<main class="grid grid-2-1 container single-post-content">
	<div id="post-content">
        <div class="author-info">
            <h1><?php echo $curauth->display_name; ?></h1>
            <div class="author-description"><?php echo $curauth->user_description; ?></div>
        </div>
		<div class="grid grid-2">
                
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                
                    include get_theme_file_path( '/includes/article.php' );

                endwhile; else: ?>
                    <p><?php _e('No posts by this author.'); ?></p>
                <?php endif; ?> 
        
		</div>
	</div>
	<?php get_sidebar(); ?>
</main>

<?php get_footer();