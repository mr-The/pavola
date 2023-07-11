<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package avs-eng
 */

get_header();
?>
 <div class="section_area">
	<div id="primary" class="container">
		<main id="main" class="row">
		
		<?php if ( have_posts() ) : ?>

			
				 <div class="section_title">
				 	
                    <?php
                
				the_archive_title( '<h2 class="page-title">', '</h2>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
              <div class="slide_arrow">
                            <ul>
                                <li class="project-prev"></li>
                                <li class="project-next"></li>
                            </ul>
                        </div>
                </div>
			<!-- .page-header -->
  <div class="slider_areawrap">
  	<div class="news-slider" id="project">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
</div>
</div>
		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php
get_footer();
