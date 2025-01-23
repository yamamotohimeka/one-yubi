<?php
$store = 'お姉さんの指先求人';//ここにサイト名

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

session_start();
if(!isset($_POST['token'])) {
  echo '不正なアクセスの可能性があります';
  exit;
}
if($_SESSION['key'] === $_POST['token']) {
  
  $name = $_POST['name'];
  $age = $_POST['age'];
  $email = $_POST['email'];
  $tel = $_POST['tel'];
  $text = $_POST['text'];


require 'vendor/autoload.php';
require 'vendor/phpmailer/phpmailer/language/phpmailer.lang-ja.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


mb_language("japanese");
mb_internal_encoding("UTF-8");



$mail = new PHPMailer(true);
$mail->CharSet = "iso-2022-jp";
$mail->Encoding = "7bit";
$mail->setLanguage('ja', 'vendor/phpmailer/phpmailer/language/');

try {
  $mail->isSMTP();   
  $mail->Host       = $_ENV["MAIL_HOST"];
  $mail->SMTPAuth   = true;
  $mail->Username   = $_ENV["MAIL_USER"];
  $mail->Password   = $_ENV["MAIL_PASSWORD"]; 
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
  $mail->Port = 587;

  $mail->setFrom($_ENV["MAIL_USER"], mb_encode_mimeheader('送信専用アドレス')); 
  // 受信者アドレス, 受信者名（受信者名はオプション）
  $mail->addAddress($_ENV["SEND_TO"], mb_encode_mimeheader($store)); 

  $mail->isHTML(true);
  $mail->Subject = mb_encode_mimeheader($_ENV["SEND_TO_NAME"] . "からお問い合わせが届きました");
  $mail->Body  = mb_convert_encoding("
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━<br>
【 お名前 】<br>
{$name}<br>
<br>
【 電話番号 】<br>
{$tel}<br>
【 メール 】<br>
{$email}<br>
<br>
【 年齢 】<br>
{$age}<br>
<br>
【 お問い合わせ内容 】<br>
{$text}<br>
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━","JIS","UTF-8");  

  $mail->send();  //送信
  
  echo '<div class="form">
  <div class="box">
    <div class="form-confirm">
      <h4>お問い合わせ完了</h4>
      <p>お問い合わせありがとうございました。<br>
      担当者からの連絡をお待ちください。</p>
    </div> 
  </div>
</div>';

  }catch (Exception $e) {
  echo "メール送信に失敗しました. Mailer Error: {$mail->ErrorInfo}";
}
}
?>