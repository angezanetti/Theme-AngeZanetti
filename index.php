<?php get_header(); ?>
  <div id="content">
  
  <?php if (have_posts()) : ?>
  
  	<?php while (have_posts()) : the_post(); ?>
  
    <div class="post" id="post-<?php the_ID(); ?>">
	  <div class="post-date"><span class="post-month"><?php the_time('M') ?></span> <span class="post-day"><?php the_time('d') ?></span></div>
	  <div class="post-title">
	  <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
		 <!-- <span class="post-comments"><?php comments_popup_link('Réagissez ! &#187;', '1 Commentaire &#187;', '% Commentaires &#187;'); ?></span> -->
	  </div>
	  <div class="entry">
		<?php the_content('Lire la suite &raquo;'); ?>
<span class="post-comments"><?php comments_popup_link('Réagissez ! &#187;', '1 Commentaire &#187;', '% Commentaires &#187;'); ?></span>
	  </div>


	</div><!--/post -->

	
	<?php endwhile; ?>
	
	<div class="navigation">
	  <span class="previous-entries"><?php next_posts_link('Mes anciens articles') ?></span> <span class="next-entries"><?php previous_posts_link('Les articles plus récents') ?></span>
	</div>
	
	<?php else : ?>
	
		<h2>Rien...</h2>
		<p>Désolé mais ce que vous cherchez ne se trouve pas ici...'</p>
		
  <?php endif; ?>
	
  </div><!--/content -->
  
<?php get_sidebar(); ?>

<?php get_footer(); ?>
