<?php get_header(); ?>

	<section class="content">
		<?php if ( have_posts() ) : ?>
			<header class="row">
				<h1><?php printf( __( '%s Archives' ), '<span>' . get_post_format_string( get_post_format() ) . '</span>' ); ?></h1>
			</header><!-- header -->

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
	</section>


<?php get_sidebar(); ?>
<?php get_footer(); ?>