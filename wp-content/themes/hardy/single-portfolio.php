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
		<div class="container">

      <h1 class="page-title"><?php the_title(); ?></h1>

      <div class="gallery is-hidden">
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
            echo '<div><img data-flickity-lazyload="' . wp_get_attachment_image_src( $current_id, "full", false)[0]. '"></div>';
          }
        ?>
      </div>
      
      <section class="page-intro">
        <h2 class="page-statement"><?php echo $project_short_summary; ?></h2>
        <div class="page-summary">
          <div class="details-build">
            <ul>
              <?php if ( $project_location !== '' ) : ?>
                <li><span class="detail-title">Location:</span> <span class="detail-value"><?php echo $project_location; ?></span></li>
              <?php endif; ?>
              <?php if ( $project_square_footage !== '' ) : ?>
                <li><span class="detail-title">Area:</span> <span class="detail-value"><?php echo $project_square_footage; ?> sf</span></li>
              <?php endif; ?>
              <?php if ( $project_completion_date !== '' ) : ?>
                <li><span class="detail-title">Completion Date:</span> <span class="detail-value"><?php echo $project_completion_date; ?></span></li>
              <?php endif; ?>
            </ul>
          </div>
        </div>
      </section>

      <section class="content-blocks">

        <div class="content-block">
          <div class="block-photo-wrapper">
            <div class="block-photo" style="background-image:url('<?php echo (the_post_thumbnail_url()); ?>');"></div>
          </div>
          <div class="block-content">
            <h2 class="block-title">
              <?php the_title(); ?>
              <?php if( has_term('', 'portfolio-category') ) : ?>
                <span class="block-subtitle">
                  <?php 

                    $cat_array = ( get_the_terms( get_the_ID(), 'portfolio-category') ); 

                    $cat_str = array(); 
                    
                    foreach ($cat_array as $cat) {
                        
                        $cat_str[] = $cat->name;

                    }
                    echo implode(" / ",$cat_str) . ''; 

                  ?>
                </span>
              <?php endif; ?>
            </h2>
            <div class="block-summary">
              <?php the_content(); ?>
            </div>
          </div>
        </div>

      </section>

			<!-- <div class="row">
				<div class="col-lg-8 order-lg-2">
					<section class="project-details">
						<div class="row">
							<div class="col-sm-6">
								
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
      </div> -->
      
      <?php // if ($project_video): ?>
        <!-- PROJECT VIDEO -->
        <!-- <div class="row">
          <div class="col-md-12">
            <div class="project-video">
              <div class="video-wrapper">
                <?php echo $project_video; ?>
              </div>
            </div>
          </div>
        </div> -->
      <?php // endif; ?>

		</div>
	</main>

	<?php endwhile; ?>

<?php get_footer(); ?>
