<?php get_header(); ?>


	<?php query_posts('page_id=28'); ?>
	<?php while (have_posts()) : the_post(); ?>
		<!-- Formulario y títulos -->
		<section id="home">
			<div class="container">
				<div class="row">
					<div class="col-12 col-sm-12 col-md-6 col-lg-6">
						<h1 class="tit-pr"><?php the_field('titulo_fijo_de_llamada_a_la_accion');?> <span class="spanh1"><?php the_field('titulo_fijo_llamado_a_la_accion_2');?></span></h1>
						<p class="tit-pr"><?php the_field('subtitulo_de_llamada_a_la_accion');?></p>
						<div class="formulario">
							<?php the_field('formulario_contacto');?>
						</div>
					</div>
					<div class="col-12 col-sm-12 col-md-6 col-lg-6">
						<div class="slider">
							<?php if( have_rows('slider') ): while( have_rows('slider') ): the_row();
							$image = get_sub_field('imagen_de_fondo');
							$titulo = get_sub_field('titulo');
							?>
							<div class="row">
								<div class="col-12 col-sm-12 col-md-12 col-lg-12">
									<img class="img-slider" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
								</div>
								<div class="col-12 col-sm-12 col-md-12 col-lg-12">
									<div class="inf-slider">
										<h4 class="text-center py-5"><?php echo $titulo; ?></h4>
									</div>
								</div>
							</div>
						<?php endwhile; endif; ?>
						</div>
					</div>
					<div class="col-12 col-sm-12 col-md-6 col-lg-6">
						<div class="formulario form-mob">
							<?php the_field('formulario_contacto');?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<hr>
		<!-- De que trata -->
		<section class="dequetrata py-5" id="dequetrata">
			<div class="container">
				<div class="row">
					<div class="col-12 col-sm-12 col-md-6 col-lg-6">
						<?php $imagesec = get_field('imagen'); ?>
						<div class="img-deq-tr" style="background:url(<?php echo $imagesec['url']; ?>) center no-repeat;"></div>
						<div class="overlay"></div>
					</div>
					<div class="col-12 col-sm-12 col-md-6 col-lg-6 pt-5">
						<h5><?php the_field('titulo_pequeno');?></h5>
						<h2><?php the_field('titulo_grande');?></h2>
						<p><?php the_field('texto_de_que_trata');?></p>
						<div class="botones-deque py-4">
							<a href="<?php bloginfo('siteurl'); ?>/#home" class="btn btn-peq">Lo quiero</a>
							<a href="<?php the_field('boton_saber_mas');?>" target="_blank" class="btn btn-peq">Saber más</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Beneficios -->
		<section>
			<div class="container py-3" id="beneficios">
				<div class="row">
					<div class="col-12 text-center">
						<h5><?php the_field('titulo_pequeno_beneficios');?></h5>
						<h2><?php the_field('titulo_grande_beneficios');?></h2>
						<p class="text-center"><?php the_field('texto_bajada_beneficios');?></p>
					</div>
				</div>
			</div>
		</section>
		<div class="section beneficios py-5">
			<div class="container">
				<div class="row">
					<?php if( have_rows('beneficios_carateristicas') ): while( have_rows('beneficios_carateristicas') ): the_row();
				    $icono = get_sub_field('icono_beneficios');
				    $txtbene = get_sub_field('texto_icono_beneficios');
				    ?>
				    <div class="col-6 col-sm-6 col-md-4 col-lg-4">
				    	<div class="icono-beneficio d-flex flex-column align-items-center text-center my-3 mx-auto">
					      <?php
							if( !empty($icono) ): ?>
							    <img src="<?php echo $icono['url']; ?>" alt="<?php echo $icono['alt']; ?>" />
							<?php endif; ?>
					       <div class="texto pt-3">
					          <?php echo $txtbene; ?>
					       </div>
				    	</div>
				    </div>
				 <?php endwhile; endif; ?>
				</div>
			</div>
		</div>
		<!-- Datos importantes -->
		<section class="py-5  datosimportantes" id="datosimportantes">
			<div class="container">
				<div class="row">
					<div class="col-12 text-center">
						<h5><?php the_field('titulo_datos_importantes');?></h5>
						<h2><?php the_field('titulo_grande_datos_importantes');?></h2>
						<p class="text-center"><?php the_field('texto_datos_importantes');?></p>
					</div>
				</div>
				<div class="row pt-5 pt-sm-1 d-flex align-items-center">
					<div class="col-12 col-sm-12 col-md-6 col-lg-6">
						<div class="row">
						    <?php if( have_rows('cifras_experiencias') ): while( have_rows('cifras_experiencias') ): the_row();
						    $mas = get_sub_field('simbolo_mas');
						    $cifra = get_sub_field('cifra');
						    $txtcifra = get_sub_field('texto_cifra');
						    ?>
					    	<div class="col-6 col-sm-6 col-md-6 col-lg-6 py-3">
					    		<div class="cifra d-flex">
								    <h2 class="mr-2">
								        <?php echo $mas; ?>
								    </h2>
								    <h2 class="numero">
								       <h2 class="timer count-title count-number" data-to="<?php echo $cifra; ?>" data-speed="3000">
								    </h2>
					    		</div>
						    	<p class="txt-cifra">
						    		<?php echo $txtcifra; ?>
						    	</p>
				    		</div>
							<?php endwhile; endif; ?>
					    </div>
					</div>
					<div class="col-12 col-sm-12 col-md-6 col-lg-6 mx-auto d-block text-center">
						<?php
						$imageacerca = get_field('imagen_acerca_de');
						if( !empty($imageacerca) ): ?>
						    <img class="img-acer" src="<?php echo $imageacerca['url']; ?>" alt="<?php echo $imageacerca['alt']; ?>" />
						<?php endif; ?>
					</div>
				</div>
				<div class="py-2">
					<a href="<?php the_field('saber_mas_datos_importantes');?>" target="_blank" class="btn btn-peq">Saber más</a>
				</div>
			</div>
		</section>
	<?php endwhile;?>
	<?php wp_reset_query(); ?>

	<a href="<?php bloginfo('siteurl'); ?>/#home" class="contacto">
		<img class="mr-2" src="<?php bloginfo('template_url'); ?>/images/contacto.svg" alt="Contacto Likeme" />
		<span class="coti">COTIZAR</span>
	</a>


<script>
	document.addEventListener( 'wpcf7mailsent', function( event ) {
		location = 'http://clubfidelizacion.likemeturismo.cl/exito';
	}, false );
</script>
<?php get_footer(); ?>