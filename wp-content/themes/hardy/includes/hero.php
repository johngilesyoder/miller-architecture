<?php if( have_rows('gallery') ): ?>
  <div class="gallery is-hidden">
    <?php while( have_rows('gallery') ): the_row(); 
      $image = get_sub_field('image');
    ?>
      <div>
        <img src="<?php echo esc_url($image['url']); ?>" alt="[alt]" />
      </div>
    <?php endwhile; ?>
  </div>
<?php elseif(has_post_thumbnail() ) : ?>
  <img class="feature-img" src="<?php the_post_thumbnail_url(); ?>">
<?php endif; ?>