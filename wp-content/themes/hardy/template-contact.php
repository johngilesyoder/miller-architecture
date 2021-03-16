<?php /*Template Name: Contact */ get_header(); 
$page_header = get_field( "page_custom_header" );
$page_statement = get_field( "page_statement" );
?>

  <main role="main">
		<div class="container">

      <h1 class="page-title"><?php the_title(); ?></h1>

      <!--/* HERO ============== */-->
      <!--/* ========================== */-->
      <?php get_template_part( 'includes/hero' ); ?>
      
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
            <div class="block-photo" style="background-image:url('<?php echo get_template_directory_uri(); ?>/dist/asset/img/contact-timg-01.jpg');"></div>
          </div>
          <div class="block-content">
            <h2 class="block-title">Send us a message</h2>
            <div class="block-summary">
              <?php echo do_shortcode( '[gravityform id="1" name="Contact Form"]' ); ?>
            </div>
          </div>
        </div>
        
      </section>

			<?php // while (have_posts()) : the_post(); ?>
			  <!-- <div <?php post_class('clearfix'); ?>>
					<?php the_content(); ?>
				</div> -->
			<?php // endwhile; ?>
		</div>
	</main>

<?php get_footer(); ?>
