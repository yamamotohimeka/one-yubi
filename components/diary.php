<?php
session_start();

// 日記データの読み込み（例：$diarys 配列があると仮定）
require(dirname(__FILE__) . '/../hooks/diary.php'); // $diarysを読み込む

// 現在の時間を取得
$currentHour = date('YmdH'); // 例: 20241212 14

// キャッシュキーを設定（例：diary_order）
$cacheKey = 'diary_order';

// キャッシュを取得
function get_cache($key)
{
  return isset($_SESSION[$key]) ? $_SESSION[$key] : null; // セッションからキャッシュを取得
}

// キャッシュを保存
function set_cache($key, $value)
{
  $_SESSION[$key] = $value; // セッションにキャッシュを保存
}

// キャッシュの有効期限を設定（例: 3時間ごとにキャッシュを更新）
$cacheTimeKey = $cacheKey . '_time';
$cacheTime = isset($_SESSION[$cacheTimeKey]) ? $_SESSION[$cacheTimeKey] : 0;

if (time() - $cacheTime > 10800) { // 3時間経過した場合
  shuffle($diarys); // 日記の順番をランダム化
  set_cache($cacheKey, $diarys); // 新しい順番をキャッシュに保存
  $_SESSION[$cacheTimeKey] = time(); // キャッシュタイムを更新
}

// キャッシュから順番を取得
$diarysToDisplay = get_cache($cacheKey);

// セッションに日時キャッシュがあるか確認
if (!isset($_SESSION['diarys_dates'])) {
  $baseTime = time(); // 現在時刻を基準にする
  $dates = [];

  // 各投稿の日時を生成
  foreach ($diarysToDisplay as $index => $diary) {
    // 最初の投稿は現在時刻、以降はランダムな間隔で減少
    if ($index === 0) {
      $dateTimestamp = $baseTime;
    } else {
      // 30分～2時間（1800秒～7200秒）のランダム間隔
      $timeOffset = rand(1800, 7200);
      $dateTimestamp -= $timeOffset;
    }

    // フォーマット：2024年12月12日 22:24
    $dates[] = date('Y年m月d日 H:i', $dateTimestamp);
  }

  // キャッシュする
  $_SESSION['diarys_dates'] = $dates;
} else {
  $dates = $_SESSION['diarys_dates'];
}

if (!isset($_SESSION['diarys_likes'])) {
  $_SESSION['diarys_likes'] = [];
}

// ページネーション設定
$itemsPerPage = ($templete === 'top') ? 6 : 9;
$totalItems = count($diarysToDisplay); // 全投稿数
$totalPages = ceil($totalItems / $itemsPerPage); // 総ページ数

// 現在のページ番号を取得
$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$currentPage = max(1, min($currentPage, $totalPages)); // ページ番号のバリデーション

// 表示するデータの範囲を決定
$startIndex = ($currentPage - 1) * $itemsPerPage;
$paginatedDiaries = array_slice($diarysToDisplay, $startIndex, $itemsPerPage);
$paginatedDates = array_slice($dates, $startIndex, $itemsPerPage);
?>

<!-- HTML部分 -->
<?php foreach ($paginatedDiaries as $index => $diary): ?>
  <li class="diary">
    <?php if ($templete === 'top') : ?>
      <a class="diary__link" href="<?php echo $path; ?>diary.php">
      <?php endif; ?>

      <div class="diary-img<?php echo ($templete !== 'top' && $diary['diary-img'] === 'secret') ? ' js-login-open is-members-only' : ''; ?>">
        <img src="<?php echo $path; ?>assets/img/diary/<?php echo htmlspecialchars($diary['diary-img']); ?>.png" alt="写メ日記">
        <?php if ($diary['diary-img'] === 'secret') : ?>
          <span class="members-only-badge" aria-hidden="true"><i class="fa-solid fa-lock"></i> 会員限定</span>
        <?php endif; ?>
      </div>

      <?php if ($templete === 'top' && isset($paginatedDates[$index])) : ?>
        <p class="diary-date"><?php echo htmlspecialchars($paginatedDates[$index]); ?></p>
      <?php endif; ?>

      <?php if ($templete === 'top') : ?>
        <p class="diary-name">
          <?php echo htmlspecialchars($diary['name']); ?><span class="diary-age">(<?php echo htmlspecialchars($diary['age']); ?>)</span>
        </p>
      <?php elseif ($templete !== 'top') : ?>
        <p class="diary-name">
          <?php echo htmlspecialchars($diary['name'] . '(' . $diary['age'] . ')');  ?></p>
      <?php endif; ?>

      <div class="diary-text">
        <p><?php echo nl2br($diary['diary-text']); ?></p>
      </div>

      <?php if ($templete === 'top') : ?>
        <?php
        $likeKey = $diary['name'] . '_' . $diary['diary-img'];
        if (!isset($_SESSION['diarys_likes'][$likeKey])) {
          $_SESSION['diarys_likes'][$likeKey] = rand(5, 99);
        }
        $likeCount = $_SESSION['diarys_likes'][$likeKey];
        ?>
        <div class="diary-meta">
          <span class="diary-likes"><i class="fa-regular fa-heart" aria-hidden="true"></i> <?php echo (int) $likeCount; ?></span>
        </div>
      <?php endif; ?>

      <?php if ($templete === 'top') : ?>
      </a>
    <?php endif; ?>
  </li>
<?php endforeach; ?>

<?php
//テスト用
// session_unset();  // セッションのクリア
// session_destroy();  // セッションの破棄
?>