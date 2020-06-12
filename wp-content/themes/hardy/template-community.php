<?php /*Template Name: Community */
get_header();
$custom_header = get_field( "page_custom_header" );
?>

	<!-- post thumbnail -->
	<section class="page-masthead" style="background-image:url('<?php echo get_template_directory_uri(); ?>/dist/asset/img/soccer-2.gif');">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="page-title">
            <h1><?php the_title(); ?></h1>
            <p class="page-summary">Nullam id dolor id nibh ultricies vehicula ut id elit. Nulla vitae elit libero, a pharetra augue.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

	<main role="main">
    <section class="community-intro">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-lg-5 offset-lg-1">
            <h2>Bigger than architecture.</h2>
            <p>Etiam porta sem malesuada magna mollis euismod. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nulla vitae elit libero, a pharetra augue. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
            <p>Ponec id elit non mi porta gravida at eget metus. Curabitur blandit tempus porttitor. Cras mattis consectetur purus sit amet fermentum. Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>
          </div>
          <div class="col-lg-4 offset-lg-1">
            <img class="community-intro-img" src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/community-intro.jpg" alt="Photo of Library project">
          </div>
        </div>
      </div>
    </section>
    <section class="community-projects">
      <div class="container-fluid">
        <h3>Pro-Bono Projects</h3>
        <!-- PROJECT -->
        <div class="community-project">
          <img class="project-img" src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/project-library.jpg">
          <div class="project-details">
            <h4>White Sulphur Springs Public Library</h4>
            <p>Curabitur blandit tempus porttitor. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Etiam porta sem malesuada magna mollis euismod. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur blandit tempus porttitor.</p>
            <div class="details-build">
              <ul>
                <li><span class="detail-title">Location</span> <span class="detail-value">White Sulfur Springs, MT</span></li>
                <li><span class="detail-title">Area</span> <span class="detail-value">4,292 sf</span></li>
                <li><span class="detail-title">Completion Date</span> <span class="detail-value">March 2019</span></li>
              </ul>
            </div>
            <button type="button" class="btn-normal" data-toggle="modal" data-target="#galleryModal-1">View Gallery</button>
          </div>
        </div>
        <!-- PROJECT -->
        <div class="community-project">
          <img class="project-img" src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/project-soccer.jpg">
          <div class="project-details">
            <h4>Livingston North Side Soccer Building</h4>
            <p>Curabitur blandit tempus porttitor. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Etiam porta sem malesuada magna mollis euismod. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur blandit tempus porttitor.</p>
            <div class="details-build">
              <ul>
                <li><span class="detail-title">Location</span> <span class="detail-value">Livingston, MT</span></li>
                <li><span class="detail-title">Area</span> <span class="detail-value">4,292 sf</span></li>
                <li><span class="detail-title">Completion Date</span> <span class="detail-value">December 2017</span></li>
              </ul>
            </div>
            <button type="button" class="btn-normal" data-toggle="modal" data-target="#galleryModal-2">View Gallery</button>
          </div>
        </div>
      </div>
    </section>

    <section class="charitable-orgs">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="section-header">
              <h3>Giving Back</h3>
              <p>We work with charities and organizations that we truly believe in, so that we can help make a genuine impact in our community. Here are some of the charities we support in the local community, and what they’re doing to stand out:</p>
            </div>
          </div>
        </div>
        <div class="the-orgs">
          <div class="organization">
            <img class="organization-logo" src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/logo-reel-recovery.png">
            <h4>Reel Recovery</h4>
            <p>The mission of Reel Recovery is to help men in the cancer recovery process by introducing them to the healing powers of the sport of fly-fishing, while providing a safe, supportive environment to explore their personal experiences of cancer with others who share their stories.</p>
            <a href="https://reelrecovery.org/" target="_blank" class="btn-normal">Learn More</a>
          </div>
          <div class="organization">
            <img class="organization-logo" src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/logo-windhorse.jpg">
            <h4>Reel Recovery</h4>
            <p>Windhorse Equine Learning helps Gallatin and Park County youth better manage the demands and challenges of their lives by encouraging the development of interpersonal and other life skills, including self-confidence, compassion, respect, and responsibility.</p>
            <a href="https://windhorseequinelearning.org/" target="_blank" class="btn-normal">Learn More</a>
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

  <div class="modal modal-gallery fade" id="galleryModal-1" tabindex="-1" role="dialog" aria-labelledby="galleryModal-1Label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="galleryModal-1Label">White Sulfur Springs Public Library</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- PROJECT GALLERY -->
          <div class="project-carousel gallery">
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/wss-1.jpg" />
            </div>
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/wss-2.jpg" />
            </div>
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/wss-3.jpg" />
            </div>
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/wss-4.jpg" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal modal-gallery fade" id="galleryModal-2" tabindex="-1" role="dialog" aria-labelledby="galleryModal-2Label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="galleryModal-2Label">Livingston North Side Soccer Building</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- PROJECT GALLERY -->
          <div class="project-carousel gallery">
          <div>
              <img src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/lns-1.jpg" />
            </div>
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/lns-2.jpg" />
            </div>
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/lns-3.jpg" />
            </div>
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/lns-4.jpg" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
