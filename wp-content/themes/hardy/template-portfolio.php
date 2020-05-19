<?php /*Template Name: Portfolio */ get_header(); ?>

<div class="container-fluid">
	<div class="page-title">
		<h1><?php the_title(); ?></h1>
	</div>
</div>

<main role="main">
	<div class="container-fluid">
    <?php while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; ?>
    <div class="project-blocks">

			<?php $tags_in_taxonomy_term = get_tags_in_taxonomy_term(); ?>

			<!-- If posts were found, -->
			<?php if ( $tags_in_taxonomy_term->have_posts() ) : ?>

				<!-- Loop through every post. -->
				<?php while ( $tags_in_taxonomy_term->have_posts() ) : $tags_in_taxonomy_term->the_post(); ?>

					<?php get_template_part( 'includes/project-block' ); ?>

				<?php endwhile; ?>

				<?php wp_reset_postdata(); ?>

			<?php endif; ?>

	</section>
</main>

<?php get_footer(); ?>
