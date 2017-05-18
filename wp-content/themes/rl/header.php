<?php
/**
 * The theme header
 * 
 * @package bootstrap-basic
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>     <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>     <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width">
		<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;
	wp_title( '|', true, 'right' );
	// Add the blog name.
	bloginfo( 'name' );
	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	// Add a page number if necessary:
	?></title>

		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<!--wordpress head-->
		<?php wp_head(); ?>
		  <!-- If you are using the CSS version, only link these 2 files, you may add app.css to use for your overrides if you like -->
		  
		  <link rel="stylesheet" href="<?php echo get_theme_file_uri('css/normalize.css');?>">
		  <link rel="stylesheet" href="<?php echo get_theme_file_uri('css/foundation.css');?>">
		  <link rel="stylesheet" href="<?php echo get_theme_file_uri('css/font-awesome.css');?>">
		 <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

		  <!-- If you are using the gem version, you need this only -->
		  <script src="<?php echo get_theme_file_uri('js/vendor/modernizr.js');?>"></script>
	</head>
	<body <?php body_class(); ?>>
		<div class="fx_azul_top">
			<div class="row">
				<div class="small-12 large-2 columns">
					<img src="<?php echo get_template_directory_uri();?>/img/logo.png"></img>
				</div>
				<div class="large-5 columns txt_slogan">18 anos de excelência, profissionalimo e inovação</div>
				<div class="large-5 columns">
					<i class="fa fa-phone"></i>
					<div class="txt_telefone_top">Telefones:</div>
					<div class="ddd">11</div>
					<div class="telefone_top">3228 - 2525 | 3326 - 6606 | 3228 - 3864</div>
						<a href="#">
							<div class="btn">LOGIN DO CLIENTE ></div>
						</a>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- <div class="large-9 columns">HOME | EMPRESA | NOVIDADES | FORNECEDORES | SHOWROOM | TRABALHE CONOSCO | CONTATO</div> -->
				
					<?php wp_nav_menu( array(

						'menu' => 'meu_menu',

						'theme_location' => 'meu_menu',

						'container' => 'div',

						'container_class' => 'large-7 columns',

						'container_id' => 'id_do_container',

						'menu_class' => '',

						'echo' => true,

						'menu_id' => 'menu_topo',

						'before' => '',

						'after' => '',

						'link_before' => '',

						'link_after' =>'',

						'depth' => 0,

						'walker' =>'',

					) );?>
			
				<div class="large-3 columns busca"> <?php get_search_form(); ?></div>
			</div>
		<div class="fx_azul_banner"></div>
