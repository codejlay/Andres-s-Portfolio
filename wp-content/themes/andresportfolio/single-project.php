<?php
/**
 * The template for displaying all single project.
 *
 * @package Andres_Portfolio_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="project-display">
					<?php the_title( '<h2>', '</h2>' );
					 			echo CFS()->get('proj_intro');
					 			$components = CFS()->get( 'proj_components' );
						foreach ((array) $components as $component) :
					?>
								<div class="project-display">
									<h3><?php echo $component['component_name']?></h3>
									<?php echo $component['component_content'];?>
									<div class="project-gallery">
										<?php
										if ( array_key_exists( 'component_gallery', $component ) ) :
										foreach ((array)$component['component_gallery'] as $componentGallery):
												echo wp_get_attachment_image($componentGallery['component_image'], 'large');;
										endforeach;
										?>
									</div>
								</div>
					<?php endif; endforeach;  ?>
			</div>
    </main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
