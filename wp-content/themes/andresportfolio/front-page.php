<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<ul class="project-list">
				<?php
					$args = array( 'post_type' => 'project');
					$projects = new WP_Query( $args );
					while ( $projects->have_posts()) : $projects->the_post();
					if (CFS()->get( 'proj_display' ) == 1):
				?>
					<li>
						<?php the_title( '<h3>', '</h3>' ); ?>
						<div class="project-wrapper">
							<div class="project-features">
							<?php $features = CFS()->get( 'proj_feature' );
									$images = get_post_meta(get_the_id(),'proj_image',false);
									$count = count($images);
									if ($count==1):?>
											<div class="feature1">
													<?php foreach ((array) $features as $feature) :
															echo wp_get_attachment_image($feature['proj_image'], 'medium');
														endforeach;?>
											</div>
										<?php endif;
									if ($count==2):?>
												<div class="feature2">
														<?php foreach ((array) $features as $feature) :
																echo wp_get_attachment_image($feature['proj_image'], 'medium');
															endforeach;?>
												</div>
										<?php endif;
									if ($count==3):?>
												<div class="feature3">
														<?php foreach ((array) $features as $feature) :
																echo wp_get_attachment_image($feature['proj_image'], 'medium');
															endforeach;?>
												</div>
									<?php endif;?>
							</div>
							<div class="project-overview">
								<p class="overview-header">Project overview:</p>
								<?php $intro = CFS()->get( 'proj_intro' );
								$shortIntro = wp_trim_words( $intro, $num_words = 50, $more = '… ' );?>
								<p class="overview-intro"><?php echo $shortIntro; ?></p>

								<a href="<?php echo get_permalink();?>"><button>Read more</button></a>
							</div>
						</div>
						<hr class="decorative">
					</li>
				<?php endif; endwhile;
				wp_reset_postdata(); ?>
		</ul>
    </main><!-- #main -->
  </div><!-- #primary -->
<?php get_footer(); ?>
