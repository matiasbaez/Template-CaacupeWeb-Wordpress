<?php
/**
 * @package WordPress
 * @subpackage CaacupeWeb
 * @since Caacupe Web 1.0
 */

get_header(); ?>


		<div class="cont-image">
		</div>

		<!-- MAIN -->
		<div class="main">
			<div class="container">
				<div class="row center-xs">
					
					<div class="main-title col-xs-12">
						<h2 class="title">POSADAS</h2>
						<span></span>
					</div>

					<div class="article col-xs-10 col-sm-5 col-md-3 between-xs">

					<?php  

						query_posts(
							array(
								'showposts' => 6, // La cantidad a mostrar
								'cat' => 7		  // La categoria y el id (tambien puede ser por el slug de la categoria)
							)
						);

					?>

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


						<div class="article-thumb">
							<?php if ( has_post_thumbnail() ) {	the_post_thumbnail('vista-previa-entrada'); } ?>
						</div>


						<div class="info-article">
							<h4 class="info-title center-xs"><?php the_title(); ?></h4>
							<?php the_content(); ?>

							<div class="info-read-more col-xs between-xs"><a href="<?php the_permalink(); ?>">Leer Mas</a></div>
						</div>
						<?php endwhile; ?>

						<?php else: ?>
													
							<h3>No se encontro nada para mostrar</h3>

						<?php endif; ?>
											
						<?php wp_reset_query() ?>
					</div>


					<!-- <div class="article col-xs-10 col-sm-5 col-md-3 between-xs">
						<img class="article-thumb" src="<?php; ?>/images/alta-gracia1.jpg" alt="Alta Gracia Parque Hotel">
						<div class="info-article">
							<h4 class="info-title center-xs">Alta Gracia Parque Hotel</h4>
							<p class="info-adress start-xs">Direccion: Ruta Nº 2 Mcl. Estigarribia, Km 52,5 </p>
							<p class="info-price start-xs">Precios: Contactar</p>
							<p class="info-description">Ofrece un ambiente cálido con detalles &uacute;nicos, que envuelven los cinco sentidos del hu&eacute;sped. Salones climatizados con vistas naturales.
							</p>

							<div class="info-read-more col-xs between-xs"><a href="#">Leer Mas</a></div>
						</div>
					</div>

					<div class="article col-xs-10 col-sm-5 col-md-3 between-xs">
						<img class="article-thumb" src="<?php?>/images/el-escondido.jpg" alt="El Escondido">
						<div class="info-article">
							<h4 class="info-title center-xs">Linda Vista el Escondido</h4>
							<p class="info-adress start-xs">Direccion: Potrero a unos 1000 metros Ruta 2, km 50</p>
							<p class="info-price start-xs">Precios: 100.000Gs p/ Persona</p>
							<p class="info-description">Además de las 4 habitaciones para un total de 20 personas, tiene un quincho, un arroyo, canchas de deportes, entre otros.
							</p>

							<div class="info-read-more col-xs between-xs"><a href="#">Leer Mas</a></div>
						</div>
					</div>

					<div class="article col-xs-10 col-sm-5 col-md-3 between-xs">
						<img class="article-thumb" src="<?php ?>/images/Hotel-Mirador.jpg" alt="Hotel Mirador">
						<div class="info-article">
							<h4 class="info-title center-xs">Hotel Mirador</h4>
							<p class="info-adress start-xs">Direccion: Padre Solis casi Concepci&oacute;n</p>
							<p class="info-price start-xs">Precios: Contactar</p>
							<p class="info-description">Ubicado frente a la Basilica de Caacup&eacute;
							</p>

							<div class="info-read-more col-xs between-xs"><a href="#">Leer Mas</a></div>
						</div>
					</div> -->

				</div>

			</div>
		</div>

		<div class="cont-image">
		</div>
		
<!-- 		<section> 
			<div class="row center-xs">
				<div class="mas-contenido">
							
				</div>
			</div>
		</section> -->

		<!-- FIN MAIN -->

<?php get_footer(); ?>