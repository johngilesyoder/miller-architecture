<?php $custom_header = get_field( "page_custom_header" ); ?>

<section class="home-intro">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <h2 class="page-statement"><?php echo($custom_header); ?></h2>
        <div class="homepage-summary">
          <?php the_field( "homepage_summary_statement" ); ?>
        </div>
      </div>
    </div>
  </div>
</section>