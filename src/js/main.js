
import Swiper from 'swiper/bundle';
import smoothscroll from 'smoothscroll-polyfill';
smoothscroll.polyfill();


document.addEventListener('DOMContentLoaded', function () {

  /********************************************************
  * ハンバーガーメニュー
  *********************************************************/
  const hamburger = document.querySelector('.js-hamburger');
  const hamburgerBtn = document.querySelector('.js-hamburger-btn');
  const hamburgerText = document.querySelector('.js-hamburger-text');
  const drawer = document.querySelector('.js-drawer');
  const overlay = document.querySelector('.js-overlay');

  hamburger.addEventListener('click', function () {
    hamburgerBtn.classList.toggle('is-transform');
    hamburgerText.classList.toggle('is-switch');
    drawer.classList.toggle('is-slide');
    overlay.classList.toggle('is-fadeIn');
  });

  // レイヤーをクリックするとドラワーなども閉じる
  overlay.addEventListener('click', function () {
    hamburgerBtn.classList.toggle('is-transform');
    hamburgerText.classList.toggle('is-switch');
    drawer.classList.toggle('is-slide');
    overlay.classList.toggle('is-fadeIn');
  });
  
  
  /********************************************************
  * IntersectionObserver
  *********************************************************/
  const callback = function(entries, observer){
    // console.log(entries);
    // console.log(observer);

    entries.forEach(entry => {
      if(entry.isIntersecting){
        // console.log(entry);
        // entryのtargetに取得したis-inviewのDOMが入っている。

        entry.target.classList.add('is-inview');
        observer.unobserve(entry.target);
      }else{
        entry.target.classList.remove('is-inview');
      }
    })
  };

  const options = {
    root: null,
    // rootMarginは0でも単位をpxか%で表示する。
    rootMargin: '-10% 0% -10% 0%',
    threshold: 0,
  };

  const io = new IntersectionObserver(callback, options);
  const inviews = document.querySelectorAll('.js-inview');

  inviews.forEach(inview => {
    io.observe(inview);
  });
  
  /********************************************************
  * 制作実績詳細ページswiper
  *********************************************************/
  // サブとメインで枚数を合わせる。
  // スクロールバーは、slidesPerViewに指定の数以上の枚数で出現。

  // サブ
  const subOptions = {
    slidesPerView: 4,
    spaceBetween: 8,
    grabCursor: true,
    scrollbar: {
      el: '.js-swiper-thumb .swiper-scrollbar',
      draggable: true,
    },
    breakpoints: {
      768: {
        slidesPerView: 8,
      },
    },
  };
  const subSwiper = new Swiper('.js-swiper-thumb', subOptions); // eslint-disable-line

  // メイン
  const mainOptions = {
    // direction: 'horizontal',
    speed: 500,
    effect: 'fade',
    fadeEffect: {
      crossFade: true, // スライド内に透明な余白がある場合、下の余白が見えないようにする。
    },
    navigation: {
      nextEl: '.js-swiper-main .swiper-button-next',
      prevEl: '.js-swiper-main .swiper-button-prev',
    },
    thumbs: {
      swiper: subSwiper, // eslint-disable-line
    },
    // spaceBetween: 0,
    // slidesPerView: 1,
    // slidesPerGroup: 1, // 一度にスライドさせる枚数
    // centeredSlides: true,
    loop: true,
    // breakpoints: {},
    // autoplay: {
    //   delay: 2000,
    //   disableOnInteraction: false, // true...操作あれば停止
    // },
    // pagination: {
    //   el: '.swiper-pagination',
    //   type: 'bullets',
    //   clickable: true,
    //   renderBullet: function(index, className){
		// 		return '<div class="' + className + '">' + (index + 1) + '</div>';
		// 	}
    // },
  };
  const mainSwiper = new Swiper('.js-swiper-main', mainOptions);  // eslint-disable-line

  /********************************************************
  * トップに戻るボタン、メインビジュアル通過後にis-show付与。
  *********************************************************/
  const pageTopBtn = document.querySelector('.js-page-top');

  window.addEventListener('scroll', () => {
    // 垂直方向のスクロール量を取得
    const currentY = window.pageYOffset;

    // トップページ
    if(document.querySelector('.js-mv')){
      const mvHeight = document.querySelector('.js-mv').clientHeight;
  
      if(currentY > mvHeight){
        pageTopBtn.classList.add('is-show');
      }else{
        pageTopBtn.classList.remove('is-show');
      }
    }

    // 下層でメインビジュアルがないページ
    if(document.querySelector('.js-mv-non')){
      const mvNonHeight = document .querySelector('.js-mv-non').clientHeight;

      if(currentY > mvNonHeight){
        pageTopBtn.classList.add('is-show');
      }else{
        pageTopBtn.classList.remove('is-show');
      }
    }
  });
  
  pageTopBtn.addEventListener('click', () => {
    window.scrollTo({
      top: 0,
      behavior: 'smooth',
    });
  });



});
