<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php wp_title( '' ); ?></title>
<meta name="description" content="<?php bloginfo( 'description' ); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes,maximum-scale=2" />
	<?php wp_head(); ?>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/earlyaccess/roundedmplus1c.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?php
echo get_stylesheet_directory_uri(); ?>/css/animate.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/vegas.min.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
  <link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
</head>

<body <?php body_class(); ?>>
  <header class="site-header">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"><img src="<?php
echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="Find! Ochanomizu"></a>
    <nav class="gnav">
		<?php wp_nav_menu(
			array(
				'menu' => 'gnav_menu', //functions.phpに設定したメニュー名
				'container' => '', //ulの親のコンテナが不要な場合、空白。必要ならdivなどを設定（デフォルトはdiv）
        'theme_location' => 'gnav_menu',
			)
		); ?>
    </nav>
    <form role="search" method="get" class="search-box" action="/">
      <label>
          <input type="search" class="search-field roboto-nomal" placeholder="" name="s" id="s" value="" title="検索:">
        </label>
      <input class="btn-search" type="image" src="<?php
echo get_stylesheet_directory_uri(); ?>/img/icon-search.png" alt="検索ボタン">
    </form>
  </header>