$(function () {
  //inview
  $(".fadeUp").on("inview", function () {
    $(this).addClass("show-fadeUp");
  });

  $(".fadeUp2").on("inview", function () {
    $(this).addClass("show-fadeUp2");
  });

  $(".fadeIn1").on("inview", function () {
    $(this).addClass("show-fadeIn1");
  });

  $(".fadeIn2").on("inview", function () {
    $(this).addClass("show-fadeIn2");
  });

  $(".fadeIn3").on("inview", function () {
    $(this).addClass("show-fadeIn3");
  });

  $(".fadeIn4").on("inview", function () {
    $(this).addClass("show-fadeIn4");
  });

  $(".fadeIn5").on("inview", function () {
    $(this).addClass("show-fadeIn5");
  });

  $(".bound1").on("inview", function () {
    $(this).addClass("show-bound1");
  });

  $(".bound2").on("inview", function () {
    $(this).addClass("show-bound2");
  });

  $(".bound3").on("inview", function () {
    $(this).addClass("show-bound3");
  });

  $(".party").on("inview", function () {
    $(this).addClass("show-party");
  });
  //ハンバーガーメニュー
  $(`.header__tabButton`).on("click", (event) => {
    $(".header__tabNav").toggleClass("header__tabNav-active");
    $(".header__tabButton span").toggleClass("header__tabButton-active");
  });
  $(`.header__tabNav__list-link a`).on("click", (event) => {
    $(".header__tabNav").toggleClass("header__tabNav-active");
    $(".header__tabButton span").toggleClass("header__tabButton-active");
  });
  $(`.header-logo a`).on("click", (event) => {
    $(".header__tabNav").removeClass("header__tabNav-active");
    $(".header__tabButton span").removeClass("header__tabButton-active");
  });

  // フッターのナビゲーションボタンをクリック
  $(`.footer__tabButton__bg`).on("click", (event) => {
    $(".header__tabNav").toggleClass("header__tabNav-active"); // メニューの開閉
    $(".header__tabButton span").toggleClass("header__tabButton-active");
  });

  // メニューリンクのクリックイベント
  $(`.header__tabNav__list-link a`).on("click", (event) => {
    $(".header__tabNav").removeClass("header__tabNav-active");
    $(".header__tabNav__close").removeClass("header__tabNav__close-active");
  });

  // 閉じるボタンのクリックイベント
  $(`.header__tabNav__close`).on("click", (event) => {
    $(".header__tabNav").removeClass("header__tabNav-active");
    $(".header__tabNav__close").removeClass("header__tabNav__close-active");
  });

  // フッターのトップボタンをクリック
  $(`.footer__topBtn a`).on("click", (event) => {
    event.preventDefault(); // デフォルトの動作を防ぐ
    $("html, body").animate({ scrollTop: 0 }, 500); // スムーズにページトップへ
  });

  //一週間の曜日(英・日),日付,今日の日付取得
  moment.locale("en");
  const month = [];
  const date = [];
  const weeksEn = [];
  const weeksJa = new Array(7);
  const todayWeek = moment().format("ddd");
  [...Array(7)].map((_, id) => {
    month.push(moment().add(id, "days").format("M/"));
    date.push(moment().add(id, "days").format("D"));
    weeksEn.push(moment().add(id, "days").format("ddd"));
  });
  weeksJa.splice(weeksEn.indexOf("Sun"), 1, "(日)");
  weeksJa.splice(weeksEn.indexOf("Mon"), 1, "(月)");
  weeksJa.splice(weeksEn.indexOf("Tue"), 1, "(火)");
  weeksJa.splice(weeksEn.indexOf("Wed"), 1, "(水)");
  weeksJa.splice(weeksEn.indexOf("Thu"), 1, "(木)");
  weeksJa.splice(weeksEn.indexOf("Fri"), 1, "(金)");
  weeksJa.splice(weeksEn.indexOf("Sat"), 1, "(土)");
  //今日のスタッフを表示
  $(`.${todayWeek}`).addClass("block");

  // 出勤情報のdate切り替え処理
  $(".schedule__btn__list-link").eq(0).addClass("dateactive");

  weeksEn.map((_, id) => {
    $(".schedule__btn__list-link_date").eq(id).addClass(weeksEn[id]);
    $(".schedule__btn__list-link").eq(id).addClass(weeksEn[id]);
    $(".schedule__btn__list-link_month").eq(id).text(month[id]);
    $(".schedule__btn__list-link_day").eq(id).text(date[id]);
    $(`.schedule__btn__list-link.${weeksEn[id]}`).on("click", (event) => {
      $(".schedule__btn__list-link").removeClass("dateactive");
      $(event.currentTarget).addClass("dateactive");
      $(".girlCard").removeClass("block");
      $(`.girlCard.${weeksEn[id]}`).addClass("block");
    });

    $(".schedule__btn__list-link_week").eq(id).addClass(weeksEn[id]);
    $(".schedule__btn__list-link_week").eq(id).text(weeksJa[id]);
  });

  var headerHeight = $(".header__nav__list").outerHeight();
  $('a[href^="#"]').click(function () {
    var href = $(this).attr("href");
    var target = $(href);
    var position = target.offset().top - (headerHeight + 30);
    $("body,html").stop().animate({ scrollTop: position }, 500);
    return false;
  });

  $(".schedule__btn__list-link").eq(0).addClass("first");
  $(".schedule__btn__list-link").eq(1).addClass("second");
  $(".schedule__btn__list-link").eq(2).addClass("third");
  $(".schedule__btn__list-link").eq(3).addClass("fourth");
  $(".schedule__btn__list-link").eq(4).addClass("fifth");
  $(".schedule__btn__list-link").eq(5).addClass("sixth");
  $(".schedule__btn__list-link").eq(6).addClass("seventh");
});

// -------------------------------------------------------------ここまで

const swiper = new Swiper("#topSwiper", {
  centeredSlides: true,
  loop: true,
  speed: 800,
  slidesPerView: 1,
  spaceBetween: 40,
  autoplay: {
    delay: 4000,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});
const swiperNewface = new Swiper("#newfaceSwiper", {
  centeredSlides: true,
  loop: true,
  speed: 800,
  slidesPerView: 1,
  spaceBetween: 40,
  autoplay: {
    delay: 4000,
  },

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

// ログインモーダル
$(document).ready(function () {
  // .loginがクリックされたときの処理
  $(".login").on("click", function () {
    $(".login-modal").fadeIn(); // ログインモーダルを表示
  });

  // モーダルの外側がクリックされたときにモーダルを閉じる
  $("#login-modal").on("click", function (e) {
    if ($(e.target).is("#login-modal")) {
      $(this).fadeOut(); // ログインモーダルを非表示
    }
  });
});
