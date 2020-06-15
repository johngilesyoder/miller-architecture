<?php /* Template Name: Home */ get_header(); ?>

	<main role="main">

    <!--/* Hero ===================== */-->
    <!--/* ========================== */-->
    <?php get_template_part( 'includes/home/hero' ); ?>

    <!--/* Intro ==================== */-->
    <!--/* ========================== */-->
    <?php get_template_part( 'includes/home/intro' ); ?>

    <!--/* Testimonial ============== */-->
    <!--/* ========================== */-->
    <?php get_template_part( 'includes/home/testimonial' ); ?>

    <!--/* Blocks =================== */-->
    <!--/* ========================== */-->
    <?php get_template_part( 'includes/home/blocks' ); ?>

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


  <!-- Modal -->
  <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>        
          <!-- 16:9 aspect ratio -->
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
          </div> 
        </div>
      </div>
    </div>
  </div> 

<?php get_footer(); ?>
