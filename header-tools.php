<?php
/**
 * Template Name: toolsHeader
 * @package WordPress
 * @subpackage Open AgroClimate
 */
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

	<meta name="robots" content="all" />
	<meta name="keywords" content="Tools,Forecasts,Crops,Fruits,Forestry,Pasture,Livestock,Climate, El Nino,Links,AgroClimate" />	
	<?php if (is_single()) { ?>
		<?php while (have_posts()) : the_post(); ?>
			<link rel="alternate" type="application/rss+xml" title="<?php the_title(); ?> Comments" href="<?php bloginfo('url'); ?>/?feed=rss2&amp;p=<?php the_ID(); ?>" />

		<?php endwhile; ?>

		<?php rewind_posts(); ?>

	<?php } ?> 

	
	<!-- Link to shortcut Icon -->
	<link rel="shortcut icon" href="/images/favicon.ico" />
	
	<!-- Link to main stylesheet -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
</head>
<body>
<div id="toolsWrapper">
	<div id="Inwrapper">

<div id="topper">
			<div id="topperLeft">
					<?php wp_nav_menu(array(
						 'menu'=>'header-menu' ,
						 'theme_location'  => 'header')
		 				);
					?>

			</div>

<div id="topperRight">

</div>
</div>
		<div id="branding">
			<a href="<?php bloginfo('url'); ?>" title="Home" id="logoLink">AgroClimate Home</a>
			<a href="http://SEClimate.org/" title="Southeast Climate Consortium Home" id="seccLink">A Service of the Southeast Climate Consortium</a>

			<span class="climatePhase">
				<!-- Climate Phase Indicator goes here -->
			</span>
		</div>
