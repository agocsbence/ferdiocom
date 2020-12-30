<?php

/*

Template Name: Infographics Page

*/

get_header();

?>

<div class="main-content">
    <div data-w-id="5cb9b051-0b8e-e29f-13e4-c7581f1c13b2" class="section-wrapper">
        <div class="grid background-grid w-container">
            <div id="w-node-5fe997a206c3-960139e3" class="background-wrapper left"><div data-react-id="cases" data-react-type="shape" class="background rectangle infographics"></div></div>
        </div>
        <div class="section hero">
            <div class="grid w-container"></div>
            <div class="grid infographics-hero">

                <?php if( have_rows('hero_images') ): ?>
                    <?php while( have_rows('hero_images') ): the_row(); 
                        $image_1 = get_sub_field('image_1');
                        $image_2 = get_sub_field('image_2');
                        $image_3 = get_sub_field('image_3');
                        $image_4 = get_sub_field('image_4');
                        $image_5 = get_sub_field('image_5');
                        $image_6 = get_sub_field('image_6');
                        $image_7 = get_sub_field('image_7');
                        $size = 'full'; // (thumbnail, medium, large, full or custom size) ?>
                        <?php echo wp_get_attachment_image( $image_7, $size, "", array( "class" => "infographics-hero-img", "id" => "hero-image-7", "srcset" => wp_get_attachment_image_srcset($image_7, 'medium'), "data-speed" => "7" ) ); ?>
                        <?php echo wp_get_attachment_image( $image_5, $size, "", array( "class" => "infographics-hero-img", "id" => "hero-image-5", "srcset" => wp_get_attachment_image_srcset($image_5, 'medium'), "data-speed" => "5" ) ); ?>
                        <?php echo wp_get_attachment_image( $image_6, $size, "", array( "class" => "infographics-hero-img", "id" => "hero-image-6", "srcset" => wp_get_attachment_image_srcset($image_6, 'medium'), "data-speed" => "3" ) ); ?>
                        <?php echo wp_get_attachment_image( $image_3, $size, "", array( "class" => "infographics-hero-img", "id" => "hero-image-3", "srcset" => wp_get_attachment_image_srcset($image_3, 'medium'), "data-speed" => "4" ) ); ?>
                        <?php echo wp_get_attachment_image( $image_4, $size, "", array( "class" => "infographics-hero-img", "id" => "hero-image-4", "srcset" => wp_get_attachment_image_srcset($image_4, 'medium'), "data-speed" => "2" ) ); ?>
                        <?php echo wp_get_attachment_image( $image_1, $size, "", array( "class" => "infographics-hero-img", "id" => "hero-image-1", "srcset" => wp_get_attachment_image_srcset($image_1, 'medium'), "data-speed" => "1" ) ); ?>
                        <?php echo wp_get_attachment_image( $image_2, $size, "", array( "class" => "infographics-hero-img", "id" => "hero-image-2", "srcset" => wp_get_attachment_image_srcset($image_2, 'medium'), "data-speed" => "10" ) ); ?>
                    <?php endwhile; ?>
                <?php endif; ?>
                <div id="w-node-b38d74e414ce-960139e3" class="hero-text info">
                    <h1>Explain it with infographics</h1>
                    <h2 class="margin-bottom-0">Make your content memorable, beautiful and effective.<br /></h2>
                </div>
            </div>
        </div>
        <div class="section _0-top _0-bottom _250-top">
            <div class="grid w-container">
                <div id="w-node-b95fd4ca9ef4-960139e3">
                    <h1 class="small">Turn your story into engaging visuals</h1>
                    <p>Infographics can explain and communicate information, data and knowledge visually. By using visual tools like charts, illustrations and diagrams you communication that is easier to understand, more memorable and more engaging.</p>
                </div>
            </div>
        </div>
        <div class="section infographics-copy">
            <div class="grid sticky w-container">
                <div id="w-node-6dc5638083ef-960139e3">
                    <h1 class="small">Visual stories for all channels</h1>
                    <p>We produce visual content for all formats and make sure the visual stories exploit the different channels restrictions and possibilities.</p>
                </div>
                <div id="icons-1" class="flex no-wrap">
                    <div>
                        <img
                            src="https://uploads-ssl.webflow.com/5d16087814f9117f026ad2e1/5db19185ca3871d34d1896ea_interactive.png"
                            srcset="
                                https://uploads-ssl.webflow.com/5d16087814f9117f026ad2e1/5db19185ca3871d34d1896ea_interactive-p-500.png 500w,
                                https://uploads-ssl.webflow.com/5d16087814f9117f026ad2e1/5db19185ca3871d34d1896ea_interactive.png       600w
                            "
                            sizes="(max-width: 479px) 76.01666259765625px, (max-width: 767px) 76.01667785644531px, (max-width: 991px) 10vw, 8vw"
                            alt=""
                            class="image"
                        />
                        <h4 class="bold-center">Websites</h4>
                    </div>
                    <div>
                        <img
                            src="https://uploads-ssl.webflow.com/5d16087814f9117f026ad2e1/5db19185f47aa6ab8419c269_presentations.png"
                            srcset="
                                https://uploads-ssl.webflow.com/5d16087814f9117f026ad2e1/5db19185f47aa6ab8419c269_presentations-p-500.png 500w,
                                https://uploads-ssl.webflow.com/5d16087814f9117f026ad2e1/5db19185f47aa6ab8419c269_presentations.png       600w
                            "
                            sizes="(max-width: 479px) 89.48333740234375px, (max-width: 767px) 89.48332214355469px, (max-width: 991px) 12vw, 9vw"
                            alt=""
                            class="image"
                        />
                        <h4 class="bold-center">Presentations</h4>
                    </div>
                </div>
                <div id="icons-2" class="flex no-wrap">
                    <div>
                        <img
                            src="https://uploads-ssl.webflow.com/5d16087814f9117f026ad2e1/5db19186083f4b1245a1d03c_print.png"
                            srcset="
                                https://uploads-ssl.webflow.com/5d16087814f9117f026ad2e1/5db19186083f4b1245a1d03c_print-p-500.png 500w,
                                https://uploads-ssl.webflow.com/5d16087814f9117f026ad2e1/5db19186083f4b1245a1d03c_print.png       600w
                            "
                            sizes="(max-width: 479px) 33.600006103515625px, (max-width: 767px) 33.59999084472656px, (max-width: 991px) 4vw, 3vw"
                            alt=""
                            class="image"
                        />
                        <h4 class="bold-center">Publications</h4>
                    </div>
                    <div>
                        <img
                            src="https://uploads-ssl.webflow.com/5d16087814f9117f026ad2e1/5db1918671caa2e81dcdb900_social-media.png"
                            srcset="
                                https://uploads-ssl.webflow.com/5d16087814f9117f026ad2e1/5db1918671caa2e81dcdb900_social-media-p-500.png 500w,
                                https://uploads-ssl.webflow.com/5d16087814f9117f026ad2e1/5db1918671caa2e81dcdb900_social-media.png       600w
                            "
                            sizes="(max-width: 479px) 41.33332824707031px, (max-width: 767px) 41.333343505859375px, (max-width: 991px) 5vw, 4vw"
                            alt=""
                            class="image"
                        />
                        <h4 class="bold-center">Social media</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="grid _70-gap w-container">
                <div id="w-node-3c08ab07dcb2-960139e3">
                    <h1 class="small">Work with information experts</h1>
                    <p>Work with an agency who are driven by the information and the story. We do not get lost in cool visual effects and style but always aim to make effective communication that works.</p>
                    <p>With 5+ years of expertise and more than 100+ animation projects you will get a experienced and professional partner in ferdio.</p>
                </div>
                <div id="w-node-9f06392fa102-960139e3">
                    <div class="w-dyn-list">
                        <div role="list" class="grid w-dyn-items">
                            <div data-react-id="chat" data-react-type="trigger-target" id="w-node-8ac4c2b6098e-960139e3" role="listitem" class="entry w-dyn-item">
                                <div class="thumbnail-wrapper _16-9">
                                    <img
                                        src="https://uploads-ssl.webflow.com/5d19f0c0f6e4ce120036e9e5/5db7fdf3fce786d5369b43b4_Screenshot%202019-10-29%20at%2009.52.45.png"
                                        alt=""
                                        sizes="(max-width: 991px) 100vw, 7217.38330078125px"
                                        srcset="
                                            https://uploads-ssl.webflow.com/5d19f0c0f6e4ce120036e9e5/5db7fdf3fce786d5369b43b4_Screenshot%202019-10-29%20at%2009.52.45-p-500.png   500w,
                                            https://uploads-ssl.webflow.com/5d19f0c0f6e4ce120036e9e5/5db7fdf3fce786d5369b43b4_Screenshot%202019-10-29%20at%2009.52.45-p-800.png   800w,
                                            https://uploads-ssl.webflow.com/5d19f0c0f6e4ce120036e9e5/5db7fdf3fce786d5369b43b4_Screenshot%202019-10-29%20at%2009.52.45-p-1080.png 1080w,
                                            https://uploads-ssl.webflow.com/5d19f0c0f6e4ce120036e9e5/5db7fdf3fce786d5369b43b4_Screenshot%202019-10-29%20at%2009.52.45-p-1600.png 1600w,
                                            https://uploads-ssl.webflow.com/5d19f0c0f6e4ce120036e9e5/5db7fdf3fce786d5369b43b4_Screenshot%202019-10-29%20at%2009.52.45-p-2000.png 2000w,
                                            https://uploads-ssl.webflow.com/5d19f0c0f6e4ce120036e9e5/5db7fdf3fce786d5369b43b4_Screenshot%202019-10-29%20at%2009.52.45.png        2560w
                                        "
                                        class="thumbnail"
                                    />
                                    <div class="thumbnail video w-condition-invisible w-embed">
                                        <div
                                            class="thumbnail"
                                            data-vimeo-id=""
                                            data-vimeo-id-da=""
                                            data-vimeo-autoplay="false"
                                            data-vimeo-loop="true"
                                            data-vimeo-playonhover="true"
                                            data-vimeo-muted="true"
                                            data-vimeo-background="true"
                                        ></div>
                                    </div>
                                </div>
                                <div class="flex entry-text">
                                    <div class="flex vertical featured">
                                        <h4>The Nordic Council</h4>
                                        <h3 class="entry-title">The Nordic Council</h3>
                                    </div>
                                </div>
                                <a href="/work/the-nordic-council" class="entry-link w-inline-block"></a>
                                <div class="data-static w-embed">false</div>
                                <div class="data-lang w-embed"></div>
                            </div>
                            <div data-react-id="chat" data-react-type="trigger-target" id="w-node-8ac4c2b6098e-960139e3" role="listitem" class="entry w-dyn-item">
                                <div class="thumbnail-wrapper _16-9">
                                    <img
                                        src="https://uploads-ssl.webflow.com/5d19f0c0f6e4ce120036e9e5/5d779fac80fb751f71371dff_data-viz-2.png"
                                        alt=""
                                        sizes="(max-width: 991px) 100vw, 7217.38330078125px"
                                        srcset="
                                            https://uploads-ssl.webflow.com/5d19f0c0f6e4ce120036e9e5/5d779fac80fb751f71371dff_data-viz-2-p-500.png   500w,
                                            https://uploads-ssl.webflow.com/5d19f0c0f6e4ce120036e9e5/5d779fac80fb751f71371dff_data-viz-2-p-800.png   800w,
                                            https://uploads-ssl.webflow.com/5d19f0c0f6e4ce120036e9e5/5d779fac80fb751f71371dff_data-viz-2-p-1080.png 1080w,
                                            https://uploads-ssl.webflow.com/5d19f0c0f6e4ce120036e9e5/5d779fac80fb751f71371dff_data-viz-2.png        1119w
                                        "
                                        class="thumbnail"
                                    />
                                    <div class="thumbnail video w-condition-invisible w-embed">
                                        <div
                                            class="thumbnail"
                                            data-vimeo-id=""
                                            data-vimeo-id-da=""
                                            data-vimeo-autoplay="false"
                                            data-vimeo-loop="true"
                                            data-vimeo-playonhover="true"
                                            data-vimeo-muted="true"
                                            data-vimeo-background="true"
                                        ></div>
                                    </div>
                                </div>
                                <div class="flex entry-text">
                                    <div class="flex vertical featured">
                                        <h4>In-house</h4>
                                        <h3 class="entry-title">Data Viz Project: The most comprehensive archive of data visualizations</h3>
                                    </div>
                                </div>
                                <a href="/work/data-viz-project" class="entry-link w-inline-block"></a>
                                <div class="data-static w-embed">true</div>
                                <div class="data-lang w-embed">English</div>
                            </div>
                            <div data-react-id="chat" data-react-type="trigger-target" id="w-node-8ac4c2b6098e-960139e3" role="listitem" class="entry w-dyn-item">
                                <div class="thumbnail-wrapper _16-9">
                                    <img
                                        src="https://uploads-ssl.webflow.com/5d19f0c0f6e4ce120036e9e5/5d779f2989fd0fee12606e1d_factourism.png"
                                        alt=""
                                        sizes="(max-width: 991px) 100vw, 7217.38330078125px"
                                        srcset="
                                            https://uploads-ssl.webflow.com/5d19f0c0f6e4ce120036e9e5/5d779f2989fd0fee12606e1d_factourism-p-500.png  500w,
                                            https://uploads-ssl.webflow.com/5d19f0c0f6e4ce120036e9e5/5d779f2989fd0fee12606e1d_factourism-p-800.png  800w,
                                            https://uploads-ssl.webflow.com/5d19f0c0f6e4ce120036e9e5/5d779f2989fd0fee12606e1d_factourism.png       1119w
                                        "
                                        class="thumbnail"
                                    />
                                    <div class="thumbnail video w-condition-invisible w-embed">
                                        <div
                                            class="thumbnail"
                                            data-vimeo-id=""
                                            data-vimeo-id-da=""
                                            data-vimeo-autoplay="false"
                                            data-vimeo-loop="true"
                                            data-vimeo-playonhover="true"
                                            data-vimeo-muted="true"
                                            data-vimeo-background="true"
                                        ></div>
                                    </div>
                                </div>
                                <div class="flex entry-text">
                                    <div class="flex vertical featured">
                                        <h4>In-house</h4>
                                        <h3 class="entry-title">Factourism: Real facts from the real world with real sources</h3>
                                    </div>
                                </div>
                                <a href="/work/factourism" class="entry-link w-inline-block"></a>
                                <div class="data-static w-embed">true</div>
                                <div class="data-lang w-embed"></div>
                            </div>
                        </div>
                    </div>
                    <div class="flex show-all">
                        <a id="button-see-all" href="/work/#infographics" class="flex w-inline-block">
                            <div class="icon"><img src="https://uploads-ssl.webflow.com/5d16087814f9117f026ad2e1/5d7f9fdee770f06d01e4c55a_plus.svg" alt="" class="icon-image" /></div>
                            <div class="button icon-button no-arrow">
                                See all<br />
                                infographics<br />
                                cases
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include get_theme_file_path( '/includes/chat-infographics.php' ); ?>	


</div>

<?php

get_footer();

?>