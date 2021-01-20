<?php /*Template Name: Contact */ get_header(); 
$page_header = get_field( "page_custom_header" );
$page_statement = get_field( "page_statement" );
?>

  <main role="main">
		<div class="container">

      <h1 class="page-title"><?php the_title(); ?></h1>

      <!-- If gallery -->
      <?php if( have_rows('gallery') ): ?>
        <div class="flickity-slider wrapper">
          <div class="carousel">
          <?php while( have_rows('gallery') ): the_row(); 
            $image = get_sub_field('image');
          ?>

            <div class="gallery-cell" data-flickity-bg-lazyload="<?php echo esc_url($image['url']); ?>"></div>

          <?php endwhile; ?>
          </div>
        </div>
      <?php endif; ?>
      
      <section class="page-intro">
        <h2 class="page-statement"><?php echo($page_header); ?></h2>
        <div class="page-summary">
        <address>
          113 East Oak Street, Suite 2A<br>
          Bozeman, Montana 59715<br>
          406.551.6950<br>
          <a href="mailto: info@miller-roodell.com">info@miller-roodell.com</a>
        </address>
        </div>
      </section>
      
      <section class="content-blocks">
        <div class="content-block">
          <div class="block-photo-wrapper">
            <div class="block-photo" style="background-image:url('<?php echo esc_url($photo['url']); ?>');"></div>
          </div>
          <div class="block-content">
            <h2 class="block-title">Send us a message</h2>
            <div class="block-summary">
              <?php echo do_shortcode( '[gravityform id="1" name="Contact Form"]' ); ?>
            </div>
          </div>
        </div>
        <div class="content-block">
          <div class="block-photo-wrapper">
            <div class="block-photo" style="background-image:url('<?php echo esc_url($photo['url']); ?>');"></div>
          </div>
          <div class="block-content">
            <h2 class="block-title">View our Career Opportunities</h2>
            <div class="block-summary">
              <p>If you want to join a team of highly-driven, self-motivated, hard-working talented creative professionals, then we want to hear from you.</p>
              <p>Positions for which we are currently seeking candidates are:</p>
              <ul class="career-opportunities">
                <li><a href="/career-opportunities/">Architectural Intern</a></li>
                <li><a href="/career-opportunities/">Project Managerr</a></li>
                <li><a href="/career-opportunities/">Office Dog</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

			<?php // while (have_posts()) : the_post(); ?>
			  <!-- <div <?php post_class('clearfix'); ?>>
					<?php the_content(); ?>
				</div> -->
			<?php // endwhile; ?>
		</div>
	</main>

<?php get_footer(); ?>
