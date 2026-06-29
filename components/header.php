<!DOCTYPE html>
<html lang="ja">

<head>
  <meta name="google-site-verification" content="" />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo $path; ?>assets/css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Island+Moments&family=Noto+Sans+JP:wght@400;500;700&family=Shippori+Mincho+B1:wght@400;500&display=swap" rel="stylesheet">
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
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-H0GNEPF297"></script>
  <script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'G-H0GNEPF297');
  </script>
</head>

<body>
  <header class="header">

    <div class="header__bar">
      <div class="header__bar-inner container">

        <div class="header__logo">
          <h1><a href="<?php echo $path; ?>"><img src="<?php echo $path; ?>assets/img/logo.png" alt="お姉さんの指先"></a></h1>
        </div>

        <nav class="header__nav pc">
          <ul class="header__nav__list">
            <li class="header__nav__list-link <?php if ($templete === 'top') echo 'active'; ?>">
              <a href="<?php echo $path; ?>">トップ</a>
            </li>
            <li class="header__nav__list-link <?php if ($templete === 'concept') echo 'active'; ?>">
              <a href="<?php echo $path; ?>concept.php">コンセプト</a>
            </li>
            <li class="header__nav__list-link <?php if ($templete === 'girl') echo 'active'; ?>">
              <a href="<?php echo $path; ?>girl.php">キャスト一覧</a>
            </li>
            <li class="header__nav__list-link <?php if ($templete === 'schedule') echo 'active'; ?>">
              <a href="<?php echo $path; ?>schedule.php">出勤情報</a>
            </li>
            <li class="header__nav__list-link <?php if ($templete === 'diary') echo 'active'; ?>">
              <a href="<?php echo $path; ?>diary.php">写メ日記</a>
            </li>
            <li class="header__nav__list-link <?php if ($templete === 'system') echo 'active'; ?>">
              <a href="<?php echo $path; ?>system.php">料金システム</a>
            </li>
            <li class="header__nav__list-link <?php if ($templete === 'access') echo 'active'; ?>">
              <a href="<?php echo $path; ?>access.php">アクセス</a>
            </li>
            <li class="header__nav__list-link <?php if ($templete === 'recruit') echo 'active'; ?>">
              <a href="https://one-yubi.net/" target="_blank" rel="noopener">求人</a>
            </li>
          </ul>
        </nav>

        <div class="header__utility pc">
          <div class="header__utility-contact">
            <a href="tel:0120-868-846" class="header__tel-num">
              <i class="fa-solid fa-phone" aria-hidden="true"></i>
              <span>0120-868-846</span>
            </a>
            <p class="header__tel-hours">受付時間 10:00〜翌5:00</p>
          </div>
          <div class="header__login">
            <button type="button" class="header__auth-btn header__auth-btn--login js-login-open">ログイン</button>
            <button type="button" class="header__auth-btn header__auth-btn--signup js-login-open">会員登録</button>
          </div>
        </div>

        <button type="button" class="header__tabButton tab" aria-label="メニューを開く" aria-expanded="false" aria-controls="headerMobileNav">
          <span></span>
          <span></span>
          <span></span>
        </button>

      </div>
    </div>

    <?php if ($templete === 'top') : ?>
    <div class="header__hero-area">
      <div class="header__hero-area-bg" aria-hidden="true">
        <img src="<?php echo $path; ?>assets/img/top.png" alt="">
      </div>
      <div class="container">
        <div class="header__hero">
          <div class="header__hero-bg">
            <img src="<?php echo $path; ?>assets/img/top.png" alt="年上・お姉さん好きの、あなたのための特別な時間。お姉さんの指先">
          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>

    <nav class="header__tabNav tab" id="headerMobileNav">
      <div class="container">
        <ul class="header__tabNav__list">
          <li class="header__tabNav__list-link <?php if ($templete === 'top') echo 'active'; ?>">
            <a href="<?php echo $path; ?>" class="header__link">トップ</a>
          </li>
          <li class="header__tabNav__list-link <?php if ($templete === 'concept') echo 'active'; ?>">
            <a href="<?php echo $path; ?>concept.php" class="header__link">コンセプト</a>
          </li>
          <li class="header__tabNav__list-link <?php if ($templete === 'girl') echo 'active'; ?>">
            <a href="<?php echo $path; ?>girl.php" class="header__link">キャスト一覧</a>
          </li>
          <li class="header__tabNav__list-link <?php if ($templete === 'schedule') echo 'active'; ?>">
            <a href="<?php echo $path; ?>schedule.php" class="header__link">出勤情報</a>
          </li>
          <li class="header__tabNav__list-link <?php if ($templete === 'diary') echo 'active'; ?>">
            <a href="<?php echo $path; ?>diary.php" class="header__link">写メ日記</a>
          </li>
          <li class="header__tabNav__list-link <?php if ($templete === 'system') echo 'active'; ?>">
            <a href="<?php echo $path; ?>system.php" class="header__link">料金システム</a>
          </li>
          <li class="header__tabNav__list-link">
            <a href="<?php echo $path; ?>access.php" class="header__link">アクセス</a>
          </li>
          <li class="header__tabNav__list-link <?php if ($templete === 'recruit') echo 'active'; ?>">
            <a href="https://one-yubi.net/" target="_blank" rel="noopener">求人</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <div class="login-modal" id="login-modal" aria-hidden="true">
    <div class="login-modal__content" role="dialog" aria-modal="true" aria-labelledby="login-modal-title">
      <button type="button" class="login-modal__close js-login-close" aria-label="閉じる">
        <i class="fa-solid fa-xmark" aria-hidden="true"></i>
      </button>
      <h3 id="login-modal-title">会員様ログイン</h3>
      <form class="login-modal__content__form" action="#" method="post">
        <label>
          <span>ユーザーID</span>
          <input type="text" name="email" placeholder="ユーザーID" autocomplete="username">
        </label>
        <label>
          <span>パスワード</span>
          <input type="password" name="password" placeholder="パスワード" autocomplete="current-password">
        </label>
        <button type="submit" class="login-modal__submit">ログイン</button>
      </form>
      <div class="login-modal__content__link">
        <p><a href="#" class="login-modal__link">パスワードを忘れた方はコチラから</a></p>
        <p><a href="#" class="login-modal__link">新規会員登録はコチラから</a></p>
      </div>
    </div>
  </div>