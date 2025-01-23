<?php require(dirname(__FILE__)."/../hooks/girl.php");?>

<?php  
  $id = $_GET['girl_id'];
  $url = $_SERVER['REQUEST_URI'];
  $girllength = count($girls); 
  $intId = is_numeric($id);

  if(strstr($url,'?girl_id=') == true && $id < $girllength && $intId == 1 ):
    $index = $id - 1;
?>

<div class="profile__outline">
  <div class="profile__note">
    <div class="profile__note-flex">
      <div class="profile__note-flex-img">
        <img src="<?php echo $path; ?>assets/img/<?php echo$girls[$index]['img'];?>.png" alt="">
      </div>
      <div class="profile__note-flex-info">
        <ul class="pc">
          <li class="profile__note-flex-info-name">
            <p>Name:<?php echo$girls[$index]['name'];?></p>
            <p class="store"><?php echo$girls[$index]['store'];?>店</p>
          </li>
          <li>Age:<?php echo$girls[$index]['age'];?></li>
          <li>Tall:<?php echo$girls[$index]['tall'];?></li>
          <li>B.<?php echo$girls[$index]['bust'];?> W.<?php echo$girls[$index]['waist'];?>
            H.<?php echo$girls[$index]['height'];?>
          </li>
          <li>好きな食べ物:<?php echo$girls[$index]['food'];?></li>
          <li>性格:<?php echo$girls[$index]['character'];?></li>
          <li>男性のタイプ:<span><?php echo$girls[$index]['type'];?></span> </li>
        </ul>
        <ul class="tab">
          <p class="store"><?php echo$girls[$index]['store'];?>店</p>
          <li class="profile__note-flex-info-name">
            <p>Name:<?php echo$girls[$index]['name'];?></p>
          </li>
          <li>Age:<?php echo$girls[$index]['age'];?>　Tall:<?php echo$girls[$index]['tall'];?></li>
          <li>B.<?php echo$girls[$index]['bust'];?> W.<?php echo$girls[$index]['waist'];?>
          <li>好きな食べ物:<?php echo$girls[$index]['food'];?></li>
          <li>性格:<?php echo$girls[$index]['character'];?></li>
          <li>男性のタイプ:<span><?php echo$girls[$index]['type'];?></span> </li>
        </ul>
      </div>
    </div>
    <div class="profile__note-txt">
      <h3>★<?php echo$girls[$index]['cast-name'];?>ちゃんから一言★</h3>
      <p class="pc"><?php echo$girls[$index]['cast-comment'];?></p>
      <p class="tab"><?php echo$girls[$index]['cast-comment-tab'];?></p>
    </div>
    <div class="profile__note-txt">
      <h3>★学院から一言★</h3>
      <p class="pc"><?php echo$girls[$index]['store-comment'];?></p>
      <p class="tab"><?php echo$girls[$index]['store-comment-tab'];?></p>
    </div>
    <a class="back" href="<?php echo $path; ?>girl.php">
      <p>在籍女性一覧ページへ戻る</p>
    </a>

  </div>
  <div class="tag1 tag">
    <h4><?php echo$girls[$index]['tag1'];?></h4>
  </div>
  <div class="tag2 tag">
    <h4><?php echo$girls[$index]['tag2'];?></h4>
  </div>
  <div class="tag3 tag">
    <h4><?php echo$girls[$index]['tag3'];?></h4>
  </div>
</div>
<div class="prof__sche">
  <?php else:?>
  <div class="prof__none">
    <p>このページは存在しません。<br></p>
    <a href="<?php echo $path; ?>girls.php">
      <p>在籍女性一覧ページへ戻る</p>
    </a>
  </div>
  <?php endif; ?>

</div>