<?php get_header(); ?>

<p>This is single post template.</p>

<ul class="properties-listing">
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>

			<?php get_template_part( 'template-parts/single-post', 'item' ); ?>

		<?php endwhile; ?>

		<?php posts_nav_link(); ?>

	<?php endif; ?>
</ul>

<?php get_footer(); ?>