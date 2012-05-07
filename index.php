<?php
/**
 * Index file
 * @package WordPress
 * @subpackage Theme AZ
 */

get_header(); ?>

 <div id="main">
  <div id="content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <h2 class="entry-title"><a title="<?php the_title(); ?>" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

        <cite class="entry-meta">Publié le <time datetime="<?php echo date(DATE_W3C); ?>" pubdate class="updated"><?php the_time('j F, Y') ?></time>  • <?php the_tags(); ?> </cite>

      <div class="entry">
			  <?php echo improved_trim_excerpt(); ?>
      </div>

      <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>" class="button">Lire la suite &gt;</a>
	  <?php endwhile; ?>

    <?php else : ?>

				<article id="post-0">
					<header class="entry-header">
						<h1 class="entry-title"><?php echo "Pas d'articles"; ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php echo" Désolé mais nous n'avons pas trouvé de résultats à votre recherche..."; ?></p>
            <?php /*get_search_form();*/ ?> 
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>

			</div><!-- #content -->
      <div id="pages_num"> 

      <?php
        global $wp_query;
        $big = 999999999; // need an unlikely integer
        echo paginate_links( array(
          'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
          'format' => '?paged=%#%',
          'current' => max( 1, get_query_var('paged') ),
          'total' => $wp_query->max_num_pages
        ) );
      ?>
      </div> <!-- pages_num -->

		</div><!-- #main-->

<?php get_footer(); ?>  
