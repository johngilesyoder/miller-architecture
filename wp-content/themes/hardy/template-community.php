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

    <section class="content-blocks projects">
      <div class="content-block">
        <div class="block-photo-wrapper">
          <div class="block-photo" style="background-image:url('<?php echo get_template_directory_uri(); ?>/dist/asset/img/project-library.jpg');"></div>
        </div>
        <div class="block-content">
          <h2 class="block-title">Meagher County City Library</h2>
          <span class="block-subtitle">
            White Sulphur Springs, MT<br>
            4,700 SF &nbsp;|&nbsp; Completed March 2018
          </span>
          <div class="block-summary">
            <p>This public library and community center project was completed pro bono and opened its doors to the rural ranch community of White Sulphur Springs in 2018. The ADA compliant design facilitates a wide range of activities and public functions that support the library’s mission of promoting lifelong learning, a love of reading, and access to information across all demographics.</p>
            <p>The multifunctional building is not just a public library in the traditional sense, though of course there is lots of room for a growing book collection. Its spaces are adaptable to a wide range of uses, just as libraries today find themselves providing a wide array of community services, materials, and technology – everything from after school learning programs to computer labs, a public meeting room to a Montana Lounge for reading, and a Historical Archive that celebrates the history of the surrounding area.</p>
          </div>
        </div>
      </div>

      <div class="content-block">
        <div class="block-photo-wrapper">
          <div class="block-photo" style="background-image:url('<?php echo get_template_directory_uri(); ?>/dist/asset/img/project-soccer.jpg');"></div>
        </div>
        <div class="block-content">
          <h2 class="block-title">Northside Park & Dickerson Soccer Fields</h2>
          <span class="block-subtitle">
            Livingston, MT<br>
            3,900 SF heated | 650 SF outdoor   |   Completed December 2017
          </span>
          <div class="block-summary">
            <p>Livingston, Montana’s Northside Park & Dickerson Soccer Fields was a community partnership between the City of Livingston and Livingston Youth Soccer Association (LYSA). Home to LYSA Raiders Soccer Club, the park has three full-sized soccer fields, a walking path, and beautiful views. It is also home to the Northside Park Field House and Event Center. The facility is available for rent, and also houses a concession stand and restrooms.</p>
            <p>Miller Roodell Architects became involved during the earliest stages of the project in 2011. Beginning with initial concepts, we designed the facility, assisted in fundraising efforts, secured approvals, and through 2015 – 2017 solicited bids and guided the project to the finish through construction administration.</p>
            <p>Several members of our team are proud to call Livingston home, and Miller Roodell has strong ties to the city. We are proud to have helped realize LYSA Board of Directors President Jeff Dickerson’s vision for Livingston’s Northside Park: an athletically-oriented community center, where young athletes and guests find shelter from the elements and comfortable spaces to spectate during soccer games and tournaments.</p>
            <p>Contributing Project Team & Community Partners:<br>
              LYSA – Board of Directors &nbsp;|&nbsp; Jeff Dickerson, President</p>
            <p>
              Surveyor &nbsp;|&nbsp; Hallin & Associates<br>
              Geotechnical &nbsp;|&nbsp; Castle Rock Geotechnical Engineering, Inc.<br>
              Civil &nbsp;|&nbsp; CTA Architects Engineers<br>
              Structural &nbsp;|&nbsp; Beaudette Consulting Engineers, Inc. [ now DCI Engineers ]<br>
              Lighting Design &nbsp;|&nbsp; Elements Lighting <br>
              Project Manual &nbsp;|&nbsp; Bechtle Architects<br>
              Budget Estimating &nbsp;|&nbsp; Battle Ridge Construction<br>
              Construction Management &nbsp;|&nbsp; Allen Construction Management<br>
              General &nbsp;|&nbsp; Spring Construction
            </p>
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
