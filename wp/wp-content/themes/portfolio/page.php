<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portfolio
 */

 <?php
 get_header(); 
 ?>
 <main>
   <?php if ( is_post_type_archive( 'works' ) ) : ?>
	 <?php get_template_part( 'page', 'works' ); ?>
   <?php endif; ?>
 
   <?php if ( is_singular( 'works' ) ) : ?>
	 <?php get_template_part( 'single', 'works' ); ?>
   <?php endif; ?>
 
   <?php if ( is_page( 'about' ) ) : ?>
	 <?php get_template_part( 'page', 'about' ); ?>
   <?php endif; ?>
 
   <?php if ( is_page( 'contact' ) ) : ?>
	 <?php get_template_part( 'page', 'contact' ); ?>
   <?php endif; ?>
 
 </main>
 <?php
 get_footer(); 
 ?>