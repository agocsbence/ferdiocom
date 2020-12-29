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
            <div data-w-id="409539a1-d839-57c9-2e34-fe68e6246938" class="grid infographics-hero">
                <h2>hello</h2>

                <?php if( have_rows('hero_images') ): ?>
                    <?php while( have_rows('hero_images') ): the_row(); 

                        // Get sub field values.
                        $image_1 = get_sub_field('image_1');
                        $image_2 = get_sub_field('image_2');
                        $image_3 = get_sub_field('image_3');
                        $size = 'medium'; // (thumbnail, medium, large, full or custom size)
                        ?>
                        <div id="hero">
                            <?php echo wp_get_attachment_image( $image_1, $size ); ?>
                            <img src="<?php echo esc_url( $image_1['medium'] ); ?>" alt="<?php echo esc_attr( $image_1['alt'] ); ?>" />
                            
                        </div>
                        <style type="text/css">
                            #hero {
                                background-color: <?php the_sub_field('color'); ?>;
                            }
                        </style>
                    <?php endwhile; ?>
                <?php endif; ?>
                <img
                    src="https://uploads-ssl.webflow.com/5d16087814f9117f026ad2e1/5dd69f57fd81dd447ff3580f_SoMe_FBPost_1080x1080.png"
                    srcset="
                        https://uploads-ssl.webflow.com/5d16087814f9117f026ad2e1/5dd69f57fd81dd447ff3580f_SoMe_FBPost_1080x1080-p-500.png  500w,
                        https://uploads-ssl.webflow.com/5d16087814f9117f026ad2e1/5dd69f57fd81dd447ff3580f_SoMe_FBPost_1080x1080-p-800.png  800w,
                        https://uploads-ssl.webflow.com/5d16087814f9117f026ad2e1/5dd69f57fd81dd447ff3580f_SoMe_FBPost_1080x1080.png       1080w
                    "
                    sizes="(max-width: 479px) 10.466659545898438px, (max-width: 767px) 1vw, (max-width: 991px) 2vw, 4vw"
                    id="w-node-06864801f9b6-960139e3"
                    alt=""
                    class="infographics-hero-img"
                />
                <img
                    src="https://uploads-ssl.webflow.com/5d16087814f9117f026ad2e1/5dd69d2eaa0dd2b087b63856_4%20Energikilder2.png"
                    width="1243"
                    srcset="
                        https://uploads-ssl.webflow.com/5d16087814f9117f026ad2e1/5dd69d2eaa0dd2b087b63856_4%20Energikilder2-p-500.png   500w,
                        https://uploads-ssl.webflow.com/5d16087814f9117f026ad2e1/5dd69d2eaa0dd2b087b63856_4%20Energikilder2-p-800.png   800w,
                        https://uploads-ssl.webflow.com/5d16087814f9117f026ad2e1/5dd69d2eaa0dd2b087b63856_4%20Energikilder2-p-1080.png 1080w,
                        https://uploads-ssl.webflow.com/5d16087814f9117f026ad2e1/5dd69d2eaa0dd2b087b63856_4%20Energikilder2-p-1600.png 1600w,
                        https://uploads-ssl.webflow.com/5d16087814f9117f026ad2e1/5dd69d2eaa0dd2b087b63856_4%20Energikilder2-p-2000.png 2000w,
                        https://uploads-ssl.webflow.com/5d16087814f9117f026ad2e1/5dd69d2eaa0dd2b087b63856_4%20Energikilder2-p-2600.png 2600w,
                        https://uploads-ssl.webflow.com/5d16087814f9117f026ad2e1/5dd69d2eaa0dd2b087b63856_4%20Energikilder2-p-3200.png 3200w,
                        https://uploads-ssl.webflow.com/5d16087814f9117f026ad2e1/5dd69d2eaa0dd2b087b63856_4%20Energikilder2.png        3400w
                    "
                    sizes="(max-width: 479px) 10.466659545898438px, (max-width: 767px) 1vw, (max-width: 991px) 2vw, 4vw"
                    id="w-node-e392452b7b52-960139e3"
                    alt=""
                    class="infographics-hero-img"
                />
                <img
                    src="https://uploads-ssl.webflow.com/5d16087814f9117f026ad2e1/5dd692282383b044398ec447_Design_GoogleNL_2-01edit.png"
                    width="693"
                    srcset="
                        https://uploads-ssl.webflow.com/5d16087814f9117f026ad2e1/5dd692282383b044398ec447_Design_GoogleNL_2-01edit-p-500.png   500w,
                        https://uploads-ssl.webflow.com/5d16087814f9117f026ad2e1/5dd692282383b044398ec447_Design_GoogleNL_2-01edit-p-800.png   800w,
                        https://uploads-ssl.webflow.com/5d16087814f9117f026ad2e1/5dd692282383b044398ec447_Design_GoogleNL_2-01edit-p-1080.png 1080w,
                        https://uploads-ssl.webflow.com/5d16087814f9117f026ad2e1/5dd692282383b044398ec447_Design_GoogleNL_2-01edit-p-1600.png 1600w,
                        https://uploads-ssl.webflow.com/5d16087814f9117f026ad2e1/5dd692282383b044398ec447_Design_GoogleNL_2-01edit-p-2000.png 2000w,
                        https://uploads-ssl.webflow.com/5d16087814f9117f026ad2e1/5dd692282383b044398ec447_Design_GoogleNL_2-01edit-p-2600.png 2600w,
                        https://uploads-ssl.webflow.com/5d16087814f9117f026ad2e1/5dd692282383b044398ec447_Design_GoogleNL_2-01edit-p-3200.png 3200w,
                        https://uploads-ssl.webflow.com/5d16087814f9117f026ad2e1/5dd692282383b044398ec447_Design_GoogleNL_2-01edit.png        4001w
                    "
                    sizes="(max-width: 479px) 10.4666748046875px, (max-width: 767px) 1vw, (max-width: 991px) 2vw, 4vw"
                    id="w-node-ba5aa4a56a8b-960139e3"
                    alt=""
                    class="infographics-hero-img"
                />
                <img
                    src="https://uploads-ssl.webflow.com/5d16087814f9117f026ad2e1/5dd69af5de0df14138ced453_Tablet%201-3.png"
                    srcset="
                        https://uploads-ssl.webflow.com/5d16087814f9117f026ad2e1/5dd69af5de0df14138ced453_Tablet%201-3-p-500.png  500w,
                        https://uploads-ssl.webflow.com/5d16087814f9117f026ad2e1/5dd69af5de0df14138ced453_Tablet%201-3-p-800.png  800w,
                        https://uploads-ssl.webflow.com/5d16087814f9117f026ad2e1/5dd69af5de0df14138ced453_Tablet%201-3.png       1022w
                    "
                    sizes="(max-width: 479px) 10.466659545898438px, (max-width: 767px) 1vw, (max-width: 991px) 2vw, 4vw"
                    id="w-node-d0d1a0cf17be-960139e3"
                    alt=""
                    class="infographics-hero-img"
                />
                <img
                    src="https://uploads-ssl.webflow.com/5d16087814f9117f026ad2e1/5dd69b7894b08255a2e3bdda_1741%20Ferdio%20123_medium.jpg"
                    srcset="
                        https://uploads-ssl.webflow.com/5d16087814f9117f026ad2e1/5dd69b7894b08255a2e3bdda_1741%20Ferdio%20123_medium-p-500.jpeg   500w,
                        https://uploads-ssl.webflow.com/5d16087814f9117f026ad2e1/5dd69b7894b08255a2e3bdda_1741%20Ferdio%20123_medium-p-800.jpeg   800w,
                        https://uploads-ssl.webflow.com/5d16087814f9117f026ad2e1/5dd69b7894b08255a2e3bdda_1741%20Ferdio%20123_medium-p-1600.jpeg 1600w,
                        https://uploads-ssl.webflow.com/5d16087814f9117f026ad2e1/5dd69b7894b08255a2e3bdda_1741%20Ferdio%20123_medium-p-2600.jpeg 2600w,
                        https://uploads-ssl.webflow.com/5d16087814f9117f026ad2e1/5dd69b7894b08255a2e3bdda_1741%20Ferdio%20123_medium.jpg         3000w
                    "
                    sizes="(max-width: 479px) 10.4666748046875px, (max-width: 767px) 1vw, (max-width: 991px) 2vw, 4vw"
                    id="w-node-3ea6ef00d03b-960139e3"
                    alt=""
                    class="infographics-hero-img"
                />
                <img
                    src="https://uploads-ssl.webflow.com/5d16087814f9117f026ad2e1/5dd6a715fd81dd7727f3a36f_Kulhydrater.png"
                    srcset="
                        https://uploads-ssl.webflow.com/5d16087814f9117f026ad2e1/5dd6a715fd81dd7727f3a36f_Kulhydrater-p-500.png 500w,
                        https://uploads-ssl.webflow.com/5d16087814f9117f026ad2e1/5dd6a715fd81dd7727f3a36f_Kulhydrater.png       770w
                    "
                    sizes="(max-width: 479px) 10.4666748046875px, (max-width: 767px) 1vw, (max-width: 991px) 2vw, 4vw"
                    id="w-node-7ae2edcce721-960139e3"
                    alt=""
                    class="infographics-hero-img"
                />
                <div id="w-node-b38d74e414ce-960139e3" class="hero-text info">
                    <h1>Explain it with infographics</h1>
                    <h2 class="margin-bottom-0">Make your content memorable, beautiful and effective.<br /></h2>
                </div>
            </div>
        </div>
        <div class="section _0-top _0-bottom">
            <div class="grid w-container">
                <div id="w-node-b95fd4ca9ef4-960139e3">
                    <h1 class="small">The power of infographics</h1>
                    <p>
                        Infographics have become one of the most powerful way of communicating visually in recent years.Using visual tools like charts, illustrations and diagrams you communication that is easier to understand,
                        more memorable and more engaging.
                    </p>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="grid sticky w-container">
                <div id="w-node-6dc5638083ef-960139e3">
                    <h1 class="small">Infographics for every channel</h1>
                    <p>Infographics are not restricted for any specific channel, style nor content type. We create infographics for every context and make sure they exploit the restrictions and possibilities of each channel.</p>
                </div>
                <div id="w-node-6a88497a89e5-960139e3" class="flex no-wrap">
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
                <div id="w-node-0ba15c19078c-960139e3" class="flex no-wrap">
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
                        <h4 class="bold-center">Interactive</h4>
                    </div>
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
                        <h4 class="bold-center">Print</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="grid _70-gap w-container">
                <div id="w-node-3c08ab07dcb2-960139e3">
                    <h1 class="small">Your infographic specialist</h1>
                    <p>
                        That&#x27;s what makes us stand out from the crowd. We&#x27;ve worked with thousands of infographics and more than 100 clients in a wide range of industries. We know what it takes to create infographics
                        with impact.<br />
                    </p>
                    <p>
                        Great infographics are not only about solid design craftmanship and aesthetics. We also aim to make powerful and effective visual communication applying our unique competencies of creativity, insight and
                        experience throughout all of our work.<br />
                    </p>
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
    <div data-w-id="66ab8d6b-2327-3ea6-f4ab-2a8cb55ea66f" class="section circle contact">
        <div class="w-layout-grid grid-chat">
            <div id="w-node-2a8cb55ea671-b55ea66f" class="background-wrapper justify-center"><div data-react-id="chat" data-react-type="shape" data-react-bottom="false" class="background circle"></div></div>
            <div data-react-id="chat" data-react-type="trigger-target" data-react-center="true" id="w-node-2a8cb55ea673-b55ea66f" class="chat-wrapper">
                <div data-animation="true" id="w-node-861476cb9fdc-b55ea66f" class="cms-animation chat-animation _16-9 w-dyn-list">
                    <div role="list" class="w-dyn-items">
                        <div role="listitem" class="w-dyn-item">
                            <div class="w-embed">
                                <img
                                    src="https://uploads-ssl.webflow.com/5d19f0c0f6e4ce120036e9e5/5dbaa06b7c76ea8f2f46b5c8_chat-module.png"
                                    alt=""
                                    class="animation hidden"
                                    sizes="100vw"
                                    data-animation-part="start"
                                    data-frame-rate=""
                                    data-delay="2"
                                    data-number-frames=""
                                    data-srcset="
                                        https://uploads-ssl.webflow.com/5d19f0c0f6e4ce120036e9e5/5dbaa06b7c76ea8f2f46b5c8_chat-module.png 500w,
                                        https://uploads-ssl.webflow.com/5d19f0c0f6e4ce120036e9e5/5dbaa06b7c76ea8f2f46b5c8_chat-module.png 800w,
                                        https://uploads-ssl.webflow.com/5d19f0c0f6e4ce120036e9e5/5dbaa06b7c76ea8f2f46b5c8_chat-module.png 1080w,
                                        https://uploads-ssl.webflow.com/5d19f0c0f6e4ce120036e9e5/5dbaa06b7c76ea8f2f46b5c8_chat-module.png 1080w"
                                />

                                <div
                                    data-src=""
                                    class="animation hidden"
                                    style="width: 0; height: 0; pointer-events: none;"
                                    sizes="100vw"
                                    data-animation-part="loop"
                                    data-srcset="
                                        500w,
                                        800w,
                                        1080w,
                                        1080w"
                                ></div>

                                <div
                                    data-src=""
                                    class="animation hidden"
                                    style="width: 0; height: 0; pointer-events: none;"
                                    sizes="100vw"
                                    data-animation-part="hover"
                                    data-number-frames=""
                                    data-srcset="
                                        500w,
                                        800w,
                                        1080w,
                                        1080w"  
                                ></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="w-node-09ae3ca03263-b55ea66f" class="chat-avatar"><img src="https://uploads-ssl.webflow.com/5d16087814f9117f026ad2e1/5dbaa4b846957168ffb8b084_ferdio-avatar.jpg" alt="" /></div>
                <div id="w-node-f68b61013def-b55ea66f" class="chat-message">
                    <div class="before-spinner"><strong>ferdio</strong></div>
                    <div class="before-spinner">Hey there 👋 How can we help?</div>
                    <div class="chat-corner"></div>
                </div>
                <div id="w-node-2ba987dafd5d-b55ea66f" class="w-embed">
                    <form id="chat-reply" class="chat-reply">
                        <textarea class="chat-reply-input" placeholder="Write a reply..."></textarea>
                        <div class="chat-reply-size"></div>
                    </form>
                </div>
            </div>
            <h1 id="w-node-2a8cb55ea676-b55ea66f" class="margin-bottom-0">Let&#x27;s get in touch!</h1>
        </div>
    </div>
</div>

<?php

get_footer();

?>