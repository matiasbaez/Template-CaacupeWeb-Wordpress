<?php 
	register_nav_menus( array(
		'menu' => 'Menu superior', // Nombre del menu
		'footer_menu' => 'Menu Inferior'
	));		// Hablitiar o registrar el menu

	// Añadir o activar las imagenes 
	add_theme_support('post-thumbnails');
	add_image_size('slider_thumbs', 470, 300, true);
	add_image_size('jumbotron_thumbs', 1300, 200, true);
	add_image_size('list_articles_thumbs', 450, 370, true);

	// registrar o añadir el sidebar

	register_sidebar( array(
		'name' => 'buscar'
	));

	register_sidebar( array(
		'name' => 'sidebar',
		'before_widget' => '<div class="list_group">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
		'before_element' => '<a class="list-group-item">',
		'after_element' => '</a>'
	));

	register_sidebar( array(
		'name' => 'footer',
		'before_widget' => '<section class="widget">',
		'after_widget' => '</section>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
?>