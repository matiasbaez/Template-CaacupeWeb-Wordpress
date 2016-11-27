<?php
/**
 * @package WordPress
 * @subpackage CaacupeWeb
 * @since Caacupe Web 1.0
 */

get_header(); ?>

		
		<div class="cont-slide">
			<!-- <div class="container"> -->
				<?php echo do_shortcode("[metaslider id=72]"); ?>
			<!-- </div> -->
		</div>

		<!-- MAIN -->
		<div class="main">
			<div class="container">
				<div class="row center-xs">
					
					<!-- PRIMERA CATEGORIA -->

					<div class="main-title col-xs-12">
						<h2 class="title">POSADAS</h2>
						<span></span>
					</div>


					<?php  

						query_posts(
							array(
								'showposts' => 4,
								'cat' => 7
							)
						);

					?>

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="article col-xs-10 col-sm-5 col-md-3 between-xs">


						<div class="article-thumb">
							<?php if ( has_post_thumbnail() ) {	the_post_thumbnail('vista-previa-entrada'); } ?>
						</div>


						<div class="info-article">
							<h4 class="info-title center-xs"><?php the_title(); ?></h4>
							<?php the_excerpt(); ?>

							<div class="info-read-more col-xs between-xs"><a href="<?php the_permalink(); ?>">Leer Mas</a></div>
						</div>
					</div>
						<?php endwhile; ?>

						<?php else: ?>
													
							<h3>No se encontro nada para mostrar</h3>

						<?php endif; ?>
											
						<?php wp_reset_query() ?>
					
					<div class="article-footer col-xs-12">
						<?php // Adquiero el id de la categoria
    						$categoria_id = get_cat_ID( 'Posadas' );

    						// Adquiero la URL de la categoria
    						$categoria_link = get_category_link( $categoria_id ); 
    					?>
						<h3 class="VerTodos">
							<a href="<?php echo esc_url( $categoria_link ); ?>">Ver todas las Posadas</a>
						</h3>
					</div>

				</div>

			</div>
		</div>

		<section> 
			<div class="container">
				<div class="row center-xs mas-contenido">
					
					<!-- SEGUNDA CATEGORIA -->

					<div class="main-title col-xs-12">
						<h2 class="title">HOTELES</h2>
						<span></span>
					</div>


					<?php  

						query_posts(
							array(
								'showposts' => 2,
								'cat' => 8
							)
						);

					?>

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="article col-xs-10 col-sm-5 col-md-4 between-xs">


						<div class="article-thumb">
							<?php if ( has_post_thumbnail() ) {	the_post_thumbnail('miniatura-categoria'); } ?>
						</div>


						<div class="info-article">
							<h4 class="info-title center-xs"><?php the_title(); ?></h4>
							<?php the_excerpt(); ?>

							<div class="info-read-more col-xs between-xs"><a href="<?php the_permalink(); ?>">Leer Mas</a></div>
						</div>
					</div>
						<?php endwhile; ?>

						<?php else: ?>
													
							<h3>No se encontro nada para mostrar</h3>

						<?php endif; ?>
											
					
					<div class="article-footer col-xs-12">
						<?php // Adquiero el id de la categoria
    						$categoria_id = get_cat_ID( 'Hoteles' );

    						// Adquiero la URL de la categoria
    						$categoria_link = get_category_link( $categoria_id ); 
    					?>
						<h3 class="VerTodos">
							<a href="<?php echo esc_url( $categoria_link ); ?>">Ver todos los Hoteles</a>
						</h3>
					</div>
						<?php wp_reset_query() ?>
				</div>
			</div>
		</section>

		<!-- FIN MAIN -->

<?php get_footer(); ?>