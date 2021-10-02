<?php

/*
    Template Name: Page Updiagram Affiliate
*/
include get_template_directory()."/includes/header.php";?>

<?php 
    // constructor
    $prefix = '_ud_';
    $post_id = get_the_ID();

    // Page title
    $pageTitle = get_post_meta($post_id, $prefix . 'page_title', true); 
    $pageSubtitle = get_post_meta( $post_id, $prefix . 'page_subtitle', true);
    $pageDesc = get_post_meta( $post_id, $prefix . 'page_desc', true);
    $btnTitle = get_post_meta( $post_id, $prefix . 'btn_title', true);
    $btnDesc = get_post_meta( $post_id, $prefix . 'btn_desc', true);

    // Audience Section
    $audTitle = get_post_meta($post_id, $prefix . 'audience_title', true); 
    $audDecs = get_post_meta( $post_id, $prefix . 'audience_desc', true);

    // How it works section
    $hiwTitle = get_post_meta($post_id, $prefix . 'hiw_title', true); 
    $hiw = get_post_meta( $post_id, $prefix . 'up_hiw_rows', true); 

    // Commission Section
    $commissionsTitle = get_post_meta($post_id, $prefix . 'commissions_title', true);
    $commissions = get_post_meta( $post_id, $prefix . 'up_commission_rows', true); 

    //faq section
    $faqsTitle = get_post_meta($post_id, $prefix . 'faqs_title', true); 
    $faqs = get_post_meta( $post_id, $prefix . 'up_question_columns', true);

?>

<div class="updiagram-affiliate">
    <section class="updiagram-affiliate__hero-banner">
        <div class="hero-banner">
            <div class="hero-banner__bg">
                <img src="<?php echo THEME_URL . "/assets/images/svg/hero-banner-bg.svg" ?>"
                    alt="Home Hero Banner Background" />
            </div>
            <div class="container">
                <div class="hero-banner__content">
                    <h3 class="hero-banner__content__title heading"><?= $pageTitle ?></h3>
                    <p class="hero-banner__content__subtitle"><?= $pageSubtitle ?></p>
                    <p class="hero-banner__content__desc desc"><?= $pageDesc ?></p>
                    <div class="hero-banner__content__actions">
                        <div class="get-started">
                            <button class="get-started__btn"><?= $btnTitle ?></button>
                            <span class="get-started__text"><?= $btnDesc ?></span>
                        </div>
                    </div>
                </div>
                <div class="hero-banner__banner">
                    <img src="<?php echo THEME_URL . "/assets/images/updiagram-affiliate/hero-banner-bg.png" ?>"
                        alt="Home Hero Banner Background" />
                </div>
            </div>
        </div>
    </section>
    <section class="updiagram-affiliate__audience">
        <div class="container">
            <h4 class="section">Audience</h4>
            <div class="updiagram-affiliate__audience__title"><?= $audTitle ?></div>
            <div class="updiagram-affiliate__audience__desc"><?= $audDecs ?></div>
        </div>
    </section>
    <section class="updiagram-affiliate__work">
        <div class="container">
            <h4 class="section">How</h4>
            <h3 class="updiagram-affiliate__work__heading heading"><?= $hiwTitle ?></h3>
            <div class="updiagram-affiliate__work__grid">
                <?php foreach ($hiw as $key => $p): ?>
                <div class="updiagram-affiliate__work__grid__item">
                    <div class="updiagram-affiliate__work__grid__item__content"
                        style="border:1px solid <?= $p['hiw_block_color']?>;">
                        <div class="updiagram-affiliate__work__grid__item__index"
                            style="background-color:<?= $p['hiw_block_color']?>;">
                            <?= $p['hiw_index'] ?></div>
                        <h3 class="updiagram-affiliate__work__grid__item__content__title"><?= $p['hiw_title'] ?></h3>
                        <p class="updiagram-affiliate__work__grid__item__content__desc"><?= $p['hiw_description'] ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section class="updiagram-affiliate__commission">
        <div class="container">
            <h4 class="section">How much</h4>
            <div class="updiagram-affiliate__commission__grid__title"><?= $commissionsTitle ?></div>
            <div class="updiagram-affiliate__commission__grid">
                <?php foreach ($commissions as $key => $p): ?>
                <div class="updiagram-affiliate__commission__grid__item">
                    <div class="updiagram-affiliate__commission__grid__item__content">
                        <h3 class="updiagram-affiliate__commission__grid__item__content__price"
                            style="background:<?= $p['commission_color'] ?>;">
                            <?= $p['commission_rule'] ?></h3>
                        <div class="updiagram-affiliate__commission__grid__item__content__desc">
                            <?= $p['commission_desc'] ?></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section class="updiagram-affiliate__faq">
        <div class="container">
            <h4 class="section">FAQ</h4>
            <h3 class="heading">Got questions?</h3>
        </div>
        <div class="updiagram-affiliate__faq__swiper swiper-container">
            <div class="updiagram-affiliate__faq__swiper__wrapper swiper-wrapper">
                <?php foreach ($faqs as $key => $p): ?>
                <div class="updiagram-affiliate__faq__swiper__wrapper swiper-slide">
                    <div class="updiagram-affiliate__faq__swiper__slide">
                        <h4 class="updiagram-affiliate__faq__swiper__slide__question"><?= $p['question'] ?></h4>
                        <p><?= $p['answer'] ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>

<?php include get_template_directory()."/includes/footer.php"; ?>