<?php /*Template Name: Press */ get_header(); ?>


<main role="main">
  <div class="container">

    <h1 class="page-title"><?php the_title(); ?></h1>

    <?php while (have_posts()) : the_post(); ?>

      <?php if( have_rows('press_pieces') ): ?>
        <div class="press-pieces">

          <?php while( have_rows('press_pieces') ): the_row();

            // vars
            $press_thumb = get_sub_field('press_thumbnail');
            $press_pdf = get_sub_field('press_pdf');

          ?>
          <div class="press-piece">

            <?php if( $press_pdf ): ?>
              <a class="miller-general" target="_blank" href="<?php echo $press_pdf ?>" style="background-image: url('<?php echo $press_thumb['url']; ?>');">
            <?php endif; ?>

              <?php echo $press_thumb['alt'] ?>

            <?php if( $press_pdf ): ?>
              </a>
            <?php endif; ?>

          </div>

          <?php endwhile; ?>

        </div>

        <?php endif; ?>

    <?php endwhile; ?>

  </div>
</main>

<?php get_footer(); ?>
