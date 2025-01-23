<?php
session_start();

$path = './';
$title = 'お姉さんの指先';
$templete = 'top';
include $path . 'components/header.php';
?>


<main class="top">


  <div class="container">


    <section class="top__swiper">
      <div class="swiper" id="topSwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="<?php echo $path; ?>assets/img/slide1.png" alt="ご新規様限定イベント2000円オフ">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo $path; ?>assets/img/slide2.png" alt="ご新規様限定イベント2000円オフ">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo $path; ?>assets/img/slide3.png" alt="ご新規様・会員様共通イベント60分1600円">
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </section>

    <section class="top__diary">
      <h2>写メ日記</h2>

      <div class="top__diary__list">
        <ul class="cast__box__list">
          <?php include $path . 'components/diary.php';?>
        </ul>
      </div>

      <div class="top__diary-link">
        <a class="link-diary" href="<?php echo $path; ?>diary.php">
          <p>もっと見る</p>
        </a>
      </div>
    </section>







    <div class="top__schedule">
      <div class="section-title">
        <h2>本日の出勤 </h2>

      </div>
      <div class="top__cast__box__list">
        <ul class="cast__box__list grid">
          <?php include $path . 'components/girls_card.php';?>
        </ul>
      </div>
      <div class="top__schedule-link">
        <a class="link-girl" href="<?php echo $path; ?>schedule.php">
          <p>全ての出勤を見る</p>
        </a>
      </div>

    </div>


  </div>

</main>


<?php include $path . 'components/footer.php';?>