<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width">
<?php wp_head(); ?>
</head>

<body id ="body_products" <?php body_class(); ?>>
<?php get_header(); ?>
<?php
/*Template Name:portfolio*/
?>
<div id="wrapper">
  <section id="portfolio">
    <h2>ポートフォリオのサイト</h2>
    <article>
      <h3><img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/portfolio_hero.jpg" alt="ポートフォリオサイトを表示したスマートフォンとパソコン"></h3>
		<table>
  <tbody>
    <tr>
      <th>ジャンル</th>
      <td>ポートフォリオサイト</td>
    </tr>
    <tr>
      <th>ターゲット</th>
      <td>企業の採用担当者</td>
    </tr>
	      <tr>
      <th>コンセプト</th>
      <td>余計な装飾をそぎ落とした洗練されたイメージ</td>
    </tr>
	      <tr>
      <th>デザイン</th>
      <td>Photoshop, Illustrator</td>
    </tr>
	  	      <tr>
      <th>コーディング</th>
      <td>html, css, jQuery,Wordpress,PHP</td>
    </tr>
	  	      <tr>
      <th>制作期間</th>
      <td>8日間</td>
    </tr>
  </tbody>
</table>
<a href="https://github.com/yuasa-shota/portfolio" target="_blank" rel="noopener noreferrer">Github➡</a>

    </article>
    <div id="portfolio_top">
      <h3>トップページ</h3>
      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/top_pc.png" alt="トップページのカンプPC表示"> <img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/top_sp.jpg" alt="トップページのカンプsp表示">
      <section>
        <h4> 白と黒を基調にした、一歩引いたデザイン </h4>
        <p>ポートフォリオサイトでは制作物などが主役の為、それらが目立つように色の主張を抑えた。枠線なども可能な限り減らすが、一方でセクション毎の間隔を広めに取る事で、どのセクション同士が関係しているのか理解しやすくなるように注意した。</p>
      </section>
      <section>
        <h4> ユーザビリティの向上 </h4>
        <p>現在のページのどこを開いているか、メニューバーの色をCSSシグネチャで変えることでわかりやすくするように。ハンバーガーアイコンは右利きの人が押しやすいように右上に置き、開いた後のメニューも右に配置する。<br>
          リンクをマウスでホバーした時の下線の演出がスマートフォンでは出てこないため、リンクできる文字には「＞」のアイコンを加えることでリンクできることがわかるようにした。このアイコンはPCでは消すようにしている。</p>
      </section>
    </div>
    <div id="portfolio_profile">
      <h3>自己紹介ページ</h3>
      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/profile_pc.png" alt="トップページのカンプPC表示"> <img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/profile_sp.jpg" alt="トップページのカンプsp表示">
      <section>
        <h4> 雰囲気は維持したままポップな印象に</h4>
        <p>自己紹介ページはアイコンを多めに使うことで色数を増やし、また少しくだけた文章にする事で、親しみやすい印象を与えるように。<br>
          また、このページはWebに明るくない採用担当者様が見る事も予想されるため、趣味の欄を書く事で様々な人に私の人となりを知って貰えるように配慮した。</p>
      </section>
      <section>
        <h4> 将来のビジョンと現状の認識 </h4>
        <p>キャリアの目標がフロントエンドエンジニアなので、コーディングの部分を強調して書く。自分の現状認識と目標を正直に書くことで、採用担当者様との認識のずれが小さくなるようにした。<br>
          その他の項目の末尾にはGithubの自分のページのURLを載せることで、具体的にコードをどのように書くか見たいと考えた採用担当者様がスムーズに見ることが出来るようにして、コーディングの熱量の高さが通じるようにした。 </p>
      </section>
    </div>
	  <a href="https://github.com/yuasa-shota/portfolio" target="_blank" rel="noopener noreferrer">Github➡</a>
  </section>
</div>
<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>