jQuery(function () {
	var scrollPosition;
//iOS（iPadOSを含む）かどうかのUA判定
var ua = window.navigator.userAgent.toLowerCase();
var isiOS = ua.indexOf('iphone') > -1 || ua.indexOf('ipad') > -1 || ua.indexOf('macintosh') > -1 && 'ontouchend' in document;


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
    jQuery('body').css('overflow-y', 'hidden');
    jQuery('html').css('overflow-y', 'hidden');
  function bodyFixedOn() {
    if(isiOS){
        // iOSの場合
        scrollPosition = $(window).scrollTop();
        $('body').css('position', 'fixed');
        $('body').css('top', '-' + scrollPosition + 'px');
    }else {
        // それ以外
        $('body').css('overflow', 'hidden');
    }
}

    if (jQuery('body').hasClass('open')) {
      jQuery('body').css('overflow-y', 'scroll');
      jQuery('html').css('overflow-y', 'scroll');
function bodyFixedOff() {
    if(isiOS){
        // iOSの場合
        $('body').css('position', '');
        $('body').css('top', '');
        $(window).scrollTop(scrollPosition);
    }else {
        // それ以外
        $('body').css('overflow', '');
    }
}

    }
    jQuery('body').toggleClass('open');


  });

  //メニュー名以外の部分をクリックで閉じる
  jQuery('#js_nav').click(function () {
    jQuery('body').removeClass('open');
    jQuery('body').css('overflow-y', 'scroll');
    jQuery('html').css('overflow-y', 'scroll');
function bodyFixedOff() {
    if(isiOS){
        // iOSの場合
        $('body').css('position', '');
        $('body').css('top', '');
        $(window).scrollTop(scrollPosition);
    }else {
        // それ以外
        $('body').css('overflow', '');
    }
}
  });


});

