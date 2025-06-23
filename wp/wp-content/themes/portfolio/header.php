<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portfolio
 */
// セッションを開始
session_start();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>

  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

</head>

<body <?php body_class(); ?>>




  <?php
  // セッション変数が設定されている場合にアニメーションを表示
  if (!is_tax('works_type') && !is_paged()) :

    if (!isset($_SESSION['first_visit'])) {
      // 初回訪問の場合、セッション変数を設定
      $_SESSION['first_visit'] = true;
    } else {

  ?>
      <div class="screen-transition">
        <img class="transition__logo" src="<?php echo get_template_directory_uri(); ?>/images/logo-wh.svg" alt="VOOL">
      </div>
    <?php }  ?>
  <?php endif; ?>



  <div class="background"></div>

  <?php
  // トップページと下層ページでヘッダーを切り替える処理を追加 
  if (is_front_page()) {
    get_template_part('header', 'top');
  } else {
    get_template_part('header', 'sub');
  }
  ?>