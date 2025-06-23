<?php

/**
 * The front page template file.
 *
 * @package portfolio
 */

get_header(); // ヘッダーの読み込み
?>

<main id="toppage__main" class="toppage__main">




  <div class="toppage__firstview ">

    <div class="toppage__firstview-anime">

      <h1 class="toppage__logo">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-my-wh.svg" alt="logo" class="toppage__logo-img">

      </h1>
      <div class="toppage__logo-text">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-text-wh.svg" alt="logo text" class="toppage__logo-text-img">
      </div>

    </div>

  </div>



  <div class="loop-wrap">
    <ul class="loop-area">
      <li class="loop-content">
        <p>ManauYasumori PortfolioSite </p>
      </li>
      <li class="loop-content">
        <p>ManauYasumori PortfolioSite </p>
      </li>
      <li class="loop-content">
        <p>ManauYasumori PortfolioSite </p>
      </li>
      <li class="loop-content">
        <p>ManauYasumori PortfolioSite </p>
      </li>
      <li class="loop-content">
        <p>ManauYasumori PortfolioSite </p>
      </li>
      <li class="loop-content">
        <p>ManauYasumori PortfolioSite </p>
      </li>
      <li class="loop-content">
        <p>ManauYasumori PortfolioSite </p>
      </li>
      <li class="loop-content">
        <p>ManauYasumori PortfolioSite </p>
      </li>
      <li class="loop-content">
        <p>ManauYasumori PortfolioSite </p>
      </li>
      <li class="loop-content">
        <p>ManauYasumori PortfolioSite </p>
      </li>
      <li class="loop-content">
        <p>ManauYasumori PortfolioSite </p>
      </li>
      <li class="loop-content">
        <p>ManauYasumori PortfolioSite </p>
      </li>
    </ul>
    <ul class="loop-area">
      <li class="loop-content">
        <p>ManauYasumori PortfolioSite </p>
      </li>
      <li class="loop-content">
        <p>ManauYasumori PortfolioSite </p>
      </li>
      <li class="loop-content">
        <p>ManauYasumori PortfolioSite </p>
      </li>
      <li class="loop-content">
        <p>ManauYasumori PortfolioSite </p>
      </li>
    </ul>
    <ul class="loop-area">
      <li class="loop-content">
        <p>ManauYasumori PortfolioSite </p>
      </li>
      <li class="loop-content">
        <p>ManauYasumori PortfolioSite </p>
      </li>
      <li class="loop-content">
        <p>ManauYasumori PortfolioSite </p>
      </li>
      <li class="loop-content">
        <p>ManauYasumori PortfolioSite </p>
      </li>
    </ul>
  </div>






  <section class="lead section">
    <div class="lead__inner fadein">

      <h2 class="lead__title">
        <p class="code">Code</p>
        <p class="with">with</p>
        <p class="design">Design</p>
      </h2>
    </div>
  </section>

  <div class="toppage__main-inner  wrapper">


    <section class="skills section">
      <h2 class="section__title">
        <span class="section__title-en">Skills</span>
        <span class="section__title-ja">できること</span>
      </h2>

      <?php

      include get_template_directory() . '/template-parts/about-skill.php';

      ?>

    </section>

    <section class="works section">
      <h2 class="section__title">
        <span class="section__title-en">Works</span>
        <span class="section__title-ja">制作物</span>
      </h2>

      <div class="works__inner slideinBottom">

        <p class="works__attention">機密上、実務で制作したWebサイトについてはポートフォリオには掲載しておりませんが、必要に応じてURLをお知らせすることが可能です。</p>

        <ul class="gallery-filter">
          <li class="works-list__gallery-btn">

            <button class="gallery-btn" data-filter="all">All</button>
          </li>
          <li class="works-list__gallery-btn">

            <button class="gallery-btn" data-filter="website">Website</button>
          </li>
          <li class="works-list__gallery-btn">

            <button class="gallery-btn" data-filter="webapp">WebApp</button>
          </li>

          <li class="works-list__gallery-btn">

            <button class="gallery-btn" data-filter="design">Design</button>
          </li>
        </ul>

        <div class="works__gallery">
          <?php
          $args = array(
            'post_type' => 'works',
            'meta_key' => 'display_order', // 表示順フィールド名
            'orderby' => 'meta_value_num', // 数値型のカスタムフィールドでソート
            'order' => 'ASC', // 昇順 (小さい番号から大きい番号へ)
            'posts_per_page' => -1,

            'tax_query' => array(
              array(
                'taxonomy' => 'works_type',
                'field'    => 'slug',
                'terms'    => array('website', "webapp", "design"),
              ),
            ),
          );

          $query = new WP_Query($args);
          if ($query->have_posts()): while ($query->have_posts()): $query->the_post();

              $terms = get_the_terms(get_the_ID(), 'works_type');
              $termSlug = '';
              if (!empty($terms)) {
                $termSlug = $terms[0]->slug;
              }
          ?>

              <div class="works__gallery-item toppage__works-gallery-item">
                <a href="<?php the_permalink(); ?>" class="works__gallery-link" data-term-slug="<?php echo esc_attr($termSlug); ?>">
                  <?php the_post_thumbnail('medium', array('class' => 'works__gallery-image')); ?>
                </a>
              </div>

          <?php endwhile;
          endif;
          wp_reset_postdata(); ?>
        </div>



        <div class="section__btn  slideinBottom">
          <a href="<?php echo esc_url(home_url('/works')); ?>" class="section__btn-link">All</a>
        </div>
      </div>
    </section>




    <section class="about section">
      <h2 class="section__title">
        <span class="section__title-en">About</span>
        <span class="section__title-ja">私について</span>
      </h2>


      <div class="about__inner">
        <a href="<?php echo esc_url(home_url('/about')); ?>" class="about__img-link  slideinBottom">

          <img src="<?php echo get_template_directory_uri(); ?>/images/nav-logo.svg" alt="about photo" class="about__image">
        </a>
        <div class="about__content  slideinBottom">
          <p class="about__name">安森 愛生<span class="name-en">Manau Yasumori</span></p>
          <time datetime="2002-02-21" class="about__birthday">2002年02月21日</time>
          <p class="about__text">職業訓練校でHTML、CSS、JavaScript、PHPなどのWeb開発スキルを学び、デザインからサイト構築まで幅広く対応できる能力を身につけました。<br>
実務ではフロントエンドエンジニアとしての経験があり、現場でのコーディングを通じて正確さや効率的な作業の重要性に加え、クライアントの要望に沿った柔軟な対応力を養いました。<br>
現在はさらにスキルの幅を広げるため、PHPとLaravelを中心にサーバーサイド開発の学習にも取り組んでいます。これらの知識を活かし、デザイン性と機能性を両立させた魅力的なWeb制作に取り組みながら、さらなる成長を目指しています。</p>
          <div class="section__btn section__btn-small">
            <a href="<?php echo esc_url(home_url('/about')); ?>" class="section__btn-link section__btn-link-small">More</a>
          </div>
        </div>
      </div>
    </section>

    <section class="contact section">
      <h2 class="section__title">
        <span class="section__title-en">Contact</span>
        <span class="section__title-ja">お問い合わせ</span>
      </h2>

      <div class="contact__inner slideinBottom">

        <?php echo do_shortcode('[contact-form-7 id="5da2cde" title="Contact form" html_class="contact-form"]'); ?>
      </div>

    </section>

  </div>




</main>

<?php
get_footer(); // フッターの読み込み
?>