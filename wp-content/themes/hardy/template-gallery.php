<?php /*Template Name: Gallery */ get_header();

$button_terms = get_terms( 'gallery-feature', array(
    'orderby'    => 'name',
    'hide_empty' => 0
) );

remove_shortcode('gallery');
add_shortcode('gallery', 'gallery_shortcode_lo');

function gallery_shortcode_lo($attr) {

}
?>
<img src="<?php echo get_template_directory_uri(); ?>/assets/img/loading.gif" style="display:none;">
<div class="container-fluid">
	<div class="page-title">
		<h1><?php the_title(); ?></h1>
		<!-- Filters (select) -->
		<div class="filter-select-wrapper">
			<label>Featuring:</label>
			<select id="filter-select" class="filter-select form-control">
				<option data-filter="*">Show all</option>
				<?php foreach ( $button_terms as $button_term ) { ?>
					<option data-filter=".<?php echo (str_replace(' ', '-', strtolower($button_term->name))); ?>"><?php echo $button_term->name; ?></option>
				<?php } ?>
			</select>
		</div>
	</div>
	<!-- Filters (buttons) -->
	<div class="filter-buttons">
		<button class="btn btn-default is-checked" data-filter="*">show all</button>
		<?php foreach ( $button_terms as $button_term ) { ?>
			<button class="btn btn-default" data-filter=".<?php echo (str_replace(' ', '-', strtolower($button_term->name))); ?>"><?php echo $button_term->name; ?></button>
		<?php } ?>
	</div>
</div>
	<?php while (have_posts()) : the_post(); ?>
	<main role="main">
		<div class="container-fluid">
			<div class="grid">
				<div class="grid-sizer"></div>
				<?php
					// helper function to return first regex match
					function get_match( $regex, $content ) {
				    preg_match($regex, $content, $matches);
				    return $matches[1];
					}
					// Extract the shortcode arguments from the $page or $post
					$shortcode_args = shortcode_parse_atts(get_match('/\[gallery\s(.*)\]/isU', $post->post_content));

					// get the ids specified in the shortcode call
					$ids = explode(",",$shortcode_args["ids"]);
					foreach ( $ids as $current_id ) {
						$terms = get_the_terms( $current_id, 'gallery-feature' );
						$gallery_features = array();
						?>
						<?php if ( $terms && ! is_wp_error( $terms ) ) : ?>
							<div class="grid-item<?php foreach( $terms as $term ) echo ' ' . $term->slug; ?>">
								<img src="<?php echo wp_get_attachment_image_src( $current_id, "full", false)[0] ?>" alt="<?php echo get_post_meta($current_id, '_wp_attachment_image_alt', true) ?>" />
							</div>
						<?php else : ?>
							<div class="grid-item">
								<img src="<?php echo wp_get_attachment_image_src( $current_id, "full", false)[0] ?>" alt="<?php echo get_post_meta($current_id, '_wp_attachment_image_alt', true) ?>" />
							</div>
						<?php endif; ?>
				<?php } ?>
			</div>
		</div>
	</main>
	<?php endwhile; ?>
<?php get_footer(); ?>
