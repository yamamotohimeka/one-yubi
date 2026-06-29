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
  const $menuBtn = $(".header__bar .header__tabButton");
  const $menuBtnSpans = $menuBtn.find("span");

  function closeMobileMenu() {
    $(".header__tabNav").removeClass("header__tabNav-active");
    $menuBtnSpans.removeClass("header__tabButton-active");
    $menuBtn.attr("aria-expanded", "false").attr("aria-label", "メニューを開く");
  }

  function toggleMobileMenu() {
    const isOpen = $(".header__tabNav").toggleClass("header__tabNav-active").hasClass("header__tabNav-active");
    $menuBtnSpans.toggleClass("header__tabButton-active", isOpen);
    $menuBtn
      .attr("aria-expanded", isOpen ? "true" : "false")
      .attr("aria-label", isOpen ? "メニューを閉じる" : "メニューを開く");
  }

  $menuBtn.on("click", toggleMobileMenu);

  $(`.header__tabNav__list-link a`).on("click", closeMobileMenu);

  $(`.header__logo a`).on("click", closeMobileMenu);

  // フッターのナビゲーションボタンをクリック
  $(`.footer__tabButton__bg`).on("click", toggleMobileMenu);

  // フッターのトップボタンをクリック
  $(`.footer__topBtn a`).on("click", (event) => {
    event.preventDefault(); // デフォルトの動作を防ぐ
    $("html, body").animate({ scrollTop: 0 }, 500); // スムーズにページトップへ
  });

  //一週間の曜日(英・日),日付,今日の日付取得
  moment.locale("en");
  const dateLabels = [];
  const weeksEn = [];
  const weeksJa = new Array(7);
  const todayWeek = moment().format("ddd");
  [...Array(7)].map((_, id) => {
    dateLabels.push(moment().add(id, "days").format("M/D"));
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
    $(".schedule__btn__list-link_date").eq(id).text(dateLabels[id]);
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

const swiperEl = document.querySelector("#topSwiper");
const TOP_SWIPER_UNIQUE_COUNT = 3;

if (swiperEl) {
  new Swiper("#topSwiper", {
    centeredSlides: true,
    loop: true,
    loopedSlides: TOP_SWIPER_UNIQUE_COUNT,
    speed: 800,
    slidesPerView: 1.5,
    spaceBetween: 10,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
      waitForTransition: true,
    },
    pagination: {
      el: ".top__swiper .swiper-pagination",
      clickable: true,
      renderBullet(index, className) {
        if (index >= TOP_SWIPER_UNIQUE_COUNT) {
          return "";
        }
        return `<span class="${className}"></span>`;
      },
    },
    navigation: {
      nextEl: ".top__swiper-next",
      prevEl: ".top__swiper-prev",
    },
    on: {
      init(swiper) {
        updateTopSwiperPagination(swiper);
      },
      slideChange(swiper) {
        updateTopSwiperPagination(swiper);
      },
    },
  });
}

function updateTopSwiperPagination(swiper) {
  const activeIndex = swiper.realIndex % TOP_SWIPER_UNIQUE_COUNT;
  swiper.pagination.bullets.forEach((bullet, index) => {
    if (index >= TOP_SWIPER_UNIQUE_COUNT) {
      return;
    }
    bullet.classList.toggle(
      "swiper-pagination-bullet-active",
      index === activeIndex
    );
  });
}

const swiperNewfaceEl = document.querySelector("#newfaceSwiper");
if (swiperNewfaceEl) {
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
}

// ログインモーダル
function openLoginModal() {
  const $modal = $("#login-modal");
  $modal.fadeIn(200).attr("aria-hidden", "false");
  $("body").addClass("no-scroll");
}

function closeLoginModal() {
  const $modal = $("#login-modal");
  $modal.fadeOut(200).attr("aria-hidden", "true");
  $("body").removeClass("no-scroll");
}

$(document).on("click", ".js-login-open", function (e) {
  e.preventDefault();
  e.stopPropagation();
  openLoginModal();
});

$(document).on("click", ".js-login-close", function (e) {
  e.preventDefault();
  e.stopPropagation();
  closeLoginModal();
});

$("#login-modal").on("click", function (e) {
  if ($(e.target).is("#login-modal")) {
    closeLoginModal();
  }
});

$(".login-modal__content").on("click", function (e) {
  if ($(e.target).closest(".js-login-close").length) {
    return;
  }
  e.stopPropagation();
});

$(document).on("keydown", function (e) {
  if (e.key === "Escape" && $("#login-modal").is(":visible")) {
    closeLoginModal();
  }
});

$(".login-modal__content__form").on("submit", function (e) {
  e.preventDefault();
});

$(".login-modal__link").on("click", function (e) {
  e.preventDefault();
});
