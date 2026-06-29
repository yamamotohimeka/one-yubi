<?php
require(dirname(__FILE__) . "/../hooks/girl.php");

$topDayKeys = [
  'Sun' => 'sun',
  'Mon' => 'mon',
  'Tue' => 'tue',
  'Wed' => 'wed',
  'Thu' => 'thu',
  'Fri' => 'fri',
  'Sat' => 'sat',
];
$todayField = ($templete === 'top') ? ($topDayKeys[date('D')] ?? '') : '';
$topDisplayCount = 0;
$topDisplayLimit = 8;

function girl_format_measurements(array $girl): string
{
  $parts = [];

  if (!empty($girl['tall'])) {
    $parts[] = 'T' . $girl['tall'];
  }

  if (!empty($girl['bust'])) {
    $bust = 'B' . $girl['bust'];
    if (!empty($girl['cup'])) {
      $bust .= '(' . $girl['cup'] . ')';
    }
    $parts[] = $bust;
  }

  if (!empty($girl['waist'])) {
    $parts[] = 'W' . $girl['waist'];
  }

  if (!empty($girl['hip'])) {
    $parts[] = 'H' . $girl['hip'];
  }

  return implode(' / ', $parts);
}

foreach ($girls as $girl):

  if (empty($girl['name'])) {
    continue;
  }

  if ($templete === 'top' && (empty($todayField) || empty($girl[$todayField]))) {
    continue;
  }

  if ($templete === 'top' || $templete === 'schedule') {
    if ($templete === 'top') {
      if ($topDisplayCount >= $topDisplayLimit) {
        continue;
      }
      $topDisplayCount++;
    }

    $measurements = girl_format_measurements($girl);
    $liClasses = ['girlCard', 'girlCard--top'];

    if ($templete === 'top') {
      $liClasses[] = 'block';
    } else {
      $liClasses[] = 'fadeIn1';
      $liClasses[] = 'none';
      if ($girl['sun']) $liClasses[] = 'Sun';
      if ($girl['mon']) $liClasses[] = 'Mon';
      if ($girl['tue']) $liClasses[] = 'Tue';
      if ($girl['wed']) $liClasses[] = 'Wed';
      if ($girl['thu']) $liClasses[] = 'Thu';
      if ($girl['fri']) $liClasses[] = 'Fri';
      if ($girl['sat']) $liClasses[] = 'Sat';
    }
?>
<li class="<?php echo implode(' ', $liClasses); ?>">
  <?php if ($templete === 'top') : ?>
  <a href="<?php echo $path; ?>schedule.php" class="girlCard__link">
  <?php else : ?>
  <div class="girlCard__link">
  <?php endif; ?>
    <div class="girlCard-img<?php echo ($girl['img'] === 'none') ? ' js-login-open is-members-only' : ''; ?>">
      <img src="./assets/img/<?php echo htmlspecialchars($girl['img']); ?>.png" alt="<?php echo htmlspecialchars($girl['name']); ?>">
      <?php if ($girl['img'] === 'none') : ?>
      <span class="members-only-badge" aria-hidden="true"><i class="fa-solid fa-lock"></i> 会員限定</span>
      <?php endif; ?>
    </div>
    <?php if (!empty($girl['reserve'])) : ?>
    <div class="girlCard-fee">
      <p>+<?php echo htmlspecialchars($girl['reserve']); ?>円</p>
    </div>
    <?php endif; ?>
    <div class="girlCard-body">
      <p class="girlCard-time"><?php echo htmlspecialchars($girl['time']); ?></p>
      <div class="girlCard-name">
        <h3><?php echo htmlspecialchars($girl['name']); ?><span class="girlCard-age">(<?php echo htmlspecialchars($girl['age']); ?>)</span></h3>
        <?php if ($measurements !== '') : ?>
        <p class="girlCard-stats"><?php echo htmlspecialchars($measurements); ?></p>
        <?php endif; ?>
      </div>
    </div>
  <?php if ($templete === 'top') : ?>
  </a>
  <?php else : ?>
  </div>
  <?php endif; ?>
</li>
<?php
    continue;
  }

?>
<li class="girlCard fadeIn1">
  <div class="girlCard-frame">
    <div class="girlCard-img<?php echo ($girl['img'] === 'none') ? ' js-login-open is-members-only' : ''; ?>">
      <img src="./assets/img/<?php echo htmlspecialchars($girl['img']); ?>.png" alt="お姉さんの指先の女の子の画像">
      <?php if ($girl['img'] === 'none') : ?>
      <span class="members-only-badge" aria-hidden="true"><i class="fa-solid fa-lock"></i> 会員限定</span>
      <?php endif; ?>
    </div>

    <div class="girlCard-fee">
      <p>+<?php echo htmlspecialchars($girl['reserve']); ?>円</p>
    </div>

    <div class="girlCard-name">
      <h3><?php echo htmlspecialchars($girl['name']); ?><span class="girlCard-age">(<?php echo htmlspecialchars($girl['age']); ?>)</span></h3>
      <?php $measurements = girl_format_measurements($girl); ?>
      <?php if ($measurements !== '') : ?>
      <p class="girlCard-stats"><?php echo htmlspecialchars($measurements); ?></p>
      <?php else : ?>
      <p class="girlCard-stats">T<?php echo htmlspecialchars($girl['tall']); ?></p>
      <?php endif; ?>
    </div>
  </div>
</li>
<?php
endforeach;
?>
