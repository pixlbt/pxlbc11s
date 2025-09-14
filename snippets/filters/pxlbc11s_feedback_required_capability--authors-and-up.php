<?php
/**
 * pxlbc11s_feedback_required_capability filter
 * lighten or customize the capability required to submit feedback
 */

// allow all logged-in users who can write posts
add_filter( 'pxlbc11s_feedback_required_capability', function ( $defaultCapability ) {
	return 'edit_posts';
}, 10, 1 );
