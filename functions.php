<?php 
	//コンテンツ幅をセット
	if(! isset($content_width)){
		$content_width = 1200;
	}

	function custom_theme_setup(){
		//head内にフィードリンクを出力
		add_theme_support('automatic-feed-links');
		//タイトルタグを動的に出力
		add_theme_support('title-tag');
		//ブロックエディター用のCSSを有効化
		add_theme_support('wp-block-styles');
		//埋め込みコンテンツをレスポンシブ対応に
		add_theme_support('responsive-embeds');
	}
		
	add_action('after_setup_theme','custom_theme_setup');


function add_files(){
	wp_enqueue_style('resetcss',get_template_directory_uri().'/css/reset.css');
	wp_enqueue_style('stylecss',get_template_directory_uri().'/style.css',array('resetcss'));
	wp_enqueue_script('mainjs',get_template_directory_uri().'/js/main.js',array('jquery'));
	wp_enqueue_script('fontawesome','https://kit.fontawesome.com/9610c55b35.js');
	
}
add_action('wp_enqueue_scripts','add_files');