<?php $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_display_name) : get_userdata(intval($author)); ?>
<div id="sidebar">
    <?php

    if ( is_single() ) { ?>
        <div class="sidebar-block single-post-sidebar-block">
            <div style="background: tomato; padding: 60px 20px"><h1>Hirdetési zóna<h1></div>
        </div>
        <div class="sidebar-block social-block">
            <h3>Közösség</h3>
            <div class="facebook-plugin-wrapper">
                <div class="fb-page" data-href="https://www.facebook.com/sheponthu" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/sheponthu" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/sheponthu">SHE.HU</a></blockquote></div>
            </div>
            <ul id="sidebar-social">
                <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                <li><a href=""><i class="fab fa-instagram"></i></a></li>
                <li><a href=""><i class="fab fa-youtube"></i></a></li>
                <li><a href=""><i class="fab fa-pinterest"></i></a></li>
            </ul>
        </div>
        <div class="sidebar-block popular-block">
            <h3>Legújabb cikkeink</h3>
            <div class="popular-block-wrapper">
                <?php
                $loop = new WP_Query( array(
                    'post_type' => 'post',
                    // 'meta_key' => 'popular_posts',
                    // 'orderby' => 'meta_value_num',
                    'posts_per_page' => 3
                ) );
                while ( $loop->have_posts() ) : $loop->the_post(); 
                    
                    include get_theme_file_path( '/includes/article.php' );
                
                endwhile; wp_reset_query();
                ?>
            </div>
        </div>
        <div class="sidebar-block single-post-sidebar-block">
            <div style="background: tomato; padding: 60px 20px"><h1>Hirdetési zóna<h1></div>
        </div>
    <?php } else if ( is_author() ) { ?>
        <div class="sidebar-block author-sidebar-block">
            <?php
                $user = wp_get_current_user();
                if ( $user ) :
                    ?> <img src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" /> <?php
                endif;
            ?>
       </div>
       <div class="sidebar-block author-info-block">
            <h1><?php echo $curauth->display_name; ?></h1>
            <div class="author-description"><?php echo $curauth->user_description; ?></div>
       </div>
    <?php } else if ( is_category() || is_front_page() ) { ?>
        <div class="sidebar-block single-post-sidebar-block">
            <div style="background: tomato; padding: 60px 20px"><h1>Hirdetési zóna<h1></div>
        </div>
        <div class="sidebar-block social-block">
            <h3>Közösség</h3>
            <div class="facebook-plugin-wrapper">
                <div class="fb-page" data-href="https://www.facebook.com/sheponthu" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/sheponthu" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/sheponthu">SHE.HU</a></blockquote></div>
            </div>
            <ul id="sidebar-social">
                <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                <li><a href=""><i class="fab fa-instagram"></i></a></li>
                <li><a href=""><i class="fab fa-youtube"></i></a></li>
                <li><a href=""><i class="fab fa-pinterest"></i></a></li>
            </ul>
        </div>
        <div class="sidebar-block popular-block">
            <h3>Top 3 cikkünk</h3>
            <div class="popular-block-wrapper">
                <?php
                    query_posts('meta_key=post_views_count&posts_per_page=5&orderby=meta_value_num&order=DESC');
                    if (have_posts()) : while (have_posts()) : the_post();
                
                        include get_theme_file_path( '/includes/article.php' );

                    endwhile; endif;
                    wp_reset_query();
                ?>
                <?php
                // $loop = new WP_Query( array(
                //     'post_type' => 'post',
                //     // 'meta_key' => 'popular_posts',
                //     // 'orderby' => 'meta_value_num',
                //     'posts_per_page' => 3
                // ) );
                // while ( $loop->have_posts() ) : $loop->the_post(); 
                    
                //     include get_theme_file_path( '/includes/article.php' );
                
                // endwhile; wp_reset_query();
                ?>
            </div>
        </div>
        <div class="sidebar-block single-post-sidebar-block">
            <div style="background: tomato; padding: 60px 20px"><h1>Hirdetési zóna<h1></div>
        </div>
    <?php } else { ?><!--  sidebar content if not single post -->
        <div class="sidebar-block social-block">
            <h3>Közösség</h3>
            <div class="facebook-plugin-wrapper">
                <div class="fb-page" data-href="https://www.facebook.com/sheponthu" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/sheponthu" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/sheponthu">SHE.HU</a></blockquote></div>
            </div>
            <ul id="sidebar-social">
                <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                <li><a href=""><i class="fab fa-instagram"></i></a></li>
                <li><a href=""><i class="fab fa-youtube"></i></a></li>
                <li><a href=""><i class="fab fa-pinterest"></i></a></li>
            </ul>
        </div>
        <div class="sidebar-block popular-block">
            <h3>Top 3 cikk</h3>
            <div class="popular-block-wrapper">
                <?php
                $loop = new WP_Query( array(
                    'post_type' => 'post',
                    // 'meta_key' => 'popular_posts',
                    // 'orderby' => 'meta_value_num',
                    'posts_per_page' => 3
                ) );
                while ( $loop->have_posts() ) : $loop->the_post(); 
                    
                    include get_theme_file_path( '/includes/article.php' );
                
                endwhile; wp_reset_query();
                ?>
            </div>
        </div>
    <? } ?>
</div>