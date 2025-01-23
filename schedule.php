<?php
$path = './';
$title = '出勤情報';
$templete = 'schedule';
include $path . 'components/header.php';
?>
<main class="schedule">
  <div class="container">
    <div class="section-title">
      <h2>出勤情報</h2>
    </div>
    <div class="schedule__list">
      <div class="schedule__btn">
        <ul class="schedule__btn__list">
          <?php 
            $date = "<li class='schedule__btn__list-link'>
          <div class='schedule__btn__list-link_date'>
            <div class='schedule__btn__list-link_month'></div>
            <div class='schedule__btn__list-link_day'></div>
          </div>
            <div class='schedule__btn__list-link_week'></div>
        </li>";
            echo str_repeat($date, 7);
          ?>
        </ul>
      </div>

      <ul class="cast__box__list">
        <?php include $path . 'components/girls_card.php';?>
      </ul>
    </div>
  </div>
</main>
<?php include $path . 'components/footer.php';?>