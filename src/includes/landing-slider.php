<div id="landing-slider">
    <div class="swiper-container">
        <div class="swiper-wrapper">

        <?php
            $loop = new WP_Query( array( 'post_type' => 'post' ) );
            
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
            
            <div class="swiper-slide">
                <a href="<?php echo get_permalink(); ?>">
                    <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                    <div class="slider-content">
                        <p class="tag">fashion</p>
                        <h3><?php the_title(); ?></h3>
                        <p class="author">by <span>Sallay Wanda</span></p>
                    </div>
                </a>
            </div>
            
            <?php endwhile; wp_reset_query(); ?>

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>