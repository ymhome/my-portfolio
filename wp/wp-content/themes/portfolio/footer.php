<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portfolio
 */

?>

<footer id="colophon" class="site-footer">
	<div class="footer__inner">
		<div class="footer__flex">
			<a href="<?php echo esc_url(home_url('/')); ?>" class="footer__logo-link">

				<img src="<?php echo get_template_directory_uri(); ?>/images/logo-wh.svg" alt="logo" class="footer__logo">
			</a>
			<a href="mailto:manauyasumori@gmail.com" class="footer__mail">manauyasumori@gmail.com</a>
		</div>
		<ul class="footer__link-list wrapper">
			<li class="footer__link-item">

				<a href="<?php echo esc_url(home_url('/')); ?>" class="footer__link">トップ</a>
			</li>
			<li class="footer__link-item">

				<a href="<?php echo esc_url(home_url('/privacy')); ?>" class="footer__link">プライバシーポリシー</a>
			</li>
			<li class="footer__link-item">

				<a href="<?php echo esc_url(home_url('/contact')); ?>" class="footer__link">お問い合わせ</a>
			</li>
		</ul>
		<small class="footer__copy">&copy; ManauYasumori PortfolioSite</small>
	</div>
</footer><!-- #colophon -->



<div id="stalker">

	<img src="<?php echo get_template_directory_uri(); ?>/images/mouse-stalker.svg" class="stalker-image">

</div>

<?php wp_footer(); ?>

</body>

</html>