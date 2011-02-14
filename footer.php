<?php
/**
 * @package WordPress
 * @subpackage Open AgroClimate
 */
?>

<div id="footer">
<ul>
	<?php wp_nav_menu(array(
		 'menu'=>'footer-menu' ,
		 'container'       => false, 
		 'theme_location'  => 'footer-menu')
		 );
	?>
</ul>
</div>