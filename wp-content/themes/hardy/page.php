<?php get_header(); 
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
      
			<?php if ( $page_header ) : ?>
        <section class="page-intro">
          <h2 class="page-statement"><?php echo($page_header); ?></h2>
          <div class="page-summary">
            <?php echo($page_statement); ?>
          </div>
        </section>
      <?php endif; ?>

			<?php while (have_posts()) : the_post(); ?>
			  <div <?php post_class('clearfix'); ?>>
					<?php the_content(); ?>
				</div>
			<?php endwhile; ?>
		</div>
	</main>

<?php get_footer(); ?>
