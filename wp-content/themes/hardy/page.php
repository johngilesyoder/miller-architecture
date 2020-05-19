<?php get_header();
$custom_header = get_field( "page_custom_header" );
?>

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
			<?php if ( $custom_header ) : ?>
				<h2 class="page-statement"><?php echo($custom_header); ?></h2>
			<?php endif; ?>

			<?php while (have_posts()) : the_post(); ?>
			  <div <?php post_class('clearfix'); ?>>
					<?php the_content(); ?>
				</div>
			<?php endwhile; ?>
		</div>
	</main>

<?php get_footer(); ?>
