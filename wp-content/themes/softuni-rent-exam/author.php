<?php get_header(); ?>

<?php the_archive_title(); ?>

<p>The content of this page is served by the <strong>author</strong> template. Your name is <?php the_author(); ?>. Have a good day.</p>

<ul class="properties-listing">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/post', 'item' ); ?>

		<?php endwhile; ?>

		<?php posts_nav_link(); ?>

	<?php endif; ?>
</ul>

<?php get_footer(); ?>