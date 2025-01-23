$(function () {
  //inview
  $(".fadeUp1").on("inview", function () {
    $(this).addClass("show-fadeUp1");
  });

  $(".fadeUp2").on("inview", function () {
    $(this).addClass("show-fadeUp2");
  });

  $(".fadeUp3").on("inview", function () {
    $(this).addClass("show-fadeUp3");
  });

  $(".fadeIn").on("inview", function () {
    $(this).addClass("show-fadeIn");
  });

  $(".bound1").on("inview", function () {
    $(this).addClass("show-bound1");
  });

  $(".bound2").on("inview", function () {
    $(this).addClass("show-bound2");
  });

  //Swiper初期化
  const mySwiper = new Swiper(".swiper", {
    loop: true,
    autoplay: {
      delay: 2000,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  //Q&A
  $(".ex__faq-inner-q").on("click", (event) => {
    $(event.currentTarget).next(".ex__faq-inner-a").toggleClass("a-open");
    $(event.currentTarget).toggleClass("q-open");
  });

  // もっと見るボタンのクリックイベント
  $("#load-more-faq").on("click", function () {
    const additionalFaqs = $(".additional-faqs");
    if (additionalFaqs.is(":visible")) {
      additionalFaqs.fadeOut(500); // 追加のFAQを非表示にするアニメーション
      $(this).text("もっとみる"); // ボタンのテキストを変更
      $(this).removeClass("active"); // 新しいクラスを削除
    } else {
      additionalFaqs.fadeIn(500); // 追加のFAQを表示するアニメーション
      $(this).text("閉じる"); // ボタンのテキストを変更
      $(this).addClass("active"); // 新しいクラスを追加
      $("html, body").animate({ scrollTop: additionalFaqs.offset().top }, 500); // スクロールして表示されたFAQに移動
    }
  });

  //ハンバーガーメニュー
  $(`.header__tabButton`).on("click", (event) => {
    $(".header__tabNav").toggleClass("header__tabNav-active");
    $(".header__tabButton span").toggleClass("header__tabButton-active");
    $(".footer__tabButton span").toggleClass("footer__tabButton-active");
  });
  $(`.header__tabNav__list-link a`).on("click", (event) => {
    $(".header__tabNav").toggleClass("header__tabNav-active");
    $(".header__tabButton span").toggleClass("header__tabButton-active");
    $(".footer__tabButton span").toggleClass("footer__tabButton-active");
  });
  $(`.header-logo a`).on("click", (event) => {
    $(".header__tabNav").removeClass("header__tabNav-active");
    $(".header__tabButton span").removeClass("header__tabButton-active");
    $(".footer__tabButton span").removeClass("footer__tabButton-active");
  });

  //TOPへ戻るボタン
  const pagetop = $(".footer-top");
  pagetop.hide();
  $(window).scroll(function () {
    if ($(this).scrollTop() > 500) {
      pagetop.fadeIn();
      if ($(window).width() < 768) {
        pagetop.removeClass("none");
      } else {
        return;
      }
    } else {
      pagetop.fadeOut();
    }
  });

  $(window).resize(function () {
    if ($(window).width() > 768) {
      pagetop.addClass("none");
    } else {
      pagetop.removeClass("none");
    }
  });

  pagetop.on("click", (event) => {
    $("body, html").animate(
      {
        scrollTop: 0,
      },
      500
    );
    return false;
  });

  //追従リンク
  let elemTop = [];

  function PositionCheck() {
    $(".scroll-point").each(function (i) {
      elemTop[i] = Math.round(parseInt($(this).offset().top));
    });
  }

  function ScrollAnime() {
    var scroll = Math.round($(window).scrollTop());
    var NavElem = $(".footer__nav__list-link");
    $(".footer__nav__list-link").removeClass("current");
    if (scroll >= 0 && scroll < elemTop[1]) {
      $(NavElem[0]).addClass("current");
    } else if (scroll >= elemTop[1] && scroll < elemTop[2]) {
      $(NavElem[1]).addClass("current");
    } else if (scroll >= elemTop[2] && scroll < elemTop[3]) {
      $(NavElem[2]).addClass("current");
    } else if (scroll >= elemTop[3] && scroll < elemTop[4]) {
      $(NavElem[3]).addClass("current");
    } else if (scroll >= elemTop[4]) {
      $(NavElem[4]).addClass("current");
    }
  }

  $(".footer__area-link a").click(function () {
    PositionCheck();
    ScrollAnime();
  });

  $(window).scroll(function () {
    PositionCheck();
    ScrollAnime();
  });

  $(window).on("load", function () {
    PositionCheck();
    ScrollAnime();
  });

  $(window).resize(function () {
    PositionCheck();
  });

  //ハンバーガーメニュー
  $(`.footer__tabButton`).on("click", (event) => {
    $(".header__tabNav").toggleClass("header__tabNav-active");
    $(".header__tabButton span").toggleClass("header__tabButton-active");
    $(".footer__tabNav").toggleClass("footer__tabNav-active");
    $(".footer__tabButton span").toggleClass("footer__tabButton-active");
  });
});
