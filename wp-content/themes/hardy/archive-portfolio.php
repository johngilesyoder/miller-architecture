<?php get_header(); ?>

<?php $currentTerm = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>

<?php $detect = new Mobile_Detect; ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-4">
      <div class="page-title">
        <h1>Portfolio</h1>
      </div>
    </div>
    <div class="col-md-8">
      <?php if ( $detect->isMobile() ) : ?>
        <select id="category" class="portfolio-categories-dropdown form-control">

          <?php if(is_post_type_archive($post_type)) : ?>
            <option value="/portfolio/" selected="selected">All Projects</option>
          <?php else : ?>
            <option value="/portfolio/">All Projects</option>
          <?php endif; ?>

          <?php
            $categories = get_categories( array(
                'orderby' => 'name',
                'order'   => 'ASC',
                'taxonomy' => 'portfolio-category',
            ) );
          ?>
            
          <?php foreach( $categories as $category ) : ?>
            
            <option value="<?php echo get_category_link( $category->term_id ); ?>" <?php if ($currentTerm->term_id == $category->term_id ) { echo 'selected="selected"'; } ?>)><?php echo $category->name; ?></option>

          <?php endforeach; ?>

        </select>
          
      <?php else : ?>
        <ul class="portfolio-categories">
          <?php if(is_post_type_archive($post_type)) : ?>
            <li class="cat-item current-cat"><a href="/portfolio/">All</a></li>
          <?php else : ?>
            <li class="cat-item"><a href="/portfolio/">All</a></li>
          <?php endif; ?>
          <?php wp_list_categories( array(
            'orderby'            => 'name',
            'hide_empty'         => 0,
            'title_li'           => '',
            'taxonomy'           => 'portfolio-category',
          ) ); ?>
        </ul>
      <?php endif; ?>
    </div>
  </div>
</div>

<main role="main">
	<div class="container-fluid">
    <div class="project-blocks">

      <?php get_template_part('loop-projects'); ?>

    </div>
  </div>
</main>

<?php get_footer(); ?>
