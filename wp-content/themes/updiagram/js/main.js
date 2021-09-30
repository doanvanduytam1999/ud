document.addEventListener('DOMContentLoaded', () => {
  // Swiper
  initTrustedBySwiper();
  initViewsSwiper();
  initFeaturesSwiper();
  initCaseStudiesSwiper();
  iniFaqSwiper();

  autoShowClearIconWhenSearch();
});

const initTrustedBySwiper = () => {
  const swiper = document.querySelector('.trusted-by__swiper');

  if (swiper) {
    new Swiper('.trusted-by__swiper', {
      speed: 1000,
      loop: true,
      autoplay: {
        delay: 2000,
        disableOnInteraction: false,
      },
      slidesPerView: 'auto',
      centerInsufficientSlides: true,
    });
  }
}

const initViewsSwiper = () => {
  const swiperEl = document.querySelector('.home__views__preview__swiper');
  const workViewEls = document.querySelectorAll('.home__views__nav__item');

  if (swiperEl && workViewEls) {
    const swiper = new Swiper('.home__views__preview__swiper', {
      speed: 1000,
      autoplay: {
        delay: 2000,
        disableOnInteraction: false,
      },
      effect: 'fade',
      fadeEffect: {
        crossFade: true
      },
      navigation: {
        prevEl: '.home__views__preview__prev',
        nextEl: '.home__views__preview__next',
      },
      pagination: {
        el: '.home__views__indicators',
        clickable: true,
      },
      on: {
        slideChange: () => {
          const { previousIndex, realIndex } = swiper;

          workViewEls[previousIndex].classList.remove('is-active');
          workViewEls[realIndex].classList.add('is-active');
        }
      }
    });

    workViewEls.forEach(workView => {
      const { index } = workView.dataset;

      workView.addEventListener('click', () => {
        swiper.slideToLoop(index);
      });
    });
  }
}

const initFeaturesSwiper = () => {
  const swiperEl = document.querySelector('.home__features__preview__swiper');
  const workViewEls = document.querySelectorAll('.home__features__list__nav__item');

  if (swiperEl && workViewEls) {
    const swiper = new Swiper('.home__features__preview__swiper', {
      speed: 1000,
      autoplay: {
        delay: 2000,
        disableOnInteraction: false,
      },
      effect: 'fade',
      fadeEffect: {
        crossFade: true
      },
      pagination: {
        el: '.home__features__preview__indicators',
        clickable: true,
      },
      on: {
        slideChange: () => {
          const { previousIndex, realIndex } = swiper;

          workViewEls[previousIndex].classList.remove('is-active');
          workViewEls[realIndex].classList.add('is-active');
        }
      }
    });

    workViewEls.forEach(workView => {
      const { index } = workView.dataset;

      workView.addEventListener('click', () => {
        swiper.slideToLoop(index);
      });
    });
  }
}

const initCaseStudiesSwiper = () => {
  const swiperEl = document.querySelector('.home__case-studies__swiper');

  if (swiperEl) {
    const swiper = new Swiper('.home__case-studies__swiper', {
      speed: 1000,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      loop: true,
      slidesPerView: 'auto',
      centeredSlides: true,
      spaceBetween: 80,
      pagination: {
        el: '.home__case-studies__indicators',
        clickable: true,
      },
      navigation: {
        prevEl: '.home__case-studies__swiper__slide__prev',
        nextEl: '.home__case-studies__swiper__slide__next',
      },
    });
  }
}

const autoShowClearIconWhenSearch = () => {
  const searchInputEl = document.querySelector('.search__input');
  const searchIconRemoveEl = document.querySelector('.search__icon-remove');

  if (searchInputEl && searchIconRemoveEl) {
    searchInputEl.addEventListener('keyup', (e) => {
      const hasVal = !!e.currentTarget.value.length;

      if (hasVal) {
        searchIconRemoveEl.classList.add('is-shown');
      } else {
        searchIconRemoveEl.classList.remove('is-shown');
      }
    });
  }
}

const iniFaqSwiper = () => {
  const swiperEl = new Swiper(".updiagram-plus__faq__swiper");

  if (swiperEl) {
    new Swiper(".updiagram-plus__faq__swiper", {
      loop: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      slidesPerView: 'auto',
      spaceBetween: 50,
    });
  }
}
