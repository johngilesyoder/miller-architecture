<?php /* Template Name: Home */ get_header();
$page_header = get_field( "page_custom_header" );
$page_statement = get_field( "page_statement" );
?>

	<main role="main">
    <div class="container">

      <!-- PROJECT GALLERY -->
      <?php if( have_rows('gallery') ): ?>
        <div class="project-carousel gallery is-hidden">
          <?php while( have_rows('gallery') ): the_row(); 
            $image = get_sub_field('image');
          ?>
            <div>
              <img data-flickity-lazyload="<?php echo esc_url($image['url']); ?>" alt="[alt]" />
            </div>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>

      <?php if ( $page_header ) : ?>
        <section class="page-intro">
          <h2 class="page-statement"><?php echo($page_header); ?></h2>
          <div class="page-summary">
            <p><?php echo($page_statement); ?></p>
          </div>
        </section>
      <?php endif; ?>

      <!--/* Testimonial ============== */-->
      <!--/* ========================== */-->
      <?php get_template_part( 'includes/home/video' ); ?>
    
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
