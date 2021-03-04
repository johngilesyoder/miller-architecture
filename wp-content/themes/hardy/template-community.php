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
    <section class="page-masthead" style="background-image:url('<?php echo get_template_directory_uri(); ?>/dist/asset/img/soccer-2.gif');"></section>

    <?php if ( $page_header ) : ?>
      <section class="page-intro">
        <h2 class="page-statement"><?php echo($page_header); ?></h2>
        <div class="page-summary">
          <p><?php echo($page_statement); ?></p>
        </div>
      </section>
    <?php endif; ?>

    <section class="content-blocks">
      <div class="content-block">
        <div class="block-photo-wrapper">
          <div class="block-photo" style="background-image:url('<?php echo get_template_directory_uri(); ?>/dist/asset/img/project-library.jpg');"></div>
        </div>
        <div class="block-content">
          <h2 class="block-title">Public Library <span class="block-subtitle">White Sulphur Springs, MT</span></h2>
          <div class="block-summary">
            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Curabitur blandit tempus porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean lacinia bibendum nulla sed consectetur. Nullam id dolor id nibh ultricies vehicula ut id elit. Vestibulum id ligula porta felis euismod semper.</p>
            <p>4,500 SF &nbsp;|&nbsp; Completed December 2017</p>
          </div>
        </div>
      </div>

      <div class="content-block">
        <div class="block-photo-wrapper">
          <div class="block-photo" style="background-image:url('<?php echo get_template_directory_uri(); ?>/dist/asset/img/project-soccer.jpg');"></div>
        </div>
        <div class="block-content">
          <h2 class="block-title">North Side Soccer Facility <span class="block-subtitle">Livingston, MT</span></h2>
          <div class="block-summary">
            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Curabitur blandit tempus porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean lacinia bibendum nulla sed consectetur. Nullam id dolor id nibh ultricies vehicula ut id elit. Vestibulum id ligula porta felis euismod semper.</p>
            <p>4,500 SF &nbsp;|&nbsp; Completed December 2017</p>
          </div>
        </div>
      </div>
    </section>

    <?php if ( $second_page_header ) : ?>
      <section class="page-intro secondary">
        <h2 class="page-statement"><?php echo($second_page_header); ?></h2>
        <div class="page-summary">
          <p><?php echo($second_page_statement); ?></p>
        </div>
      </section>
    <?php endif; ?>

    <section class="content-blocks charities">
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
    </section>

			<?php while (have_posts()) : the_post(); ?>
			  <div <?php post_class('clearfix'); ?>>
					<?php the_content(); ?>
				</div>
			<?php endwhile; ?>
		</div>
  </main>

<?php get_footer(); ?>
