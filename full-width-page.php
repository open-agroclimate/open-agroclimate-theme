<?php
/**
 * Template Name: Full-width, no sidebar
 * Description: A full-width template with no sidebar
 *
 * @package WordPress
 * @subpackage agroclimate
 */

get_header('tools'); ?>

		<div id="mainBodyTools" class="full-width">
				<?php the_post(); ?>

				
				<h1><?php the_title(); ?></h1>
				<span class="boxout">&nbsp;</span>

						<?php the_content(); ?>
						<?php edit_post_link( __( 'Edit', 'agroclimate' ), '<span class="edit-link">', '</span>' ); ?>

				<?php comments_template( '', true ); ?>

			<span class="boxout"></span>

		</div><!-- #primary --></div>
<span class="boxout">&nbsp;</span>

</div>
<?php get_footer('toolsFooter'); ?>


