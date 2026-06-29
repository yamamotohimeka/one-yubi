<?php
$path = './';
$title = 'コンセプト';
$templete = 'concept';
include $path . 'components/header.php';

$cautionItems = [
  '18歳未満の方（高校生の方）のご利用',
  '本番行為の強要、交渉、行為、又それに準ずる発言',
  'サービス内容以外の強要。（警察に被害届を出し、しかるべき対応をします。）',
  '薬物、ドラッグそれらに類する物の服用、所持、使用されている方、使用する行為',
  '同業者、スカウト及びスカウトに準ずる者のスカウト行為や発言等（罰金）',
  'コンパニオンへの暴力行為、また嫌がる行為',
  'ビデオカメラ、デジタルカメラ、カメラ付携帯などの機器を使っての撮影、盗聴、盗撮行為',
  '不衛生な場所及びお風呂、シャワーを利用できないお部屋でのご利用',
  'コンパニオンへのストーカー行為、若しくはそれに準ずる行為',
  '当店を媒介としないコンパニオンへの勧誘、お誘い',
  '性病、若しくはそう思われる方のご利用',
  '外国人、泥酔者、暴力団関係者、またはそれに準ずる方のご利用',
];
?>

<main class="concept">
  <section class="concept__hero">
    <div class="concept__hero-media">
      <img src="<?php echo $path; ?>assets/img/concept-bg.png" alt="お姉さんの指先 コンセプト">
    </div>
    <div class="container concept__hero-content">
      <div class="concept__hero-inner">
        <div class="concept__hero-tag">
          <p class="concept__hero-label">コンセプト</p>
          <div class="concept__hero-deco" aria-hidden="true"></div>
        </div>
        <h1 class="concept__hero-title">お<span>姉</span>さんの<span>指先</span></h1>
        <p class="concept__hero-subtitle">— Sister's Fingertips —</p>
        <p class="concept__hero-lead">年上・お姉さん好きの、<br class="sp">あなたのための特別な時間。</p>
      </div>
    </div>
  </section>

  <section class="concept__about">
    <div class="container">
      <div class="concept__about-grid">
        <div class="concept__about-text">
          <h3 class="concept__about-heading">お姉さんと過ごす時間が、<br>あなたの<span>心をそっと癒します</span>。</h3>
          <div class="concept__about-body">
            <p>単純に気持ちいいから、そんな理由でもいい。<br>しかし、知れば知るほど、考えれば考えるほど納得。</p>
            <p class="concept__about-highlight">もはや、ここでしか...<br>「心から気持ちいい」は手に入らない？</p>
            <p>男性の中に眠る本能を、唯一開放できる場所、<br>それがオナクラなのです。</p>
            <p>ここだけで許される、その「秘密の場所」感が<br>オナクラをさらに昇華させる。</p>
            <p>もはや、あなたを縛る<br class="sp">「大人の殻」や「常識にとらわれた体裁」も<br>必要ありません。 <br>
              本能の導くまま、存分に甘えていいのです。<br>しかられて、許されて、悦に浸っていいのです。</p>
            <p>この場所でなら。</p>
          </div>
        </div>

        <div class="concept__visual">
          <div class="concept__visual-bg" aria-hidden="true"></div>
          <img src="<?php echo $path; ?>assets/img/concept-image.png" alt="お姉さんの優しさに包まれる、あなただけの贅沢なひととき。">
        </div>
      </div>
    </div>
  </section>

  <section class="concept__caution">
    <div class="container">
      <div class="section-title">
        <h2>注意事項</h2>
      </div>

      <div class="concept__caution-box">
        <p class="concept__caution-intro">
          当店は無店舗型風俗特殊営業届出済店です。お客様に安心してご利用いただけるよう親切かつ健全、安全な営業を心がけております。従って以下の注意事項、禁止事項をお守り頂けないお客様のご利用はご遠慮願います。
        </p>

        <ul class="concept__caution-list">
          <?php foreach ($cautionItems as $item) : ?>
            <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i><span><?php echo htmlspecialchars($item); ?></span></li>
          <?php endforeach; ?>
        </ul>

        <div class="concept__caution-notes">
          <p>ご理解いただけない方の今後のご利用はお断りさせて頂き、損害賠償請求させていただきます。</p>
          <p>また、サービス中に上記事項が行われた場合は即サービスを中止いたします。その際、料金の返金には一切応じられませんので予めご了承ください。</p>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include $path . 'components/footer.php'; ?>