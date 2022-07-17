<?php
//ナビゲーションメニュー
register_nav_menus( array(
  'gnav_menu' => 'ヘッダー用のメニューエリア',
  'footer_menu' => 'フッター用のメニューエリア',
) );

//ウィジェット
add_action( 'widgets_init', 'theme_slug_widgets_init' );

function theme_slug_widgets_init() {
  $args = array(
    'name' => __( 'コンテンツ下部右ウィジェット', 'find-ochanomizu' ),
    'id' => 'content-footer',
  );
  register_sidebar( $args );
}

// [foobar]
function foobar_func( $atts ) {
  return "<p>foo and bar</p>";
}
add_shortcode( 'foobar', 'foobar_func' );

//アイキャッチ画像

add_theme_support( 'post-thumbnails' );

//カスタム投稿
function my_custompost_init() {
  $args = array(
    'public' => true,
    'label' => 'お知らせ',
    'show_in_rest' => true,
    'supports' => array( 'title', 'editor', 'thumbnail' ),
  );
  register_post_type( 'news', $args );
}
add_action( 'init', 'my_custompost_init' );

//カスタムタクソノミー

function create_news_tax() {
  register_taxonomy(
    'news-cat',
    'news',
    array(
      'label' => __( 'お知らせ区分' ),
      'rewrite' => array( 'slug' => 'news-cat' ),
      'hierarchical' => true,
      'show_in_rest' => true,
    )
  );
}

add_action( 'init', 'create_news_tax' );

/**
* Enqueue a script with jQuery as a dependency. */
function wpdocs_scripts_method() {
  wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/js/vegas.min.js', array( 'jquery' )
  );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_scripts_method' );

//カスタムタクソノミー
function create_flag_tax() {
  $args = array(
    'label' => __( 'フラグ' ),
    'hierarchical' => true,
    'rewrite' => array( 'slug' => 'flag'),
    'show_in_rest' => true
  );
  register_taxonomy (
    'flag',
    'post',
    $args
  );
}
add_action( 'init', 'create_flag_tax');
