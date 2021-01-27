<?php
/**
 * The template for displaying comments
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area mb-5">

	<?php
	if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				printf( // WPCS: XSS OK.
					esc_html( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'itworksb5' ) ),
					number_format_i18n( get_comments_number() ),
					'<span>' . get_the_title() . '</span>'
				);
			?>
		</h2><!-- .comments-title -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
			<h2 class="sr-only"><?php esc_html_e( 'Comment navigation', 'itworksb5' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'itworksb5' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'itworksb5' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-above -->
		<?php endif; // Check for comment navigation. ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
			<h2 class="sr-only"><?php esc_html_e( 'Comment navigation', 'itworksb5' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'itworksb5' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'itworksb5' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-below -->
		<?php
		endif; // Check for comment navigation.

	endif; // Check for have_comments().


	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'itworksb5' ); ?></p>
	<?php
	endif;

	$req = get_option( 'require_name_email' );
		$aria_req = ( $req ? " aria-required='true'" : '' );

	$comments_args = array(
				// change the title of send button 
				'label_submit'=> __('Submit', 'itworksb5' ),
				// change the title of the reply section
				'title_reply'=> __('Leave a Comment', 'itworksb5' ),
				// remove "Text or HTML to be displayed after the set of comment fields"
				'comment_notes_after' => '',
				// add classes to submit button
				'class_submit'=>'btn btn-primary mt-2',
				// redefine your own textarea (the comment body)
				'comment_field' => ' <div class="form-group"><label for="comment">' . __( 'Comment', 'itworksb5' ) . '</label><textarea class="form-control" rows="4" id="comment" name="comment" aria-required="true"></textarea></div>',

				'fields' => apply_filters( 'comment_form_default_fields', array(

					'author' =>
						'<div class="form-group">' .
						'<label for="author">' . __( 'Name', 'itworksb5' ) . '</label> ' .
						( $req ? '<span class="required">*</span>' : '' ) .
						'<input class="form-control" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
						'" size="30"' . $aria_req . ' /></div>',

					'email' =>
						'<div class="form-group"><label for="email">' . __( 'Email', 'itworksb5' ) . '</label> ' .
						( $req ? '<span class="required">*</span>' : '' ) .
						'<input class="form-control" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
						'" size="30"' . $aria_req . ' /></div>',

					'url' =>
						'<div class="form-group"><label for="url">' .
						__( 'Website', 'itworksb5' ) . '</label>' .
						'<input class="form-control" id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
						'" size="30" /></div>'
				)
				
			),
		);

	comment_form($comments_args);
	?>
</div><!-- #comments -->
