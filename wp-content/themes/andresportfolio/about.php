<?php
/**
 * The main template file.
 * Template Name:about page
 * @package Andres_Portfolio_Theme
 */

get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main about-page" role="main">
		<!-- Introduction -->
		<div class="about_intro about-display">
			<h2><?php echo  CFS()->get('intro_title'); ?></h2>
			<?php  echo wp_get_attachment_image( CFS()->get('intro_image'), 'large'); ?>
			<?php echo  CFS()->get('intro_content'); ?>
		</div>
		<hr class="decorative">
		<!-- Skills -->
		<div class="skill-list about-display">
			<h2>Software Skills</h2>
			<div class="software-skill skill-grid">
				<div class="skill">
					<div class="circle" data-value="0.95">
						<div class='circle-box'><img src="<?php echo get_template_directory_uri();?>/images/sketch.png" alt="Sketch Logo" /></div>
					</div>
					<span class="skill-name">Sketch</span>
				</div>
				<div class="skill">
					<div class="circle" data-value="0.95">
						<div class='circle-box'><img src="<?php echo get_template_directory_uri();?>/images/invision.png" alt="Invision Logo" /></div>
					</div>
					<span class="skill-name">InVision</span>
				</div>
				<div class="skill">
					<div class="circle" data-value="0.95">
						<div class='circle-box'><img src="<?php echo get_template_directory_uri();?>/images/axure.png" alt="Axure Logo" /></div>
					</div>
					<span class="skill-name">Axure</span>
				</div>
				<div class="skill">
					<div class="circle" data-value="0.95">
						<div class='circle-box'><img src="<?php echo get_template_directory_uri();?>/images/omnigraffle.png" alt="Omnigraffle Logo" /></div>
					</div>
					<span class="skill-name">Omnigraffle</span>
				</div>
				<div class="skill">
					<div class="circle" data-value="0.6">
						<div class='circle-box'><img src="<?php echo get_template_directory_uri();?>/images/illustrator.png" alt="Illustrator Logo" /></div>
					</div>
					<span class="skill-name">Illustrator</span>
				</div>
				<div class="skill">
					<div class="circle" data-value="0.6">
						<div class='circle-box'><img src="<?php echo get_template_directory_uri();?>/images/photoshop.png" alt="Photoshop Logo" /></div>
					</div>
					<span class="skill-name">Photoshop</span>
				</div>
				<div class="skill">
					<div class="circle" data-value="0.5">
						<div class='circle-box'><img src="<?php echo get_template_directory_uri();?>/images/html5.png" alt="HTML5 Logo" /></div>
					</div>
					<span class="skill-name">HTML5</span>
				</div>
				<div class="skill">
					<div class="circle" data-value="0.5">
						<div class='circle-box'><img src="<?php echo get_template_directory_uri();?>/images/css3.png" alt="CSS3 Logo" /></div>
					</div>
					<span class="skill-name">CSS3</span>
				</div>
			</div>
		</div>
		<!-- About Other Sections -->
		<?php
		$sections = CFS()->get( 'extra_sections' );
		$first = true;
		/* Section Loop*/
		foreach ($sections as $section) :
		if ($first) :
				$first = false;
		?>
				<hr class="decorative">
				<div class="about-section about-display">
					<h2><?php echo $section['section_name']?></h2>
					<?php echo $section['section_content'];?>

					<?php
						if ( array_key_exists( 'section_gallery', $section ) ) :
					?>
					<div class="gallery-large">
					<?php
						foreach ((array)$section['section_gallery'] as $sectionGallery) :
							echo wp_get_attachment_image($sectionGallery['section_image'], 'large');
						endforeach; endif; ?>
					</div>
					<?php
						if ( array_key_exists( 'section_parts', $section ) ) :
						foreach ((array) $section['section_parts'] as $sectionPart) :
					?>
								<div class="section-part about-display">
									<h3><?php echo $sectionPart['part_name']?></h3>
									<div class="gallery-large">
										<?php
										foreach ((array)$sectionPart['part_gallery'] as $partGallery):
												echo wp_get_attachment_image($partGallery['part_image'], 'large');;
										endforeach;
										?>
									</div>
									<?php echo $sectionPart['part_content'];?>
								</div>
					<?php endforeach; endif; ?>
				</div>
		<?php else: ?>
					<hr class="decorative">
					<div class="about-section about-display">
						<h2><?php echo $section['section_name']?></h2>
						<?php echo $section['section_content'];?>

						<?php
							if ( array_key_exists( 'section_gallery', $section ) ) :
						?>
						<div class="gallery-thumbnail">
						<?php
							foreach ((array)$section['section_gallery'] as $sectionGallery) :
								echo wp_get_attachment_image($sectionGallery['section_image'], 'thumbnail');
							endforeach; endif; ?>
						</div>
						<?php
							if ( array_key_exists( 'section_parts', $section ) ) :
							foreach ((array) $section['section_parts'] as $sectionPart) :
						?>
									<div class="section-part about-display">
										<h3><?php echo $sectionPart['part_name']?></h3>
										<div class="gallery-thumbnail">
											<?php
											foreach ((array)$sectionPart['part_gallery'] as $partGallery):
													echo wp_get_attachment_image($partGallery['part_image'], 'thumbnail');;
											endforeach;
											?>
										</div>
										<?php echo $sectionPart['part_content'];?>
									</div>
						<?php endforeach; endif; ?>
					</div>
		<?php endif; endforeach;?>
		<div class="endnote about-display">
			<p>Thank You for Reading!</p>
			<img src="<?php echo get_template_directory_uri();?>/images/8-bit-heart.png" alt="8 bit Heart" />
		</div>
  </main>
</div>
<?php get_footer(); ?>
