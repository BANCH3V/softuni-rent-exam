<?php get_header(); ?>

<p>This is single rent template.</p>

<ul class="properties-listing">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/rent', 'item' ); ?>

		<?php endwhile; ?>

		<?php softuni_update_rent_views_count( get_the_ID() ); ?>

	<?php endif; ?>
</ul>

<?php the_content() ?>

<?php get_footer(); ?>