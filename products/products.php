<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width">
<?php wp_head(); ?>
</head>

<body id="body_products" <?php body_class(); ?>>
<?php get_header(); ?>
<?php
/*Template Name:products*/
?>
<div id="wrapper">
  <section id="products">
    <h2>制作物</h2>
    <section id="product_portfolio"><a href="portfolio/">
      <div></div>
      </a>
      <h3><a href="portfolio/">ポートフォリオのサイト<i class="fas fa-greater-than"></i></a></h3>
      <span>ワードプレス化</span> <span>コーディング</span> <span>デザイン</span></section>
    <section id="product_italia_logo">
      <a href="italia-logo/">
      <div></div>
      </a>
      <h3><a href="italia-logo/">イタリアのロゴ<i class="fas fa-greater-than"></i></a></h3>
      <span>デザイン</span></section>
    <section id="product_ramen">
      <a href="ramen/">
      <div></div>
      </a>
      <h3><a href="ramen/">ラーメン屋のサイト<i class="fas fa-greater-than"></i></a></h3>
      <span>コーディング</span> <span>デザイン</span></section>
	 
  </section>
</div>
<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>
