<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width">



	<?php wp_head(); ?>
</head>

<body id="body_top" <?php body_class(); ?>>
<?php get_header(); ?>
	<?php 
	/*Template Name:home*/
	 ?>
<!-- メインコンテンツ-->
<div id="wrapper">
  <section id="products">
    <h2>制作物</h2>
    <section id="product_portfolio"><a href="products/portfolio/">
      <div></div>
      </a>
      <h3><a href="products/portfolio/">ポートフォリオのサイト<i class="fas fa-greater-than"></i></a></h3>
      <span>ワードプレス化</span> <span>コーディング</span> <span>デザイン</span></section>
    <section id="product_italia_logo">
      <a href="products/italia-logo/">
      <div></div>
      </a>
      <h3><a href="products/italia-logo/">イタリアのロゴ<i class="fas fa-greater-than"></i></a></h3>
      <span>デザイン</span></section>
    <section id="product_ramen">
      <a href="products/ramen/">
      <div></div>
      </a>
      <h3><a href="products/ramen/">ラーメン屋のサイト<i class="fas fa-greater-than"></i></a></h3>
      <span>コーディング</span> <span>デザイン</span></section>
    <p><a href="products/">もっと見る➡</a></p>
  </section>
  <section id="profile">
    <h2>自己紹介</h2>
    <div>
      <div><img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/cats_bw.png" alt="飼っている猫の画像"></div>
      <div>
        <p>1994年生まれ。高校生の頃からパソコンが好きで、情報系の大学を志したが大学受験に失敗。全く情報と関係のない大学に進学するも中途退学することに。以来、アルバイトで日銭を稼ぐ日々が長く続く。27歳の時にコーディングの学習のモチベーションが再燃、一念発起し、2021年4月から職業訓練校での訓練を開始する。</p><br>
        <p>制作環境：<br>
          Photoshop/VSCode/Wordpress/Github/その他 </p>
        <span><img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/icons/ps.png" alt="" width="48" height="48"> <img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/icons/vscode.png" alt="" width="48" height="48"> <img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/icons/wp.png" alt="" width="48" height="48"> <img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/icons/github.png" alt="" width="48" height="48"></span>
        <p><a href="profile/">もっと見る➡</a></p>
      </div>
    </div>
  </section>
	 <section id="body_contact"> <h2>お問合せ</h2>
  <form method="post" action="#">
    <table>
      <tbody>
        <tr>
          <td>貴社名</td>
          <td><input type="text"></td>
        </tr>
        <tr>
          <td>お名前(必須)</td>
          <td><input type="text" required></td>
        </tr>
        <tr>
          <td>連絡先(必須)</td>
          <td><input type="text" required></td>
        </tr>
        <tr>
          <td>件名</td>
          <td><input type="text"></td>
        </tr>
        <tr>
          <td>本文(必須)</td>
          <td><textarea required></textarea></td>
        </tr>
        <tr>
          <td><input type="submit"></td>
          <td><input type="reset"></td>
        </tr>
      </tbody>
    </table>
  </form></section>
  <!-- コンテンツここまで --> 
</div>
<?php get_footer(); ?>
	<?php wp_footer(); ?>
</body>
</html>