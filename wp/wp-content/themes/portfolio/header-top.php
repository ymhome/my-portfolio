<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portfolio
 * @version 1.0.0
 * @author Manau Yasumori
 * @license GPL-2.0+
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
    <header id="toppage__header" class="toppage__header">
   

        <nav class="header__nav toppage__gnav">
            <ul class="header__nav-list">
                <li class="header__nav-item"><a href="<?php echo esc_url(home_url('/')); ?>" class="header__nav-link">Top</a></li>
                <li class="header__nav-item"><a href="<?php echo esc_url(home_url('/works')); ?>" class="header__nav-link">Works</a></li>
                <li class="header__nav-item"><a href="<?php echo esc_url(home_url('/about')); ?>" class="header__nav-link">About</a></li>
                <li class="header__nav-item"><a href="<?php echo esc_url(home_url('/contact')); ?>" class="header__nav-link">Contact</a></li>
            </ul>
        </nav>



        <div class="toppage__hamburger-menu hamburger-menu">
            <button class="hamburger-btn">
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
            </button>
        </div>


        <nav class="header__nav hamburger-nav">
            <ul class="header__nav-list hamburger-nav-list">
                <li class="header__nav-item hamburger-nav-item"><a href="<?php echo esc_url(home_url('/')); ?>" class="header__nav-link hamburger-nav-link">Top</a></li>
                <li class="header__nav-item hamburger-nav-item"><a href="<?php echo esc_url(home_url('/works')); ?>" class="header__nav-link hamburger-nav-link">Works</a></li>
                <li class="header__nav-item hamburger-nav-item"><a href="<?php echo esc_url(home_url('/about')); ?>" class="header__nav-link hamburger-nav-link">About</a></li>
                <li class="header__nav-item hamburger-nav-item"><a href="<?php echo esc_url(home_url('/contact')); ?>" class="header__nav-link hamburger-nav-link">Contact</a></li>
            </ul>
        </nav>

    </header>