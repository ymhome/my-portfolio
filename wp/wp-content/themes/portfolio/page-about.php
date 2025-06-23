<?php

/**
 * Template Name: about
 *
 * The template for displaying the about page
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portfolio
 */

// ヘッダーを読み込む
get_header(); ?>


<main id="main" class="page-about__main  subpage__main">


  <div class="loop-wrap">
    <ul class="loop-area subpage__loop-area">
      <li class="loop-content">
        <p>About Me</p>
      </li>
      <li class="loop-content">
        <p>About Me</p>
      </li>
      <li class="loop-content">
        <p>About Me</p>
      </li>
      <li class="loop-content">
        <p>About Me</p>
      </li>
      <li class="loop-content">
        <p>About Me</p>
      </li>
      <li class="loop-content">
        <p>About Me</p>
      </li>
      <li class="loop-content">
        <p>About Me</p>
      </li>
      <li class="loop-content">
        <p>About Me</p>
      </li>
      <li class="loop-content">
        <p>About Me</p>
      </li>
      <li class="loop-content">
        <p>About Me</p>
      </li>
      <li class="loop-content">
        <p>About Me</p>
      </li>
      <li class="loop-content">
        <p>About Me</p>
      </li>
    </ul>
    <ul class="loop-area">
      <li class="loop-content">
        <p>About Me</p>
      </li>
      <li class="loop-content">
        <p>About Me</p>
      </li>
      <li class="loop-content">
        <p>About Me</p>
      </li>
      <li class="loop-content">
        <p>About Me</p>
      </li>
    </ul>
    <ul class="loop-area">
      <li class="loop-content">
        <p>About Me</p>
      </li>
      <li class="loop-content">
        <p>About Me</p>
      </li>
      <li class="loop-content">
        <p>About Me</p>
      </li>
      <li class="loop-content">
        <p>About Me</p>
      </li>
    </ul>

  </div>

  <div class="subpage__main-inner wrapper">

    <h1 class="section__title">
      <span class="section__title-en">About</span>
      <span class="section__title-ja">私について</span>
    </h1>

    <section class="profile about__section slideinBottom">

      <h2 class="section__title-small section__title">
        <span class="section__title-small-en section__title-en">Profile</span>
        <span class="section__title-small-ja section__title-ja">自己紹介</span>
      </h2>


      <div class="about__inner slideinBottom">
        <div class="about__img-box">

          <img src="<?php echo get_template_directory_uri(); ?>/images/nav-logo.svg" alt="about photo" class="page-about__about-img">

        </div>
        <div class="about__content">
          <p class="about__name">安森 愛生<span class="name-en">Manau Yasumori</span></p>
          <time datetime="2002-02-21" class="about__birthday">2002年02月21日</time>
          <p class="about__text">
            HTML、CSS、JavaScript、PHPの知識を活かし、デザインを最適化しながら、運用しやすく管理性に優れたWebサイトの制作に取り組んでいます。<br>
WordPressを活用したサイト構築では、デザインから実装、機能のカスタマイズ、保守管理に至るまで一貫して対応可能です。<br>
実務ではフロントエンドエンジニアとしてクライアントの要望に応じた実装経験があり、納期や仕様に柔軟に対応しながら正確で効率的なコーディングを意識してきました。<br>
現在はPHPとLaravelを中心にバックエンド開発の学習も進めており、より幅広い視点からWeb制作に携われるようスキルの強化を図っています。
          </p>

        </div>
      </div>

    </section>





    <section class="strengths about__section slideinBottom">

      <h2 class="section__title-small section__title">
        <span class="section__title-small-en section__title-en">Strengths</span>
        <span class="section__title-small-ja section__title-ja">強み</span>
      </h2>

      <ul class="strengths__list">
        <li class="strengths__item slideinLeft">


          <div class="strengths__octopus-box">

            <div class="strengths__octopus"></div>
            <div class="strengths__octopus strengths__octopus-rev"></div>
            <p class="strengths__text">向上心</p>
          </div>
          <p class="strengths__description">新しい技術やトレンドを学ぶ姿勢を持ち続けることで、常に自己成長を目指します。</p>
        </li>

        <li class="strengths__item slideinLeft">


          <div class="strengths__octopus-box">

            <div class="strengths__octopus"></div>
            <div class="strengths__octopus strengths__octopus-rev"></div>
            <p class="strengths__text">覚えの速さ</p>
          </div>
          <p class="strengths__description">向上心に基づいて、得た知識や技術を迅速に吸収し、実践に活かす能力があります。</p>
        </li>

        <li class="strengths__item slideinLeft">


          <div class="strengths__octopus-box">

            <div class="strengths__octopus"></div>
            <div class="strengths__octopus strengths__octopus-rev"></div>
            <p class="strengths__text">問題解決力</p>
          </div>
          <p class="strengths__description">覚えた知識を基に、冷静に課題を分析し、効果的な解決策を見つけ出す力があります。</p>
        </li>

      </ul>



    </section>



    <section class="skills about__section slideinBottom">

      <h2 class="section__title section__title-small">
        <span class="section__title-en section__title-small-en">Skills</span>
        <span class="section__title-ja section__title-small-ja">できること</span>
      </h2>


      <?php

      include get_template_directory() . '/template-parts/about-skill.php';

      ?>


    </section>



    <div class="section__btn page-about__btn slideinBottom">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="section__btn-link">Top</a>
    </div>

    <p class="btn-bottom-text slideinBottom">トップページに戻る</p>

  </div>


</main><!-- #main -->


<?php
// フッターを読み込む
get_footer();
