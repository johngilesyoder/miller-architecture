<?php /*Template Name: Community */
get_header();
$page_header = get_field( "page_custom_header" );
$page_statement = get_field( "page_statement" );
$second_page_header = get_field( "second_page_header" );
$second_page_statement = get_field( "second_page_statement" );
?>

<main role="main">
  <div class="container">
    <h1 class="page-title"><?php the_title(); ?></h1>
    <!-- post thumbnail -->
    <section class="page-masthead" style="background-image:url('<?php echo get_template_directory_uri(); ?>/dist/asset/img/comm-hero-01.gif');"></section>

    <?php if ( $page_header ) : ?>
      <section class="page-intro">
        <h2 class="page-statement"><?php echo($page_header); ?></h2>
        <div class="page-summary">
          <p><?php echo($page_statement); ?></p>
        </div>
      </section>
    <?php endif; ?>


    <?php if( have_rows('content_blocks') ): ?>
      <section class="content-blocks projects">
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
              <h2 class="block-title"><?php echo($title); ?></h2>
              <span class="block-subtitle"><?php echo($subtitle); ?></span>
            <?php endif; ?>
            <div class="block-summary">
              <?php echo($summary); ?>
            </div>
          </div>
        </div>

      <?php endwhile; ?>
      </section>
    <?php endif; ?>

    <?php if ( $second_page_header ) : ?>
      <section class="page-intro secondary">
        <h2 class="page-statement"><?php echo($second_page_header); ?></h2>
        <div class="page-summary">
          <p><?php echo($second_page_statement); ?></p>
        </div>
      </section>
    <?php endif; ?>


    <?php if( have_rows('charity_blocks') ): ?>
      <section class="content-blocks charities">
      <?php while( have_rows('charity_blocks') ): the_row(); 
        $photo = get_sub_field('block_photo');
        $title = get_sub_field('block_title');
        $subtitle = get_sub_field('block_subtitle');
        $summary = get_sub_field('block_summary');
        $tertiary = get_sub_field('block_tertiary_info');
      ?>

        <div class="content-block">
          <div class="block-photo-wrapper">
            <?php if($photo) : ?>
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
              <h2 class="block-title"><?php echo($title); ?></h2>
            <?php endif; ?>
            <div class="block-summary">
              <?php echo($summary); ?>
            </div>
          </div>
        </div>

      <?php endwhile; ?>
      </section>
    <?php endif; ?>



    <!-- <section class="content-blocks charities">
      <div class="content-block">
        <div class="block-photo-wrapper">
          <div class="block-photo" style="background-image:url('<?php echo get_template_directory_uri(); ?>/dist/asset/img/logo-reel-recovery.png');"></div>
        </div>
        <div class="block-content">
          <h2 class="block-title">Reel Recovery</h2>
          <div class="block-summary">
            <p>The mission of Reel Recovery is to help men in the cancer recovery process by introducing them to the healing powers of the sport of fly-fishin, while providing a safe, supportive environment to explore their personal experiences of cancer with others who share their stories.</p>
            <p><a target="_blank" href="https://reelrecovery.org/">Click here to learn more</a></p>
          </div>
        </div>
      </div>

      <div class="content-block">
        <div class="block-photo-wrapper">
          <div class="block-photo" style="background-image:url('<?php echo get_template_directory_uri(); ?>/dist/asset/img/logo-windhorse.jpg');"></div>
        </div>
        <div class="block-content">
          <h2 class="block-title">Windhorse Equine Learning</h2>
          <div class="block-summary">
            <p>With the horse as partner, Windhorse Equine learning helps Gallatin and Park County youth better manage the demands and challenges of their lives by encouraging the development of interpersonal and other life skills, building self-confidence, compassion, respect, and responsibility.</p>
            <p><a target="_blank" href="https://windhorseequinelearning.org/">Click here to learn more</a></p>
          </div>
        </div>
      </div>
    </section> -->

			<?php while (have_posts()) : the_post(); ?>
			  <div <?php post_class('clearfix'); ?>>
					<?php the_content(); ?>
				</div>
			<?php endwhile; ?>
		</div>
  </main>

<?php get_footer(); ?>
