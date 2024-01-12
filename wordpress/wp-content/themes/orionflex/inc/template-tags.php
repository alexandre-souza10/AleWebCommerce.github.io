<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package orionflex
 */

if ( ! function_exists( 'orionflex_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function orionflex_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		echo ' <span class="posted-on">' . $posted_on . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
endif;

if ( ! function_exists( 'orionflex_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function orionflex_posted_by() {
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( 'Posted by %s', 'post author', 'orionflex' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="byline"> ' . $byline . '</span> '; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
endif;

if ( ! function_exists( 'orionflex_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the tags and comments.
	 */
	function orionflex_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'orionflex' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'orionflex' ) . '</span>', $tags_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'orionflex' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);
			echo '</span>';
		}

		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'orionflex' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;

if ( ! function_exists( 'wp_body_open' ) ) :
	/**
	 * Shim for sites older than 5.2.
	 *
	 * @link https://core.trac.wordpress.org/ticket/12563
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
endif;

if ( ! function_exists( 'orionflex_services' ) ) {
	function orionflex_services() {
		 
			?>
			
			
				<div class="col-3">
				<div class="aribg">
				<div class="service-icon">
						<i class="fa fa-camera-retro"></i>
				</div>
				<div class="service-info">
				<h3><?php 
					if ( get_theme_mod( 'service_t_one' ) <> '' ) {
						echo '' . esc_html( get_theme_mod( 'service_t_one' ) ) . '';
					} else
					{
						echo __('Lorem Ipsum', 'orionflex');
					}?>
				</h3>
			
				<p>
				<?php 
					if ( get_theme_mod( 'service_d_one' ) <> '' ) {
						echo '' . esc_html( get_theme_mod( 'service_d_one' ) ) . '';
					} else
					{
						echo __('Est ipsum doloribus et consequatur fuga hic totam adipisci est quia corporis est modi asperiores At possimus labore.', 'orionflex');
					}?>
				</p>
				</div>
				</div> 
				</div>
				
				
				
				
				
				
				<div class="col-3">
				<div class="aribg">
				<div class="service-icon">
						<i class="fa fa-chevron-circle-left"></i>
				</div>
				<div class="service-info">
				<h3><?php 
					if ( get_theme_mod( 'service_t_two' ) <> '' ) {
						echo '' . esc_html( get_theme_mod( 'service_t_two' ) ) . '';
					} else
					{
						echo __('Lorem Ipsum', 'orionflex');
					}?>
				</h3>
			
				<p>
				<?php 
					if ( get_theme_mod( 'service_d_two' ) <> '' ) {
						echo '' . esc_html( get_theme_mod( 'service_d_two' ) ) . '';
					} else
					{
						echo __('Est ipsum doloribus et consequatur fuga hic totam adipisci est quia corporis est modi asperiores At possimus labore.', 'orionflex');
					}?>
				</p>
				</div>
				</div> 
				</div>
				
				
				
				
				
				<div class="col-3">
				<div class="aribg">
				<div class="service-icon">
						<i class="fa fa-calendar-minus"></i>
				</div>
				<div class="service-info">
				<h3><?php 
					if ( get_theme_mod( 'service_t_three' ) <> '' ) {
						echo '' . esc_html( get_theme_mod( 'service_t_three' ) ) . '';
					} else
					{
						echo __('Lorem Ipsum', 'orionflex');
					}?>
				</h3>
			
				<p>
				<?php 
					if ( get_theme_mod( 'service_d_three' ) <> '' ) {
						echo '' . esc_html( get_theme_mod( 'service_d_three' ) ) . '';
					} else
					{
						echo __('Est ipsum doloribus et consequatur fuga hic totam adipisci est quia corporis est modi asperiores At possimus labore.', 'orionflex');
					}?>
				</p>
				</div>
				</div> 
				</div>
			
			<?php
		 
	}
}
