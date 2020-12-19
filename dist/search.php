<?php get_header();

if(isset($_GET['post_type'])) {
    $type = $_GET['post_type'];
    if($type == 'post') {
        load_template(TEMPLATEPATH . '/post-search.php');
    } elseif($type == 'articles') {
        load_template(TEMPLATEPATH . '/knowledge-search.php');
    }
} else {
	load_template(TEMPLATEPATH . '/all-search.php');
}

get_footer();
