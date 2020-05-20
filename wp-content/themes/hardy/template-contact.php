<?php /* Template Name: Contact */ get_header(); ?>

<!-- post thumbnail -->
<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
	<div class="page-billboard" style="background-image: url('<?php the_post_thumbnail_url( full ); ?>');">
		<span class="gradient"></span>
		<div class="container-fluid">
			<h1><?php the_title(); ?></h1>
		</div>
	</div>
<?php else : ?>
	<div class="container-fluid">
		<h1 class="page-title"><?php the_title(); ?></h1>
	</div>
<?php endif; ?>

	<main role="main">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<?php if ( $custom_header ) : ?>
						<h2 class="page-statement"><?php echo($custom_header); ?></h2>
					<?php endif; ?>

					<img class="feature-img" src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/contact-feature.jpg" alt="contact_1" />

		      <div class="row">
		        <div class="col-sm-4">
		          <address>
		            113 East Oak Street, Suite 2A<br>
		            Bozeman, Montana 59715<br><br>
		            406.551.6950<br>
		            <a href="mailto: info@miller-roodell.com">info@miller-roodell.com</a>
		          </address>
		          <p class="careers-link">View our <a href="/career-opportunities">Career Opportunities</a></p>
		        </div>
		        <div class="col-sm-8">
		          <h4>Send us a message</h4>
		          <?php echo do_shortcode( '[gravityform id="1" name="Contact Form"]' ); ?>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</main>

<?php get_footer(); ?>
