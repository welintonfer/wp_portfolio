<?php
/*
 Template Name: Home Page
 */
get_header(); ?>
    <div class="hero">

        <iframe src='https://my.spline.design/untitled-150e29c3794d314368033f5496daef32/' frameborder='0' width='150px' height='150px'></iframe>

        <div class="hero__avatar">
            <?php
            // Campo de imagem 'hero_home_pic'
            $hero_home_pic = get_field('hero_home_pic');
            // Campo de texto alternativo 'hero_home_pic_alt'
            $hero_home_pic_alt = get_field('hero_home_pic_alt');

            if ($hero_home_pic && isset($hero_home_pic['url'])): ?>
                <img src="<?php echo esc_url($hero_home_pic['url']); ?>"
                     alt="<?php echo esc_attr($hero_home_pic_alt); ?>">
            <?php endif; ?>

            <?php
            // Campo de saudação 'hero_home_greetings'
            $hero_home_greetings = get_field('hero_home_greetings');
            if ($hero_home_greetings): ?>
                <p class="hello"><?php echo wp_kses_post($hero_home_greetings); ?></p>
            <?php endif; ?>
        </div>

        <div class="hero__content">
            <?php
            // Campo de título 'hero_home_title'
            $hero_home_title = get_field('hero_home_title');
            if ($hero_home_title): ?>
                <h1 class="display-1"><?php echo wp_kses_post($hero_home_title); ?></h1>
            <?php endif; ?>
        </div>

        <?php
        // Campo de imagem principal 'hero_home_feature_image'
        $hero_home_feature_image = get_field('hero_home_feature_image');
        // Campo de texto alternativo da imagem principal 'hero_home_feature_image_alt'
        $hero_home_feature_image_alt = get_field('hero_home_feature_image_alt');

        if ($hero_home_feature_image && isset($hero_home_feature_image['url'])): ?>
            <img class="hero__img" src="<?php echo esc_url($hero_home_feature_image['url']); ?>"
                 alt="<?php echo esc_attr($hero_home_feature_image_alt); ?>">
        <?php endif; ?>
    </div>

    <main>
        <section class="skills">
            <p class="skills__mini-title">Technologies I Master</p>
            <ul>
                <?php $logo_total = get_field('logo_total') ?>
                <?php for ($i = 1; $i <= $logo_total; $i++) : ?>
                    <?php
                    $logo = get_field('logo_' . $i . '_image');
                    $alt = get_field('logo_' . $i . '_alt');
                    $color = get_field('logo_' . $i . '_color');
                    $border_color = get_field('logo_' . $i . '_border_color');
                    $bg = get_field('logo_' . $i . '_background');
                    ?>
                    <li class="skill-icon"
                        style="background-color: <?php echo esc_attr($bg); ?>; box-shadow: <?php echo esc_attr($color); ?> 0.74519px 0.74519px 0px 0px, <?php echo esc_attr($color); ?> 1.49038px 1.49038px 0px 0px, <?php echo esc_attr($color); ?> 2.23558px 2.23558px 0px 0px; border: 2px solid <?php echo esc_attr($border_color); ?>;">
                        <img class="w-100" src="<?php echo esc_url($logo['url']); ?>"
                             alt="<?php echo esc_attr($alt); ?>">
                    </li>
                <?php endfor; ?>
            </ul>
        </section>

        <!--        <section class="my-process" id="what-i-do">-->
        <!--            <h2 class="h2">My Process</h2>-->
        <!--            <article>-->
        <!--                <div class="carousel-container">-->
        <!--                    <ul class="carousel">-->
        <!--                        <li>-->
        <!--                            <div class="content">-->
        <!--                                <div class="label">User experience</div>-->
        <!--                                <img src="data:image/svg+xml,...">-->
        <!--                                <h4 class="h4">01. Understand</h4>-->
        <!--                                <p>Effective UX design prioritizes user needs...</p>-->
        <!--                                <img src="/assets/understand.svg" class="abstract" alt="User experience">-->
        <!--                            </div>-->
        <!--                        </li>-->
        <!--                        <li>-->
        <!--                            <div class="content">-->
        <!--                                <div class="label">User experience</div>-->
        <!--                                <img src="data:image/svg+xml,...">-->
        <!--                                <h4 class="h4">02. Discover</h4>-->
        <!--                                <p>A comprehensive discovery phase is crucial...</p>-->
        <!--                                <img src="/assets/discover.svg" class="abstract" alt="User experience">-->
        <!--                            </div>-->
        <!--                        </li>-->
        <!--                        <li>-->
        <!--                            <div class="content">-->
        <!--                                <div class="label">User experience</div>-->
        <!--                                <img src="data:image/svg+xml,...">-->
        <!--                                <h4 class="h4">03. Wireframe</h4>-->
        <!--                                <p>Wireframing is a critical UX design step...</p>-->
        <!--                                <img src="/assets/wireframe.svg" class="abstract" alt="User experience">-->
        <!--                            </div>-->
        <!--                        </li>-->
        <!--                        <li>-->
        <!--                            <div class="content">-->
        <!--                                <div class="label">User experience</div>-->
        <!--                                <img src="data:image/svg+xml,...">-->
        <!--                                <h4 class="h4">04. Prototype</h4>-->
        <!--                                <p>Prototyping with Figma, Invisionapp, and UXPin...</p>-->
        <!--                                <img src="/assets/prototype.svg" class="abstract" alt="User experience">-->
        <!--                            </div>-->
        <!--                        </li>-->
        <!--                        <li>-->
        <!--                            <div class="content">-->
        <!--                                <div class="label">Testing</div>-->
        <!--                                <img src="data:image/svg+xml,...">-->
        <!--                                <h4 class="h4">05. Testing</h4>-->
        <!--                                <p>Testing and monitoring user behavior...</p>-->
        <!--                                <img src="/assets/testing.svg" class="abstract" alt="Testing">-->
        <!--                            </div>-->
        <!--                        </li>-->
        <!--                    </ul>-->
        <!--                </div>-->
        <!--                <ul class="bullets">-->
        <!--                    <li><a href="#" data-index="0"><div class="the-bullet active"></div></a></li>-->
        <!--                    <li><a href="#" data-index="3"><div class="the-bullet"></div></a></li>-->
        <!--                    <li><a href="#" data-index="6"><div class="the-bullet"></div></a></li>-->
        <!--                </ul>-->
        <!--            </article>-->
        <!--        </section>-->

        <section class="my-process" id="what-i-do">
            <h2 class="h2">My Process</h2>
            <article>
                <div class="carousel-container">
                    <ul class="carousel">
                        <?php $process_total = get_field('process_total') ?>
                        <?php for ($i = 1; $i <= $process_total; $i++) : ?>
                            <li>
                                <div class="content">
                                    <div class="label"><?php the_field('label_' . $i); ?></div>
                                    <img src="<?php the_field('svg_icon_' . $i); ?>">
                                    <h4 class="h4"><?php the_field('heading_' . $i); ?></h4>
                                    <p><?php the_field('description_' . $i); ?></p>
                                    <img src="<?php echo esc_url(get_field('image_' . $i)); ?>" class="abstract"
                                         alt="<?php the_field('image_alt_' . $i); ?>">
                                </div>
                            </li>
                        <?php endfor; ?>
                    </ul>
                </div>
                <!--                <ul class="bullets">-->
                <!--                    <li><a href="#" data-index="0"><div class="the-bullet active"></div></a></li>-->
                <!--                    <li><a href="#" data-index="1"><div class="the-bullet"></div></a></li>-->
                <!--                    <li><a href="#" data-index="2"><div class="the-bullet"></div></a></li>-->
                <!--                    <li><a href="#" data-index="3"><div class="the-bullet"></div></a></li>-->
                <!--                    <li><a href="#" data-index="4"><div class="the-bullet"></div></a></li>-->
                <!--                </ul>-->
            </article>
        </section>


    </main>

<?php get_footer();