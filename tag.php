<?php get_header(); ?>
	
	<div class="container-full hentry">
		<?php if ( have_posts() ) : ?>
			<div class="breadcrumb">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<?php the_breadcrumbs();?>
						</div>
					</div>
				</div>
			</div>

			<header class="bg-tags">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<h1 class="tags-title"><?php printf( __( 'Tags'), single_tag_title( '', false ) ); ?><span></span></h1>
						</div>
					</div>
				</div>
			</header>

			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h1 class="tags-title"><?php printf( __( '%s'), single_tag_title( '', false ) ); ?><span></span></h1>
					</div>
					<?php while (have_posts()) : the_post(); ?>
						<div class="col-xs-12 col-sm-6 margin-bottom-20">
							<?php if (in_category(1)): ?><!-- ux -->
								<div class="bg-category cat-punto-ams2 cat-1" style="background:url(<?php the_post_thumbnail_url('full'); ?>) center no-repeat;background-size:cover !important; -webkit-background-size:cover !important; -o-background-size:cover !important; -moz-background-size:cover !important;">
							<?php elseif (in_category(11)):?><!-- fidelizacion -->
								<div class="bg-category cat-punto-ams2 cat-2" style="background:url(<?php the_post_thumbnail_url('full'); ?>) center no-repeat;background-size:cover !important; -webkit-background-size:cover !important; -o-background-size:cover !important; -moz-background-size:cover !important;">
							<?php elseif (in_category(12)):?><!-- marketing -->
								<div class="bg-category cat-punto-ams2 cat-3" style="background:url(<?php the_post_thumbnail_url('full'); ?>) center no-repeat;background-size:cover !important; -webkit-background-size:cover !important; -o-background-size:cover !important; -moz-background-size:cover !important;">
							<?php elseif (in_category(13)):?><!-- tecnologia -->
								<div class="bg-category cat-punto-ams2 cat-4" style="background:url(<?php the_post_thumbnail_url('full'); ?>) center no-repeat;background-size:cover !important; -webkit-background-size:cover !important; -o-background-size:cover !important; -moz-background-size:cover !important;">
							<?php elseif (in_category(14)):?><!-- turismo -->
								<div class="bg-category cat-punto-ams2 cat-5" style="background:url(<?php the_post_thumbnail_url('full'); ?>) center no-repeat;background-size:cover !important; -webkit-background-size:cover !important; -o-background-size:cover !important; -moz-background-size:cover !important;">
							<?php elseif (in_category(19)):?><!-- empresas -->
								<div class="bg-category cat-punto-ams2 cat-6" style="background:url(<?php the_post_thumbnail_url('full'); ?>) center no-repeat;background-size:cover !important; -webkit-background-size:cover !important; -o-background-size:cover !important; -moz-background-size:cover !important;">
							<?php endif; ?>
								<div class="overlay-cat cat-punto-ams2"></div>
								<div class="cont-punto-ams">
									<div class="box-cat">
										<?php $current_cat_id = the_category_ID(false); echo get_cat_name($current_cat_id);?>
									</div>
									<div class="tit-blog-int">
										<?php the_title(); ?>
									</div>

									<div class="row">
										<div class="col-xs-12 pull-right">
											<?php the_tags('<div class="tags">', '', '</div>'); ?> 
										</div>
										<div class="col-xs-12">
											<div class="leer-punto-ams">
												<a class="animated-arrow" href="<?php the_permalink() ?>">
													<span class="the-arrow -left">
														<span class="shaft"></span>
													</span>
													<span class="main-arrow">
														<span class="text">
															Leer más
														</span>
														<span class="the-arrow -right">
															<span class="shaft"></span>
														</span>
													</span>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php endwhile;?>
				</div>
			</div>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
	</div>

<?php get_footer(); ?>