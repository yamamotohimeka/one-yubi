<?php

session_start();

$path = './';
$title = '写メ日記';
$templete = 'diary';
include $path . 'components/header.php';
?>


<main class="diarywrap">
  <div class="container">
    <div class="section-title">
      <h2>写メ日記</h2>
    </div>
    <div class="diary__list">
      <ul class="cast__box__list">
        <?php
        include $path . 'components/diary.php';
        ?>
      </ul>

      <!-- ページネーションリンク -->
      <div class="pagination">
        <?php if ($currentPage > 1): ?>
        <a href="?page=<?php echo $currentPage - 1; ?>"><i class="fa-solid fa-angles-left"></i></a>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
        <a href="?page=<?php echo $i; ?>" <?php echo ($i === $currentPage) ? 'class="active"' : ''; ?>>
          <?php echo $i; ?>
        </a>
        <?php endfor; ?>

        <?php if ($currentPage < $totalPages): ?>
        <a href="?page=<?php echo $currentPage + 1; ?>"><i class="fa-solid fa-angles-right"></i></a>
        <?php endif; ?>
      </div>

    </div>
  </div>
</main>
<?php include $path . 'components/footer.php';?>