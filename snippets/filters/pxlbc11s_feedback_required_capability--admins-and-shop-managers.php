<?php
/**
 * pxlbc11s_feedback_required_capability filter
 * lighten or customize the capability required to submit feedback
 */

// allow administrators and shop managers
add_filter( 'pxlbc11s_feedback_required_capability', function ( $defaultCapability ) {
	return 'manage_woocommerce';
}, 10, 1 );
