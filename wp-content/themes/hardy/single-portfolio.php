<?php get_header();
	$project_short_summary = get_field( "short_summary" );
	$project_location = get_field( "project_location" );
	$project_square_footage = get_field( "project_square_footage" );
  $project_completion_date = get_field( "project_completion_date" );
  $project_video = get_field("video");

	remove_shortcode('gallery');
  add_shortcode('gallery', 'gallery_shortcode_lo');

  function gallery_shortcode_lo($attr) {

  }
?>

<?php while (have_posts()) : the_post(); ?>

	<main role="main">
		<div class="container-fluid">
			<!-- PROJECT TITLE -->
			<h1 class="page-title"><?php the_title(); ?></h1>
			<!-- PROJECT SHORT SUMMARY -->
			<p class="project-short-summary"><?php echo $project_short_summary; ?></p>
			<!-- PROJECT GALLERY -->
			<div class="project-carousel gallery is-hidden">
				<?php
					// helper function to return first regex match
					function get_match( $regex, $content ) {
					    preg_match($regex, $content, $matches);
					    return $matches[1];
					}
					// Extract the shortcode arguments from the $page or $post
					$shortcode_args = shortcode_parse_atts(get_match('/\[gallery\s(.*)\]/isU', $post->post_content));

					// get the ids specified in the shortcode call
					$ids = explode(",",$shortcode_args["ids"]);
					foreach ( $ids as $current_id ) {
						echo '<div>';
						echo '<img data-flickity-lazyload="' . wp_get_attachment_image_src( $current_id, "full", false)[0]. '" alt="' . get_post_meta($current_id, '_wp_attachment_image_alt', true) . '" />';
						echo '<a class="pinit-button-custom" data-pin-do="buttonPin" data-pin-save="true" href="https://www.pinterest.com/pin/create/button/?url=' . get_permalink() . '&media=' . wp_get_attachment_image_src( $current_id, "full", false)[0] . '"></a>';
						echo '</div>';
					}
				?>
			</div>

			<div class="row">
				<div class="col-lg-8 order-lg-2">
					<!-- PROJECT DETAILS -->
					<section class="project-details">
						<div class="row">
							<div class="col-sm-6">
								<div class="details-build">
									<ul>
										<?php if ( $project_location !== '' ) : ?>
											<li><span class="detail-title">Location</span> <span class="detail-value"><?php echo $project_location; ?></span></li>
										<?php endif; ?>
										<?php if ( $project_square_footage !== '' ) : ?>
											<li><span class="detail-title">Area</span> <span class="detail-value"><?php echo $project_square_footage; ?> sf</span></li>
										<?php endif; ?>
										<?php if ( $project_completion_date !== '' ) : ?>
											<li><span class="detail-title">Completion Date</span> <span class="detail-value"><?php echo $project_completion_date; ?></span></li>
										<?php endif; ?>
									</ul>
								</div>
								<div class="details-press">
									<?php if( have_rows('project_press') ): ?>
										<h4>Press</h4>
										<ul>
											<?php while( have_rows('project_press') ): the_row();
												// vars
												$press_publication = get_sub_field('press_publication');
												$press_publication_date = get_sub_field('press_publication_date');
												$press_link = get_sub_field('press_link');
											?>
												<li><a href="<?php echo $press_link; ?>" class="publication"><?php echo $press_publication; ?></a> – <span class="publication-date"><?php echo $press_publication_date; ?></span></li>
											<?php endwhile; ?>
										</ul>
									<?php endif; ?>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="details-awards">
									<?php if( have_rows('project_awards') ): ?>
										<h4>Awards</h4>
										<ul>
											<?php while( have_rows('project_awards') ): the_row();
												// vars
												$award_organization = get_sub_field('award_organization');
												$award_title = get_sub_field('award_title');
											?>
												<li><span class="detail-title"><?php echo $award_organization; ?></span> <span class="detail-value"><?php echo $award_title; ?></span></li>
											<?php endwhile; ?>
										</ul>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</section>
				</div>
				<!-- PROJECT CONTENT -->
				<div class="col-lg-4 order-lg-1">
			    <div <?php post_class('clearfix project-summary'); ?>>
						<?php the_content(); ?>
						<div class="project-actions">
							<a class="back-link" href="/portfolio/">All Projects</a>
							<a class="pinterest-share" data-pin-do="buttonBookmark" data-pin-custom="true" data-pin-save="false" href="https://www.pinterest.com/pin/create/button/">Share on Pinterest</a>
						</div>
					</div>
				</div>
      </div>
      
      <?php if ($project_video): ?>
        <!-- PROJECT VIDEO -->
        <div class="row">
          <div class="col-md-12">
            <div class="project-video">
              <div class="video-wrapper">
                <?php echo $project_video; ?>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>

			<!-- FEATURED PROJECTS -->
			<section class="featured-projects">
				<h3>Featured Projects</h3>
				<div class="project-blocks">
					<!-- Loop through projects -->
					<?php
						$args = array( 'post_type' => 'portfolio', 'posts_per_page' => 3, 'tag' => 'featured' );
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();
					?>

						<?php get_template_part( 'includes/project-block' ); ?>

					<?php endwhile; ?>
					<?php wp_reset_query(); ?>
				</div>
			</section>
		</div>
	</main>

	<?php endwhile; ?>

<?php get_footer(); ?>
