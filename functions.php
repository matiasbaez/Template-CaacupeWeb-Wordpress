<?php
	//Creo el archivo de funciones


	// Registro el menu para poder usar
	register_nav_menus( 
		array(
			'principal' => 'Menu CaacupeWeb', // La ubicacion y el nombre del menu
			'footer' => 'Menu Footer'
		)
	);


	// Activo el soporte para los Widgets
	if (function_exists('register_sidebar')) { // Si existe la funcion
	
		register_sidebar( // Registro un sidebar | Ahora ago asi porque voy a usar varios 

			array(
				'name'          => 'Entradas Recientes', // El nombre del sidebar
				'before_title'  => '<h2>',
				'after_title'   => '</h2>'
				// Y dejo solo lo que voy a usar
			)
		);

		register_sidebar(
			array(
				'name' => 'Ultimas Categorias',
				'before_title'  => '<h2>',
				'after_title'   => '</h2>'
			)
		);

		register_sidebar(
			array(
				'name' => 'Facebook',
				'before_title'  => '<h2>',
				'after_title'   => '</h2>'
			)
		);

		register_sidebar(
			array(
				'name' => 'Twitter',
				'before_title'  => '<h2>',
				'after_title'   => '</h2>'
			)
		);
	}

	// Activo el soporte para las imagenes de las ENTRADAS O PUBLICACIONES

	if ( function_exists('add_theme_support')) {
		add_theme_support( 'post-thumbnails' ); // Con esta linea se activa

		// Agrego un tamaño de imagen de acuerdo al que quiero usar
		add_image_size('vista-previa-entrada', 270, 250, true); // Nombre, ancho, alto, recortado?;
		add_image_size('vista-lectura-entrada', 783, 290, true);
		add_image_size('miniatura-categoria', 580, 272, true);
	}


	function recursos_del_tema() {
		wp_enqueue_style( 'estilos', get_stylesheet_directory_uri().'/css/estilos.css');
		wp_enqueue_style( 'flexboxgrid', get_stylesheet_directory_uri().'/css/flexboxgrid.min.css');
		wp_enqueue_style( 'fonts', get_stylesheet_directory_uri().'/css/fonts.css');
		wp_enqueue_style( 'style', get_stylesheet_uri());
		

		wp_enqueue_script( 'jquery.min', get_template_directory_uri().'/js/jquery.min.js', array('jquery'), '3.1.1', true );

		wp_enqueue_script( 'funciones', get_template_directory_uri().'/js/funciones.js', array('jquery'), '3.1.1', true );
	
		}

	add_action( 'wp_enqueue_scripts', 'recursos_del_tema' );


?>