<?php
/**
 * @package WordPress
 * @subpackage Open AgroClimate
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="keywords" content="Tools,Forecasts,Crops,Fruits,Forestry,Pasture,Livestock,Climate, El Nino,Links,AgroClimate" />	
	<!-- Link to shortcut Icon -->
	<!-- link rel="shortcut icon" href="/images/favicon.ico" / -->
	<!-- Link to main stylesheet -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper">
	<div id="Inwrapper">

		<div id="topper">
			<div id="topperLeft">
					<?php wp_nav_menu(array(
						 'menu'=>'header-menu' ,
						 'theme_location'  => 'header-menu')
		 				);
					?>

			</div>
		</div>
		<div id="branding">
			<a href="<?php bloginfo('url'); ?>" title="Home" id="logoLink">AgroClimate Home</a>
			<a href="http://SEClimate.org/" title="Southeast Climate Consortium Home" id="seccLink">A Service of the Southeast Climate Consortium</a>
		</div>