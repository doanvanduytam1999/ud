<?php
/*
    Template Name: Page Case Studies
*/
include get_template_directory()."/includes/header.php";?>


<?php 
    global $currentCategory;
    $currentUrl = $_SERVER['REQUEST_URI'];
    if (strpos($currentUrl, '=')) {
        $currentCategory = explode('=', $currentUrl)[1] ? explode('=', $currentUrl)[1] : '';
    }
?>

<div class="case-study">
    <div class="case-study__bg"></div>
    <div class="case-study__bg-sm"></div>
    <section class="case-study__hero-banner">
        <div class="container">
            <div class="case-study__hero-banner__main">
                <div class="case-study__hero-banner__main__bg">
                    <img src="<?php echo THEME_URL . "/assets/images/svg/case-study/hero-banner-bg.svg" ?>"
                        title="Hero Banner Background" />
                </div>
                <div class="case-study__hero-banner__main__content">
                    <h1 class="case-study__hero-banner__main__content__title">Case studies</h1>
                    <p class="case-study__hero-banner__main__content__desc">Visualize product roadmaps, project plans,
                        and reports for effective team collaboration and putting into action that impact</p>
                </div>
            </div>
        </div>
    </section>
    <section class="case-study__articles">
        <div class="container">
            <div class="case-study__articles__toolkit">
                <form id="cs_form" class="search case-study__articles__toolkit__search" ole="search" method="get"
                    action="<?php echo home_url('/case-studies'); ?>">
                    <i class="search__icon-search">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M6.8 11.7693C3.92 11.7693 1.6 9.49388 1.6 6.66926C1.6 3.84462 3.92 1.56926 6.8 1.56926C9.68 1.56926 12 3.84462 12 6.66926C12 9.49388 9.68 11.7693 6.8 11.7693ZM15.44 12.3969L12.8 9.80772C13.28 8.86615 13.6 7.76769 13.6 6.66926C13.6 2.98157 10.56 0 6.8 0C3.04 0 0 2.98157 0 6.66926C0 10.357 3.04 13.3385 6.8 13.3385C7.92 13.3385 9.04 13.0246 10 12.5539L12.64 15.1431C13.44 15.9277 14.64 15.9277 15.44 15.1431C16.16 14.3585 16.16 13.1816 15.44 12.3969Z"
                                fill="#AEAEAE" />
                        </svg>
                    </i>
                    <i class="search__icon-remove" id="cs_form_input_remove">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19 6.41L17.59 5L12 10.59L6.41 5L5 6.41L10.59 12L5 17.59L6.41 19L12 13.41L17.59 19L19 17.59L13.41 12L19 6.41Z"
                                fill="black" />
                        </svg>
                    </i>
                    <input id="cs_form_input" class="search__input" placeholder="Search" />
                </form>
                <div class="case-study__articles__toolkit__categories">
                    <a class="case-study__articles__toolkit__categories__item <?= $currentCategory == '' ? 'is-active' : ''?>"
                        href="javascript:void(0)" data-slug="">All Articles</a>
                    <?php
                        $args = array(
                            'type'        => 'case-study',
                            'taxonomy'    => 'cs-categories',
                            'child_of'    => 0,
                            'parent'      => '', 
                            'hide_empty'  => '0',
                            'orderby'     => 'name',
	                        'order'       => 'ASC',
                        );
                        $cs_categories = get_terms($args);
                    ?>
                    <?php foreach($cs_categories as $category) { ?>
                    <a class="case-study__articles__toolkit__categories__item <?= $currentCategory == $category->slug ? 'is-active' : ''?>"
                        data-slug="<?= $category->slug; ?>" href="javascript:void(0)"><?= $category->name; ?></a>
                    <?php } ?>
                </div>
            </div>
            <div class="case-study__articles__list" id="ajax-posts">
                <!-- All Case Studies -->
                <?php 
                    if ($currentCategory) {
                        $args = array(
                            'post_type' => 'case-study',
                            'post_status' => 'publish', 
                            'posts_per_page'=> '12',
                            'tax_query' => array( 
                                array( 
                                    'taxonomy' => 'cs-categories',
                                    'field' => 'slug',
                                    'terms' => $currentCategory 
                                )
                            )
                        );
                    } else {
                        $args = array(
                            'post_type' => 'case-study',
                            'post_status' => 'publish', 
                            'posts_per_page'=> '12',
                        );
                    }
                   
                    $wpb_query = new WP_Query($args)
                ?>
                <?php if ($wpb_query->have_posts()) : ?>
                <?php while ( $wpb_query->have_posts() ) : 
                        $wpb_query->the_post();?>
                <a class="card" href="<?php the_permalink(); ?>">
                    <div class="card__header">
                        <span class="card__header__tag"><?php echo get_case_study_tags(null); ?></span>
                        <span class="card__header__reading-time"><i class="card__header__reading-time__icon">
                                <svg class="colored" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1.5 2.25H6C6.79565 2.25 7.55871 2.56607 8.12132 3.12868C8.68393 3.69129 9 4.45435 9 5.25V15.75C9 15.1533 8.76295 14.581 8.34099 14.159C7.91903 13.7371 7.34674 13.5 6.75 13.5H1.5V2.25Z"
                                        stroke="#757575" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M16.5 2.25H12C11.2044 2.25 10.4413 2.56607 9.87868 3.12868C9.31607 3.69129 9 4.45435 9 5.25V15.75C9 15.1533 9.23705 14.581 9.65901 14.159C10.081 13.7371 10.6533 13.5 11.25 13.5H16.5V2.25Z"
                                        stroke="#757575" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </i>
                            <?php echo get_estimated_reading_time(null); ?>
                        </span>
                    </div>
                    <div class="card__body responsive-img responsive-img--16/9">
                        <img class="card__body__banner" src="<?php echo get_the_post_thumbnail_url(); ?>"
                            alt="<?php the_title(); ?>" />
                    </div>
                    <div class="card__footer">
                        <h6 class="card__footer__title"><?php the_title(); ?></h6>
                        <p class="card__footer__desc">
                            <?php echo get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true);  ?>
                        </p>
                    </div>
                </a>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
            <span class="case-study__articles__load-more">
                <svg id="load_more_posts_icon" width="29" height="29" viewBox="0 0 29 29" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M15.9512 15.5317H3.72705C2.81253 15.5317 2.07129 16.316 2.07129 17.2834V18.9382C2.07129 19.9056 2.81253 20.6898 3.72705 20.6898H15.9512C16.8658 20.6898 17.607 19.9056 17.607 18.9382V17.2834C17.607 16.316 16.8658 15.5317 15.9512 15.5317Z"
                        fill="#AEAEAE" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M14.8936 23.7847H1.67784C0.75112 23.7847 0 24.5689 0 25.5363V27.191C0 28.1585 0.75112 28.9428 1.67784 28.9428H14.8936C15.8201 28.9428 16.5714 28.1585 16.5714 27.191V25.5363C16.5714 24.5689 15.8201 23.7847 14.8936 23.7847Z"
                        fill="#AEAEAE" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M27.3339 7.27881H6.84495C5.92481 7.27881 5.17871 8.06306 5.17871 9.03041V10.6851C5.17871 11.6527 5.92481 12.4369 6.84495 12.4369H27.3339C28.2542 12.4369 29.0001 11.6527 29.0001 10.6851V9.03041C29.0001 8.06306 28.2542 7.27881 27.3339 7.27881Z"
                        fill="#AEAEAE" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M11.7549 0.0571289H1.70939C0.765427 0.0571289 0 0.841406 0 1.80861V3.46357C0 4.43095 0.765427 5.21523 1.70939 5.21523H11.7549C12.699 5.21523 13.4643 4.43095 13.4643 3.46357V1.80861C13.4643 0.841406 12.699 0.0571289 11.7549 0.0571289Z"
                        fill="#AEAEAE" />
                </svg></span>
        </div>
    </section>
</div>
<style>
.case-study__bg::before {
    background-image: url("<?php echo THEME_URL . "/assets/images/svg/case-study/case-study-bg.svg" ?>");
}

.case-study__bg-sm::before {
    background-image: url("<?php echo THEME_URL . "/assets/images/svg/case-study/case-study-bg-sm.svg" ?>");
}

.case-study__hero-banner__main::before {
    background-image: url("<?php echo THEME_URL . "/assets/images/svg/case-study/hero-banner-bg.svg" ?>");
}
</style>

<?php
add_action( 'wp_footer', 'scripts_for_index_page_load', 100);
add_action( 'wp_footer', 'scripts_for_cs_page_filter', 100);
add_action( 'wp_footer', 'scripts_for_cs_page_search', 100);
include get_template_directory()."/includes/footer.php"; ?>