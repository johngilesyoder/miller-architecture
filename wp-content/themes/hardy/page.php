<?php get_header(); 
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
      
      
			<?php // while (have_posts()) : the_post(); ?>
			  <div <?php post_class('basic-content'); ?>>
					<?php the_content(); ?>
				</div>
			<?php // endwhile; ?>
		</div>
	</main>

<?php get_footer(); ?>
