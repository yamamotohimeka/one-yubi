<?php 
  $title = 'プロフィール';
  $templete = 'profile';
  $path = '../';
?>
<!DOCTYPE html>
<html lang="ja">

<head>

  <meta name="google-site-verification" content="" />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo $path; ?>assets/css/style.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Island+Moments&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho+B1&display=swap" rel="stylesheet">
  <link rel="icon" href="<?php echo $path; ?>assets/img/favicon.png" />
  <title><?php echo $title; ?> | 私立なでシコ女学院の公式WEBサイト</title>

  <!-- SEO設定 -->
  <meta name="description" content="-なでシコ女学院の公式WEBサイト" />
  <link rel="canonical" href="/recruit/" />
  <meta property="og:locale" content="ja_JP" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="なでシコ女学院" />
  <meta property="og:description" content="-なでシコ女学院-の公式WEBサイト" />
  <meta property="og:url" content="/" />
  <meta property="og:site_name" content="なでシコ女学院" />
  <meta property="og:image" content="<?php echo $path; ?>assets/img/OGP.png" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />
  <meta property="og:image:type" content="image/png" />
  <meta name="twitter:card" content="summary_large_image" />
</head>

<body>
  <header class="header pc">
    <div class="header__top">

      <div class="header__top__store pc">
        <div class="header__top__store-name">
          <h1>学園系放課後オナニー倶楽部 私立なでシコ女学院</h1>
        </div>
        <img class="header__top__store-img" src="<?php echo $path; ?>assets/img/header-main.jpg" alt="">
        <a class="header__top__store-tel" href="tel:0120-779-965"><img class="header__top__store-tel-img"
            src="<?php echo $path; ?>assets/img/header-tel.png" alt="">
        </a>
      </div>
      <div class="header__top__store-mail">
        <img src="<?php echo $path; ?>assets/img/header-mail.png" alt="">
      </div>
    </div>
    <nav class="header__nav">
      <div class="container">
        <ul class="header__nav__list">
          <li class="header__nav__list-link <?php if ($templete === 'top') echo 'active'; ?>">
            <a href="<?php echo $path; ?>">
              <img class="pc" src="<?php echo $path; ?>assets/img/link-top.svg" alt="">
              <img class="tab" src="<?php echo $path; ?>assets/img/link-top.png" alt="">
            </a>
          </li>
          <li class="header__nav__list-link <?php if ($templete === 'concept') echo 'active'; ?>">
            <a href="<?php echo $path; ?>concept.php">
              <img class="pc" src="<?php echo $path; ?>assets/img/link-concept.svg" alt="">
              <img class="tab" src="<?php echo $path; ?>assets/img/link-concept.png" alt="">
            </a>
          </li>
          <li class="header__nav__list-link <?php if ($templete === 'system') echo 'active'; ?>">
            <a href="<?php echo $path; ?>system.php">
              <img class="pc" src="<?php echo $path; ?>assets/img/link-system.svg" alt="">
              <img class="tab" src="<?php echo $path; ?>assets/img/link-system.png" alt="">
            </a>
          </li>
          <li class="header__nav__list-link <?php if ($templete=== 'cast') echo 'active'; ?>">
            <a href="<?php echo $path; ?>girl.php">
              <img class="pc" src="<?php echo $path; ?>assets/img/link-girl.svg" alt="">
              <img class="tab" src="<?php echo $path; ?>assets/img/link-girl.png" alt="">
            </a>
          </li>
          <li class="header__nav__list-link <?php if ($templete === 'schedule') echo 'active'; ?>">
            <a href="<?php echo $path; ?>schedule.php">
              <img class="pc" src="<?php echo $path; ?>assets/img/link-schedule.svg" alt="">
              <img class="tab" src="<?php echo $path; ?>assets/img/link-schedule.png" alt="">
            </a>
          </li>
          <li class="header__nav__list-link <?php if ($templete === 'event') echo 'active'; ?>">
            <a href="<?php echo $path; ?>event.php">
              <img class="pc" src="<?php echo $path; ?>assets/img/link-event.svg" alt="">
              <img class="tab" src="<?php echo $path; ?>assets/img/link-event.png" alt="">
            </a>
          </li>
          <li class="header__nav__list-link <?php if ($templete === 'access') echo 'active'; ?>">
            <a href="<?php echo $path; ?>access.php">
              <img class="pc" src="<?php echo $path; ?>assets/img/link-access.svg" alt="">
              <img class="tab" src="<?php echo $path; ?>assets/img/link-access.png" alt="">
            </a>
          </li>
          <li class="tab header__nav__list-link ">
            <a target="_blank" href="<?php echo $path; ?>recruit">
              <img src="<?php echo $path; ?>assets/img/link-recruit.png" alt="">
            </a>
          </li>
        </ul>
      </div>
    </nav>

  </header>
  <header class="header tab">
  </header>
  <main class="profile">
    <ul class="profile__hole">
      <li class="tab"></li>
      <li class="tab"></li>
      <li class="tab"></li>
      <li class="tab"></li>
      <li class="tab"></li>
      <li class="tab"></li>
      <li class="tab"></li>
      <li class="tab"></li>
      <li class="tab"></li>
      <li class="tab"></li>
    </ul>
    <div class="container">
      <div class="section-title">
        <h2>生徒プロフィール</h2>
      </div>
      <?php include $path . 'components/profile.php';?>

      <div class="profile__space"></div>
    </div>
  </main>
  <footer class="footer pc">
    <div class="footer__main">
      <div class="container">
        <nav class="footer__main__nav pc">
          <ul class="footer__main__nav__list">
            <li><a href="<?php echo $path; ?>">トップ</a></li>
            <li><a href="<?php echo $path; ?>concept.php">コンセプト</a>
            </li>
            <li><a href="<?php echo $path; ?>system.php">システムシステム</a></li>
            <li><a href="<?php echo $path; ?>girl.php">在籍情報</a>
            </li>
            <li><a href="<?php echo $path; ?>schedule.php">スケジュール</a>
            </li>
            <li><a href="<?php echo $path; ?>event.php">イベント</a></li>
            <li><a href="<?php echo $path; ?>access.php">アクセス</a></li>
            <li> <a target="_blank" href="<?php echo $path; ?>recruit">
                求人サイト
              </a></li>
          </ul>
        </nav>
        <div>
          <nav class="tab footer__nav-tab">
            <ul>
              <li><a href="<?php echo $path; ?>"><img src="<?php echo $path; ?>assets/img/footer-link-top.png" alt="">
                  <p>トップ</p>
                </a></li>
              <li><a href="<?php echo $path; ?>concept.php"><img
                    src="<?php echo $path; ?>assets/img/footer-link-concept.png" alt="">
                  <p>コンセプト</p>
                </a></li>
              <li><a href="<?php echo $path; ?>system.php"><img
                    src="<?php echo $path; ?>assets/img/footer-link-system.png" alt="">
                  <p>システムシステム</p>
                </a></li>

              <li><a href="<?php echo $path; ?>girl.php"><img src="<?php echo $path; ?>assets/img/footer-link-girl.png"
                    alt="">
                  <p>在籍女性</p>
                </a></li>
              <li><a href="<?php echo $path; ?>schedule.php"><img
                    src="<?php echo $path; ?>assets/img/footer-link-schedule.png" alt="">
                  <p>スケジュール</p>
                </a></li>
              <li><a href="<?php echo $path; ?>event.php"><img
                    src="<?php echo $path; ?>assets/img/footer-link-event.png" alt="">
                  <p>学校行事</p>
                </a></li>
              <li> <a target="_blank" href="<?php echo $path; ?>recruit"><img
                    src="<?php echo $path; ?>assets/img/footer-link-recruit.png" alt="">
                  <p>求人サイト</p>
                </a></li>
            </ul>
          </nav>

        </div>
        <small>Copyright©️私立なでシコ女学院 All rights reserved</small>
        <div class="footer__space tab"></div>
        <div class="footer-top tab"><img src="<?php echo $path; ?>assets/img/go-top.png" alt=""></div>
      </div>
    </div>
  </footer>
  <footer class="footer tab">
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/locale/ja.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js"></script>
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <script type="text/javascript" src="<?php echo $path; ?>/assets/js/index.js"></script>
</body>

</html>