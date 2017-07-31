<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php get_locale(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<?php wp_head(); ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="<?php if(wpmd_is_phone()) echo 'is-phone'; ?> <?php if(wpmd_is_tablet()) echo 'is-tablet'; ?>">
	
	<div id="preloader"></div>
	<div id="top"></div>
	<div class="navigate-panel-mobile visible-xs visible-sm">
		<a class="switch-mobile-menu" href="#navigate-panel-mobile-menu"><div class="icon"><div class="middle-line"></div></div></a>
		<a class="to-up-arrow moveSectionUp scroll-to" href="#top"></a>
	</div>
	<div id="navigate-panel-mobile-menu" class="navigate-panel-mobile-menu">
		<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_class' => 'menu', 'menu_class' => '' ) ); ?>
	</div>
  <?php 
		//Если не главная показываем хедер для второстепенных страниц
	if(!is_front_page()) : ?>
		<header>
			<div class="container">
				<div class="row">
					<div class="col-xs-1 text-right top-margin-logo">
						<a href="/" class="logo main-logo-dark" href="#"></a>
					</div>
					<div class="col-xs-11">			
						<?php 
						global $navigatePanelSetting;
						$navigatePanelSetting = array();
						$navigatePanelSetting['isSupPage'] = true;
						get_template_part('blocks/base/navigate-panel'); ?>
					</div>
				</div>
			</div>	
		</header>
	<?php endif; ?>