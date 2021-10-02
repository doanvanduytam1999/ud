<?php

/*
    Template Name: Page About Us
*/
include get_template_directory()."/includes/header.php";?>

<?php
    // constructor
    $prefix = '_ud_';
    $post_id = get_the_ID();
    
    // Page title
    $pageTitle = get_post_meta($post_id, $prefix . 'page_title', true); 
    $pageDesc = get_post_meta($post_id, $prefix . 'page_desc', true);

    //Mission section
    $block1Desc = get_post_meta($post_id, $prefix . 'block1_desc', true); 
    $block2Title = get_post_meta($post_id, $prefix . 'block2_title', true); 
    $block2Desc = get_post_meta($post_id, $prefix . 'block2_desc', true); 
    $block3Desc = get_post_meta($post_id, $prefix . 'block3_desc', true); 
    $block3Btn = get_post_meta($post_id, $prefix . 'block3_btn', true); 
    $block4Title = get_post_meta($post_id, $prefix . 'block4_title', true); 
    $block4Desc = get_post_meta($post_id, $prefix . 'block4_desc', true); 

    // Values section
    $valuesTitle = get_post_meta($post_id, $prefix . 'values_title', true);
    $values = get_post_meta( $post_id, $prefix . 'up_values_blocks', true); 

    $values = format_values_data($values);
?>

<div class="about">
    <div class="about__bg">
        <div class="about__bg__color"><img class="about__bg__color__img"
                src="<?php echo THEME_URL . "/assets/images/svg/about/about-hero-banner-bg-1.svg" ?>"
                alt="Hero Banner Background" /></div>
        <div class="about__bg__blur"><img class="about__bg__blur__img"
                src="<?php echo THEME_URL . "/assets/images/svg/about/about-hero-banner-bg-2.svg" ?>"
                alt="Hero Banner Background" /></div>
    </div>
    <section class="about__hero-banner">
        <div class="container">
            <h1 class="about__hero-banner__title"><?= $pageTitle ?></h1>
            <p class="about__hero-banner__desc"><?= $pageDesc ?></p>
            <img class="about__hero-banner__bg"
                src="<?php echo THEME_URL . "/assets/images/svg/about/about-hero-banner-main-bg.svg" ?>"
                alt="Our Company" />
        </div>
    </section>
    <section class="about__mission">
        <div class="container">
            <h4 class="section">Mission</h4>
            <div class="about__mission__bg">
                <img class="about__mission__bg__img"
                    src="<?php echo THEME_URL . "/assets/images/svg/about/about-mission-bg.svg" ?>"
                    alt="Hero Banner Background" />
            </div>
            <div class="about__mission__content">
                <div class="about__mission__content__block-1">
                    <p class="about__mission__content__block-1__desc"><?= $block1Desc ?></p>
                </div>
                <div class="about__mission__content__block-2">
                    <h3 class="about__mission__content__block-2__title"><?= $block2Title ?></h3>
                    <p class="about__mission__content__block-2__desc"><?= $block2Desc ?></p>
                </div>
                <div class="about__mission__content__block-3">
                    <p class="about__mission__content__block-3__desc"><?= $block3Desc ?></p>
                    <div class="about__mission__content__block-3__btn">
                        <button><?= $block3Btn ?></button>
                    </div>
                </div>
                <div class="about__mission__content__block-4">
                    <h3 class="about__mission__content__block-4__title"><?= $block4Title ?></h3>
                    <p class="about__mission__content__block-4__desc"><?= $block4Desc ?></p>
                </div>
            </div>
        </div>
    </section>
    <section class="about__values">
        <div class="container">
            <h4 class="section">Values</h4>
            <div class="about__values__title"><?= $valuesTitle ?></div>
            <div class="about__values__grid">
                <?php foreach ($values as $key => $p): ?>
                <div class="about__values__grid__item">
                    <div class="about__values__grid__item__content" style="border:1px solid <?= $p['block_color'] ?>;">
                        <div class="about__values__grid__item__index"
                            style="background-color:<?= $p['block_color'] ?>;"><?= $p['index'] ?></div>
                        <h3 class="about__values__grid__item__content__title"><?= $p['title'] ?></h3>
                        <p class="about__values__grid__item__content__desc"><?= $p['desc'] ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>

<?php include get_template_directory()."/includes/footer.php"; ?>