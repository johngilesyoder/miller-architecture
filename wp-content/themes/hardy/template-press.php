<?php /*Template Name: Press */ get_header(); ?>

<!-- post thumbnail -->
<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
	<div class="page-billboard" style="background-image: url('<?php the_post_thumbnail_url( full ); ?>');">
		<span class="gradient"></span>
		<div class="container-fluid">
			<h1><?php the_title(); ?></h1>
		</div>
	</div>
<?php else : ?>
	<div class="container">
		<h1 class="page-title"><?php the_title(); ?></h1>
	</div>
<?php endif; ?>

	<main role="main">
		<div class="container">
			<?php if ( $custom_header ) : ?>
				<h2 class="page-statement"><?php echo($custom_header); ?></h2>
			<?php endif; ?>

			<?php while (have_posts()) : the_post(); ?>
				<div class="page-content">
					<?php the_content(); ?>
				</div>
				<div class="press-pieces">
					<?php if( have_rows('press_pieces') ): ?>

					<div class="row">

					<?php while( have_rows('press_pieces') ): the_row();

						// vars
						$press_thumb = get_sub_field('press_thumbnail');
						$press_pdf = get_sub_field('press_pdf');

						?>

						<div class="col-xs-6 col-sm-4 col-md-3">
							<div class="press-piece">

								<?php if( $press_pdf ): ?>
									<a class="miller-general" target="_blank" href="<?php echo $press_pdf ?>" style="background-image: url('<?php echo $press_thumb['url']; ?>');">
								<?php endif; ?>

									<?php echo $press_thumb['alt'] ?>

								<?php if( $press_pdf ): ?>
									</a>
								<?php endif; ?>

							</div>
						</div>

					<?php endwhile; ?>

					</div>

					<?php endif; ?>

				</div>

			<?php endwhile; ?>

		</div>
	</main>

<?php get_footer(); ?>
