<?php

/**
 * Template Name: contact
 *
 * The template for displaying the contact page
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portfolio
 */

// ヘッダーを読み込む
get_header(); ?>


<main id="main" class="page-contact__main  subpage__main">

    <div class="loop-wrap">
        <ul class="loop-area subpage__loop-area">
            <li class="loop-content">
                <p>Contact</p>
            </li>
            <li class="loop-content">
                <p>Contact</p>
            </li>
            <li class="loop-content">
                <p>Contact</p>
            </li>
            <li class="loop-content">
                <p>Contact</p>
            </li>
            <li class="loop-content">
                <p>Contact</p>
            </li>
            <li class="loop-content">
                <p>Contact</p>
            </li>
            <li class="loop-content">
                <p>Contact</p>
            </li>
            <li class="loop-content">
                <p>Contact</p>
            </li> <li class="loop-content">
                <p>Contact</p>
            </li>
            <li class="loop-content">
                <p>Contact</p>
            </li>
            <li class="loop-content">
                <p>Contact</p>
            </li>
            <li class="loop-content">
                <p>Contact</p>
            </li>
        </ul>
        <ul class="loop-area">
            <li class="loop-content">
                <p>Contact</p>
            </li>
            <li class="loop-content">
                <p>Contact</p>
            </li>
            <li class="loop-content">
                <p>Contact</p>
            </li>
            <li class="loop-content">
                <p>Contact</p>
            </li>
        </ul>
        <ul class="loop-area">
            <li class="loop-content">
                <p>Contact</p>
            </li>
            <li class="loop-content">
                <p>Contact</p>
            </li>
            <li class="loop-content">
                <p>Contact</p>
            </li>
            <li class="loop-content">
                <p>Contact</p>
            </li>
        </ul>
    </div>


    <div class="subpage__main-inner wrapper">


        <h1 class="section__title">
            <span class="section__title-en">Contact</span>
            <span class="section__title-ja">お問い合わせ</span>
        </h1>

        <div class="contact__inner slideinBottom">


            <?php echo do_shortcode('[contact-form-7 id="5da2cde" title="Contact form" html_class="contact-form"]'); ?>

        </div>


    </div>


</main><!-- #main -->


<?php
// フッターを読み込む
get_footer();
