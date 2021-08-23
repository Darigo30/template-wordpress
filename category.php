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

			<header class="bg-categorias">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<h1 class="categorias-title"><?php printf( __( 'Categorías'), single_cat_title( '', false ) ); ?><span></span></h1>
						</div>
					</div>
				</div>
			</header>

			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h1 class="categorias-title"><?php printf( __( '%s'), single_cat_title( '', false ) ); ?><span></span></h1>
					</div>
					<?php while (have_posts()) : the_post(); ?>
						<div class="col-xs-12 col-sm-6 margin-bottom-20">
							<div class="bg-category cat-punto-ams3" style="background:url(<?php the_post_thumbnail_url('full'); ?>) center no-repeat;background-size:cover !important; -webkit-background-size:cover !important; -o-background-size:cover !important; -moz-background-size:cover !important;">
								<div class="overlay-cat"></div>
								<div class="cont-punto-ams">
									<?php if (in_category(1)): ?><!-- ux -->
										<div class="cat-1">
									<?php elseif (in_category(11)):?><!-- fidelizacion -->
										<div class="cat-2">
									<?php elseif (in_category(12)):?><!-- marketing -->
										<div class="cat-3">
									<?php elseif (in_category(13)):?><!-- tecnologia -->
										<div class="cat-4">
									<?php elseif (in_category(14)):?><!-- turismo -->
										<div class="cat-5">
									<?php elseif (in_category(19)):?><!-- empresas -->
										<div class="cat-6">
									<?php endif; ?>
										<?php $current_cat_id = the_category_ID(false);?>
										<a class="box-cat" href="<?php echo get_category_link($current_cat_id);?>">
											<?php echo get_cat_name($current_cat_id);?>
										</a>
									</div>
									<div class="tit-blog-int">
										<?php the_title(); ?>
									</div>
									<div class="rrss-blog-punto">
										<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5c195f7e3d907fde"></script>
										<div class="addthis_inline_share_toolbox_94wr"></div>
									</div>

									<div class="row">
										<div class="col-xs-6 col-sm-12 col-md-6 pull-right">
											<?php the_tags('<div class="tags">', '', '</div>', ''); ?> 
										</div>
										<div class="col-xs-6 col-sm-12 col-md-6">
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