$(function(){
  //変数
  var myWindow = $(window);
  var header = $('header');
  var mvh = $('.mainvisual').height();

  //スクロールイベント
  myWindow.scroll(function(){
    //ヘッダーの背景画像の制御
    var stv2 = $(this).scrollTop();
    if(stv2 > mvh){
      header.addClass('bg');
    } else {
      header.removeClass('bg');
    }
  });

    //inview.js
  $('.animated').bind('inview', function(event, isInView) {
    if (isInView) {
      $(this).addClass('fadeIn');
    } else {
      $(this).removeClass('fadeIn');
    }
  });

  //ページ上部へ戻る
  $('#pagetop').click(function() {
      $("html,body").animate({scrollTop:0},"300");
  });
});