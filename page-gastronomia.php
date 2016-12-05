<?php /* Template Name: Gastronomia */ 
get_header(); ?>

	<!-- MAIN -->
	<div class="main-single">
		<div class="container">
			
			<div class="row between-xs">
				
				<div class="breadcrumb col-xs-12">
					<p class="breadcrumb"><?php single_cat_title($prefix = '', $display = true); ?></p>
				</div>

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
				<div class="single-article col-xs-12 col-md-9">

					<div class="article-thumb">
						<?php if ( has_post_thumbnail() ) {	the_post_thumbnail('vista-lectura-entrada'); } ?>
					</div>
					
					<div class="title">
						<h2 class="col-xs-12"><?php the_title(); ?></h2>
						<span class="icon-spoon-knife"></span>
					</div>
					
					<div class="article-content">
						<?php the_content(); ?>
					</div>


				</div>

				<?php endwhile; ?>

				<?php else: ?>
													
					<h3>No se encontro nada para mostrar</h3>

				<?php endif; ?>
											
				<?php wp_reset_query() ?>

				<div class="roe widgets col-xs-12 col-md-3">
					<div class="widget">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Entradas Recientes') ) : endif ?>

					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Facebook') ) : endif ?>

					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Twitter') ) : endif ?>
					</div>
				</div>

			</div>

		</div>
	</div>

<?php get_footer(); ?>