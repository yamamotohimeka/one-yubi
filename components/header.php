<!DOCTYPE html>
<html lang="ja">

<head>
  <meta name="google-site-verification" content="" />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo $path; ?>assets/css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Island+Moments&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho+B1&display=swap" rel="stylesheet">
  <link rel="icon" href="<?php echo $path; ?>assets/img/favicon.png" />
  <title><?php echo $title; ?> | 年上・お姉さん好き専門オナクラ お姉さんの指先の公式WEBサイト</title>

  <!-- SEO設定 -->
  <meta name="description" content="年上・お姉さん好き専門オナクラ お姉さんの指先" />
  <link rel="canonical" href="/recruit/" />
  <meta property="og:locale" content="ja_JP" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="お姉さんの指先" />
  <meta property="og:description" content="年上・お姉さん好き専門オナクラ お姉さんの指先" />
  <meta property="og:url" content="/" />
  <meta property="og:site_name" content="お姉さんの指先" />
  <meta property="og:image" content="<?php echo $path; ?>assets/img/OGP.png" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />
  <meta property="og:image:type" content="image/png" />
  <meta name="twitter:card" content="summary_large_image" />
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <link href="https://use.fontawesome.com/releases/v6.2.0/css/all.css" rel="stylesheet">

</head>

<body>
  <header class="header">

    <div class="header__flex">

      <div class="header__tel">
        <img src="<?php echo $path; ?>assets/img/tel-icon.png" alt="お姉さんの指先">
        <a href="tel:0120-947-854">0120-868-864</a>
      </div>



      <div class="header__right">
        <div class="header__logo">
          <h1><a href="<?php echo $path; ?>"><img src="<?php echo $path; ?>assets/img/logo.png" alt="お姉さんの指先"></a></h1>
        </div>


        <div class="header__right-innerFlex">

          <div class="header__login">
            <span class="login"><img src="<?php echo $path; ?>assets/img/login-btn.png" alt=""></span>
            <span class="login"><img src="<?php echo $path; ?>assets/img/signin-btn.png" alt=""></span>
          </div>

          <nav class="header__nav pc">
            <ul class="header__nav__list">
              <li class="header__nav__list-link <?php if ($templete === 'top') echo 'active'; ?>">
                <a href="<?php echo $path; ?>">
                  <p>TOP</p>
                </a>
              </li>

              <li class="header__nav__list-link <?php if ($templete === 'concept') echo 'active'; ?>">
                <a href="<?php echo $path; ?>concept.php">
                  <p>CONCEPT</p>
                </a>
              </li>
              <li class="header__nav__list-link <?php if ($templete=== 'girl') echo 'active'; ?>">
                <a href="<?php echo $path; ?>girl.php">
                  <p>CAST</p>
                </a>
              </li>
              <li class="header__nav__list-link <?php if ($templete === 'diary') echo 'active'; ?>">
                <a href="<?php echo $path; ?>diary.php">
                  <p>PHOTOBBS</p>
                </a>
              </li>
              <li class="header__nav__list-link <?php if ($templete === 'schedule') echo 'active'; ?>">
                <a href="<?php echo $path; ?>schedule.php">
                  <p>SCHEDULE</p>
                </a>
              </li>
              <li class="header__nav__list-link <?php if ($templete === 'system') echo 'active'; ?>">
                <a href="<?php echo $path; ?>system.php">
                  <p>SYSTEM</p>
                </a>
              </li>
              <li class="header__nav__list-link <?php if ($templete === 'access') echo 'active'; ?>">
                <a href="<?php echo $path; ?>access.php">
                  <p>ACCESS</p>
                </a>
              </li>
              <li class="header__nav__list-link <?php if ($templete === 'recruit') echo 'active'; ?>">
                <a href="<?php echo $path; ?>recruit">
                  <p>RECRUIT</p>
                </a>
              </li>

            </ul>
          </nav>
        </div>
      </div>

    </div>

    <?php if ($templete !== 'concept') { ?>
    <div class="header__fv pc">
      <img src="<?php echo $path; ?>assets/img/top.png" alt="お姉さんの指先">
    </div>
    <?php } ?>
    <div class="header__fv tab">
      <img src="<?php echo $path; ?>assets/img/top.png" alt="お姉さんの指先">
    </div>


    <div class="header__tabButton tab">
      <span></span>
      <span></span>
      <span></span>
    </div>

    <nav class="header__tabNav tab">
      <div class="header__tabButton close">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="container">
        <ul class="header__tabNav__list">
          <li class="header__tabNav__list-link <?php if ($templete === 'top') echo 'active'; ?>">
            <a href="<?php echo $path; ?>" class="header__link">
              TOP
            </a>
          </li>
          <li class="header__tabNav__list-link <?php if ($templete === 'concept') echo 'active'; ?>">
            <a href="<?php echo $path; ?>concept.php" class="header__link">
              CONCEPT
            </a>
          </li>
          <li class="header__tabNav__list-link <?php if ($templete === 'girl') echo 'active'; ?>">
            <a href="<?php echo $path; ?>girl.php" class="header__link">
              CAST
            </a>
          </li>
          <li class="header__tabNav__list-link <?php if ($templete === 'schedule') echo 'active'; ?>">
            <a href="<?php echo $path; ?>schedule.php" class="header__link">
              SCHEDULE
            </a>
          </li>
          <li class="header__tabNav__list-link <?php if ($templete === 'diary') echo 'active'; ?>">
            <a href="<?php echo $path; ?>diary.php" class="header__link">
              PHOTOBBS
            </a>
          </li>
          <li class="header__tabNav__list-link <?php if ($templete === 'system') echo 'active'; ?>">
            <a href="<?php echo $path; ?>system.php" class="header__link">
              SYSTEM
            </a>
          </li>
          <li class="header__tabNav__list-link">
            <a href="<?php echo $path; ?>access.php" class="header__link">
              ACCESS
            </a>
          </li>
          <li class="header__tabNav__list-link <?php if ($templete === 'recruit') echo 'active'; ?>">
            <a href="<?php echo   $path; ?>recruit" class="header__link">
              RECRUIT
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <div class="login-modal" id="login-modal">
    <div class="login-modal__content">
      <h3>会員様ログイン</h3>
      <div class="login-modal__content__form">
        <p>ユーザーID</p>
        <input type="text" name="email" placeholder="ユーザーID">
        <p>パスワード</p>
        <input type="password" name="password" placeholder="パスワード">
      </div>
      <div class="login-modal__content__link">
        <p><a href="" class="login">パスワードを忘れた方はコチラから</a></p>
        <p><a href="" class="login">新規会員登録はコチラから</a></p>
      </div>
    </div>
  </div>