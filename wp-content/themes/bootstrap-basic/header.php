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

		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<!--wordpress head-->
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<!--[if lt IE 8]>
			<p class="ancient-browser-alert">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" target="_blank">upgrade your browser</a>.</p>
		<![endif]-->
		
		<header>
            <div id="topo">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            
                        </div>
                        <div class="col-md-4">
                            <p>18 anos de excelência, profissionalimo e inovação</p>
                        </div>
                        <div class="col-md-5">
                            <p class="pull-right"><i class="glyphicon glyphicon-earphone font13"></i>Telefones:<span class="font13">11 </span>3228 - 2525 | 3326 - 6606 | 3228 - 3864</p>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-md-offset-1">
                        <a id="logotipo" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><img src="<?php echo get_template_directory_uri();?>/img/logo.png" class="img-responsive" alt="logo">
                    </div>
                    <div class="col-md-9 espaco_20">
                        <div class="row">
                            <div class="col-md-3 col-md-offset-8">
                                <a href="#" class="btn btn_azulao pull-right font11">LOGIN DO CLIENTE ></a>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                        <div id="bloco-menu" class="row">
                            <div class="col-md-8">
                            	<nav class="navbar" role="navigation">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-primary-collapse">
										<span class="sr-only"><?php _e('Toggle navigation', 'bootstrap-basic'); ?></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
							
								<div class="collapse navbar-collapse navbar-primary-collapse">
									<?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav', 'walker' => new BootstrapBasicMyWalkerNavMenu())); ?> 
									
								</div><!--.navbar-collapse-->

						</nav>
                                <!-- <ul class="nav navbar-nav">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Empresas</a></li>
                                    <li><a href="#">Novidades</a></li>
                                    <li><a href="#">Fornecedores</a></li>
                                    <li><a href="#">Showroom</a></li>
                                    <li><a href="#">Trabalhe conosco</a></li>
                                </ul> -->
                            </div>
                            
                            <div class="col-md-3">
                                <form class="form-inline">
                                    <div class="form-group">
	                                    <div class="input-group">
	                                    	<input type="text" class="form-control" id="exampleInputAmount" placeholder="Procurar">
	                                    <div class="input-group-addon"><i class="glyphicon glyphicon-search"></i></div>
	                                    </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                    </div>
                    
                </div>
            </div>  
        </header>
		
		
		<?php /*
		<div class="container page-container">
			<?php do_action('before'); ?> 
			<header role="banner">
				<div class="row row-with-vspace site-branding">
					<div class="col-md-6 site-title">
						<h1 class="site-title-heading">
							<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a>
						</h1>
						<div class="site-description">
							<small>
								<?php bloginfo('description'); ?> 
							</small>
						</div>
					</div>
					<div class="col-md-6 page-header-top-right">
						<div class="sr-only">
							<a href="#content" title="<?php esc_attr_e('Skip to content', 'bootstrap-basic'); ?>"><?php _e('Skip to content', 'bootstrap-basic'); ?></a>
						</div>
						<?php if (is_active_sidebar('header-right')) { ?> 
						<div class="pull-right">
							<?php dynamic_sidebar('header-right'); ?> 
						</div>
						<div class="clearfix"></div>
						<?php } // endif; ?> 
					</div>
				</div><!--.site-branding-->
				
				<div class="row main-navigation">
					<div class="col-md-12">
						<nav class="navbar navbar-default" role="navigation">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-primary-collapse">
									<span class="sr-only"><?php _e('Toggle navigation', 'bootstrap-basic'); ?></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							
							<div class="collapse navbar-collapse navbar-primary-collapse">
								<?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav', 'walker' => new BootstrapBasicMyWalkerNavMenu())); ?> 
								<?php dynamic_sidebar('navbar-right'); ?> 
							</div><!--.navbar-collapse-->
						</nav>
					</div>
				</div><!--.main-navigation-->
			</header>
			
			
			<div id="content" class="row row-with-vspace site-content">

			*/?>
