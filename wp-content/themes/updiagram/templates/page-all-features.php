<?php

/*
    Template Name: Page All Features
*/

include get_template_directory() . "/includes/header.php";
?>

<div class="features">  
    <section class="features__list">        
        <div class="container">
            <div class="search features__list__search"><i class="search__icon-search"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.8 11.7693C3.92 11.7693 1.6 9.49388 1.6 6.66926C1.6 3.84462 3.92 1.56926 6.8 1.56926C9.68 1.56926 12 3.84462 12 6.66926C12 9.49388 9.68 11.7693 6.8 11.7693ZM15.44 12.3969L12.8 9.80772C13.28 8.86615 13.6 7.76769 13.6 6.66926C13.6 2.98157 10.56 0 6.8 0C3.04 0 0 2.98157 0 6.66926C0 10.357 3.04 13.3385 6.8 13.3385C7.92 13.3385 9.04 13.0246 10 12.5539L12.64 15.1431C13.44 15.9277 14.64 15.9277 15.44 15.1431C16.16 14.3585 16.16 13.1816 15.44 12.3969Z" fill="#AEAEAE" />
                    </svg></i><i class="search__icon-remove"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 6.41L17.59 5L12 10.59L6.41 5L5 6.41L10.59 12L5 17.59L6.41 19L12 13.41L17.59 19L19 17.59L13.41 12L19 6.41Z" fill="black" />
                    </svg></i>
                <input class="search__input" placeholder="Search features" />
            </div>
        </div>
    </section>
    <section class="apps">
        <div class="apps__bg"><img src="<?php echo THEME_URL . '/assets/images/svg/apps-bg.svg'?>" alt="Apps" /></div>
        <div class="container">
            <div class="apps__images"><img src="<?php echo THEME_URL . '/assets/images/apps-mobile.png' ?>" alt="Apps" /></div>
            <div class="apps__content">
                <h4 class="apps__content__section section">Apps
                </h4>
                <p class="apps__content__desc">Download UpDiagram mobile Apps <br /> to manage everything from everywhere.</p>
                <div class="apps__content__download"><a class="apps__content__download__item" href="" target="_blank" rel="noopener noreferrer"><img src="<?php echo THEME_URL . '/assets/images/svg/app-store.svg'?>" alt="App Store" /></a><a class="apps__content__download__item" href="" target="_blank" rel="noopener noreferrer"><img src="<?php echo THEME_URL . '/assets/images/svg/google-play.svg'?>" alt="Google Play" /></a></div>
            </div>
            <div class="apps__get-start">
                <h4 class="apps__get-start__title">Let&nbsp;inspire your&nbsp;team to&nbsp;take&nbsp;action</h4>
                <div class="apps__get-start__actions">
                    <input class="apps__get-start__actions__input input" placeholder="Enter your Email address" />
                    <button class="apps__get-start__actions__btn btn--no-shadow btn">Get started
                    </button>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include get_template_directory() . "/includes/footer.php"; ?>