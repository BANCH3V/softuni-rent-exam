<?php 
/* Template Name: Display rents */
?>

<?php get_header(); ?>

<p>This is a template page which lists all rent properties. Here you can easily see the WP_Query in use.</p>

<?php
$rent_args = array(
	'post_type'     => 'rent',
	'post_status'   => 'publish',
	'orderby'		=> 'date',
	'order'			=> 'ASC',
);

$rent_query = new WP_Query( $rent_args );
?>

<ul class="properties-listing">
	<?php if ( $rent_query->have_posts() ) : ?>
		<?php while ( $rent_query->have_posts() ) : $rent_query->the_post(); ?>

			<?php get_template_part( 'template-parts/rent', 'item' ); ?>

		<?php endwhile; ?>

	<?php endif; ?>
	
	<?php wp_reset_postdata(); ?>		

</ul>

<?php get_footer(); ?>