<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package site
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page">
	<header id="header">
		<div class="container">
			<div class="row header-logo">
				<div class="col-md-3">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo.jpg"; ?>"/></a>
				</div>
				<div class="col-md-9 logo-center">
					<div class="row redes">
						<ul class="redes_sociais_header">
							<li class="youtube"><a target="_blank" href="#"></a></li>
							<li class="twitter"><a target="_blank" href="#"></a></li>
							<li class="facebook"><a target="_blank" href="#"></a></li>
						</ul>							
					</div>
					<div class="row">
						<div class="menu-responsivo">
							<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
							</button>
							<ul class="dropdown-menu">
								<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Início</a></li
								><li><a href="<?php echo esc_url( home_url( '/' )."sobre" ); ?>">Nobre Arte Design</a></li
								><li><a href="<?php echo esc_url( home_url( '/' ) )."tapecaria"; ?>">Tapeçaria</a></li
								><li><a href="<?php echo esc_url( home_url( '/' ) )."reforma-de-estofados"; ?>">Reforma de Estofados</a></li
								><li><a href="<?php echo esc_url( home_url( '/' ) )."impermeabilizacao"; ?>">Impermeabilização</a></li
								><li><a href="<?php echo esc_url( home_url( '/' ) )."contato"; ?>">Contato</a></li>
							</ul>								
						</div>
						<nav>
							<ul class="menu-principal clearfix">
								<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Início</a></li
								><li><a href="<?php echo esc_url( home_url( '/' )."sobre" ); ?>">Nobre Arte Design</a></li
								><li><a href="<?php echo esc_url( home_url( '/' ) )."tapecaria"; ?>">Tapeçaria</a></li
								><li><a href="<?php echo esc_url( home_url( '/' ) )."reforma-de-estofados"; ?>">Reforma de Estofados</a></li
								><li><a href="<?php echo esc_url( home_url( '/' ) )."impermeabilizacao"; ?>">Impermeabilização</a></li
								><li><a href="<?php echo esc_url( home_url( '/' ) )."contato"; ?>">Contato</a></li>
							</ul>
						</nav><!-- #site-navigation -->						
					</div>
				</div>
			</div><!-- .row -->
		</div><!-- .container -->
	</header><!-- #masthead -->


