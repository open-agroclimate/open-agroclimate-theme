<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 
 * Template Name: Tools with sidebar
 */

get_header(); ?>

<div id="mainBody">
<div id="innerWrap" style="padding-right: 20px;">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		<h1><?php the_title(); ?></h1>
			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>
		</div>
		<?php endwhile; endif; ?>
	<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

</div>
</div>
<?php get_sidebar(); ?>

<span class="boxout">&nbsp;</span>

</div>
<?php get_footer(); ?>

