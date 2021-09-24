<?php include get_template_directory() . "/includes/header.php";

global $post;
$post_id = $post->ID;
$headline = get_post_meta($post_id, '_ud_hero_headline', true);
$introText = get_post_meta($post_id, '_ud_hero_intro_text', true);
$sections = get_post_meta($post_id, 'ud_content_sections', true);

?>

<div class="feature-detail">
  <section class="home__feature-detail__hero-banner">
    <div class="hero-banner">
      <div class="hero-banner__bg"><img src="<?php echo THEME_URL . "/assets/images/svg/hero-banner-bg.svg" ?>" alt="Home Hero Banner Background" /></div>
      <div class="container">
        <div class="hero-banner__content">
          <h3 class="hero-banner__content__title heading">
            <?php echo $headline ?>
          </h3>
          <p class="hero-banner__content__desc desc">
            <?php echo $introText ?>
          </p>
          <div class="hero-banner__content__actions">
            <input class="input" placeholder="Enter your Email address" />
            <div class="get-started">
              <button class="get-started__btn">Get started</button><span class="get-started__text">Free forever. No credit card</span>
            </div>
          </div>
        </div>
        <div class="hero-banner__banner"><img src="<?php echo THEME_URL . '/assets/images/feature-detail/hero-banner-bg.png' ?>" alt="Home Hero Banner Background" /></div>
      </div>
    </div>
  </section>
  <section class="feature-detail__list">
    <div class="container">
      <div class="feature-detail__list__container">
        <?php
        foreach ((array)$sections as $key => $entry) {
          $img = $title = $txt = $image_id =  '';

          $title = esc_html($entry['title']);
          $txt = wpautop($entry['text']);
          if (isset($entry['image'])) $img = $entry['image'];
          if (!$img) $img = $entry['img'];
          if (isset($entry['image_id'])) $image_id = $entry['image_id'];
          if (!$image_id) $image_id = $entry['img_id'];
          if ($title && $txt && $img) :

            $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
        ?>

            <div class="feature-detail__list__item"><img class="feature-detail__list__item__img" src="<?php echo $img ?>" alt="<?php echo $image_alt ?>"/>
              <div class="feature-detail__list__item__info">
                <h6 class="feature-detail__list__item__title"><?php echo $title ?>
                </h6>
                <p class="feature-detail__list__item__desc"><?php echo $txt ?>
              </div>
            </div>
          <?php endif;
        } ?>
            </div>
      </div>
    </div>
  </section>
  <section class="feature-detail__trusted-by">
    <div class="is-center trusted-by" className="className"><span class="trusted-by__title-center">Trusted by</span>
      <div class="container">
        <h4 class="trusted-by__title section">Trusted by
        </h4>
        <div class="trusted-by__swiper swiper-container">
          <div class="trusted-by__swiper__wrapper swiper-wrapper">
            <div class="trusted-by__swiper__slide swiper-slide"><img class="trusted-by__swiper__slide__img" src="<?php echo THEME_URL . '/assets/images/trusted-by-vox-media.png' ?>" /></div>
            <div class="trusted-by__swiper__slide swiper-slide"><img class="trusted-by__swiper__slide__img" src="<?php echo THEME_URL . '/assets/images/trusted-by-saleforce.png' ?>" /></div>
            <div class="trusted-by__swiper__slide swiper-slide"><img class="trusted-by__swiper__slide__img" src="<?php echo THEME_URL . '/assets/images/trusted-by-deloitte.png' ?>" /></div>
            <div class="trusted-by__swiper__slide swiper-slide"><img class="trusted-by__swiper__slide__img" src="<?php echo THEME_URL . '/assets/images/trusted-by-nasa.png' ?>" /></div>
            <div class="trusted-by__swiper__slide swiper-slide"><img class="trusted-by__swiper__slide__img" src="<?php echo THEME_URL . '/assets/images/trusted-by-meals-wheels.png' ?>" /></div>
            <div class="trusted-by__swiper__slide swiper-slide"><img class="trusted-by__swiper__slide__img" src="<?php echo THEME_URL . '/assets/images/trusted-by-comcast.png' ?>" /></div>
            <div class="trusted-by__swiper__slide swiper-slide"><img class="trusted-by__swiper__slide__img" src="<?php echo THEME_URL . '/assets/images/trusted-by-timbuk.png' ?>" /></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="take-action">
    <div class="container">
      <h3 class="take-action__heading heading">Let inspire your team to take&nbsp;action</h3>
      <div class="take-action__actions">
        <input class="take-action__actions__input input" placeholder="Enter your Email address" />
        <button class="take-action__actions__btn btn--no-shadow btn">Get started
        </button>
      </div>
    </div>
  </section>
</div>


<?php include get_template_directory() . "/includes/footer.php"; ?>