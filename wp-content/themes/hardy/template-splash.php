<?php /* Template Name: Splash */ ?>
<!doctype html>
<html id="splash-wrapper" <?php language_attributes(); ?> class="no-js">
  <head <?php do_action( 'add_head_attributes' ); ?>>

    <!-- Title -->
    <!-- =================================== -->
    <title><?php wp_title(''); ?></title>

    <!-- Styles -->
    <!-- =================================== -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/icon/favicon.png" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/icon/touch.png" rel="apple-touch-icon-precomposed">

    <!-- Meta -->
    <!-- =================================== -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Typekit -->
    <!-- =================================== -->
		<script src="https://use.typekit.net/ndo5mwt.js"></script>
	  <script>try{Typekit.load({ async: true });}catch(e){}</script>

    <!-- Wordpress Generated -->
    <!-- =================================== -->
    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>

    <!-- Google Analytics -->
    <!-- =================================== -->
    <?php get_template_part( 'includes/analyticstracking-old' ); ?>

		<img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/new-logo-white.svg" alt="Miller Roodell Architects" >

		<main role="main" class="message-wrapper">

			<div class="message">
				<h1>New name, same team, same passion.</h1>
				<p><strong>Miller Architects, Ltd.</strong> is now <strong>Miller | Roodell Architects</strong>! Our website and domain have changed along with us. If you are not redirected within 10 seconds, please click the link below to continue to the updated website.</p>
			</div>
			<a href="https://miller-roodell.com" class="btn-continue">
				Continue to website
			</a>

		</main>

		<script>
			window.setTimeout(function() {
				window.location.href = 'https://miller-roodell.com';
			}, 10000);
		</script>
		<?php wp_footer(); ?>
	</body>
</html>
