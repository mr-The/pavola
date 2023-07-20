<?php
/**
 * Template name: Шаблон для Woocommerce
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package avs-eng
 */

get_header();
?>
	<div id="primary" class="container">
		<main id="main" class="row">
            <?php woocommerce_content(); ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();