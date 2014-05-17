<?php
/**
 * File Security Check
 */
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
    die ( 'You do not have sufficient permissions to access this page!' );
}
?>
	<div <?php hybrid_post_attributes(); ?>>

	<?php $html = sprintf(
    '<div class="404-msg"><p>%s</p><p>%s</p><ul><li>%s</li><li>%s</li><li>%s</li></ul><p>%s</p></div><br/>',
   		__( 'The page you are looking for can’t be found. Sorry!', hybrid_get_parent_textdomain() ),
    	__( 'There could be a few different reasons for this:', hybrid_get_parent_textdomain() ),
    	__( 'The page was moved.', hybrid_get_parent_textdomain() ),
    	__( 'The page no longer exists.', hybrid_get_parent_textdomain() ),
    	__( 'The URL is slightly incorrect.', hybrid_get_parent_textdomain() ),
    	__( "To get you back on track, I'd suggest trying a search:", hybrid_get_parent_textdomain() )
	);
	echo $html;

	get_search_form();

	?>		
	</div><!-- .hentry .error -->