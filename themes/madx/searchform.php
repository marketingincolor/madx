<?php
/**
 * The template for displaying search form
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
	<div class="input-group relative">
		<input type="text" class="input-group-field" value="" name="s" id="s" placeholder="<?php esc_attr_e( 'Search Blog', 'foundationpress' ); ?>">
		<button type="submit" class="absolute">
		   <i class="fas fa-search"></i>
		</button>
	</div>
</form>
