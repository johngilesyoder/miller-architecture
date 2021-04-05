<?php /*Template Name: Content Blocks */ get_header(); 
$page_header = get_field( "page_custom_header" );
$page_statement = get_field( "page_statement" );
?>

  <main role="main">
		<div class="container">

      <h1 class="page-title"><?php the_title(); ?></h1>

      <!--/* HERO ============== */-->
      <!--/* ========================== */-->
      <?php get_template_part( 'includes/hero' ); ?>
      
			<?php if ( $page_header ) : ?>
        <section class="page-intro">
          <h2 class="page-statement"><?php echo($page_header); ?></h2>
          <div class="page-summary">
            <p><?php echo($page_statement); ?></p>
          </div>
        </section>
      <?php endif; ?>
      
      <?php if( have_rows('content_blocks') ): ?>
        <section class="content-blocks">
        <?php while( have_rows('content_blocks') ): the_row(); 
          $photo = get_sub_field('block_photo');
          $title = get_sub_field('block_title');
          $subtitle = get_sub_field('block_subtitle');
          $summary = get_sub_field('block_summary');
          $tertiary = get_sub_field('block_tertiary_info');
        ?>

          <div class="content-block">
            <div class="block-photo-wrapper">

            <?php if( have_rows('block_gallery') ): ?>
              <div class="thumb-flickity-slider wrapper">
                <div class="thumb-carousel">
                  <?php while( have_rows('block_gallery') ): the_row();
                    $thumb = get_sub_field('thumbnail_image');
                  ?>
                    <div class="gallery-cell" data-flickity-bg-lazyload="<?php echo esc_url($thumb['url']); ?>"></div>
                  <?php endwhile; ?>
                </div>
              </div>
            <?php elseif($photo) : ?>
              <div class="block-photo" style="background-image:url('<?php echo esc_url($photo['url']); ?>');"></div>
              <?php if($tertiary) : ?>
                <div class="block-tertiary-info">
                  <?php echo($tertiary); ?>
                </div>
              <?php endif; ?>
            <?php endif; ?>



              
            </div>
            <div class="block-content">
              <?php if( $title ): ?>
                <h2 class="block-title"><?php echo($title); ?> <span class="block-subtitle"><?php echo($subtitle); ?></span></h2>
              <?php endif; ?>
              <div class="block-summary">
                <?php echo($summary); ?>
              </div>
            </div>
          </div>

        <?php endwhile; ?>
        </section>
      <?php endif; ?>

			<?php // while (have_posts()) : the_post(); ?>
			  <!-- <div <?php post_class('clearfix'); ?>>
					<?php the_content(); ?>
				</div> -->
			<?php // endwhile; ?>
		</div>
	</main>

<?php get_footer(); ?>
