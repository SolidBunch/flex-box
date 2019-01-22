<?php
/**
 * WooCommerce search form template part
 **/
?>
<form class="search-form" action="<?php echo get_site_url(); ?>" method="get">
	<input type="hidden" name="post_type" value="product" />
	<input class="s" type="text" name="s" value="" placeholder="<?php esc_html_e( 'Search Products...', 'flex-box' ); ?>"/>
	<button type="submit"><i class="icon-search"></i></button>
</form>
