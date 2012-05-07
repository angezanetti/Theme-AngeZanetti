<?php
/**
 * Single file
 * @package WordPress
 * @subpackage Theme AZ
 */
get_header(); ?>
<div id="content">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
    
      <h2 class="entry-title"><a title="<?php the_title(); ?>" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

        <cite class="entry-meta">Publié le <time datetime="<?php echo date(DATE_W3C); ?>" pubdate class="updated"><?php the_time('j F, Y') ?></time>  • <?php the_tags(); ?> </cite>

      <div class="entry">
				<?php the_content(); ?>
			</div>

			<?php include (TEMPLATEPATH . '/inc/share.php' ); ?>

    </article>
    <?php comments_template(); ?>
    <?php endwhile; endif; ?>
</div> <!-- content -->

<?php get_footer(); ?>
  
  
