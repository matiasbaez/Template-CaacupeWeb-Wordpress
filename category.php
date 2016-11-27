<?php get_header(); 
// Con este archivo se muestra los articulos por categorias
?>

<!-- MAIN -->
		<div class="main">
			<div class="container">
				<div class="row center-xs">

					<div class="main-title col-xs-12">
						<h2 class="title"><?php wp_title(); ?></h2>
						<span></span>
					</div>


					<?php  
						$id_categoria = get_query_var('cat');
						query_posts(
							array(
								'showposts' => 10,
								'category__in' => $id_categoria
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
							<?php //the_excerpt(); ?>

							<div class="info-read-more col-xs between-xs"><a href="<?php the_permalink(); ?>">Leer Mas</a></div>
						</div>
					</div>
						<?php endwhile; ?>

						<?php else: ?>
													
							<h3>No se encontro nada para mostrar</h3>

						<?php endif; ?>
											
						<?php wp_reset_query() ?>

				</div>

			</div>
		</div>

<?php get_footer(); ?>