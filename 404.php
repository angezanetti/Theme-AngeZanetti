<?php
/**
 * 404 template file
 * @package WordPress
 * @subpackage Theme AZ
 */

get_header(); ?>

<div id="content">
  <h2>ERROR</h2>
  <div id="oops">
    404
  </div>
  <p> Oops ! Ce que vous cherchez ne se trouve pas ici .... Peut être que les liens ci dessous pourront vous aider à retrouver votre chemin ! Sinon vous pouvez me poser la question par twitter : <a href="http://twitter.com/@angezanetti">@AngeZanetti</a> je me ferais une joie de vous aider !</p>
<br />
  <?php get_search_form(); ?>

  <?php the_widget( 'WP_Widget_Recent_Posts', array( 'number' => 10 ), array( 'widget_id' => '404' ) ); ?>
</div>

<?php get_footer(); ?>


