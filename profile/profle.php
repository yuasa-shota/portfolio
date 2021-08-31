<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width">

	<?php wp_head(); ?>
</head>

<body id="body_profile" <?php body_class(); ?>>
	<?php get_header(); ?>
		<?php 
	/*Template Name:profile*/
	 ?>
<div id="wrapper">
  <section id="profile">
    <h2>自己紹介</h2>
    <div>
      <div><img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/cats_bw.png" alt="飼っている猫の画像"></div>
      <div>
        <p>1994年生まれ。高校生の頃からパソコンが好きで、情報系の大学を志したが大学受験に失敗。全く情報と関係のない大学に進学するも中途退学することに。以来、アルバイトで日銭を稼ぐ日々が長く続く。27歳の時にコーディングの学習のモチベーションが再燃、一念発起し、2021年4月から職業訓練校での訓練を開始する。画像は飼っている猫の「ひらめ（向かって左）」と「こんぶ（右）」。</p>
      </div>
    </div>
    <div id="environment">
      <section>
        <h3>コーディング</h3>
        <p>html5・CSS3に準拠したコーディング。従来のfloatレイアウトから主流のflexレイアウト、gridを用いた基本的なレイアウトの実装も。またbootstrapによるCSSフレームワークの導入やscssの経験もある。<br>
		  自宅では主にVSCodeを用いたプラグインも絡めたコーディングを行うが、Dreamweaverを用いたデザインビューによるコーディングも経験。Dreamweaverの機能を用いたサーバーアップロードの他に、ffftpを利用した経験もある。
		  <br>
		  jQueryはプラグインの導入から、.css()や.addClass()などの簡単なメソッドを扱うに留まる。ゆくゆくはjavascriptを扱えるようなコーダーになる為、日々奮闘中。</p>
        
        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/icons/html5.png" alt=""> <img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/icons/css3.png" alt=""> <img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/icons/sass.png" alt=""> <img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/icons/vscode.png" alt=""> <img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/icons/dw.png" alt=""> <img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/icons/ffftp1.png" alt=""><img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/icons/jquery.png" alt=""> </section>
      <div>
        <section>
          <h3>デザイン</h3>
          <p>Photoshopを用いた画像の加工、デザインカンプの作成。llustratorによるロゴやアイコンの作成。XDによるデザインカンプの作成。</p>
					  	  <img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/icons/ps.png" alt="">
					  	  <img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/icons/ai.png" alt="">
					  	  <img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/icons/Xd.png" alt="">
        </section>
        <section>
          <h3>wordpress</h3>
          <p>MAMPを使用した、サイトのphp化とWordPress化。各テンプレートファイルの作成や、固定ページへの導入。</p>
					  	  <img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/icons/wp.png" alt="">
					  	  <img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/icons/MAMP.png" alt="">
					  	  <img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/icons/php.png" alt="">
        </section>
        <section>
          <h3>その他</h3>
          <p>Githubを使った、gitのリポジトリの管理。多人数でのサイト作成経験がない為、Githubの凄さがあまり実感できずにいる。</p>
					  	  <img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/icons/github.png" alt="">
					  	  <img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/icons/git.png" alt="">
			<a href="https://github.com/yuasa-shota" target="_blank" rel="noopener noreferrer">Github➡</a>
        </section>
      </div>
    </div>
	  <section id="hobby">
	  <h3>趣味</h3>
		  <section id="hobby_voicetraining">
		  <h4>ボイトレ</h4><i class="fas fa-microphone-alt fa-9x"></i>
		  <p>元々カラオケが好きだったのが高じてボイストレーニングを行うように。地声の最高音がmid2Eまでしか出なかったものがhiEまで出るようになったので、目下この音が1曲の間中維持できるように練習中。毎日30分の発声練習・ストレッチを欠かさず行う。</p>
		  </section>
		  <section id="hobby_reading">
		  <h4>読書</h4><i class="fas fa-book-open fa-9x"></i>
		  <p>漫画、専門書、新書など気が向いたものはなんでも読む乱読家。昔は小説を好んで読んでいたが、近年、年のせいか描写が頭に入って来ず、悲しい思いをしている。最近読んだ好きな本は『推しの子』『論理哲学論考』『メタ思考トレーニング』など。</p></section>
		  <section id="hobby_game">
		  <h4>ゲーム</h4><i class="fas fa-gamepad fa-9x"></i>
		  <p>小学生の頃からゲームが好きだったが、最近は指と頭の瞬発力が落ちてきてキャラクターを思い通りに動かせなくなってきた為、専ら観戦メインに。野球少年が野球観戦おじさんになるように、ゲーム少年もゲームの大会を見ながら酒を飲んで管を巻くようになってしまった。</p></section>
	  </section>
  </section>
</div>
<?php get_footer(); ?>
	<?php wp_footer(); ?>
</body>
</html>
