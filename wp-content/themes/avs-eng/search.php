<?php
get_header();
?>

<section id="primary" class="content-area">
		<main id="main" class="site-main">

				<?php if (have_posts()): ?>

							<header class="page-header">
									<h1 class="page-title">
											<?php
											/* translators: %s: search query. */
											printf(esc_html__('Search Results for: %s', 'avs-eng'), '<span>' . get_search_query() . '</span>');
											?>
									</h1>
							</header><!-- .page-header -->

							<?php
							/* Start the Loop */
							while (have_posts()):
								the_post();
								?>
										<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
												<header class="entry-header">
														<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
												</header><!-- .entry-header -->

												<div class="entry-content">
														<?php the_excerpt(); ?>
												</div><!-- .entry-content -->
										</article><!-- #post-<?php the_ID(); ?> -->
										<?php
							endwhile;

							the_posts_navigation();

				else:

					get_template_part('template-parts/content', 'none');

				endif;
				?>

		</main><!-- #main -->
</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>
