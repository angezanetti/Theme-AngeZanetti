<?php
/**
 * The template for displaying search forms in  AZ
 * @package WordPress
 * @subpackage Theme AZ
 */
?>
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<label for="s" class="assistive-text"></label>
		<input type="text" class="field" name="s" id="s" placeholder="Rechercher "/>
	</form>
