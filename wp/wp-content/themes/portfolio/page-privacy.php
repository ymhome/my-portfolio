<?php

/**
 * Template Name: privacy
 *
 * The template for displaying the privacy page
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portfolio
 */

// ヘッダーを読み込む
get_header(); ?>



<main class="policy__main wrapper">
  <article class="policy">

    <h1 class="policy__title">プライバシーポリシー</h1>

    <h2 class="policy__section-title">1. 情報の取得</h2>
    <p class="policy__text">当サイトでは、以下の様な方法でユーザーの情報を取得することがあります。</p>
    <ul class="policy__list">
      <li class="policy__list-item">お問い合わせフォームからの入力</li>
      <li class="policy__list-item">クッキーによるアクセス情報の収集</li>
    </ul>

    <h2 class="policy__section-title">2. 情報の利用目的</h2>
    <p class="policy__text">取得した情報は、以下の様な目的で利用いたします。</p>
    <ul class="policy__list">
      <li class="policy__list-item">お問い合わせへの対応</li>
      <li class="policy__list-item">サイトの改善</li>
      <li class="policy__list-item">アクセス状況の分析</li>
    </ul>

    <h2 class="policy__section-title">3. 情報の第三者への提供</h2>
    <p class="policy__text">法令に基づく場合を除き、取得した情報を第三者に提供することはありません。</p>

    <h2 class="policy__section-title">4. クッキーの利用</h2>
    <p class="policy__text">当サイトでは、クッキーを利用してアクセス情報を収集することがあります。クッキーは、ユーザーのブラウザに保存される小さなテキストファイルです。クッキーを利用することで、ユーザーのサイト利用状況を把握することができます。</p>

    <h2 class="policy__section-title">5. アクセス解析ツール</h2>
    <p class="policy__text">当サイトでは、Google Analyticsなどのアクセス解析ツールを利用しています。これらのツールは、クッキーを利用してアクセス情報を収集します。</p>

    <h2 class="policy__section-title">6. 免責事項</h2>
    <p class="policy__text">当サイトに掲載されている情報は、正確性を期していますが、その内容を保証するものではありません。当サイトの利用によって生じた損害について、一切の責任を負いません。</p>

    <h2 class="policy__section-title">7. プライバシーポリシーの変更</h2>
    <p class="policy__text">当サイトは、プライバシーポリシーを予告なく変更することがあります。変更後のプライバシーポリシーは、当サイトに掲載した時点で効力を生じるものとします。</p>

    <h2 class="policy__section-title">8. お問い合わせ</h2>
    <p class="policy__text">プライバシーポリシーに関するお問い合わせは、お問い合わせフォームよりご連絡ください。</p>
  </article>
</main>



<?php
// フッターを読み込む
get_footer();
