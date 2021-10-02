<?php

/*
    Template Name: Page Updiagram Plus
*/

include get_template_directory()."/includes/header.php";
?>

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

    //Reward section
    $rewardTitle = get_post_meta($post_id, $prefix . 'reward_title', true); 
    $rewards = get_post_meta( $post_id, $prefix . 'up_reward_rows', true); 

    // Fee section
    $fees = get_post_meta( $post_id, $prefix . 'up_fee_rows', true); 

    //faq section
    $faqsTitle = get_post_meta($post_id, $prefix . 'faqs_title', true); 
    $faqs = get_post_meta( $post_id, $prefix . 'up_question_columns', true);
?>

<div class="updiagram-plus">
    <section class="updiagram-plus__hero-banner">
        <div class="hero-banner">
            <div class="hero-banner__bg">
                <img src="<?php echo THEME_URL . "/assets/images/svg/hero-banner-bg.svg" ?>"
                    alt="Home Hero Banner Background" />
            </div>
            <div class="container">
                <div class="hero-banner__content">
                    <h3 class="hero-banner__content__title heading">
                        <?= $pageTitle ?>
                    </h3>
                    <p class="hero-banner__content__subtitle">
                        <?= $pageSubtitle ?>
                    </p>
                    <p class="hero-banner__content__desc desc">
                        <?= $pageDesc ?>
                    </p>
                    <div class="hero-banner__content__actions">
                        <div class="get-started">
                            <button class="get-started__btn"><?= $btnTitle ?></button>
                            <span class="get-started__text"><?= $btnDesc ?></span>
                        </div>
                    </div>
                </div>
                <div class="hero-banner__banner">
                    <img src="<?php echo THEME_URL . "/assets/images/updiagram-plus/hero-banner-bg.png" ?>"
                        alt="Home Hero Banner Background" />
                </div>
            </div>
        </div>
    </section>
    <section class="updiagram-plus__reward">
        <div class="container">
            <h4 class="section">How</h4>
            <h3 class="updiagram-plus__reward__heading heading"><?= $rewardTitle ?></h3>
            <div class="updiagram-plus__reward__grid">
                <?php foreach ($rewards as $key => $p): ?>
                <div class="updiagram-plus__reward__grid__item">
                    <div class="updiagram-plus__reward__grid__item__content"
                        style="border:1px solid <?= $p['reward_block_color']?>;">
                        <div class="updiagram-plus__reward__grid__item__index"
                            style="background-color: <?= $p['reward_block_color']?>;"><?= $p['reward_index'] ?>
                        </div>
                        <h3 class="updiagram-plus__reward__grid__item__content__title"><?= $p['reward_title']?></h3>
                        <p class="updiagram-plus__reward__grid__item__content__desc"><?= $p['reward_description']?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section class="updiagram-plus__fee">
        <div class="container">
            <h4 class="section">How much</h4>
            <div class="updiagram-plus__fee__grid">
                <?php foreach ($fees as $key => $p): ?>
                <div class="updiagram-plus__fee__grid__item">
                    <div class="updiagram-plus__fee__grid__item__amount"><?= $p['fee_amount'] ?></div>
                    <div class="updiagram-plus__fee__grid__item__content">
                        <h3 class="updiagram-plus__fee__grid__item__content__price"
                            style="background:<?= $p['fee_color'] ?>;"><?= $p['fee_price']?>
                        </h3>
                        <div class="updiagram-plus__fee__grid__item__content__desc"><?= $p['fee_desc']?></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section class="updiagram-plus__faq">
        <div class="container">
            <h4 class="section">FAQ</h4>
            <h3 class="heading"><?= $faqsTitle ?></h3>
        </div>
        <div class="updiagram-plus__faq__swiper swiper-container">
            <div class="updiagram-plus__faq__swiper__wrapper swiper-wrapper">
                <?php foreach ($faqs as $key => $p): ?>
                <div class="updiagram-plus__faq__swiper__wrapper swiper-slide">
                    <div class="updiagram-plus__faq__swiper__slide">
                        <h4 class="updiagram-plus__faq__swiper__slide__question"><?= $p['question'] ?></h4>
                        <p><?= $p['answer'] ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>

<?php include get_template_directory()."/includes/footer.php"; ?>