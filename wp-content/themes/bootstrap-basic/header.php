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
						<div class="col-md-2 col-sm-12">
							<a id="logotipo" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><img src="<?php echo get_template_directory_uri();?>/img/logo.png" class="img-responsive" alt="logo">
						</div>
						<div class="col-md-10 col-sm-12 col-xs-12">
							<div class="row white">
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                            <p>18 anos de excelência, profissionalimo e inovação</p>
		                        </div>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                            <p class="pull-right"><i class="glyphicon glyphicon-earphone font13"></i>Telefones:<span class="font13">11 </span>3228 - 2525 | 3326 - 6606 | 3228 - 3864</p>
		                        </div>
	                    	</div>
	                    	<div class="row espaco_20">
								<div class="col-md-12">
									 <a href="#" class="btn btn_azulao pull-right font11">LOGIN DO CLIENTE ></a>
								</div>
							</div>
							<div id="bloco-menu" class="row">
								<div class="col-md-9 col-sm-12">
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
										</div><!--.navbar-collapse-->
									</nav>
                            	</div>
                            	<div class="col-md-3 col-sm-12">
	                                <form class="form-inline pull-right">
	                                    <div class="form-group">
		                                    <div class="input-group">
		                                    	<input type="text" class="form-control" id="exampleInputAmount" placeholder="Procurar">
		                                    <div class="input-group-addon"><i class="glyphicon glyphicon-search"></i></div>
		                                    </div>
	                                    </div>
	                                </form>
                            	</div>
							</div>
	                	</div>
	                </div>
				</div>
            </div>

        </header>


		
