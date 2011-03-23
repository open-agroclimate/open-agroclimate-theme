<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */

get_header(); ?>

<div id="mainBody">
<div id="innerWrap">
<div id="middleColumn">


					<?php
			/* Run the loop to output the posts.
			 * If you want to overload this in a child theme then include a file
			 * called loop-index.php and that will be used instead.
			 */
			 get_template_part( 'loop', 'index' );
			?>
</div>

<div id="RightColumn"></div>
</div>
</div>
<?php get_sidebar(); ?>

<span class="boxout">&nbsp;</span>

</div>
<?php get_footer(); ?>

