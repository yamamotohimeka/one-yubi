<?php
require(dirname(__FILE__) . "/../hooks/girl.php");


foreach ($girls as $girl):

?>
<li class="
    girlCard fadeIn1
    <?php if ($templete !== 'girl') { echo 'none';} ?>
    <?php if ($girl['sun']) echo 'Sun'; ?>
    <?php if ($girl['mon']) echo 'Mon'; ?>
    <?php if ($girl['tue']) echo 'Tue'; ?>
    <?php if ($girl['wed']) echo 'Wed'; ?>
    <?php if ($girl['thu']) echo 'Thu'; ?>
    <?php if ($girl['fri']) echo 'Fri'; ?>
    <?php if ($girl['sat']) echo 'Sat'; ?>
    ">
  <div class="girlCard-frame">
    <?php if ($templete !== 'girl') : ?>
    <p class="girlCard-time">
      <?php echo $girl['time']; ?>
    </p>
    <?php endif; ?>
    <div class="girlCard-img login">
      <img src="./assets/img/<?php echo $girl['img']; ?>.png" alt="お姉さんの指先の女の子の画像">
    </div>
    <div class="girlCard-fee">
      <p>+<?php echo $girl['reserve'];?>円</p>
    </div>

    <div class="girlCard-name">
      <h3><?php echo $girl['name']; ?></h3>
      <p>(<?php echo $girl['age']; ?>)T<?php echo $girl['tall']; ?></p>
    </div>
  </div>
</li>
<?php
endforeach;
?>