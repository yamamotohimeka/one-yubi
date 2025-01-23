<?php 
$templete = 'form';
  
session_start();
$token = sha1(uniqid(rand(), true));
$_SESSION['key'] = $token;

?>


<div class="form">
  <form method="post" class="validationForm" id="the-form">

    <div class="form-box hissu">
      <label class="form-box-label-text ">お名前（仮名可）</label>
      <input type="text" name="name" value="" class="required maxlength" data-maxlength="10">
    </div>

    <div class="form-box hissu">
      <label class="form-box-label-text ">メールアドレス（半角）</label>
      <input type="email" class="required email" name="email" value="" id="email">
    </div>

    <div class="form-box">
      <label class="form-box-label-text ">電話番号（半角）</label>
      <input type="text" class="telephone" name="tel" value="" size="40" id="tel">
    </div>



    <div class="form-box hissu">
      <label>年齢</label>
      <div class="form-box-input ">
        <input type="number" class="age required" name="age" value="" min="18">
      </div>
    </div>



    <div class="form-box">
      <label>ご質問など</label>
      <textarea name="text" cols="40" rows="10"></textarea>
    </div>


    <div class="form-submit">
      <input type="submit" value="送信" class="submit-btn" id="submit">
      <input type="hidden" name="token" value="<?= $token ?>">
    </div>
  </form>
</div>


<div id="form-load">
  <div class="load">
  </div>
  <div class="load1">
    <br>
    <div class="loader"></div>
    <p>送信中</p>
  </div>
</div>

<!-- 結果メッセージ -->
<div id="result"></div><!-- /#result -->

<script type="module" src="php_mailer/js/form.js"></script>
<script src="https://www.google.com/recaptcha/api.js?render=6LeagwYlAAAAAK5lGpdClWr-kSw4ks8n1RlgtZUN"></script>