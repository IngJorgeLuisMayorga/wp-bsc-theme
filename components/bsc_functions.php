<?php


//add_filter( 'get_product_search_form' , 'woo_custom_product_searchform' );

/**
 * woo_custom_product_searchform
 *
 * @access      public
 * @since       1.0 
 * @return      void
*/
function woo_custom_product_searchform( $form ) {
	
	$form = '
    <form 
        id="searchform" 
        method="get"
        role="search" 
        action="' . esc_url( home_url( '/'  ) ) . '">
            <div>
                <label class="screen-reader-text" for="s">' . __( 'Search for:', 'woocommerce' ) . '</label>
                <input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="' . __( 'My Search form', 'woocommerce' ) . '" />
                <input type="submit" id="searchsubmit" value="'. esc_attr__( 'Search', 'woocommerce' ) .'" />
                <input type="hidden" name="post_type" value="product" />
            </div>
	</form>
    ';
	
	return $form;
	
}

?>