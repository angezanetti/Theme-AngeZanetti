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

<!-- FB -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


</html>