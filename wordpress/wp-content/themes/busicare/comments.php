<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BusiCare
 */
/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if (post_password_required()) {
    return;
}
if (have_comments()) :
    ?>
    <article class="comment-section">

        <div class="comment-title">
            <h3>
                <?php
                $busicare_comment_count = get_comments_number();
                if ('1' === $busicare_comment_count) {
                    echo '1 ';
                    printf(
                            /* translators: 1: title. */
                            esc_html__('comment', 'busicare'),
                            '<span>' . esc_html(get_the_title()) . '</span>'
                    );
                } else {
                    printf(
                            /* translators: 1: comment count number, 2: title. */
                            esc_html(_nx('%1$s comment', '%1$s comments', $busicare_comment_count, 'comments title', 'busicare')),
                            esc_html(number_format_i18n($busicare_comment_count)),
                            '<span>' . esc_html(get_the_title()) . '</span>'
                    );
                }
                ?>
            </h3>
        </div>
        <?php
        the_comments_navigation();
        wp_list_comments('type=comment&callback=busicare_comment');
        the_comments_navigation();

        // If comments are closed and there are comments, let's leave a little note, shall we?
        if (!comments_open()) :
            ?>
            <p class="no-comments"><?php esc_html_e('Comments are closed.', 'busicare'); ?></p>
        <?php
        endif;
        echo '</article>';
endif;
    echo '<article class="comment-form">';
    comment_form();
    echo '</article>';
    ?>