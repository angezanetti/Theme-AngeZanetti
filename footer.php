<?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage Theme AZ 
 */
?>
  <footer>
    <div id="colophon">
      <?php
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>
      
    </div>
    <div id="site-generator">
      <a href="http://xaviercoiffard.com">Code & design by Xavier COIFFARD</a> | <a href="http://angezanetti.com/mentions-legales/">Mentions Légales</a> | <a href="http://angezanetti.com/contact/">Contact </a>
    </div>
	</footer> <!-- #colophon -->

<?php wp_footer(); ?>

</body>


</html>