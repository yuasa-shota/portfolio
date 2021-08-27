jQuery(function () {

  //スクロールすると表示
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 100) {
      jQuery('#js_btn').fadeIn();

    } else if (jQuery('body').hasClass('open')) {
      jQuery('js_btn').fadeIn();
    } else {
      jQuery('#js_btn').fadeOut();

    }
    if (jQuery(this).scrollTop() > 80) {
      jQuery('#nav_pc').addClass('header_flex');
    } else {
      jQuery('#nav_pc').removeClass('header_flex');

    }

  });


  //開閉用ボタンをクリックでクラスの切替え
  jQuery('#js_btn').click(function () {
    jQuery('html').css('overflow-y', 'hidden');

    if (jQuery('body').hasClass('open')) {
      jQuery('html').css('overflow-y', 'scroll');


    }
    jQuery('body').toggleClass('open');


  });

  //メニュー名以外の部分をクリックで閉じる
  jQuery('#js_nav').click(function () {
    jQuery('body').removeClass('open');
    jQuery('html').css('overflow-y', 'scroll');
  });


});
