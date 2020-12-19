<article>
    <a href="<?php echo get_permalink(); ?>">
        <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
    </a>
    <section class="article-info">
        <div class="meta">
            <p class="date"><?php echo get_the_date(); ?></p>
            <span class="category"><?php echo the_category(' '); ?></span><span class="author"><?php the_author_posts_link(); ?></span>
        </div>
        <header><a href="<?php echo get_permalink(); ?>"><h2><?php the_title(); ?></h2></a></header>
    </section>
</article>