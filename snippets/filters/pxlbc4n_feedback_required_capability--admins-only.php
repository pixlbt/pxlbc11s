<?php
/**
 * pxlbc4n_feedback_required_capability filter
 * lighten or customize the capability required to submit feedback
 */

// allow only administrators
add_filter( 'pxlbc4n_feedback_required_capability', function ( $defaultCapability ) {
	return 'manage_options';
}, 10, 1 );
