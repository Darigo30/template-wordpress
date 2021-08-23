<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="breadcrumb margin-bottom-30">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<?php the_breadcrumbs();?>
				</div>
			</div>
		</div>
	</div>

	<?php if (in_category(1)): ?><!-- ux -->
		<div class="bg-category cat-1" style="background:url(<?php the_post_thumbnail_url('full'); ?>) center no-repeat;background-size:cover !important; -webkit-background-size:cover !important; -o-background-size:cover !important; -moz-background-size:cover !important;">
	<?php elseif (in_category(11)):?><!-- fidelizacion -->
		<div class="bg-category cat-2" style="background:url(<?php the_post_thumbnail_url('full'); ?>) center no-repeat;background-size:cover !important; -webkit-background-size:cover !important; -o-background-size:cover !important; -moz-background-size:cover !important;">
	<?php elseif (in_category(12)):?><!-- marketing -->
		<div class="bg-category cat-3" style="background:url(<?php the_post_thumbnail_url('full'); ?>) center no-repeat;background-size:cover !important; -webkit-background-size:cover !important; -o-background-size:cover !important; -moz-background-size:cover !important;">
	<?php elseif (in_category(13)):?><!-- tecnologia -->
		<div class="bg-category cat-4" style="background:url(<?php the_post_thumbnail_url('full'); ?>) center no-repeat;background-size:cover !important; -webkit-background-size:cover !important; -o-background-size:cover !important; -moz-background-size:cover !important;">
	<?php elseif (in_category(14)):?><!-- turismo -->
		<div class="bg-category cat-5" style="background:url(<?php the_post_thumbnail_url('full'); ?>) center no-repeat;background-size:cover !important; -webkit-background-size:cover !important; -o-background-size:cover !important; -moz-background-size:cover !important;">
	<?php elseif (in_category(19)):?><!-- empresas -->
		<div class="bg-category cat-6" style="background:url(<?php the_post_thumbnail_url('full'); ?>) center no-repeat;background-size:cover !important; -webkit-background-size:cover !important; -o-background-size:cover !important; -moz-background-size:cover !important;">
	<?php endif; ?>
		<div class="overlay-cat"></div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="box-cat">
						<?php $current_cat_id = the_category_ID(false); echo get_cat_name($current_cat_id);?>
					</div>
					<div class="tit-blog-int">
						<?php the_title(); ?>
					</div>
					<?php the_tags('<div class="tags">', '', '</div>'); ?> 
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-5">
							<div class="txt-blog-dest">
								<?php the_field('texto_destacado') ?>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-5 pull-right">
							<div class="rrss-blog">
								<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5c195f7e3d907fde"></script>
								<div class="addthis_inline_share_toolbox_94wr"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div class="container">
		<div class="row margin-bottom-30">
			<div class="col-xs-12 col-sm-6">
				<div class="sub-blog"><?php the_field('subtitulo') ?></div>

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
					<div class="prn-blog"><?php the_field('texto_principal') ?></div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<?php
				$image1 = get_field('imagen_490x420');
				if( !empty($image1) ): ?>
					<img class="img1-blog" src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>" />
				<?php endif; ?>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12">
				<div class="sub-blog2"><?php the_field('subtitulo_2') ?></div>
			</div>
		</div>
	</div>

	<div class="conclusiones margin-bottom-30">
		<div class="container">
			<div class="row">
				<?php if( have_rows('texto_columnas') ): while ( have_rows('texto_columnas') ) : the_row();?>
					<?php if(get_row_layout() == '1_columna'):?>
						<div class="col-xs-12 margin-bottom-20">
							<?php the_sub_field('texto_1_columna');?>
						</div>
					<?php elseif(get_row_layout() == '2_columnas'): ?>
						<div class="col-xs-12 col-sm-6 margin-bottom-20">
							<?php the_sub_field('texto_1_2_columnas');?>
						</div>
						<div class="col-xs-12 col-sm-6 margin-bottom-20">
							<?php the_sub_field('texto_2_2_columnas');?>
						</div>
					<?php elseif(get_row_layout() == '3_columnas'): ?>
						<div class="col-xs-12 col-sm-6 col-md-4 margin-bottom-20">
							<?php the_sub_field('texto_1_3_columnas');?>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4 margin-bottom-20">
							<?php the_sub_field('texto_2_3_columnas');?>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4 margin-bottom-20">
							<?php the_sub_field('texto_3_3_columnas');?>
						</div>
					<?php endif;?>
				<?php endwhile; endif;?>
			</div>
		</div>
	</div>

	<div class="mas-blog">
		<div class="container">
			<div class="row margin-bottom-30">
				<div class="col-xs-12 col-sm-6 pull-right">
					<div class="sub-blog3"><?php the_field('subtitulo_3');?></div>
				</div>
				<div class="col-xs-12 col-sm-6">
					<?php
					$image2 = get_field('imagen_2_490x420');
					if( !empty($image2) ): ?>
						<img class="img2-blog" src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />
					<?php endif; ?>
				</div>
				<div class="col-xs-12 col-sm-6">
					<?php the_field('texto_final');?>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 pull-right">
					<div class="fuente">
						Fuente: <a href="<?php the_field('fuente_link');?>" target="_blank"><?php the_field('fuente_texto');?></a>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6">
					<button onclick="history.go(-1);" class="btn-bck"><i class="fa fa-angle-left" aria-hidden="true"></i> Volver</button>
				</div>
			</div>
		</div>
	</div>

	<div class="potenciar">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 margin-bottom-30">
					<div class="rrss-punto">
						<h2 class="sub-punto">
							¿Quieres potenciar tu negocio?<span></span>
						</h2>
					</div>
				</div>
				<div class="col-xs-12 text-center">
					<?php $servicio = get_field('servicio');?>
					<?php if($servicio['value'] == 'lempresa'):?>
						<a class="cont-potenciar" href="<?php bloginfo('siteurl'); ?>/likeme">
							<img src="<?php bloginfo('template_url'); ?>/images/punto-ams/likeme-empresa.png" alt="" />
						</a>
					<?php elseif ($servicio['value'] == 'lturismo'):?>
						<a class="cont-potenciar" href="<?php bloginfo('siteurl'); ?>/likeme">
							<img src="<?php bloginfo('template_url'); ?>/images/punto-ams/likeme-turismo.png" alt="" />
						</a>
					<?php elseif ($servicio['value'] == 'invite'):?>
						<a class="cont-potenciar" href="<?php bloginfo('siteurl'); ?>/invite">
							<img src="<?php bloginfo('template_url'); ?>/images/punto-ams/invite.png" alt="" />
						</a>
					<?php elseif ($servicio['value'] == 'pst'):?>
						<a class="cont-potenciar" href="<?php bloginfo('siteurl'); ?>/pst">
							<img src="<?php bloginfo('template_url'); ?>/images/punto-ams/pst.png" alt="" />
						</a>
					<?php elseif ($servicio['value'] == 'agencia'):?>
						<a class="cont-potenciar" href="<?php bloginfo('siteurl'); ?>/agencia">
							<img src="<?php bloginfo('template_url'); ?>/images/punto-ams/ams-digital.png" alt="" />
						</a>
					<?php elseif ($servicio['value'] == 'beneficio'):?>
						<a class="cont-potenciar" href="<?php bloginfo('siteurl'); ?>/club-de-beneficios">
							<img src="<?php bloginfo('template_url'); ?>/images/punto-ams/club-beneficios.png" alt="" />
						</a>
					<?php endif;?>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<a class="btn-contacto-punto" href="<?php bloginfo('siteurl'); ?>/contacto">Contacto</a>
			</div>
		</div>
	</div>

	
	<footer class="edit">
		<?php edit_post_link( __( 'Edit' ) ); ?>
	</footer><!-- .edit -->
</article><!-- #post -->