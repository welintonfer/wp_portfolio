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

<!--                <section class="my-process" id="what-i-do">-->
<!--                    <h2 class="h2">My Process</h2>-->
<!--                    <article>-->
<!--                        <div class="carousel-container">-->
<!--                            <ul class="carousel">-->
<!--                                <li>-->
<!--                                    <div class="content">-->
<!--                                        <div class="label">User experience</div>-->
<!--                                        <img src="data:image/svg+xml,...">-->
<!--                                        <h4 class="h4">01. Understand</h4>-->
<!--                                        <p>Effective UX design prioritizes user needs...</p>-->
<!--                                        <img src="/assets/understand.svg" class="abstract" alt="User experience">-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <div class="content">-->
<!--                                        <div class="label">User experience</div>-->
<!--                                        <img src="data:image/svg+xml,...">-->
<!--                                        <h4 class="h4">02. Discover</h4>-->
<!--                                        <p>A comprehensive discovery phase is crucial...</p>-->
<!--                                        <img src="/assets/discover.svg" class="abstract" alt="User experience">-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <div class="content">-->
<!--                                        <div class="label">User experience</div>-->
<!--                                        <img src="data:image/svg+xml,...">-->
<!--                                        <h4 class="h4">03. Wireframe</h4>-->
<!--                                        <p>Wireframing is a critical UX design step...</p>-->
<!--                                        <img src="/assets/wireframe.svg" class="abstract" alt="User experience">-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <div class="content">-->
<!--                                        <div class="label">User experience</div>-->
<!--                                        <img src="data:image/svg+xml,...">-->
<!--                                        <h4 class="h4">04. Prototype</h4>-->
<!--                                        <p>Prototyping with Figma, Invisionapp, and UXPin...</p>-->
<!--                                        <img src="/assets/prototype.svg" class="abstract" alt="User experience">-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <div class="content">-->
<!--                                        <div class="label">Testing</div>-->
<!--                                        <img src="data:image/svg+xml,...">-->
<!--                                        <h4 class="h4">05. Testing</h4>-->
<!--                                        <p>Testing and monitoring user behavior...</p>-->
<!--                                        <img src="/assets/testing.svg" class="abstract" alt="Testing">-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                        <ul class="bullets">-->
<!--                            <li><a href="#" data-index="0"><div class="the-bullet active"></div></a></li>-->
<!--                            <li><a href="#" data-index="3"><div class="the-bullet"></div></a></li>-->
<!--                            <li><a href="#" data-index="6"><div class="the-bullet"></div></a></li>-->
<!--                        </ul>-->
<!--                    </article>-->
<!--                </section>-->

        <section class="my-process" id="what-i-do">
            <h2 class="h2"><?php the_field('section_title'); ?></h2>
            <article>
                <div class="carousel-container">
                    <ul class="carousel">
                        <li>
                            <div class="content">
                                <div class="label"><?php the_field('card_category_1'); ?></div>
                                <?php
                                $icon_1 = get_field('card_icon_1');
                                if ($icon_1) : ?>
                                    <img src="<?php echo esc_url($icon_1['url']); ?>" alt="<?php echo esc_attr($icon_1['alt']); ?>">
                                <?php endif; ?>
                                <h4 class="h4"><?php the_field('card_title_1'); ?></h4>
                                <p><?php the_field('card_description_1'); ?></p>
                                <?php
                                $image_1 = get_field('card_image_1');
                                if ($image_1) : ?>
                                    <img src="<?php echo esc_url($image_1['url']); ?>" class="abstract" alt="<?php echo esc_attr($image_1['alt']); ?>">
                                <?php endif; ?>
                            </div>
                        </li>
                        <li>
                            <div class="content">
                                <div class="label"><?php the_field('card_category_2'); ?></div>
                                <?php
                                $icon_2 = get_field('card_icon_2');
                                if ($icon_2) : ?>
                                    <img src="<?php echo esc_url($icon_2['url']); ?>" alt="<?php echo esc_attr($icon_2['alt']); ?>">
                                <?php endif; ?>
                                <h4 class="h4"><?php the_field('card_title_2'); ?></h4>
                                <p><?php the_field('card_description_2'); ?></p>
                                <?php
                                $image_2 = get_field('card_image_2');
                                if ($image_2) : ?>
                                    <img src="<?php echo esc_url($image_2['url']); ?>" class="abstract" alt="<?php echo esc_attr($image_2['alt']); ?>">
                                <?php endif; ?>
                            </div>
                        </li>
                        <li>
                            <div class="content">
                                <div class="label"><?php the_field('card_category_3'); ?></div>
                                <?php
                                $icon_3 = get_field('card_icon_3');
                                if ($icon_3) : ?>
                                    <img src="<?php echo esc_url($icon_3['url']); ?>" alt="<?php echo esc_attr($icon_3['alt']); ?>">
                                <?php endif; ?>
                                <h4 class="h4"><?php the_field('card_title_3'); ?></h4>
                                <p><?php the_field('card_description_3'); ?></p>
                                <?php
                                $image_3 = get_field('card_image_3');
                                if ($image_3) : ?>
                                    <img src="<?php echo esc_url($image_3['url']); ?>" class="abstract" alt="<?php echo esc_attr($image_3['alt']); ?>">
                                <?php endif; ?>
                            </div>
                        </li>
                        <li>
                            <div class="content">
                                <div class="label"><?php the_field('card_category_4'); ?></div>
                                <?php
                                $icon_4 = get_field('card_icon_4');
                                if ($icon_4) : ?>
                                    <img src="<?php echo esc_url($icon_4['url']); ?>" alt="<?php echo esc_attr($icon_4['alt']); ?>">
                                <?php endif; ?>
                                <h4 class="h4"><?php the_field('card_title_4'); ?></h4>
                                <p><?php the_field('card_description_4'); ?></p>
                                <?php
                                $image_4 = get_field('card_image_4');
                                if ($image_4) : ?>
                                    <img src="<?php echo esc_url($image_4['url']); ?>" class="abstract" alt="<?php echo esc_attr($image_4['alt']); ?>">
                                <?php endif; ?>
                            </div>
                        </li>
                        <li>
                            <div class="content">
                                <div class="label"><?php the_field('card_category_5'); ?></div>
                                <?php
                                $icon_5 = get_field('card_icon_5');
                                if ($icon_5) : ?>
                                    <img src="<?php echo esc_url($icon_5['url']); ?>" alt="<?php echo esc_attr($icon_5['alt']); ?>">
                                <?php endif; ?>
                                <h4 class="h4"><?php the_field('card_title_5'); ?></h4>
                                <p><?php the_field('card_description_5'); ?></p>
                                <?php
                                $image_5 = get_field('card_image_5');
                                if ($image_5) : ?>
                                    <img src="<?php echo esc_url($image_5['url']); ?>" class="abstract" alt="<?php echo esc_attr($image_5['alt']); ?>">
                                <?php endif; ?>
                            </div>
                        </li>
                    </ul>
                </div>
                <ul class="bullets">
                    <li><a href="#" data-index="0"><div class="the-bullet active"></div></a></li>
                    <li><a href="#" data-index="3"><div class="the-bullet"></div></a></li>
                    <li><a href="#" data-index="6"><div class="the-bullet"></div></a></li>
                </ul>
            </article>
        </section>





    </main>

<?php get_footer();