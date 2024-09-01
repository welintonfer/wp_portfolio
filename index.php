<?php

get_header(); ?>
<div class="hero">
    <div class="hero__avatar">
        <?php
        // Campo de imagem 'hero_home_pic'
        $hero_home_pic = get_field('hero_home_pic');
        // Campo de texto alternativo 'hero_home_pic_alt'
        $hero_home_pic_alt = get_field('hero_home_pic_alt');

        if ($hero_home_pic && isset($hero_home_pic['url'])): ?>
            <img src="<?php echo esc_url($hero_home_pic['url']); ?>" alt="<?php echo esc_attr($hero_home_pic_alt); ?>">
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
        <img class="hero__img" src="<?php echo esc_url($hero_home_feature_image['url']); ?>" alt="<?php echo esc_attr($hero_home_feature_image_alt); ?>">
    <?php endif; ?>
</div>



<main>

</main>
</body>
</html>