<section id="contact" class="contact scroll-point">
  <div class="container">
    <h2>お問い合わせ</h2>

    <div class="contact__box">
      <div class="contact__box-tel">
        <h3>お電話でのお問い合わせ</h3>
        <p><a href="tel:0120868846">TEL.0120-868-846</a></p>
      </div>
      <div class="contact__box-line">
        <div class="contact__box-line-inner pc">
          <a href="https://line.me/R/ti/p/XGQ3edgCC5" target="_blank">
            <img src="<?php echo $path;?>assets/images/line-qr.png" alt="LINE QRコード"></a>
        </div>
        <div class="contact__box-line-inner pc">
          <img src="<?php echo $path;?>assets/images/line-pr.png" alt="24時間LINE受付中">
        </div>
        <div class="contact__box-line-inner tab">
          <a href="https://line.me/R/ti/p/XGQ3edgCC5" target="_blank"><img
              src="<?php echo $path;?>assets/images/line-add.png" alt="友達追加はこちら"></a>
        </div>
        <div class="contact__box-line-inner tab">
          <img src="<?php echo $path;?>assets/images/line-pr-tab.png" alt="24時間LINE受付中">
        </div>

      </div>
    </div>



    <div class="container">
      <div class="contact__box2">
        <h3>応募フォーム</h3>
        <?php include $path .'php_mailer/form.php';?>
        <div class="contact-bg"> </div>

      </div>
    </div>
  </div>
</section>