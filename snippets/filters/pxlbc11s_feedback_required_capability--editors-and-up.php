<?php
/**
 * pxlbc11s_feedback_required_capability filter
 * lighten or customize the capability required to submit feedback
 */

// allow editors and higher roles
add_filter( 'pxlbc11s_feedback_required_capability', function ( $defaultCapability ) {
	return 'edit_pages';
}, 10, 1 );
