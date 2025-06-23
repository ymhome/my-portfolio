<main id="main" class="archive-works__main wrapper subpage__main">


  <div class="loop-wrap">
    <ul class="loop-area subpage__loop-area">
      <li class="loop-content">
        <p>Works</p>
      </li>
      <li class="loop-content">
        <p>Works</p>
      </li>
      <li class="loop-content">
        <p>Works</p>
      </li>
      <li class="loop-content">
        <p>Works</p>
      </li>
      <li class="loop-content">
        <p>Works</p>
      </li>
      <li class="loop-content">
        <p>Works</p>
      </li>
      <li class="loop-content">
        <p>Works</p>
      </li>
      <li class="loop-content">
        <p>Works</p>
      </li>
      <li class="loop-content">
        <p>Works</p>
      </li>
      <li class="loop-content">
        <p>Works</p>
      </li>
      <li class="loop-content">
        <p>Works</p>
      </li>
      <li class="loop-content">
        <p>Works</p>
      </li>
    </ul>
    <ul class="loop-area">
      <li class="loop-content">
        <p>Works</p>
      </li>
      <li class="loop-content">
        <p>Works</p>
      </li>
      <li class="loop-content">
        <p>Works</p>
      </li>
      <li class="loop-content">
        <p>Works</p>
      </li>
    </ul>
    <ul class="loop-area">
      <li class="loop-content">
        <p>Works</p>
      </li>
      <li class="loop-content">
        <p>Works</p>
      </li>
      <li class="loop-content">
        <p>Works</p>
      </li>
      <li class="loop-content">
        <p>Works</p>
      </li>
    </ul>
  </div>

  <div class="subpage__main-inner">

    <h1 class="section__title">
      <span class="section__title-en">Works</span>
      <span class="section__title-ja">制作物</span>
    </h1>

    <div class="archive-works__inner slideinBottom">

    <p class="works__attention">機密上、実務で制作したWebサイトについてはポートフォリオには掲載しておりませんが、必要に応じてURLをお知らせすることが可能です。</p>

      <?php
      // カスタムタクソノミー 'works_type' のタームを取得し、フィルターとして表示
      $terms = get_terms(array(
        'taxonomy' => 'works_type',
        'hide_empty' => true, // 空のタームは非表示
        'orderby' => 'term_id', // ターム ID 順にソート
        'order' => 'ASC' // 昇順にソート
      ));

      if (! empty($terms) && ! is_wp_error($terms)) :
      ?>
        <ul class="gallery-filter">
          <li class="works-list__gallery-btn screen-transition-none"><a href="<?php echo get_post_type_archive_link('works'); ?>" class="<?php echo !is_tax('works_type') ? 'current-term' : ''; ?>">All</a></li>
          <?php foreach ($terms as $term) :
            $is_current_term = is_tax('works_type', $term->slug);
          ?>
            <li class="works-list__gallery-btn"><a href="<?php echo get_term_link($term); ?>" class="<?php echo $is_current_term ? 'current-term' : 'gallery-btn'; ?>"><?php echo $term->name; ?></a></li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>

      <div class="works__gallery">
        <?php
        // 作品を取得
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args = array(
          'post_type' => 'works',
          'posts_per_page' => 6,
          'paged' => $paged,
          'meta_key' => 'display_order', // 表示順フィールド名
          'orderby' => 'meta_value_num', // 数値型のカスタムフィールドでソート
          'order' => 'ASC', // 昇順 (小さい番号から大きい番号へ)
          'tax_query' => array(), // tax_query を初期化
        );

        // works_type タクソノミーが指定されている場合、tax_query に追加
        if (is_tax('works_type')) {
          $args['tax_query'][] = array(
            'taxonomy' => 'works_type',
            'field' => 'slug',
            'terms' => get_queried_object()->slug,
          );
        }

        $query = new WP_Query($args);

        if ($query->have_posts()) :
          while ($query->have_posts()) : $query->the_post();
            $terms = get_the_terms(get_the_ID(), 'works_type');
            $termSlug = ! empty($terms) ? $terms[0]->slug : '';
        ?>
            <div class="works__gallery-item" data-page="<?php echo $paged; ?>">
              <a href="<?php the_permalink(); ?>" class="works__gallery-link" data-term-slug="<?php echo $termSlug; ?>">
                <?php the_post_thumbnail('medium', array('class' => 'works__gallery-image')); ?>
              </a>
            </div>
          <?php endwhile; ?>
      </div>

      <?php
          // ページネーション
          if ($query->max_num_pages > 1) :
            echo '<div class="pagination screen-transition-none">';
            echo paginate_links(array(
              'mid_size' => 1,
              'prev_next' => false,
              'current' => $paged,
              'total' => $query->max_num_pages,
            ));
            echo '</div>';
          endif;
      ?>

    </div>
  </div>
<?php
        endif;
        wp_reset_postdata();
?>

</main><!-- #main -->