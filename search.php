<?php get_header(); ?>

		<?php if ( have_posts() ) : ?>

			<header>
				<h1><?php printf( __( 'Search Results for: %s' ), get_search_query() ); ?></h1>
			</header>

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>