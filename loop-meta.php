<?php
/**
 * File Security Check
 */
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
    die ( 'You do not have sufficient permissions to access this page!' );
}

/* If viewing a singular front page, return. */
if ( ( is_home() && is_front_page() ) || ( is_page() && is_front_page() )  )
	return;
?>

<div class="loop-meta jumbotron" role="banner">

	<div class="container">

		<?php if ( maybe_bbpress() ) { ?>

			<h1 class="loop-title"><?php bbp_forum_archive_title(); ?></h1>

			<div class="loop-description">
				<p>You are browsing the forums.</p>
			</div><!-- .loop-description -->

		<?php } elseif ( maybe_woocommerce() && !is_tax() ) { ?>

			<h1 class="loop-title">Shop</h1>

			<div class="loop-description">
				<p>You are browsing the shop.</p>
			</div><!-- .loop-description -->

		<?php } elseif ( is_home() && !is_front_page() ) { ?>

			<h1 class="loop-title"><?php echo get_post_field( 'post_title', get_queried_object_id() ); ?></h1>

			<div class="loop-description">
				<?php echo wpautop( get_excerpt_by_id( get_queried_object_id() ) ); ?>
			</div><!-- .loop-description -->

		<?php } elseif ( is_category() ) { ?>

			<h1 class="loop-title"><?php single_cat_title(); ?></h1>

			<div class="loop-description">
				<?php echo category_description(); ?>
			</div><!-- .loop-description -->

		<?php } elseif ( is_tag() ) { ?>

			<h1 class="loop-title"><?php single_tag_title(); ?></h1>

			<div class="loop-description">
				<?php echo tag_description(); ?>
			</div><!-- .loop-description -->

		<?php } elseif ( is_tax() ) { ?>

			<h1 class="loop-title"><?php single_term_title(); ?></h1>

			<div class="loop-description">
				<?php echo term_description( '', get_query_var( 'taxonomy' ) ); ?>
			</div><!-- .loop-description -->

		<?php } elseif ( is_author() ) { ?>

			<h1 class="loop-title fn n"><?php the_author_meta( 'display_name', get_query_var( 'author' ) ); ?></h1>

			<div class="loop-description">
				<?php echo wpautop( sprintf( __( 'You are browsing the author archive for %s', hybrid_get_parent_textdomain() ), get_the_author_meta( 'display_name', get_query_var( 'author' ) ) ) ); ?>
			</div><!-- .loop-description -->

		<?php } elseif ( is_search() ) { ?>

			<h1 class="loop-title"><?php echo esc_attr( get_search_query() ); ?></h1>

			<div class="loop-description">
				<?php echo wpautop( sprintf( __( 'You are browsing the search results for "%s"', hybrid_get_parent_textdomain() ), esc_attr( get_search_query() ) ) ); ?>
			</div><!-- .loop-description -->

		<?php } elseif ( is_post_type_archive() ) { ?>

			<?php $post_type = get_post_type_object( get_query_var( 'post_type' ) ); ?>

			<h1 class="loop-title"><?php post_type_archive_title(); ?></h1>

			<div class="loop-description">
				<?php echo wpautop( sprintf( __( 'You are browsing the %s archives.', hybrid_get_parent_textdomain() ), get_query_var( 'post_type' ) ) ); ?>
			</div><!-- .loop-description -->

		<?php } elseif ( is_day() || is_month() || is_year() ) { ?>

			<?php
				if ( is_day() )
					$date = get_the_time( __( 'F d, Y', hybrid_get_parent_textdomain() ) );
				elseif ( is_month() )
					$date = get_the_time( __( 'F Y', hybrid_get_parent_textdomain() ) );
				elseif ( is_year() )
					$date = get_the_time( __( 'Y', hybrid_get_parent_textdomain() ) );
			?>

			<h1 class="loop-title"><?php echo $date; ?></h1>

			<div class="loop-description">
				<?php echo wpautop( sprintf( __( 'You are browsing the site archives for %s.', hybrid_get_parent_textdomain() ), $date ) ); ?>
			</div><!-- .loop-description -->

		<?php } elseif ( is_page() ) { ?>

			<h1 class="loop-title"><?php the_title(); ?></h1>

			<div class="loop-description">
				<?php the_excerpt(); ?>
			</div><!-- .loop-description -->

		<?php } elseif ( is_singular('post') ) { ?>

			<h1 class="loop-title"><?php single_post_title(); ?></h1>

		<?php } elseif ( is_404() ) { ?>

			<h1 class="loop-title"><?php _e( 'Nothing found', hybrid_get_parent_textdomain() ); ?></h1>

			<div class="loop-description">
				<p><?php _e( 'Apologies, but no entries were found.', hybrid_get_parent_textdomain() ); ?></p>
			</div><!-- .loop-description -->

		<?php } // End if check ?>

	</div><!-- .container -->

</div><!-- .loop-meta -->