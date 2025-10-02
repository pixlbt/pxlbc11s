<?php
/**
 * pxlbc4n_feedback_required_capability filter
 * lighten or customize the capability required to submit feedback
 */

// allow shop support staff who manage orders or products
add_filter( 'pxlbc4n_feedback_required_capability', function ( $defaultCapability ) {
	return [ 'edit_shop_orders', 'edit_products' ];
}, 10, 1 );
