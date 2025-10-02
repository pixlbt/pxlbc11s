<?php
/**
 * pxlbc4n_feedback_required_capability filter
 * lighten or customize the capability required to submit feedback
 */

// allow editors and higher roles
add_filter( 'pxlbc4n_feedback_required_capability', function ( $defaultCapability ) {
	return 'edit_pages';
}, 10, 1 );
