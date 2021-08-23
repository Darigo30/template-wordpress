<?php 

header("HTTP/1.1 301 Moved Permanently");
header("Location: ".get_bloginfo('url'));
exit();
//get_header(); 
?>

<section class="container">
	<header class="row">
		<h1><?php _e( '404 - Página No Encontrada', 'vivims' ); ?></h1>
	</header>

	<div class="row">
		<p>Volver al <a href="?php bloginfo('siteurl'); ?>">Home</a></p>
		<?php get_search_form(); ?>
	</div>
</section>

<?php //get_footer(); ?>
