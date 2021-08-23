<?php get_header(); ?>

	<section class="container-fluid">
		<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header>
					<div class="row">
						<div class="col-xs-12">
							<h1 class="entry-title text-center"><?php the_title(); ?><span></span></h1>
						</div>
					</div>
				</header>

				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-xs-offset-0 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-4 col-lg-6 col-lg-offset-3">
							<?php the_content(); ?>
						</div>
					</div>
				</div>

				<footer class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="edit"><?php edit_post_link( __( 'Edit' ) ); ?></div>
						</div>
					</div>
				</footer>
			</article>
		<?php endwhile; ?>
	</section>

<?php get_footer(); ?>