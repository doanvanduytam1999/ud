<?php

/*
    Template Name: Page Integration Detail
*/

include get_template_directory() . "/includes/header.php";
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="integration-detail">
    <section class="home__hero-banner">
        <div class="hero-banner">
            <div class="hero-banner__bg">
                <img src="<?php echo THEME_URL . "/assets/images/svg/hero-banner-bg.svg" ?>" alt="Home Hero Banner Background" />
            </div>
            <div class="container">
                <div class="hero-banner__content">
                    <h4 class="section"></h4>
                    <h3 class="hero-banner__content__title heading">
                        A fundamentally new way to work in Slack.
                    </h3>
                    <p class="hero-banner__content__subtitle"></p>
                    <p class="hero-banner__content__desc desc"></p>
                    <div class="hero-banner__content__actions">
                        <input class="input" placeholder="Enter your Email address" />
                        <div class="get-started">
                            <button class="get-started__btn">Get started</button><span class="get-started__text">Free forever. No credit card</span>
                        </div>
                    </div>
                    <div class="row d-flex hero-banner__content__rating">
                        <img class="col-12 col-md-6 col-lg-4" src="<?php echo THEME_URL . "/assets/images/home/rating.png" ?>" />
                    </div>
                    <div class="row d-flex mt-1 mt-md-3 mb-5 hero-banner__content__recognition-list">
                        <img class="col-4 col-md-2 col-lg-3 mt-3" src="<?php echo THEME_URL . "/assets/images/home/capterra.png" ?>" alt="Recognition" />
                        <img class="col-4 col-md-2 col-lg-3 mt-3" src="<?php echo THEME_URL . "/assets/images/home/crowd.png" ?>" alt="Recognition" />
                        <img class="col-4 col-md-2 col-lg-3 mt-3" src="<?php echo THEME_URL . "/assets/images/home/alternativeto.png" ?>" alt="Recognition" />
                    </div>
                </div>
                <div class="hero-banner__banner">
                    <img src="<?php echo THEME_URL . "/assets/images/integration-detail/integration-detail-banner.png" ?>" alt="Home Hero Banner Background" />
                </div>
            </div>
        </div>
    </section>
    <section class="feature-detail__list">
        <div class="container">
            <div class="feature-detail__list__container">
                <div class="feature-detail__list__item">
                    <img class="feature-detail__list__item__img" src="<?php echo THEME_URL . "/assets/images/feature-detail/screenshot-1.png" ?>" />
                    <div class="feature-detail__list__item__info">
                        <h6 class="feature-detail__list__item__title">
                            A fundamentally new way to work in Slack.
                        </h6>
                        <p class="feature-detail__list__item__desc">
                            When task links are posted in Slack, they’ll be instantly
                            enriched with detail, context, and the ability to perform
                            actions with the task.
                        </p>
                        <a class="feature-detail__list__item__read-more link" href="">Read more</a>
                    </div>
                </div>
                <div class="feature-detail__list__item">
                    <img class="feature-detail__list__item__img" src="<?php echo THEME_URL . "/assets/images/feature-detail/screenshot-2.png" ?>" />
                    <div class="feature-detail__list__item__info">
                        <h6 class="feature-detail__list__item__title">
                            A fundamentally new way to work in Slack.
                        </h6>
                        <p class="feature-detail__list__item__desc">
                            When task links are posted in Slack, they’ll be instantly
                            enriched with detail, context, and the ability to perform
                            actions with the task.
                        </p>
                        <a class="feature-detail__list__item__read-more link" href="">Read more</a>
                    </div>
                </div>
                <div class="feature-detail__list__item">
                    <img class="feature-detail__list__item__img" src="<?php echo THEME_URL . "/assets/images/feature-detail/screenshot-3.png" ?>" />
                    <div class="feature-detail__list__item__info">
                        <h6 class="feature-detail__list__item__title">
                            A fundamentally new way to work in Slack.
                        </h6>
                        <p class="feature-detail__list__item__desc">
                            When task links are posted in Slack, they’ll be instantly
                            enriched with detail, context, and the ability to perform
                            actions with the task.
                        </p>
                        <a class="feature-detail__list__item__read-more link" href="">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="home__trusted-by">
        <div class="trusted-by" className="className">
            <span class="trusted-by__title-center">Trusted by</span>
            <div class="container">
                <h4 class="trusted-by__title section">Trusted by</h4>
                <div class="trusted-by__swiper swiper-container">
                    <div class="trusted-by__swiper__wrapper swiper-wrapper">
                        <div class="trusted-by__swiper__slide swiper-slide">
                            <img class="trusted-by__swiper__slide__img" src="<?php echo THEME_URL . "/assets/images/trusted-by-vox-media.png" ?>" />
                        </div>
                        <div class="trusted-by__swiper__slide swiper-slide">
                            <img class="trusted-by__swiper__slide__img" src="<?php echo THEME_URL . "/assets/images/trusted-by-saleforce.png" ?>" />
                        </div>
                        <div class="trusted-by__swiper__slide swiper-slide">
                            <img class="trusted-by__swiper__slide__img" src="<?php echo THEME_URL . "/assets/images/trusted-by-deloitte.png" ?>" />
                        </div>
                        <div class="trusted-by__swiper__slide swiper-slide">
                            <img class="trusted-by__swiper__slide__img" src="<?php echo THEME_URL . "/assets/images/trusted-by-nasa.png" ?>" />
                        </div>
                        <div class="trusted-by__swiper__slide swiper-slide">
                            <img class="trusted-by__swiper__slide__img" src="<?php echo THEME_URL . "/assets/images/trusted-by-meals-wheels.png" ?>" />
                        </div>
                        <div class="trusted-by__swiper__slide swiper-slide">
                            <img class="trusted-by__swiper__slide__img" src="<?php echo THEME_URL . "/assets/images/trusted-by-comcast.png" ?>" />
                        </div>
                        <div class="trusted-by__swiper__slide swiper-slide">
                            <img class="trusted-by__swiper__slide__img" src="<?php echo THEME_URL . "/assets/images/trusted-by-timbuk.png" ?>" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="take-action">
        <div class="container">
            <h3 class="take-action__heading heading">
                Let inspire your team to take&nbsp;action
            </h3>
            <div class="take-action__actions">
                <input class="take-action__actions__input input" placeholder="Enter your Email address" /><button class="take-action__actions__btn btn--no-shadow btn">
                    Get started
                </button>
            </div>
        </div>
    </section>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<?php include get_template_directory() . "/includes/footer.php"; ?>