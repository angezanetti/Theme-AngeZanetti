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
    
      <h1 class="entry-title"><a title="<?php the_title(); ?>" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>

        <cite class="entry-meta">Publié le <time datetime="<?php echo date(DATE_W3C); ?>" pubdate class="updated"><?php the_time('j F, Y') ?></time>  • <?php the_tags(); ?> </cite>

      <div class="entry">
				<?php the_content(); ?>
			</div>

			<?php include (TEMPLATEPATH . '/inc/share.php' ); ?>

    </article>
    <?php comments_template(); ?>
    <?php endwhile; endif; ?>
</div> <!-- content -->

<!-- FB -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- G+ -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
<?php get_footer(); ?>
  
  
