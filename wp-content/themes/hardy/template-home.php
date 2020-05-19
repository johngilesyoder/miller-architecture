<?php /* Template Name: Home */ get_header();
$custom_header = get_field( "page_custom_header" );
?>

	<main role="main">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">

					<?php while (have_posts()) : the_post(); ?>
					    <div <?php post_class('clearfix'); ?>>
							<?php the_content(); ?>
						</div>
					<?php endwhile; ?>

					<!-- HOME MESSAGE -->
					<div class="home-message">
						<h2 class="page-statement"><?php echo($custom_header); ?></h2>
						<div class="homepage-summary">
							<?php the_field( "homepage_summary_statement" ); ?>
						</div>
					</div>

					<div class="home-secondary-blocks">
						<!-- VIDEO CALLOUT -->
						<a href="#" data-toggle="modal" data-target="#modal-video" class="block-video block">
							<div class="gradient-bg"></div>
							<div class="block-wrapper">
								<span class="btn-play"><i></i></span>
								<p>
                  “They designed a house that accomplishes the near impossible, that actually enhances the spectacular beauty of our surroundings.” – David and Brooke James
									<!-- <a href="#" data-toggle="modal" data-target="#modal-video"><strong>Watch a short video</strong></a> about our passion and attention to detail. -->
								</p>
							</div>
						</a>
						<a href="http://www.mountainliving.com/People/The-ML-List-Top-Architects-Designers-2019/" target="_blank" class="block-ml block">
							<div class="gradient-bg"></div>
							<div class="block-wrapper">
								<img class="ml-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/ml-logo.png?v=2019" />
								<p>Miller Roodell Architects has been selected as a 2019 Top Mountain Architect &amp; Designer by the editors of Mountain Living.</p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</main>

	<!-- MODAL -->
  <div class="modal fade" id="modal-video" tabindex="-1" role="dialog" aria-labelledby="modal-video-label">
	  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="modal-video">
            <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/J7Hs0iwrQCo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
	  </div>
  </div>

<?php get_footer(); ?>
