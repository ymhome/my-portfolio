<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package portfolio
 */

get_header();
?>

	<main id="primary" class="site-main">

	<section class="error-page">
		<h1 class="error-page__code">404</h1>
		<p class="error-page__message">お探しのページは見つかりませんでした。</p>
		<a href="<?php echo esc_url(home_url('/')); ?>" class="error-page__link">トップページに戻る</a>
  </section>


	</main><!-- #main -->

<?php
get_footer();
