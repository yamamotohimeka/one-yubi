<?php
session_start();

$path = './';
$title = 'お姉さんの指先';
$templete = 'top';
include $path . 'components/header.php';
?>


<main class="top">

  <section class="top__topics top__section">
    <div class="container">
      <div class="section-heading">
        <h2>イベント情報</h2>
      </div>
      <div class="top__swiper">
        <div class="swiper" id="topSwiper">
          <div class="swiper-wrapper">
            <?php
            $eventSlides = [
              ['slide1.png', 'ご新規様限定イベント2000円オフ'],
              ['slide2.png', 'ご新規様限定イベント2000円オフ'],
              ['slide3.png', 'ご新規様・会員様共通イベント60分1600円'],
            ];
            foreach (array_merge($eventSlides, $eventSlides) as $slide) :
            ?>
            <div class="swiper-slide">
              <div class="top__swiper-card">
                <img src="<?php echo $path; ?>assets/img/<?php echo $slide[0]; ?>" alt="<?php echo $slide[1]; ?>">
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="swiper-pagination"></div>
        <button type="button" class="top__swiper-prev" aria-label="前へ"><i class="fa-solid fa-chevron-left"></i></button>
        <button type="button" class="top__swiper-next" aria-label="次へ"><i class="fa-solid fa-chevron-right"></i></button>
      </div>
    </div>
  </section>

  <section class="top__diary top__section top__section--alt">
    <div class="container">
      <div class="section-heading section-heading--row">
        <h2>写メ日記</h2>
        <a class="section-heading__more" href="<?php echo $path; ?>diary.php">もっと見る <i class="fa-solid fa-angle-right" aria-hidden="true"></i></a>
      </div>
      <div class="top__diary__list">
        <ul class="cast__box__list">
          <?php include $path . 'components/diary.php'; ?>
        </ul>
      </div>
    </div>
  </section>

  <section class="top__schedule top__section">
    <div class="container">
      <div class="section-heading section-heading--row">
        <h2>本日の出勤</h2>
        <a class="section-heading__more" href="<?php echo $path; ?>schedule.php">もっと見る <i class="fa-solid fa-angle-right" aria-hidden="true"></i></a>
      </div>
      <div class="top__cast__box__list">
        <ul class="cast__box__list">
          <?php include $path . 'components/girls_card.php'; ?>
        </ul>
      </div>
    </div>
  </section>

</main>


<?php include $path . 'components/footer.php'; ?>