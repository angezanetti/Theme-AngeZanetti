<?php
/**
 * Page file
 * @package WordPress
 * @subpackage Theme AZ
 */
get_header(); ?>

<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="post" id="post-<?php the_ID(); ?>">
  
			<h1><?php the_title(); ?></h1>

			<div class="entry">

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'pages: ', 'next_or_number' => 'number')); ?>
			</div>
		</article>

		<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>	
