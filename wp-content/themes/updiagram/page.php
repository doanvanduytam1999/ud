<?php include get_template_directory()."/includes/header.php";?>

<?php
    //constructor
    global $post;
    $post_id = $post->ID;
    $headline = get_post_meta($post_id, '_ud_tieude', true);
    $introText = get_post_meta($post_id, '_ud_intro_text', true);

?>

<div class="home">
    <section class="home__hero-banner">
        <div class="hero-banner">
            <div class="hero-banner__bg">
                <img src="<?php echo THEME_URL . "/assets/images/svg/hero-banner-bg.svg" ?>"
                    alt="Home Hero Banner Background" />
            </div>
            <div class="container">
                <div class="hero-banner__content">
                    <h3 class="hero-banner__content__title heading">
                        UpDiagram lets your team get more work done and collaborate
                        together in one place
                    </h3>
                    <p class="hero-banner__content__desc desc">
                        Work management platform to connect team goals, product
                        roadmaps, project plans, and tasks to be accomplished together
                        in collaborative workspaces.
                    </p>
                    <div class="hero-banner__content__actions">
                        <input class="input" placeholder="Enter your Email address" />
                        <div class="get-started">
                            <button class="get-started__btn">Get started</button><span class="get-started__text">Free
                                forever. No credit card</span>
                        </div>
                    </div>
                </div>
                <div class="hero-banner__banner">
                    <img src="<?php echo THEME_URL . "/assets/images/home/hero-banner-bg.png" ?>"
                        alt="Home Hero Banner Background" />
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
                            <img class="trusted-by__swiper__slide__img"
                                src="<?php echo THEME_URL . "/assets/images/trusted-by-vox-media.png" ?>" />
                        </div>
                        <div class="trusted-by__swiper__slide swiper-slide">
                            <img class="trusted-by__swiper__slide__img"
                                src="<?php echo THEME_URL . "/assets/images/trusted-by-saleforce.png" ?>" />
                        </div>
                        <div class="trusted-by__swiper__slide swiper-slide">
                            <img class="trusted-by__swiper__slide__img"
                                src="<?php echo THEME_URL . "/assets/images/trusted-by-deloitte.png" ?>" />
                        </div>
                        <div class="trusted-by__swiper__slide swiper-slide">
                            <img class="trusted-by__swiper__slide__img"
                                src="<?php echo THEME_URL . "/assets/images/trusted-by-nasa.png" ?>" />
                        </div>
                        <div class="trusted-by__swiper__slide swiper-slide">
                            <img class="trusted-by__swiper__slide__img"
                                src="<?php echo THEME_URL . "/assets/images/trusted-by-meals-wheels.png" ?>" />
                        </div>
                        <div class="trusted-by__swiper__slide swiper-slide">
                            <img class="trusted-by__swiper__slide__img"
                                src="<?php echo THEME_URL . "/assets/images/trusted-by-comcast.png" ?>" />
                        </div>
                        <div class="trusted-by__swiper__slide swiper-slide">
                            <img class="trusted-by__swiper__slide__img"
                                src="<?php echo THEME_URL . "/assets/images/trusted-by-timbuk.png" ?>" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="home__views">
        <div class="home__views__bg">
            <img src="<?php echo THEME_URL . "/assets/images/svg/home/views-bg.svg" ?>" alt="Views Background" />
        </div>
        <div class="container">
            <h4 class="section">Views</h4>
            <h6 class="home__heading">Creative Visualization</h6>
            <p class="home__desc">
                Create, Collaborate and Organize all your work in one place
            </p>
            <ul class="home__views__nav">
                <li class="home__views__nav__item is-active" data-index="0">
                    <i class="home__views__nav__item__icon"><svg width="26" height="25" viewBox="0 0 26 25" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M5.75467 6.58612H1.2012C0.5408 6.58612 0 6.07912 0 5.46V1.12612C0 0.505375 0.5408 0 1.2012 0H5.75467C6.41507 0 6.95587 0.505375 6.95587 1.12612V5.46C6.95587 6.07912 6.41507 6.58612 5.75467 6.58612Z"
                                fill="currentColor" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M15.2598 6.58612H10.7063C10.0442 6.58612 9.50513 6.07912 9.50513 5.46V1.12612C9.50513 0.505375 10.0442 0 10.7063 0H15.2598C15.9202 0 16.461 0.505375 16.461 1.12612V5.46C16.461 6.07912 15.9202 6.58612 15.2598 6.58612Z"
                                fill="currentColor" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M12.8775 15.5031L10.7056 15.4901C10.0452 15.4901 9.50439 14.9847 9.50439 14.364V10.0301C9.50439 9.40934 10.0452 8.90234 10.7056 8.90234H15.2608C15.9195 8.90234 15.9663 9.37034 15.9663 9.37034"
                                fill="currentColor" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M19.0432 10.0299C19.0432 9.41073 19.584 8.90373 20.2444 8.90373L19.0432 10.0299Z"
                                fill="currentColor" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M22.9473 8.92225C22.9802 8.92225 24.8626 8.90437 24.8956 8.90762C25.5109 8.95312 25.9997 9.44062 25.9997 10.0305V14.3644C25.9997 14.9835 25.4589 15.4905 24.7985 15.4905H20.2433C19.4182 15.5392 19.4373 15.2337 19.4373 15.2337"
                                fill="currentColor" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M5.75467 24.3954H1.2012C0.5408 24.3954 0 23.8884 0 23.2692V18.9337C0 18.3146 0.5408 17.8076 1.2012 17.8076H5.75467C6.41507 17.8076 6.95587 18.3146 6.95587 18.9337V23.2692C6.95587 23.8884 6.41507 24.3954 5.75467 24.3954Z"
                                fill="currentColor" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M24.7984 24.3954H20.2449C19.5828 24.3954 19.0437 23.8884 19.0437 23.2692V18.9337C19.0437 18.3146 19.5828 17.8076 20.2449 17.8076H24.7984C25.4588 17.8076 25.9996 18.3146 25.9996 18.9337V23.2692C25.9996 23.8884 25.4588 24.3954 24.7984 24.3954Z"
                                fill="currentColor" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M6.94708 12.1969C6.94708 13.9926 5.39401 15.4502 3.47694 15.4502C1.56161 15.4502 0.00854492 13.9926 0.00854492 12.1969C0.00854492 10.4013 1.56161 8.94531 3.47694 8.94531C5.39401 8.94531 6.94708 10.4013 6.94708 12.1969Z"
                                fill="currentColor" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M16.4524 21.1019C16.4524 22.8975 14.8994 24.3551 12.9823 24.3551C11.067 24.3551 9.51392 22.8975 9.51392 21.1019C9.51392 19.3063 11.067 17.8486 12.9823 17.8486C14.8994 17.8486 16.4524 19.3063 16.4524 21.1019Z"
                                fill="currentColor" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M25.991 3.29264C25.991 5.08989 24.438 6.54589 22.5209 6.54589C20.6056 6.54589 19.0525 5.08989 19.0525 3.29264C19.0525 1.49702 20.6056 0.0410156 22.5209 0.0410156C24.438 0.0410156 25.991 1.49702 25.991 3.29264Z"
                                fill="currentColor" />
                            <path d="M3.47705 12.197L12.9775 21.414L22.5212 3.29199" stroke="currentColor"
                                stroke-width="2" />
                        </svg></i><span class="home__views__nav__item__name">Grid</span>
                </li>
                <li class="home__views__nav__item" data-index="1">
                    <i class="home__views__nav__item__icon"><svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M7.61561 12.2836C7.61561 10.1751 5.91087 8.46582 3.80775 8.46582C1.70474 8.46582 0 10.1751 0 12.2836C0 14.3921 1.70474 16.1014 3.80775 16.1014C5.91087 16.1014 7.61561 14.3921 7.61561 12.2836Z"
                                fill="currentColor" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M25.4386 22.1821C25.4386 20.0736 23.7339 18.3643 21.6308 18.3643C19.5277 18.3643 17.823 20.0736 17.823 22.1821C17.823 24.2906 19.5277 25.9998 21.6308 25.9998C23.7339 25.9998 25.4386 24.2906 25.4386 22.1821Z"
                                fill="currentColor" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M25.9004 3.8178C25.9004 1.7093 24.1955 0 22.0924 0C19.9895 0 18.2847 1.7093 18.2847 3.8178C18.2847 5.9263 19.9895 7.6356 22.0924 7.6356C24.1955 7.6356 25.9004 5.9263 25.9004 3.8178Z"
                                fill="currentColor" />
                            <path d="M20.2557 3.70898H14.3931L10.9956 12.4395H5.13306" stroke="currentColor"
                                stroke-width="4" />
                            <path d="M20.2559 22.0217H14.3934L10.9958 12.4395" stroke="currentColor" stroke-width="4" />
                        </svg></i><span class="home__views__nav__item__name">Timeline</span>
                </li>
                <li class="home__views__nav__item" data-index="2">
                    <i class="home__views__nav__item__icon"><svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M4.3819 14.2226H1.2C0.54 14.2226 0 13.6826 0 13.0226V1.2C0 0.54 0.54 0 1.2 0H4.3819C5.0419 0 5.5819 0.54 5.5819 1.2V13.0226C5.5819 13.6826 5.0419 14.2226 4.3819 14.2226Z"
                                fill="#AEAEAE" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M11.139 26H7.95708C7.29708 26 6.75708 25.46 6.75708 24.8V1.2C6.75708 0.5399 7.29708 0 7.95708 0H11.139C11.799 0 12.339 0.5399 12.339 1.2V24.8C12.339 25.46 11.799 26 11.139 26Z"
                                fill="#AEAEAE" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M17.9695 17.133H14.7876C14.1276 17.133 13.5876 16.5931 13.5876 15.933V1.2C13.5876 0.5399 14.1276 0 14.7876 0H17.9695C18.6296 0 19.1695 0.5399 19.1695 1.2V15.933C19.1695 16.5931 18.6296 17.133 17.9695 17.133Z"
                                fill="#AEAEAE" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M24.8001 14.2226H21.6182C20.9581 14.2226 20.4182 13.6826 20.4182 13.0226V1.2C20.4182 0.54 20.9581 0 21.6182 0H24.8001C25.4601 0 26.0001 0.54 26.0001 1.2V13.0226C26.0001 13.6826 25.4601 14.2226 24.8001 14.2226Z"
                                fill="#AEAEAE" />
                        </svg></i><span class="home__views__nav__item__name">Board</span>
                </li>
                <li class="home__views__nav__item" data-index="3">
                    <i class="home__views__nav__item__icon"><svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M4.1103 0C6.3803 0 8.2206 1.8236 8.2206 4.0731C8.2206 6.3228 6.3803 8.1464 4.1103 8.1464C1.8403 8.1464 0 6.3228 0 4.0731C0 1.8236 1.8403 0 4.1103 0Z"
                                fill="currentColor" />
                            <path d="M3.46655 12.2478L25.7922 12.2198" stroke="currentColor" stroke-width="4" />
                            <path d="M4.1603 4.7793V13.1391" stroke="currentColor" stroke-width="4" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M5.46924 21.9267C5.46924 19.6772 7.30944 17.8535 9.57954 17.8535C11.8495 17.8535 13.6897 19.6772 13.6897 21.9267C13.6897 24.1763 11.8495 25.9999 9.57954 25.9999C7.30944 25.9999 5.46924 24.1763 5.46924 21.9267Z"
                                fill="currentColor" />
                            <path d="M9.62954 21.2211V12.8613" stroke="currentColor" stroke-width="4" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M17.7505 21.9267C17.7505 19.6772 19.5906 17.8535 21.8608 17.8535C24.1308 17.8535 25.9709 19.6772 25.9709 21.9267C25.9709 24.1763 24.1308 25.9999 21.8608 25.9999C19.5906 25.9999 17.7505 24.1763 17.7505 21.9267Z"
                                fill="currentColor" />
                            <path d="M21.9108 21.2211V12.8613" stroke="currentColor" stroke-width="4" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M15.5136 0C17.7836 0 19.6239 1.8236 19.6239 4.0731C19.6239 6.3228 17.7836 8.1464 15.5136 8.1464C13.2436 8.1464 11.4033 6.3228 11.4033 4.0731C11.4033 1.8236 13.2436 0 15.5136 0Z"
                                fill="currentColor" />
                            <path d="M15.5634 4.7793V13.1391" stroke="currentColor" stroke-width="4" />
                        </svg></i><span class="home__views__nav__item__name">Mindmap</span>
                </li>
                <li class="home__views__nav__item" data-index="4">
                    <i class="home__views__nav__item__icon"><svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M24.8 0H20.25C20.2287 0 20.2079 0.00209195 20.1868 0.00308812C20.1657 0.00209195 20.1449 0 20.1235 0H15.5735C15.5221 0 15.4716 0.00428352 15.4218 0.010659C15.372 0.00428352 15.3215 0 15.27 0H10.7682H10.72H6.2182C6.1381 0 6.0599 0.00816858 5.9841 0.0232107C5.9083 0.00816858 5.8301 0 5.75 0H1.2C0.54 0 0 0.537831 0 1.1954V5.7976C0 6.45517 0.54 6.993 1.2 6.993H5.75C5.8301 6.993 5.9083 6.98484 5.9841 6.96969C6.0599 6.98484 6.1381 6.993 6.2182 6.993H10.72H10.7682H15.27C15.3215 6.993 15.372 6.98862 15.4218 6.98234C15.4716 6.98862 15.5221 6.993 15.5735 6.993H20.1235C20.1449 6.993 20.1657 6.99101 20.1868 6.98982C20.2079 6.99101 20.2287 6.993 20.25 6.993H24.8C25.4601 6.993 26 6.45517 26 5.7976V1.1954C26 0.537831 25.4601 0 24.8 0Z"
                                fill="#AEAEAE" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M5.75 16.4472H1.2C0.54 16.4472 0 15.9093 0 15.2518V10.6495C0 9.99203 0.54 9.4541 1.2 9.4541H5.75C6.4101 9.4541 6.95 9.99203 6.95 10.6495V15.2518C6.95 15.9093 6.4101 16.4472 5.75 16.4472Z"
                                fill="#AEAEAE" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M15.27 16.4472H10.72C10.06 16.4472 9.52002 15.9093 9.52002 15.2518V10.6495C9.52002 9.99203 10.06 9.4541 10.72 9.4541H15.27C15.93 9.4541 16.47 9.99203 16.47 10.6495V15.2518C16.47 15.9093 15.93 16.4472 15.27 16.4472Z"
                                fill="#AEAEAE" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M24.8 16.4472H20.25C19.59 16.4472 19.05 15.9093 19.05 15.2518V10.6495C19.05 9.99203 19.59 9.4541 20.25 9.4541H24.8C25.4601 9.4541 26 9.99203 26 10.6495V15.2518C26 15.9093 25.4601 16.4472 24.8 16.4472Z"
                                fill="#AEAEAE" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M5.75 25.9003H1.2C0.54 25.9003 0 25.3624 0 24.7049V20.1026C0 19.4451 0.54 18.9072 1.2 18.9072H5.75C6.4101 18.9072 6.95 19.4451 6.95 20.1026V24.7049C6.95 25.3624 6.4101 25.9003 5.75 25.9003Z"
                                fill="#AEAEAE" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M15.27 25.9003H10.72C10.06 25.9003 9.52002 25.3624 9.52002 24.7049V20.1026C9.52002 19.4451 10.06 18.9072 10.72 18.9072H15.27C15.93 18.9072 16.47 19.4451 16.47 20.1026V24.7049C16.47 25.3624 15.93 25.9003 15.27 25.9003Z"
                                fill="#AEAEAE" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M24.8 25.9003H20.25C19.59 25.9003 19.05 25.3624 19.05 24.7049V20.1026C19.05 19.4451 19.59 18.9072 20.25 18.9072H24.8C25.4601 18.9072 26 19.4451 26 20.1026V24.7049C26 25.3624 25.4601 25.9003 24.8 25.9003Z"
                                fill="#AEAEAE" />
                        </svg></i><span class="home__views__nav__item__name">Calendar</span>
                </li>
                <li class="home__views__nav__item" data-index="5">
                    <i class="home__views__nav__item__icon"><svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M20.4857 17.1533L25.8853 21.5972L25.8888 12.7354L20.4857 17.1533Z" fill="#AEAEAE" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M4.67603 6.11816H0.995271C0.451379 6.11816 0.0107847 6.5458 0.0121901 7.07332C0.0185144 10.2823 0.000244141 20.4763 0.000244141 20.4763L8.21624 13.3167C4.94165 8.12769 5.26068 7.68159 4.67603 6.11816Z"
                                fill="#AEAEAE" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M21.101 6.11816C20.4798 7.7719 20.7026 8.17011 15.2644 16.9123C14.1738 18.577 11.6637 18.5749 10.5745 16.9123L9.23237 14.8672L5.57129 18.4114L11.0699 23.7338L25.8892 10.1995L25.8949 7.08564C25.8956 6.56016 25.4585 6.13253 24.9167 6.13048C23.5141 6.12432 21.101 6.11816 21.101 6.11816Z"
                                fill="#AEAEAE" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M12.379 25.0012L13.3052 25.8976L24.9019 25.8941C25.4458 25.8941 25.8857 25.4665 25.885 24.9397V24.0919L19.1763 18.4219L12.379 25.0012Z"
                                fill="#AEAEAE" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M0 23.0115L0.00210811 24.9314C0.00281081 25.4576 0.442703 25.8838 0.985189 25.8838C3.62805 25.8824 10.686 25.8975 10.686 25.8975C9.77881 25.0197 4.82124 20.2206 4.26189 19.6787L0 23.0115Z"
                                fill="#AEAEAE" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M12.9191 3.63283C14.4587 3.63283 15.7123 4.84525 15.7123 6.33615C15.7123 7.82704 14.4587 9.03946 12.9191 9.03946C11.3795 9.03946 10.1258 7.82704 10.1258 6.33615C10.1258 4.84525 11.3795 3.63283 12.9191 3.63283ZM12.3394 15.9999C12.6085 16.4105 13.229 16.4111 13.4988 15.9999L17.8289 9.39525C20.2918 5.6971 17.5949 0.68457 12.9191 0.68457C8.25525 0.68457 5.53649 5.68889 8.01141 9.39868L12.3394 15.9999Z"
                                fill="#AEAEAE" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M12.9191 4.96191C13.7026 4.96191 14.3386 5.57702 14.3386 6.33581C14.3386 7.0946 13.7026 7.7097 12.9191 7.7097C12.1356 7.7097 11.4996 7.0946 11.4996 6.33581C11.4996 5.57702 12.1356 4.96191 12.9191 4.96191Z"
                                fill="#AEAEAE" />
                        </svg></i><span class="home__views__nav__item__name">Map</span>
                </li>
            </ul>
            <div class="home__views__preview">
                <i class="home__views__preview__prev"><svg class="colored" width="48" height="40" viewBox="0 0 48 40"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M31.2527 16.7473C29.4563 18.5437 29.4563 21.4563 31.2527 23.2527L45.2686 37.2686C46.2766 38.2766 48 37.5627 48 36.1373V3.86274C48 2.4373 46.2766 1.72343 45.2686 2.73137L31.2527 16.7473Z"
                            fill="#9FBFFF" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M3.25269 16.7473C1.45628 18.5437 1.45628 21.4563 3.25269 23.2527L17.2686 37.2686C18.2766 38.2766 20 37.5627 20 36.1373L20 3.86274C20 2.4373 18.2766 1.72343 17.2686 2.73137L3.25269 16.7473Z"
                            fill="#EBF2FF" />
                    </svg></i><i class="home__views__preview__next"><svg class="colored" width="44" height="36"
                        viewBox="0 0 44 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M16.7473 21.2527C18.5437 19.4563 18.5437 16.5437 16.7473 14.7473L2.73137 0.731369C1.72342 -0.276577 0 0.437294 0 1.86274L0 34.1373C0 35.5627 1.72343 36.2766 2.73137 35.2686L16.7473 21.2527Z"
                            fill="#9FBFFF" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M41.7473 21.2527C43.5437 19.4563 43.5437 16.5437 41.7473 14.7473L27.7314 0.731369C26.7234 -0.276577 25 0.437294 25 1.86274L25 34.1373C25 35.5627 26.7234 36.2766 27.7314 35.2686L41.7473 21.2527Z"
                            fill="#EBF2FF" />
                    </svg></i>
                <div class="home__views__preview__swiper swiper-container">
                    <div class="home__views__preview__wrapper swiper-wrapper">
                        <div class="home__views__preview__slide swiper-slide">
                            <img class="home__views__preview__slide__img"
                                src="<?php echo THEME_URL . "/assets/images/home/view-grid.jpg" ?>" />
                        </div>
                        <div class="home__views__preview__slide swiper-slide">
                            <img class="home__views__preview__slide__img"
                                src="<?php echo THEME_URL . "/assets/images/home/view-timeline.jpg" ?>" />
                        </div>
                        <div class="home__views__preview__slide swiper-slide">
                            <img class="home__views__preview__slide__img"
                                src="<?php echo THEME_URL . "/assets/images/home/view-board.jpg" ?>" />
                        </div>
                        <div class="home__views__preview__slide swiper-slide">
                            <img class="home__views__preview__slide__img"
                                src="<?php echo THEME_URL . "/assets/images/home/view-timeline.jpg" ?>" />
                        </div>
                        <div class="home__views__preview__slide swiper-slide">
                            <img class="home__views__preview__slide__img"
                                src="<?php echo THEME_URL . "/assets/images/home/view-calendar.jpg" ?>" />
                        </div>
                        <div class="home__views__preview__slide swiper-slide">
                            <img class="home__views__preview__slide__img"
                                src="<?php echo THEME_URL . "/assets/images/home/view-timeline.jpg" ?>" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="home__views__indicators swiper-indicator"></div>
        </div>
    </section>
    <section class="home__features">
        <div class="container">
            <h4 class="section">Features</h4>
            <h6 class="home__heading">
                Create, Collaborate and Organize all your work in one place
            </h6>
            <div class="home__features__content">
                <div class="home__features__list">
                    <ul class="home__features__list__nav">
                        <li class="home__features__list__nav__item is-active" data-index="0">
                            <i class="home__features__list__nav__item__icon"><svg width="39" height="14"
                                    viewBox="0 0 39 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M31.6689 1.68232C31.2921 1.27857 31.3139 0.645782 31.7177 0.268948C32.1214 -0.107885 32.7542 -0.0860652 33.1311 0.317685L38.7311 6.31769C38.9275 6.52812 39.0163 6.80215 38.9976 7.07011C38.9992 7.09341 39 7.11692 39 7.14063C39 7.56265 38.7386 7.92361 38.3688 8.07041L33.1311 13.6823C32.7542 14.0861 32.1214 14.1079 31.7177 13.7311C31.3139 13.3542 31.2921 12.7214 31.6689 12.3177L35.5675 8.14063H1.97944C1.42715 8.14063 0.979439 7.69291 0.979439 7.14063C0.979439 6.58834 1.42715 6.14063 1.97944 6.14063H35.83L31.6689 1.68232Z"
                                        fill="#4080FF" />
                                </svg></i><span class="home__features__list__nav__item__name">Workspace</span>
                        </li>
                        <li class="home__features__list__nav__item" data-index="1">
                            <i class="home__features__list__nav__item__icon"><svg width="39" height="14"
                                    viewBox="0 0 39 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M31.6689 1.68232C31.2921 1.27857 31.3139 0.645782 31.7177 0.268948C32.1214 -0.107885 32.7542 -0.0860652 33.1311 0.317685L38.7311 6.31769C38.9275 6.52812 39.0163 6.80215 38.9976 7.07011C38.9992 7.09341 39 7.11692 39 7.14063C39 7.56265 38.7386 7.92361 38.3688 8.07041L33.1311 13.6823C32.7542 14.0861 32.1214 14.1079 31.7177 13.7311C31.3139 13.3542 31.2921 12.7214 31.6689 12.3177L35.5675 8.14063H1.97944C1.42715 8.14063 0.979439 7.69291 0.979439 7.14063C0.979439 6.58834 1.42715 6.14063 1.97944 6.14063H35.83L31.6689 1.68232Z"
                                        fill="#4080FF" />
                                </svg></i><span class="home__features__list__nav__item__name">People</span>
                        </li>
                        <li class="home__features__list__nav__item" data-index="2">
                            <i class="home__features__list__nav__item__icon"><svg width="39" height="14"
                                    viewBox="0 0 39 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M31.6689 1.68232C31.2921 1.27857 31.3139 0.645782 31.7177 0.268948C32.1214 -0.107885 32.7542 -0.0860652 33.1311 0.317685L38.7311 6.31769C38.9275 6.52812 39.0163 6.80215 38.9976 7.07011C38.9992 7.09341 39 7.11692 39 7.14063C39 7.56265 38.7386 7.92361 38.3688 8.07041L33.1311 13.6823C32.7542 14.0861 32.1214 14.1079 31.7177 13.7311C31.3139 13.3542 31.2921 12.7214 31.6689 12.3177L35.5675 8.14063H1.97944C1.42715 8.14063 0.979439 7.69291 0.979439 7.14063C0.979439 6.58834 1.42715 6.14063 1.97944 6.14063H35.83L31.6689 1.68232Z"
                                        fill="#4080FF" />
                                </svg></i><span class="home__features__list__nav__item__name">Team</span>
                        </li>
                        <li class="home__features__list__nav__item" data-index="3">
                            <i class="home__features__list__nav__item__icon"><svg width="39" height="14"
                                    viewBox="0 0 39 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M31.6689 1.68232C31.2921 1.27857 31.3139 0.645782 31.7177 0.268948C32.1214 -0.107885 32.7542 -0.0860652 33.1311 0.317685L38.7311 6.31769C38.9275 6.52812 39.0163 6.80215 38.9976 7.07011C38.9992 7.09341 39 7.11692 39 7.14063C39 7.56265 38.7386 7.92361 38.3688 8.07041L33.1311 13.6823C32.7542 14.0861 32.1214 14.1079 31.7177 13.7311C31.3139 13.3542 31.2921 12.7214 31.6689 12.3177L35.5675 8.14063H1.97944C1.42715 8.14063 0.979439 7.69291 0.979439 7.14063C0.979439 6.58834 1.42715 6.14063 1.97944 6.14063H35.83L31.6689 1.68232Z"
                                        fill="#4080FF" />
                                </svg></i><span class="home__features__list__nav__item__name">Project</span>
                        </li>
                        <li class="home__features__list__nav__item" data-index="4">
                            <i class="home__features__list__nav__item__icon"><svg width="39" height="14"
                                    viewBox="0 0 39 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M31.6689 1.68232C31.2921 1.27857 31.3139 0.645782 31.7177 0.268948C32.1214 -0.107885 32.7542 -0.0860652 33.1311 0.317685L38.7311 6.31769C38.9275 6.52812 39.0163 6.80215 38.9976 7.07011C38.9992 7.09341 39 7.11692 39 7.14063C39 7.56265 38.7386 7.92361 38.3688 8.07041L33.1311 13.6823C32.7542 14.0861 32.1214 14.1079 31.7177 13.7311C31.3139 13.3542 31.2921 12.7214 31.6689 12.3177L35.5675 8.14063H1.97944C1.42715 8.14063 0.979439 7.69291 0.979439 7.14063C0.979439 6.58834 1.42715 6.14063 1.97944 6.14063H35.83L31.6689 1.68232Z"
                                        fill="#4080FF" />
                                </svg></i><span class="home__features__list__nav__item__name">Document</span>
                        </li>
                        <li class="home__features__list__nav__item" data-index="5">
                            <i class="home__features__list__nav__item__icon"><svg width="39" height="14"
                                    viewBox="0 0 39 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M31.6689 1.68232C31.2921 1.27857 31.3139 0.645782 31.7177 0.268948C32.1214 -0.107885 32.7542 -0.0860652 33.1311 0.317685L38.7311 6.31769C38.9275 6.52812 39.0163 6.80215 38.9976 7.07011C38.9992 7.09341 39 7.11692 39 7.14063C39 7.56265 38.7386 7.92361 38.3688 8.07041L33.1311 13.6823C32.7542 14.0861 32.1214 14.1079 31.7177 13.7311C31.3139 13.3542 31.2921 12.7214 31.6689 12.3177L35.5675 8.14063H1.97944C1.42715 8.14063 0.979439 7.69291 0.979439 7.14063C0.979439 6.58834 1.42715 6.14063 1.97944 6.14063H35.83L31.6689 1.68232Z"
                                        fill="#4080FF" />
                                </svg></i><span class="home__features__list__nav__item__name">Wiki</span>
                        </li>
                        <li class="home__features__list__nav__item" data-index="6">
                            <i class="home__features__list__nav__item__icon"><svg width="39" height="14"
                                    viewBox="0 0 39 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M31.6689 1.68232C31.2921 1.27857 31.3139 0.645782 31.7177 0.268948C32.1214 -0.107885 32.7542 -0.0860652 33.1311 0.317685L38.7311 6.31769C38.9275 6.52812 39.0163 6.80215 38.9976 7.07011C38.9992 7.09341 39 7.11692 39 7.14063C39 7.56265 38.7386 7.92361 38.3688 8.07041L33.1311 13.6823C32.7542 14.0861 32.1214 14.1079 31.7177 13.7311C31.3139 13.3542 31.2921 12.7214 31.6689 12.3177L35.5675 8.14063H1.97944C1.42715 8.14063 0.979439 7.69291 0.979439 7.14063C0.979439 6.58834 1.42715 6.14063 1.97944 6.14063H35.83L31.6689 1.68232Z"
                                        fill="#4080FF" />
                                </svg></i><span class="home__features__list__nav__item__name">Conversation</span>
                        </li>
                        <li class="home__features__list__nav__item" data-index="7">
                            <i class="home__features__list__nav__item__icon"><svg width="39" height="14"
                                    viewBox="0 0 39 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M31.6689 1.68232C31.2921 1.27857 31.3139 0.645782 31.7177 0.268948C32.1214 -0.107885 32.7542 -0.0860652 33.1311 0.317685L38.7311 6.31769C38.9275 6.52812 39.0163 6.80215 38.9976 7.07011C38.9992 7.09341 39 7.11692 39 7.14063C39 7.56265 38.7386 7.92361 38.3688 8.07041L33.1311 13.6823C32.7542 14.0861 32.1214 14.1079 31.7177 13.7311C31.3139 13.3542 31.2921 12.7214 31.6689 12.3177L35.5675 8.14063H1.97944C1.42715 8.14063 0.979439 7.69291 0.979439 7.14063C0.979439 6.58834 1.42715 6.14063 1.97944 6.14063H35.83L31.6689 1.68232Z"
                                        fill="#4080FF" />
                                </svg></i><span class="home__features__list__nav__item__name">Project Template</span>
                        </li>
                    </ul>
                    <a class="link">More feature.</a>
                </div>
                <div class="home__features__preview">
                    <div class="home__features__preview__bg">
                        <img src="<?php echo THEME_URL . "/assets/images/svg/home/features-bg.svg" ?>"
                            alt="Features background" />
                    </div>
                    <div class="home__features__preview__bg is-right">
                        <img src="<?php echo THEME_URL . "/assets/images/svg/home/features-bg.svg" ?>"
                            alt="Features background" />
                    </div>
                    <div class="home__features__preview__swiper swiper-container">
                        <div class="home__features__preview__swiper__wrapper swiper-wrapper">
                            <div class="home__features__preview__swiper__slide swiper-slide">
                                <img class="home__features__preview__swiper__slide__img"
                                    src="<?php echo THEME_URL . "/assets/images/home/work-spaces.jpg" ?>" /><span
                                    class="home__features__preview__swiper__slide__value">for a Company or Business
                                    Unit. Easily to switch between
                                    workspaces.</span>
                            </div>
                            <div class="home__features__preview__swiper__slide swiper-slide">
                                <img class="home__features__preview__swiper__slide__img"
                                    src="<?php echo THEME_URL . "/assets/images/home/view-grid.jpg" ?>" /><span
                                    class="home__features__preview__swiper__slide__value">for a Company or Business
                                    Unit. Easily to switch between
                                    workspaces.</span>
                            </div>
                            <div class="home__features__preview__swiper__slide swiper-slide">
                                <img class="home__features__preview__swiper__slide__img"
                                    src="<?php echo THEME_URL . "/assets/images/home/view-timeline.jpg" ?>" /><span
                                    class="home__features__preview__swiper__slide__value">for a Company or Business
                                    Unit. Easily to switch between
                                    workspaces.</span>
                            </div>
                            <div class="home__features__preview__swiper__slide swiper-slide">
                                <img class="home__features__preview__swiper__slide__img"
                                    src="<?php echo THEME_URL . "/assets/images/home/view-board.jpg" ?>" /><span
                                    class="home__features__preview__swiper__slide__value">for a Company or Business
                                    Unit. Easily to switch between
                                    workspaces.</span>
                            </div>
                            <div class="home__features__preview__swiper__slide swiper-slide">
                                <img class="home__features__preview__swiper__slide__img"
                                    src="<?php echo THEME_URL . "/assets/images/home/view-timeline.jpg" ?>" /><span
                                    class="home__features__preview__swiper__slide__value">for a Company or Business
                                    Unit. Easily to switch between
                                    workspaces.</span>
                            </div>
                            <div class="home__features__preview__swiper__slide swiper-slide">
                                <img class="home__features__preview__swiper__slide__img"
                                    src="<?php echo THEME_URL . "/assets/images/home/view-calendar.jpg" ?>" /><span
                                    class="home__features__preview__swiper__slide__value">for a Company or Business
                                    Unit. Easily to switch between
                                    workspaces.</span>
                            </div>
                            <div class="home__features__preview__swiper__slide swiper-slide">
                                <img class="home__features__preview__swiper__slide__img"
                                    src="<?php echo THEME_URL . "/assets/images/home/view-timeline.jpg" ?>" /><span
                                    class="home__features__preview__swiper__slide__value">for a Company or Business
                                    Unit. Easily to switch between
                                    workspaces.</span>
                            </div>
                            <div class="home__features__preview__swiper__slide swiper-slide">
                                <img class="home__features__preview__swiper__slide__img"
                                    src="<?php echo THEME_URL . "/assets/images/home/view-timeline.jpg" ?>" /><span
                                    class="home__features__preview__swiper__slide__value">for a Company or Business
                                    Unit. Easily to switch between
                                    workspaces.</span>
                            </div>
                        </div>
                    </div>
                    <div class="home__features__preview__indicators swiper-indicator"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="home__case-studies">
        <div class="home__case-studies__bg">
            <img src="<?php echo THEME_URL . "/assets/images/svg/home/case-studies-bg.svg" ?>"
                alt="Case studies background" />
        </div>
        <div class="container">
            <h4 class="home__case-studies__section section">Case studies</h4>
            <h6 class="home__heading">Make Your Life Easier</h6>
            <p class="home__desc">
                Get started fast with suitable templates for every team.
            </p>
            <div class="home__case-studies__swiper swiper-container">
                <div class="home__case-studies__swiper__wrapper swiper-wrapper">
                    <div class="home__case-studies__swiper__slide swiper-slide">
                        <i class="home__case-studies__swiper__slide__prev"><svg class="colored" width="48" height="40"
                                viewBox="0 0 48 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M31.2527 16.7473C29.4563 18.5437 29.4563 21.4563 31.2527 23.2527L45.2686 37.2686C46.2766 38.2766 48 37.5627 48 36.1373V3.86274C48 2.4373 46.2766 1.72343 45.2686 2.73137L31.2527 16.7473Z"
                                    fill="#9FBFFF" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M3.25269 16.7473C1.45628 18.5437 1.45628 21.4563 3.25269 23.2527L17.2686 37.2686C18.2766 38.2766 20 37.5627 20 36.1373L20 3.86274C20 2.4373 18.2766 1.72343 17.2686 2.73137L3.25269 16.7473Z"
                                    fill="#EBF2FF" />
                            </svg>
                        </i>
                        <i class="home__case-studies__swiper__slide__next"><svg class="colored" width="44" height="36"
                                viewBox="0 0 44 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M16.7473 21.2527C18.5437 19.4563 18.5437 16.5437 16.7473 14.7473L2.73137 0.731369C1.72342 -0.276577 0 0.437294 0 1.86274L0 34.1373C0 35.5627 1.72343 36.2766 2.73137 35.2686L16.7473 21.2527Z"
                                    fill="#9FBFFF" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M41.7473 21.2527C43.5437 19.4563 43.5437 16.5437 41.7473 14.7473L27.7314 0.731369C26.7234 -0.276577 25 0.437294 25 1.86274L25 34.1373C25 35.5627 26.7234 36.2766 27.7314 35.2686L41.7473 21.2527Z"
                                    fill="#EBF2FF" />
                            </svg>
                        </i>
                        <img class="home__case-studies__swiper__slide__avatar"
                            src="<?php echo THEME_URL . "/assets/images/home/case-studies-avatar.png" ?>" /><span
                            class="home__case-studies__swiper__slide__name">Nannie Figueroa</span><span
                            class="home__case-studies__swiper__slide__company">ITC Group</span><span
                            class="home__case-studies__swiper__slide__title">Managing a Growing Startup with
                            UpDiagram</span>
                        <p class="home__case-studies__swiper__slide__desc">
                            A successful marketing plan relies heavily on the
                            pulling-power of advertising copy. Writing result-oriented ad
                            copy is difficult, as it
                        </p>
                    </div>
                    <div class="home__case-studies__swiper__slide swiper-slide">
                        <i class="home__case-studies__swiper__slide__prev"><svg class="colored" width="48" height="40"
                                viewBox="0 0 48 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M31.2527 16.7473C29.4563 18.5437 29.4563 21.4563 31.2527 23.2527L45.2686 37.2686C46.2766 38.2766 48 37.5627 48 36.1373V3.86274C48 2.4373 46.2766 1.72343 45.2686 2.73137L31.2527 16.7473Z"
                                    fill="#9FBFFF" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M3.25269 16.7473C1.45628 18.5437 1.45628 21.4563 3.25269 23.2527L17.2686 37.2686C18.2766 38.2766 20 37.5627 20 36.1373L20 3.86274C20 2.4373 18.2766 1.72343 17.2686 2.73137L3.25269 16.7473Z"
                                    fill="#EBF2FF" />
                            </svg>
                        </i>
                        <i class="home__case-studies__swiper__slide__next"><svg class="colored" width="44" height="36"
                                viewBox="0 0 44 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M16.7473 21.2527C18.5437 19.4563 18.5437 16.5437 16.7473 14.7473L2.73137 0.731369C1.72342 -0.276577 0 0.437294 0 1.86274L0 34.1373C0 35.5627 1.72343 36.2766 2.73137 35.2686L16.7473 21.2527Z"
                                    fill="#9FBFFF" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M41.7473 21.2527C43.5437 19.4563 43.5437 16.5437 41.7473 14.7473L27.7314 0.731369C26.7234 -0.276577 25 0.437294 25 1.86274L25 34.1373C25 35.5627 26.7234 36.2766 27.7314 35.2686L41.7473 21.2527Z"
                                    fill="#EBF2FF" />
                            </svg>
                        </i>
                        <img class="home__case-studies__swiper__slide__avatar"
                            src="<?php echo THEME_URL . "/assets/images/home/case-studies-avatar.png" ?>" /><span
                            class="home__case-studies__swiper__slide__name">Nannie Figueroa</span><span
                            class="home__case-studies__swiper__slide__company">ITC Group</span><span
                            class="home__case-studies__swiper__slide__title">Managing a Growing Startup with
                            UpDiagram</span>
                        <p class="home__case-studies__swiper__slide__desc">
                            A successful marketing plan relies heavily on the
                            pulling-power of advertising copy. Writing result-oriented ad
                            copy is difficult, as it
                        </p>
                    </div>
                    <div class="home__case-studies__swiper__slide swiper-slide">
                        <i class="home__case-studies__swiper__slide__prev"><svg class="colored" width="48" height="40"
                                viewBox="0 0 48 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M31.2527 16.7473C29.4563 18.5437 29.4563 21.4563 31.2527 23.2527L45.2686 37.2686C46.2766 38.2766 48 37.5627 48 36.1373V3.86274C48 2.4373 46.2766 1.72343 45.2686 2.73137L31.2527 16.7473Z"
                                    fill="#9FBFFF" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M3.25269 16.7473C1.45628 18.5437 1.45628 21.4563 3.25269 23.2527L17.2686 37.2686C18.2766 38.2766 20 37.5627 20 36.1373L20 3.86274C20 2.4373 18.2766 1.72343 17.2686 2.73137L3.25269 16.7473Z"
                                    fill="#EBF2FF" />
                            </svg>
                        </i>
                        <i class="home__case-studies__swiper__slide__next"><svg class="colored" width="44" height="36"
                                viewBox="0 0 44 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M16.7473 21.2527C18.5437 19.4563 18.5437 16.5437 16.7473 14.7473L2.73137 0.731369C1.72342 -0.276577 0 0.437294 0 1.86274L0 34.1373C0 35.5627 1.72343 36.2766 2.73137 35.2686L16.7473 21.2527Z"
                                    fill="#9FBFFF" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M41.7473 21.2527C43.5437 19.4563 43.5437 16.5437 41.7473 14.7473L27.7314 0.731369C26.7234 -0.276577 25 0.437294 25 1.86274L25 34.1373C25 35.5627 26.7234 36.2766 27.7314 35.2686L41.7473 21.2527Z"
                                    fill="#EBF2FF" />
                            </svg>
                        </i>
                        <img class="home__case-studies__swiper__slide__avatar"
                            src="<?php echo THEME_URL . "/assets/images/home/case-studies-avatar.png" ?>" /><span
                            class="home__case-studies__swiper__slide__name">Nannie Figueroa</span><span
                            class="home__case-studies__swiper__slide__company">ITC Group</span><span
                            class="home__case-studies__swiper__slide__title">Managing a Growing Startup with
                            UpDiagram</span>
                        <p class="home__case-studies__swiper__slide__desc">
                            A successful marketing plan relies heavily on the
                            pulling-power of advertising copy. Writing result-oriented ad
                            copy is difficult, as it
                        </p>
                    </div>
                    <div class="home__case-studies__swiper__slide swiper-slide">
                        <i class="home__case-studies__swiper__slide__prev"><svg class="colored" width="48" height="40"
                                viewBox="0 0 48 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M31.2527 16.7473C29.4563 18.5437 29.4563 21.4563 31.2527 23.2527L45.2686 37.2686C46.2766 38.2766 48 37.5627 48 36.1373V3.86274C48 2.4373 46.2766 1.72343 45.2686 2.73137L31.2527 16.7473Z"
                                    fill="#9FBFFF" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M3.25269 16.7473C1.45628 18.5437 1.45628 21.4563 3.25269 23.2527L17.2686 37.2686C18.2766 38.2766 20 37.5627 20 36.1373L20 3.86274C20 2.4373 18.2766 1.72343 17.2686 2.73137L3.25269 16.7473Z"
                                    fill="#EBF2FF" />
                            </svg>
                        </i>
                        <i class="home__case-studies__swiper__slide__next"><svg class="colored" width="44" height="36"
                                viewBox="0 0 44 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M16.7473 21.2527C18.5437 19.4563 18.5437 16.5437 16.7473 14.7473L2.73137 0.731369C1.72342 -0.276577 0 0.437294 0 1.86274L0 34.1373C0 35.5627 1.72343 36.2766 2.73137 35.2686L16.7473 21.2527Z"
                                    fill="#9FBFFF" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M41.7473 21.2527C43.5437 19.4563 43.5437 16.5437 41.7473 14.7473L27.7314 0.731369C26.7234 -0.276577 25 0.437294 25 1.86274L25 34.1373C25 35.5627 26.7234 36.2766 27.7314 35.2686L41.7473 21.2527Z"
                                    fill="#EBF2FF" />
                            </svg>
                        </i>
                        <img class="home__case-studies__swiper__slide__avatar"
                            src="<?php echo THEME_URL . "/assets/images/home/case-studies-avatar.png" ?>" /><span
                            class="home__case-studies__swiper__slide__name">Nannie Figueroa</span><span
                            class="home__case-studies__swiper__slide__company">ITC Group</span><span
                            class="home__case-studies__swiper__slide__title">Managing a Growing Startup with
                            UpDiagram</span>
                        <p class="home__case-studies__swiper__slide__desc">
                            A successful marketing plan relies heavily on the
                            pulling-power of advertising copy. Writing result-oriented ad
                            copy is difficult, as it
                        </p>
                    </div>
                    <div class="home__case-studies__swiper__slide swiper-slide">
                        <i class="home__case-studies__swiper__slide__prev"><svg class="colored" width="48" height="40"
                                viewBox="0 0 48 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M31.2527 16.7473C29.4563 18.5437 29.4563 21.4563 31.2527 23.2527L45.2686 37.2686C46.2766 38.2766 48 37.5627 48 36.1373V3.86274C48 2.4373 46.2766 1.72343 45.2686 2.73137L31.2527 16.7473Z"
                                    fill="#9FBFFF" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M3.25269 16.7473C1.45628 18.5437 1.45628 21.4563 3.25269 23.2527L17.2686 37.2686C18.2766 38.2766 20 37.5627 20 36.1373L20 3.86274C20 2.4373 18.2766 1.72343 17.2686 2.73137L3.25269 16.7473Z"
                                    fill="#EBF2FF" />
                            </svg>
                        </i>
                        <i class="home__case-studies__swiper__slide__next"><svg class="colored" width="44" height="36"
                                viewBox="0 0 44 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M16.7473 21.2527C18.5437 19.4563 18.5437 16.5437 16.7473 14.7473L2.73137 0.731369C1.72342 -0.276577 0 0.437294 0 1.86274L0 34.1373C0 35.5627 1.72343 36.2766 2.73137 35.2686L16.7473 21.2527Z"
                                    fill="#9FBFFF" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M41.7473 21.2527C43.5437 19.4563 43.5437 16.5437 41.7473 14.7473L27.7314 0.731369C26.7234 -0.276577 25 0.437294 25 1.86274L25 34.1373C25 35.5627 26.7234 36.2766 27.7314 35.2686L41.7473 21.2527Z"
                                    fill="#EBF2FF" />
                            </svg>
                        </i>
                        <img class="home__case-studies__swiper__slide__avatar"
                            src="<?php echo THEME_URL . "/assets/images/home/case-studies-avatar.png" ?>" /><span
                            class="home__case-studies__swiper__slide__name">Nannie Figueroa</span><span
                            class="home__case-studies__swiper__slide__company">ITC Group</span><span
                            class="home__case-studies__swiper__slide__title">Managing a Growing Startup with
                            UpDiagram</span>
                        <p class="home__case-studies__swiper__slide__desc">
                            A successful marketing plan relies heavily on the
                            pulling-power of advertising copy. Writing result-oriented ad
                            copy is difficult, as it
                        </p>
                    </div>
                    <div class="home__case-studies__swiper__slide swiper-slide">
                        <i class="home__case-studies__swiper__slide__prev"><svg class="colored" width="48" height="40"
                                viewBox="0 0 48 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M31.2527 16.7473C29.4563 18.5437 29.4563 21.4563 31.2527 23.2527L45.2686 37.2686C46.2766 38.2766 48 37.5627 48 36.1373V3.86274C48 2.4373 46.2766 1.72343 45.2686 2.73137L31.2527 16.7473Z"
                                    fill="#9FBFFF" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M3.25269 16.7473C1.45628 18.5437 1.45628 21.4563 3.25269 23.2527L17.2686 37.2686C18.2766 38.2766 20 37.5627 20 36.1373L20 3.86274C20 2.4373 18.2766 1.72343 17.2686 2.73137L3.25269 16.7473Z"
                                    fill="#EBF2FF" />
                            </svg>
                        </i>
                        <i class="home__case-studies__swiper__slide__next"><svg class="colored" width="44" height="36"
                                viewBox="0 0 44 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M16.7473 21.2527C18.5437 19.4563 18.5437 16.5437 16.7473 14.7473L2.73137 0.731369C1.72342 -0.276577 0 0.437294 0 1.86274L0 34.1373C0 35.5627 1.72343 36.2766 2.73137 35.2686L16.7473 21.2527Z"
                                    fill="#9FBFFF" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M41.7473 21.2527C43.5437 19.4563 43.5437 16.5437 41.7473 14.7473L27.7314 0.731369C26.7234 -0.276577 25 0.437294 25 1.86274L25 34.1373C25 35.5627 26.7234 36.2766 27.7314 35.2686L41.7473 21.2527Z"
                                    fill="#EBF2FF" />
                            </svg>
                        </i>
                        <img class="home__case-studies__swiper__slide__avatar"
                            src="<?php echo THEME_URL . "/assets/images/home/case-studies-avatar.png" ?>" /><span
                            class="home__case-studies__swiper__slide__name">Nannie Figueroa</span><span
                            class="home__case-studies__swiper__slide__company">ITC Group</span><span
                            class="home__case-studies__swiper__slide__title">Managing a Growing Startup with
                            UpDiagram</span>
                        <p class="home__case-studies__swiper__slide__desc">
                            A successful marketing plan relies heavily on the
                            pulling-power of advertising copy. Writing result-oriented ad
                            copy is difficult, as it
                        </p>
                    </div>
                </div>
            </div>
            <div class="home__case-studies__indicators swiper-indicator"></div>
            <div class="home__case-studies__view-all">
                <a class="link">See all case studies.</a>
            </div>
        </div>
    </section>
    <section class="home__integration">
        <div class="container">
            <h4 class="home__integration__section section">Integration</h4>
            <div class="home__integration__container">
                <div class="home__integration__content">
                    <h6 class="home__heading">
                        UpDiagram integrates with the tools you love
                    </h6>
                    <p class="home__desc">
                        UpDiagram makes it easy to connect with your email, files,
                        tickets, chat, calendar, and source controls with 30+ ready
                        integrations and robust API access
                    </p>
                    <a class="link" href="<?php echo home_url() . "/integration" ?>">See all integrations</a>
                </div>
                <div class="home__integration__bg">
                    <img src="<?php echo THEME_URL . "/assets/images/home/integration-bg.png" ?>" alt="Integration" />
                </div>
            </div>
        </div>
    </section>
    <section class="apps">
        <div class="apps__bg">
            <img src="<?php echo THEME_URL . "/assets/images/svg/apps-bg.svg" ?>" alt="Apps" />
        </div>
        <div class="container">
            <div class="apps__images">
                <img src="<?php echo THEME_URL . "/assets/images/apps-mobile.png" ?>" alt="Apps" />
            </div>
            <div class="apps__content">
                <h4 class="apps__content__section section">Apps</h4>
                <p class="apps__content__desc">
                    Download UpDiagram mobile Apps <br />
                    to manage everything from everywhere.
                </p>
                <div class="apps__content__download">
                    <a class="apps__content__download__item" href="" target="_blank" rel="noopener noreferrer"><img
                            src="<?php echo THEME_URL . "/assets/images/svg/app-store.svg" ?>" alt="App Store" /></a><a
                        class="apps__content__download__item" href="" target="_blank" rel="noopener noreferrer"><img
                            src="<?php echo THEME_URL . "/assets/images/svg/google-play.svg" ?>"
                            alt="Google Play" /></a>
                </div>
            </div>
            <div class="apps__get-start">
                <h4 class="apps__get-start__title">
                    Let&nbsp;inspire your&nbsp;team to&nbsp;take&nbsp;action
                </h4>
                <div class="apps__get-start__actions">
                    <input class="apps__get-start__actions__input input" placeholder="Enter your Email address" />
                    <button class="apps__get-start__actions__btn btn--no-shadow btn">
                        Get started
                    </button>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include get_template_directory()."/includes/footer.php"; ?>