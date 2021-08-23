		
		<!-- confian -->
		<?php query_posts('page_id=28'); ?>
		<?php while (have_posts()) : the_post(); ?>
			<section class="bg-white py-5 han-conf" id="clientes">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center">
							<h5><?php the_field('titulo_saber_que');?></h5>
							<h2><?php the_field('titulo_grande_han_confiado');?></h2>
						</div>
					</div>
					<div class="row py-4">
						<div class="col-12">
							<?php $logos = get_field('logos'); if( $logos ): ?>
								<div class="galeria-logos">
									<?php foreach( $logos as $logo ): ?>
										<div class="img-gal">
											<img src="<?php echo $logo['sizes']['large']; ?>" alt="Logos AMS" />
										</div>
									<?php endforeach; ?>
								</div>
							<?php endif; ?>
						</div>
					</div>
					<div class="row">
						<div class="col-12 mx-auto d-block text-center">
							<div class="log-ch-co">
								<?php
								$image_log = get_field('logo_chile_compra');
								if( !empty($image_log) ): ?>
								    <img class="py-3" src="<?php echo $image_log['url']; ?>" alt="<?php echo $image_log['alt']; ?>" />
								<?php endif; ?>
							</div>
							<div class="txt-chile">
								<h5 class="text-dark"><?php the_field('texto_chile_compra');?></h5>
							</div>
						</div>
					</div>
				</div>
			</section>
		<?php endwhile;?>
		<?php wp_reset_query(); ?>

		</main><!-- .main -->
		
		<!-- footer -->
		<footer class="footer text-white">
			<div class="container">
				<?php query_posts('page_id=12'); ?>
				<?php while (have_posts()) : the_post(); ?>
					<div class="row">
						<div class="col-12 col-sm-12 col-md-6 col-lg-6">
							<h4 class="text-white">Sociales</h4>
							<?php $face = get_field('facebook');?>
							<?php $inst = get_field('instagram');?>
							<?php $twit = get_field('twitter');?>
							<?php $yout = get_field('youtube');?>
							<?php $link = get_field('linkedin');?>
							<div class="rrss-foo d-flex">
								<?php if ($face):?>
									<div class="ico-red">
										<a href="<?php echo $face;?>" target="_blank" rel="noreferrer" title="Facebook AMS">
											<img class="ico-foo" src="<?php bloginfo('template_url'); ?>/images/facebook.svg" alt="facebook" />
										</a>
									</div>
								<?php endif;?>
								<?php if ($twit):?>
									<div class="ico-red">
										<a href="<?php echo $twit;?>" target="_blank" rel="noreferrer" title="Twitter AMS">
											<img class="ico-foo" src="<?php bloginfo('template_url'); ?>/images/twitter.svg" alt="twitter" />
										</a>
									</div>
								<?php endif;?>
								<?php if ($link):?>
									<div class="ico-red">
										<a href="<?php echo $link;?>" target="_blank" rel="noreferrer" title="Linkedin AMS">
											<img class="ico-foo" src="<?php bloginfo('template_url'); ?>/images/linkedin.svg" alt="linkedin" />
										</a>
									</div>
								<?php endif;?>
								<?php if ($yout):?>
									<div class="ico-red">
										<a href="<?php echo $yout;?>" target="_blank" rel="noreferrer" title="Youtube AMS">
											<img class="ico-foo" src="<?php bloginfo('template_url'); ?>/images/youtube.svg" alt="youtube" />
										</a>
									</div>
								<?php endif;?>
								<?php if ($inst):?>
									<div class="ico-red">
										<a href="<?php echo $inst;?>" target="_blank" rel="noreferrer" title="Instagram AMS">
											<img class="ico-foo" src="<?php bloginfo('template_url'); ?>/images/instagram.svg" alt="instagram" />
										</a>
									</div>
								<?php endif;?>
							</div>
						</div>
						<div class="col-12 col-sm-12 col-md-6 col-lg-6">
							<h4 class="text-white">Contáctanos</h4>
							<div class="mt-3">
								<div class="datos fono">
									<img class="ico-foo" src="<?php bloginfo('template_url'); ?>/images/telefono.svg" alt="telefono" />
									<a class="text-white" href="tel:<?php the_field('telefono_link');?>"><?php the_field('telefono');?></a>
								</div>
								<div class="datos correo">
									<img class="ico-foo" src="<?php bloginfo('template_url'); ?>/images/mail.svg" alt="email" />
									<a class="text-white" href="mailto:<?php the_field('email');?>"><?php the_field('email');?></a>
								</div>
								<div class="datos dire">
									<img class="ico-foo" src="<?php bloginfo('template_url'); ?>/images/ubicacion.svg" alt="direccion" />
									<?php the_field('direccion');?>
								</div>
							</div>
						</div>
					</div>
				<?php endwhile;?>
				<?php wp_reset_query(); ?>
					
				<div class="creditos">
					<div class="row">
						<div class="col-12 col-sm-12 col-md-6 col-lg-6 copy">
							<div class="copyri-p">Copyright <?php echo anio_copyright(); ?>. Todos los derechos reservados</div>
						</div>
						<div class="col-12 col-sm-12 col-md-6 col-lg-6 ams-l">
							Diseño y Desarrollo por <a href="http://www.ams.asicom.cl/" target="_blank" rel="noreferrer" title="AMS web">
								<img class="logo-ams" src="<?php bloginfo('template_url'); ?>/images/logo-ams-b.svg" alt="Logo AMS" />
							</a>
						</div>
					</div>
				</div>
			</div>
			<a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>
		</footer><!-- footer -->
	</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>