<?php
/*
 Template Name: Page Single Case Study
 */
include get_template_directory()."/includes/header.php";?>
<?php global $wp;?>

<div class="blog-detail">
    <div class="blog-detail__share" id="blog-detail__share">
        <a class="blog-detail__share__item" style="z-index: 1;" target="_blank" title="Facebook Sharing"
            href="https://www.facebook.com/sharer/sharer.php?u=<?php echo home_url($wp->request); ?>&t=<?php the_title(); ?>"
            onclick="openShareTab(this.href)">
            <svg class="colored" width="32" height="33" viewBox="0 0 32 33" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M16 32.7881C24.8366 32.7881 32 25.6246 32 16.7881C32 7.95153 24.8366 0.788086 16 0.788086C7.16344 0.788086 0 7.95153 0 16.7881C0 25.6246 7.16344 32.7881 16 32.7881ZM17.1685 17.4149H20.0235L20.4015 13.7424H17.1688V11.5791C17.1688 10.7676 17.705 10.5771 18.0864 10.5771H20.4112V7.00908L17.207 6.99568C13.651 6.99568 12.843 9.6593 12.843 11.3603V13.739H10.7857V17.4149H12.843V27.8743H17.1685V17.4149Z"
                    fill="#79A6FF" />
            </svg>
        </a>
        <a class="blog-detail__share__item" style="z-index: 1;" target="_blank" title="LinkedIn Sharing"
            href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo home_url($wp->request); ?>&t=<?php the_title(); ?>"
            onclick="openShareTab(this.href)">
            <svg class="colored" width="32" height="32" viewBox="0 0 32 32" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M16 32C24.8366 32 32 24.8366 32 16C32 7.16344 24.8366 0 16 0C7.16344 0 0 7.16344 0 16C0 24.8366 7.16344 32 16 32ZM7.71987 8.82303C7.71987 7.69472 8.5758 6.83594 9.88408 6.83594C11.1926 6.83594 11.9967 7.69472 12.0221 8.82303C12.0221 9.92738 11.1926 10.811 9.8587 10.811H9.83388C8.55098 10.811 7.71987 9.92738 7.71987 8.82303ZM25.5595 23.8833V17.2869C25.5595 13.7545 23.6731 12.1105 21.157 12.1105C19.1248 12.1105 18.2184 13.2285 17.7102 14.0106V12.3806H13.8852C13.9365 13.4596 13.8852 23.883 13.8852 23.883H17.7099V17.4588C17.7099 17.114 17.7358 16.7726 17.8365 16.5268C18.1137 15.8388 18.7415 15.1284 19.7982 15.1284C21.1829 15.1284 21.7351 16.1836 21.7351 17.7289V23.8833H25.5595ZM17.7102 14.0106V14.0482H17.6848C17.6884 14.0417 17.6932 14.0351 17.698 14.0285C17.7004 14.0251 17.7029 14.0217 17.7052 14.0183C17.707 14.0157 17.7086 14.0132 17.7102 14.0106ZM7.94657 23.8844H11.7699V12.3817H7.94657V23.8844Z"
                    fill="#79A6FF" />
            </svg>
        </a>
        <a class="blog-detail__share__item" style="z-index: 1;" target="_blank" title="Twitter Sharing"
            href="https://twitter.com/share?url=<?php echo home_url($wp->request); ?>&text=<?php the_title(); ?>"
            onclick="openShareTab(this.href)">
            <svg class="colored" width="32" height="33" viewBox="0 0 32 33" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M16 32.7881C24.8366 32.7881 32 25.6246 32 16.7881C32 7.95153 24.8366 0.788086 16 0.788086C7.16344 0.788086 0 7.95153 0 16.7881C0 25.6246 7.16344 32.7881 16 32.7881ZM23.6028 12.8884C24.3764 12.7966 25.1139 12.5909 25.7996 12.2869C25.287 13.0538 24.6388 13.7272 23.8909 14.2663C23.8983 14.43 23.902 14.5951 23.902 14.7608C23.902 19.8151 20.0551 25.6426 13.0205 25.6426C10.8609 25.6426 8.85009 25.0098 7.15848 23.9242C7.4571 23.9599 7.76228 23.9778 8.07032 23.9778C9.86261 23.9778 11.5114 23.3666 12.8206 22.3407C11.1466 22.3096 9.73455 21.2038 9.24797 19.6848C9.48127 19.7293 9.72057 19.753 9.96757 19.753C10.3158 19.753 10.6544 19.7065 10.9749 19.6186C9.22572 19.2675 7.90689 17.7219 7.90689 15.8689C7.90689 15.8529 7.90689 15.8367 7.90717 15.8204C8.42256 16.1076 9.01267 16.2796 9.63928 16.2993C8.61365 15.6136 7.93797 14.4425 7.93797 13.116C7.93797 12.4152 8.12679 11.7578 8.45593 11.1931C10.3423 13.5076 13.1606 15.0301 16.339 15.1895C16.2734 14.9094 16.2394 14.6177 16.2394 14.3179C16.2394 12.2062 17.9522 10.4934 20.0639 10.4934C21.1645 10.4934 22.1585 10.9578 22.8562 11.7008C23.7269 11.5293 24.5458 11.2113 25.2848 10.773C24.9987 11.6665 24.3926 12.4152 23.6028 12.8884Z"
                    fill="#79A6FF" />
            </svg>
        </a>
        <a class="blog-detail__share__item" style="z-index: 1;" target="_blank" title="Mail Sharing"
            href="mailto:?subject=I wanted you to see this post&amp;&body=<?php echo home_url($wp->request); ?>"
            onclick="openShareTab(this.href)">
            <svg class="colored" width="32" height="32" viewBox="0 0 32 32" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M16 0C7.1638 0 0.000488281 7.16352 0.000488281 15.9997C0.000488281 24.8356 7.1638 31.9997 16 31.9997C24.8361 31.9997 32 24.8356 32 15.9997C32 7.16352 24.8361 0 16 0ZM16.0003 5.61984L25.4683 11.5238H6.53222L16.0003 5.61984ZM25.5853 20.9518H25.5863V11.8995C25.5863 11.7991 25.5761 11.702 25.5594 11.6063L16.5132 17.2471C16.5069 17.2511 16.5004 17.2543 16.4938 17.2575C16.4888 17.26 16.4838 17.2624 16.4789 17.2652C16.4669 17.2718 16.4548 17.2782 16.4426 17.2843C16.3784 17.3172 16.3128 17.3438 16.2456 17.3612C16.2418 17.3622 16.238 17.3629 16.2342 17.3636C16.231 17.3642 16.2279 17.3648 16.2248 17.3655C16.151 17.3833 16.0762 17.3938 16.0016 17.3938H16.0005H16C15.9253 17.3938 15.8505 17.3829 15.7767 17.3655C15.7738 17.3649 15.771 17.3644 15.7681 17.3638C15.7641 17.3631 15.76 17.3623 15.7559 17.3612C15.6886 17.3438 15.6228 17.3172 15.5589 17.2843C15.5467 17.2782 15.5346 17.2718 15.5226 17.2652C15.5178 17.2625 15.5129 17.2601 15.508 17.2577C15.5013 17.2544 15.4947 17.2511 15.4883 17.2471L6.44209 11.6063C6.42545 11.702 6.41521 11.7994 6.41521 11.8995V20.9518C6.41521 21.8987 7.18257 22.6661 8.12955 22.6661H23.871C24.8179 22.6661 25.5853 21.8988 25.5853 20.9518Z"
                    fill="#79A6FF" />
            </svg>
        </a>
    </div>
    <section class="blog-detail__hero-banner">
        <div class="container">
            <img class="blog-detail__hero-banner__bg"
                src="<?php echo get_the_post_thumbnail_url(get_the_ID()) ? get_the_post_thumbnail_url(get_the_ID()) : THEME_URL . "/assets/images/blog-detail/blog-detail-hero-banner.png" ?>"
                alt="<?php the_title(); ?>" />
        </div>
    </section>
    <section class="blog-detail__content" id="blog-detail-content">
        <div class="container">
            <a class="blog-detail__content__nav" href="/case-studies">
                <i class="blog-detail__content__nav__icon">
                    <svg width="32" height="18" viewBox="0 0 32 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M31.6764 15.7397L27.095 10.2667C26.4578 9.50514 26.4578 8.36532 27.095 7.60376L31.5604 2.26915C32.5076 1.13731 31.2372 -0.555387 29.9838 0.178646C29.7977 0.2877 29.622 0.434434 29.4649 0.621747L26.2721 4.43647L23.5891 7.6418C22.9518 8.40337 22.9518 9.54318 23.5891 10.3048L26.2721 13.5101L29.4649 17.3248C29.7563 17.673 30.1119 17.8806 30.4805 17.9668C31.6715 18.2458 32.4817 16.702 31.6764 15.7397Z"
                            fill="#AEAEAE" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M20.1207 15.7397L15.5394 10.2667C14.9021 9.50514 14.9021 8.36532 15.5394 7.60376L20.0047 2.26915C20.952 1.13731 19.6816 -0.555387 18.4281 0.178646C18.242 0.2877 18.0663 0.434434 17.9093 0.621747L14.7164 4.43647L12.0334 7.6418C11.3961 8.40337 11.3961 9.54318 12.0334 10.3048L14.7164 13.5101L17.9093 17.3248C18.2006 17.673 18.5562 17.8806 18.9249 17.9668C20.1159 18.2458 20.9261 16.702 20.1207 15.7397Z"
                            fill="#AEAEAE" fill-opacity="0.7" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M8.56503 15.7397L3.98371 10.2667C3.34645 9.50514 3.34645 8.36532 3.98371 7.60376L8.44904 2.26915C9.3963 1.13731 8.12592 -0.555387 6.87245 0.178646C6.68638 0.2877 6.51067 0.434434 6.3536 0.621747L3.16072 4.43647L0.47773 7.6418C-0.159533 8.40337 -0.159533 9.54318 0.47773 10.3048L3.16072 13.5101L6.3536 17.3248C6.64496 17.673 7.00052 17.8806 7.36921 17.9668C8.5602 18.2458 9.37041 16.702 8.56503 15.7397Z"
                            fill="#AEAEAE" fill-opacity="0.4" />
                    </svg>
                </i>
                <span class="blog-detail__content__nav__text">Back to Blogs</span>
            </a>
            <div class="blog-detail__content__main">
                <div class="blog-detail__content__main__header">
                    <span class="blog-detail__content__main__header__category">
                        <?php echo get_case_study_tags(null); ?>
                    </span>
                    <span class="blog-detail__content__main__header__duration">
                        <i class="blog-detail__content__main__header__duration__icon">
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
                <div class="blog-detail__content__main__body">
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                </div>
            </div><a class="blog-detail__content__nav" href="/case-studies">
                <i class="blog-detail__content__nav__icon">
                    <svg width="32" height="18" viewBox="0 0 32 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M31.6764 15.7397L27.095 10.2667C26.4578 9.50514 26.4578 8.36532 27.095 7.60376L31.5604 2.26915C32.5076 1.13731 31.2372 -0.555387 29.9838 0.178646C29.7977 0.2877 29.622 0.434434 29.4649 0.621747L26.2721 4.43647L23.5891 7.6418C22.9518 8.40337 22.9518 9.54318 23.5891 10.3048L26.2721 13.5101L29.4649 17.3248C29.7563 17.673 30.1119 17.8806 30.4805 17.9668C31.6715 18.2458 32.4817 16.702 31.6764 15.7397Z"
                            fill="#AEAEAE" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M20.1207 15.7397L15.5394 10.2667C14.9021 9.50514 14.9021 8.36532 15.5394 7.60376L20.0047 2.26915C20.952 1.13731 19.6816 -0.555387 18.4281 0.178646C18.242 0.2877 18.0663 0.434434 17.9093 0.621747L14.7164 4.43647L12.0334 7.6418C11.3961 8.40337 11.3961 9.54318 12.0334 10.3048L14.7164 13.5101L17.9093 17.3248C18.2006 17.673 18.5562 17.8806 18.9249 17.9668C20.1159 18.2458 20.9261 16.702 20.1207 15.7397Z"
                            fill="#AEAEAE" fill-opacity="0.7" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M8.56503 15.7397L3.98371 10.2667C3.34645 9.50514 3.34645 8.36532 3.98371 7.60376L8.44904 2.26915C9.3963 1.13731 8.12592 -0.555387 6.87245 0.178646C6.68638 0.2877 6.51067 0.434434 6.3536 0.621747L3.16072 4.43647L0.47773 7.6418C-0.159533 8.40337 -0.159533 9.54318 0.47773 10.3048L3.16072 13.5101L6.3536 17.3248C6.64496 17.673 7.00052 17.8806 7.36921 17.9668C8.5602 18.2458 9.37041 16.702 8.56503 15.7397Z"
                            fill="#AEAEAE" fill-opacity="0.4" />
                    </svg>
                </i>
                <span class="blog-detail__content__nav__text">Back to Blogs</span>
            </a>
            <div class="blog-detail__content__share">
                <h3 class="blog-detail__content__share__title">Share this on:</h3>
                <a class="blog-detail__content__share__item" style="z-index: 1;" target="_blank"
                    title="Facebook Sharing"
                    href="https://www.facebook.com/sharer/sharer.php?u=<?php echo home_url($wp->request); ?>&t=<?php the_title(); ?>"
                    onclick="openShareTab(this.href)">
                    <svg class="colored" width="32" height="33" viewBox="0 0 32 33" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M16 32.7881C24.8366 32.7881 32 25.6246 32 16.7881C32 7.95153 24.8366 0.788086 16 0.788086C7.16344 0.788086 0 7.95153 0 16.7881C0 25.6246 7.16344 32.7881 16 32.7881ZM17.1685 17.4149H20.0235L20.4015 13.7424H17.1688V11.5791C17.1688 10.7676 17.705 10.5771 18.0864 10.5771H20.4112V7.00908L17.207 6.99568C13.651 6.99568 12.843 9.6593 12.843 11.3603V13.739H10.7857V17.4149H12.843V27.8743H17.1685V17.4149Z"
                            fill="#79A6FF" />
                    </svg>
                </a>
                <a class="blog-detail__content__share__item" style="z-index: 1;" target="_blank"
                    title="LinkedIn Sharing"
                    href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo home_url($wp->request); ?>&t=<?php the_title(); ?>"
                    onclick="openShareTab(this.href)">
                    <svg class="colored" width="32" height="32" viewBox="0 0 32 32" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M16 32C24.8366 32 32 24.8366 32 16C32 7.16344 24.8366 0 16 0C7.16344 0 0 7.16344 0 16C0 24.8366 7.16344 32 16 32ZM7.71987 8.82303C7.71987 7.69472 8.5758 6.83594 9.88408 6.83594C11.1926 6.83594 11.9967 7.69472 12.0221 8.82303C12.0221 9.92738 11.1926 10.811 9.8587 10.811H9.83388C8.55098 10.811 7.71987 9.92738 7.71987 8.82303ZM25.5595 23.8833V17.2869C25.5595 13.7545 23.6731 12.1105 21.157 12.1105C19.1248 12.1105 18.2184 13.2285 17.7102 14.0106V12.3806H13.8852C13.9365 13.4596 13.8852 23.883 13.8852 23.883H17.7099V17.4588C17.7099 17.114 17.7358 16.7726 17.8365 16.5268C18.1137 15.8388 18.7415 15.1284 19.7982 15.1284C21.1829 15.1284 21.7351 16.1836 21.7351 17.7289V23.8833H25.5595ZM17.7102 14.0106V14.0482H17.6848C17.6884 14.0417 17.6932 14.0351 17.698 14.0285C17.7004 14.0251 17.7029 14.0217 17.7052 14.0183C17.707 14.0157 17.7086 14.0132 17.7102 14.0106ZM7.94657 23.8844H11.7699V12.3817H7.94657V23.8844Z"
                            fill="#79A6FF" />
                    </svg>
                </a>
                <a class="blog-detail__content__share__item" style="z-index: 1;" target="_blank" title="Twitter Sharing"
                    href="https://twitter.com/share?url=<?php echo home_url($wp->request); ?>&text=<?php the_title(); ?>"
                    onclick="openShareTab(this.href)">
                    <svg class="colored" width="32" height="33" viewBox="0 0 32 33" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M16 32.7881C24.8366 32.7881 32 25.6246 32 16.7881C32 7.95153 24.8366 0.788086 16 0.788086C7.16344 0.788086 0 7.95153 0 16.7881C0 25.6246 7.16344 32.7881 16 32.7881ZM23.6028 12.8884C24.3764 12.7966 25.1139 12.5909 25.7996 12.2869C25.287 13.0538 24.6388 13.7272 23.8909 14.2663C23.8983 14.43 23.902 14.5951 23.902 14.7608C23.902 19.8151 20.0551 25.6426 13.0205 25.6426C10.8609 25.6426 8.85009 25.0098 7.15848 23.9242C7.4571 23.9599 7.76228 23.9778 8.07032 23.9778C9.86261 23.9778 11.5114 23.3666 12.8206 22.3407C11.1466 22.3096 9.73455 21.2038 9.24797 19.6848C9.48127 19.7293 9.72057 19.753 9.96757 19.753C10.3158 19.753 10.6544 19.7065 10.9749 19.6186C9.22572 19.2675 7.90689 17.7219 7.90689 15.8689C7.90689 15.8529 7.90689 15.8367 7.90717 15.8204C8.42256 16.1076 9.01267 16.2796 9.63928 16.2993C8.61365 15.6136 7.93797 14.4425 7.93797 13.116C7.93797 12.4152 8.12679 11.7578 8.45593 11.1931C10.3423 13.5076 13.1606 15.0301 16.339 15.1895C16.2734 14.9094 16.2394 14.6177 16.2394 14.3179C16.2394 12.2062 17.9522 10.4934 20.0639 10.4934C21.1645 10.4934 22.1585 10.9578 22.8562 11.7008C23.7269 11.5293 24.5458 11.2113 25.2848 10.773C24.9987 11.6665 24.3926 12.4152 23.6028 12.8884Z"
                            fill="#79A6FF" />
                    </svg>
                </a>
                <a class="blog-detail__content__share__item" style="z-index: 1;" target="_blank" title="Mail Sharing"
                    href="mailto:?subject=I wanted you to see this post&amp;&body=<?php echo home_url($wp->request); ?>"
                    onclick="openShareTab(this.href)">
                    <svg class="colored" width="32" height="32" viewBox="0 0 32 32" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M16 0C7.1638 0 0.000488281 7.16352 0.000488281 15.9997C0.000488281 24.8356 7.1638 31.9997 16 31.9997C24.8361 31.9997 32 24.8356 32 15.9997C32 7.16352 24.8361 0 16 0ZM16.0003 5.61984L25.4683 11.5238H6.53222L16.0003 5.61984ZM25.5853 20.9518H25.5863V11.8995C25.5863 11.7991 25.5761 11.702 25.5594 11.6063L16.5132 17.2471C16.5069 17.2511 16.5004 17.2543 16.4938 17.2575C16.4888 17.26 16.4838 17.2624 16.4789 17.2652C16.4669 17.2718 16.4548 17.2782 16.4426 17.2843C16.3784 17.3172 16.3128 17.3438 16.2456 17.3612C16.2418 17.3622 16.238 17.3629 16.2342 17.3636C16.231 17.3642 16.2279 17.3648 16.2248 17.3655C16.151 17.3833 16.0762 17.3938 16.0016 17.3938H16.0005H16C15.9253 17.3938 15.8505 17.3829 15.7767 17.3655C15.7738 17.3649 15.771 17.3644 15.7681 17.3638C15.7641 17.3631 15.76 17.3623 15.7559 17.3612C15.6886 17.3438 15.6228 17.3172 15.5589 17.2843C15.5467 17.2782 15.5346 17.2718 15.5226 17.2652C15.5178 17.2625 15.5129 17.2601 15.508 17.2577C15.5013 17.2544 15.4947 17.2511 15.4883 17.2471L6.44209 11.6063C6.42545 11.702 6.41521 11.7994 6.41521 11.8995V20.9518C6.41521 21.8987 7.18257 22.6661 8.12955 22.6661H23.871C24.8179 22.6661 25.5853 21.8988 25.5853 20.9518Z"
                            fill="#79A6FF" />
                    </svg></a>
            </div>
        </div>
    </section>
    <section class="blog-detail__related">
        <div class="container">
            <h6 class="blog-detail__related__title">Related articles</h6>
            <div class="blog-detail__related__list">
                <?php get_related_posts_desc('cs-categories', 'case-study'); ?>
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

<style>
@media (min-width: 768px) {
    .take-action .container::before {
        background-image: url("<?php echo THEME_URL . "/assets/images/take-action-bg.svg" ?>");
    }
}
</style>

<?php 
add_action( 'wp_footer', 'scripts_for_single_case_study' , 50);


function scripts_for_single_case_study(){	
?>

<script type="text/javascript">
const startPos = document.getElementById("blog-detail-content");
const shareField = document.getElementById("blog-detail__share");
const MEDIUM_SCREEN_SIZE = 1024;
const TOP_BLOCK = 150;
const BOTTOM_BLOCK = 70;

window.onscroll = function() {
    handleScrolling()
};

function handleScrolling() {
    if (window.pageYOffset - TOP_BLOCK >= startPos.offsetHeight) {
        shareField.style.position = 'absolute';
    } else if (window.pageYOffset + BOTTOM_BLOCK >= startPos.offsetTop) {
        shareField.style.position = 'fixed';
        shareField.style.top = '120px';
    } else {
        if (screen.width <= MEDIUM_SCREEN_SIZE) {
            shareField.style.top = '38%';
        } else {
            shareField.style.top = '570px';
        }
        shareField.style.position = null;
    }
}
</script>

<?php
}

include get_template_directory()."/includes/footer.php"; ?>