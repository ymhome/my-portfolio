<?php

/**
 * Template Name: works
 *
 * The template for displaying the works page
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portfolio
 */

// ヘッダーを読み込む
get_header(); ?>


<main id="main" class="single-works__main">


    <div class="loop-wrap">
        <ul class="loop-area">
            <li class="loop-content">
                <p><?php the_field('works_title-en'); ?></p>
            </li>
            <li class="loop-content">
                <p><?php the_field('works_title-en'); ?></p>
            </li>
            <li class="loop-content">
                <p><?php the_field('works_title-en'); ?></p>
            </li>
            <li class="loop-content">
                <p><?php the_field('works_title-en'); ?></p>
            </li>
            <li class="loop-content">
                <p><?php the_field('works_title-en'); ?></p>
            </li>
            <li class="loop-content">
                <p><?php the_field('works_title-en'); ?></p>
            </li>
            <li class="loop-content">
                <p><?php the_field('works_title-en'); ?></p>
            </li>
            <li class="loop-content">
                <p><?php the_field('works_title-en'); ?></p>
            </li> <li class="loop-content">
                <p><?php the_field('works_title-en'); ?></p>
            </li>
            <li class="loop-content">
                <p><?php the_field('works_title-en'); ?></p>
            </li>
            <li class="loop-content">
                <p><?php the_field('works_title-en'); ?></p>
            </li>
            <li class="loop-content">
                <p><?php the_field('works_title-en'); ?></p>
            </li>
        </ul>
        <ul class="loop-area">
            <li class="loop-content">
                <p><?php the_field('works_title-en'); ?></p>
            </li>
            <li class="loop-content">
                <p><?php the_field('works_title-en'); ?></p>
            </li>
            <li class="loop-content">
                <p><?php the_field('works_title-en'); ?></p>
            </li>
            <li class="loop-content">
                <p><?php the_field('works_title-en'); ?></p>
            </li>
        </ul>
        <ul class="loop-area">
            <li class="loop-content">
                <p><?php the_field('works_title-en'); ?></p>
            </li>
            <li class="loop-content">
                <p><?php the_field('works_title-en'); ?></p>
            </li>
            <li class="loop-content">
                <p><?php the_field('works_title-en'); ?></p>
            </li>
            <li class="loop-content">
                <p><?php the_field('works_title-en'); ?></p>
            </li>
        </ul>
    </div>


    <div class="subpage__main-inner  wrapper">



        <p class="section__title">
            <span class="section__title-en">Works</span>
            <span class="section__title-ja">制作物</span>
        </p>

        <div class="works-detail__content slideinBottom">



            <div class="works-detail__headline">
                <h1 class="works__name"><?php the_title(); ?></h1>
                <p class="works__project-category"><?php the_field('project_category'); ?></p>
            </div>
            <?php the_post_thumbnail("full", array('class' => 'works-detail__thumbnail')); ?>

            <?php
            if (get_field('works_url')) {

            ?>
                <div class="works-detail__flex">

                    <table class="works-detail__table">

                        <tr class="works-detail__table-row">
                            <th class="works-detail__table-title">URL</th>
                            <td class="works-detail__table-text">
                                <a class="works-detail__link" href="<?php the_field('works_url'); ?>" target="_blank"><?php the_field('works_url'); ?></a>
                            </td>
                        </tr>

                        <tr class="works-detail__table-row">
                            <th class="works-detail__table-title">使用ツール</th>

                            <td class="works-detail__table-text">
                                <ul class="works-detail__tool-list">
                                    <li class="works-detail__tool-item">
                                        <?php
                                        $tools = get_field('works_tool'); // カスタムフィールドの値を取得

                                        if (in_array('Figma', $tools)) { ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/icon-figma.png" alt="Figma" class="works-detail__tool-img">
                                        <?php }

                                        if (in_array('Wordpress', $tools)) { ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/icon-wordpress.png" alt="Wordpress" class="works-detail__tool-img">
                                        <?php }

                                        if (in_array('Vscode', $tools)) { ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/icon-html.png" alt="html" class="works-detail__tool-img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/icon-css.png" alt="css" class="works-detail__tool-img">
                                        <?php }

                                        if (in_array('Canva', $tools)) { ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/icon-canva.png" alt="Canva" class="works-detail__tool-img">
                                        <?php }

                                        if (in_array('Photoshop', $tools)) { ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/icon-photoshop.png" alt="Photoshop" class="works-detail__tool-img">
                                        <?php }

                                        if (in_array('illustrator', $tools)) { ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/icon-ai.png" alt="illustrator" class="works-detail__tool-img">
                                        <?php }

                                        if (in_array('PHP', $tools)) { ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/icon-php.png" alt="php" class="works-detail__tool-img">
                                        <?php }

                                        if (in_array('MySQL', $tools)) { ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/icon-sql.png" alt="sql" class="works-detail__tool-img">
                                        <?php }
                                        ?>
                                    </li>
                                </ul>
                            </td>

                        </tr>

                        <tr class="works-detail__table-row">
                            <th class="works-detail__table-title">制作期間</th>
                            <td class="works-detail__table-text">
                                <?php the_field('works_period'); ?>
                            </td>
                        </tr>
                    </table>

                    <div id="btn_animation" class="works-detail__visit-btn">
                        <a href="<?php the_field('works_url'); ?>" target="_blank" class="works-detail__visit-btn-link">Visit</a>
                    </div>

                </div>
            <?php
            } else {
            ?>


                <table class="works-detail__table works-detail__table-nobtn">

                    <tr class="works-detail__table-row">
                        <th class="works-detail__table-title">使用ツール</th>

                        <td class="works-detail__table-text">
                            <ul class="works-detail__tool-list">
                                <li class="works-detail__tool-item">
                                    <?php
                                    $tools = get_field('works_tool'); // カスタムフィールドの値を取得

                                    if (in_array('Figma', $tools)) { ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-figma.png" alt="Figma" class="works-detail__tool-img">
                                    <?php }

                                    if (in_array('Wordpress', $tools)) { ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-wordpress.png" alt="Wordpress" class="works-detail__tool-img">
                                    <?php }

                                    if (in_array('Vscode', $tools)) { ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-html.png" alt="html" class="works-detail__tool-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-css.png" alt="css" class="works-detail__tool-img">
                                    <?php }

                                    if (in_array('Canva', $tools)) { ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-canva.png" alt="Canva" class="works-detail__tool-img">
                                    <?php }

                                    if (in_array('Photoshop', $tools)) { ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-ps.png" alt="Photoshop" class="works-detail__tool-img">
                                    <?php }

                                    if (in_array('illustrator', $tools)) { ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-ai.png" alt="illustrator" class="works-detail__tool-img">
                                    <?php }

                                    if (in_array('PHP', $tools)) { ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-php.png" alt="php" class="works-detail__tool-img">
                                    <?php }

                                    if (in_array('MySQL', $tools)) { ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-sql.png" alt="sql" class="works-detail__tool-img">
                                    <?php }
                                    ?>
                                </li>
                            </ul>
                        </td>

                    </tr>

                    <tr class="works-detail__table-row">
                        <th class="works-detail__table-title">制作期間</th>
                        <td class="works-detail__table-text">
                            <?php the_field('works_period'); ?>
                        </td>
                    </tr>
                </table>
            <?php

            }
            ?>


        </div>

        <section class="works-detail__section slideinBottom">

            <h2 class="section__title section__title-small">
                <span class="section__title-en section__title-small-en">Overview</span>
                <span class="section__title-ja section__title-small-ja">概要</span>
            </h2>

            <div class="works-detail__overview-inner">

                <p class="works-detail__description">
                    <?php echo nl2br(get_field('works_description')); ?>
                </p>

                <dl class="works-detail__point-content">
                    <dt class="works-detail__point-headline">Point</dt>
                    <dd class="works-detail__point-text">
                        <?php echo nl2br(get_field('works_point1')); ?>
                    </dd>
                </dl>

                <?php if (get_field('works_point2')) : ?>
                    <dl class="works-detail__point-content">
                        <dt class="works-detail__point-headline">Point</dt>
                        <dd class="works-detail__point-text">
                            <?php echo nl2br(get_field('works_point2')); ?>
                        </dd>
                    </dl>
                <?php endif; ?>


            </div>



        </section>


        <section class="works-detail__section slideinBottom">


            <h2 class="section__title section__title-small">
                <span class="section__title-en section__title-small-en">Design</span>
                <span class="section__title-ja section__title-small-ja">完成図</span>
            </h2>

            <?php

            // カスタムフィールドの値を取得
            $design1 = get_field('works_design1', get_the_ID());
            $design2 = get_field('works_design2', get_the_ID());

            // 画像が両方とも存在する場合
            if (!empty($design1) && !empty($design2)) {
            ?>
                <div class="works-detail__design-flex">
                    <div class="works-detail__pc">
                        <img class="works-detail__pc-img" src="<?php echo $design1['url']; ?>" alt="<?php echo $design1['alt']; ?>">
                    </div>
                    <div class="works-detail__mb">
                        <img class="works-detail__mb-img" src="<?php echo $design2['url']; ?>" alt="<?php echo $design2['alt']; ?>">
                    </div>
                </div>
            <?php
            }
            // design1のみ存在する場合
            elseif (!empty($design1)) {
            ?>
                <div class="works-detail__design">
                    <img class="works-detail__design-img" src="<?php echo $design1['url']; ?>" alt="<?php echo $design1['alt']; ?>">
                </div>
            <?php
            }

            ?>

        </section>


        <div class="section__btn slideinBottom">
            <a href="<?php echo esc_url(home_url('/works')); ?>" class="section__btn-link">Back</a>
        </div>
        <p class="btn-bottom-text slideinBottom">一覧に戻る</p>

    </div>

</main><!-- #main -->


<?php
// フッターを読み込む
get_footer();
