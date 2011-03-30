<?php
/**
 * @package WordPress
 * @subpackage Open AgroClimate
 */
?>

<div id="footer">
<ul>
    <?php 
    wp_nav_menu(array (
		 'menu'            => 'footer-menu' ,
		 'container'       => '', 
		 'theme_location'  => 'footer'
     ) );
	?>
</ul>
</div>
<?php wp_footer(); ?>
