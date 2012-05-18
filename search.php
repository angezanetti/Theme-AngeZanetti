
<?php
/**
 * Search results file
 * @package WordPress
 * @subpackage Theme AZ
 */

get_header(); ?>

		<section id="primary">
			<div id="content" role="main">

			<?php if ( have_posts() ) : ?>

				<div class="page-header">
					<h1 class="page-title"><span>Résultats de votre recherche : </span></h1>
				</div>

				<?php ?>
				<?php while ( have_posts() ) : the_post(); ?>

          <article <?php post_class() ?> id="post-<?php the_ID(); ?>">

            <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
            
              <cite class="entry-meta"><time datetime="<?php echo date(DATE_W3C); ?>" pubdate class="updated"><?php the_time('j F, Y') ?></time>  •  <?php the_category(', ') ?>  •  </cite>
  

            <div class="entry">
              <?php echo improved_trim_excerpt(); ?>
            </div>
				
              <a href="<?php the_permalink(); ?>" class="button">Lire la suite &gt;</a>

          </article>
 

				<?php endwhile; ?>
      <?php else : ?>

				<article id="post-0" class="post no-results not-found">
          <div class="page-header">
						<h1 class="entry-title">Hum ...</h1><br />
					</div><!-- .entry-header -->

					<div class="entry-content">
						<p>Nous ne trouvons pas de résultats correspondant à votre recherche... </p>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>
			</div><!-- #content -->
		</section><!-- #primary -->

<?php get_footer(); ?>


