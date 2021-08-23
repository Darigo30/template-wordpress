<?php 
/* Template Name: Éxito */
get_header(); ?>
		<!-- Paag exito -->
		<section class="exito">
			<div class="bg-img-ex"></div>
			<div class="img-exi">
				<?php
				$image = get_field('icono_exito');
				if( !empty($image) ): ?>
				    <img class="mx-auto d-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				<?php endif; ?>
			</div>
		</section>
		<section class="py-5">
			<div class="container">
				<div class="row">
					<div class="col-12  text-center">
						<h2 class="text-uppercase"><?php the_field('titulo_mensaje_exito');?></h2>
						<p class=" text-center"><?php the_field('bajada_exito');?></p>
						<div class="py-2">
							<a href="<?php bloginfo('siteurl'); ?>" class="btn btn-peq">Volver</a>
						</div>
					</div>
				</div>
			</div>
		</section>

			

<?php get_footer(); ?>