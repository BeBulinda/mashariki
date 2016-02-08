<?php
/**
 * Theme callback for comments
 *
 * @package twistItAdmin
 * @param object $comment comments to an item
 * @param array $args arguments
 * @param int $depth depth/thread limit of conversation
 * @return void
 */

function minima_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    ?>
    <li <?php comment_class(); ?>>
        <?php echo get_avatar($comment, $size = '70'); ?>

        <article id="comment-<?php comment_ID(); ?>" class="ti-comment">

            <header class="comment-author vcard">
                <time datetime="<?php echo comment_date('c'); ?>"><a class="comment-date" href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)); ?>"><?php printf(__('%1$s', 'minima'), get_comment_date(), get_comment_time()); ?></a></time>
                <h6 class="comment-user"><?php printf(__('<cite class="fn">%s</cite>', 'minima'), get_comment_author_link()); ?></h6>
                <?php edit_comment_link(__('(Edit)', 'minima'), '', ''); ?>
            </header>
            <?php if ($comment->comment_approved == '0') { ?>
                <div class="alert alert-block fade in">
                    <a class="close" data-dismiss="alert">&times;</a>
                    <p><?php _e('Your comment is awaiting moderation.', 'minima'); ?></p>
                </div>
            <?php } ?>
            <section class="comment">
                <?php comment_text() ?>
            </section>

            <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?>

        </article>
    <?php } ?>

    <?php if (post_password_required()) { ?>
        <section id="comments">
            <div class="alert">
                <p><?php _e('This post is password protected. Enter the password to view comments.', 'minima'); ?></p>
            </div>
        </section><!-- /#comments -->
        <?php
        return;
    }
    ?>

    <section id="comments">
        <?php if (have_comments()) { ?>
            <h5><?php printf(_n('One Response to &ldquo;%2$s&rdquo;', '%1$s Responses to &ldquo;%2$s&rdquo;', get_comments_number(), 'minima'), number_format_i18n(get_comments_number()), get_the_title()); ?></h5>

            <ul class="main-comments">
                <?php wp_list_comments(array('callback' => 'minima_comment')); ?>
            </ul>

            <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) { // are there comments to navigate through  ?>
                <nav id="comments-nav" class="pager row">
                    <div class="previous span6"><?php previous_comments_link(__('&larr; Older comments', 'minima')); ?></div>
                    <div class="next span6"><?php next_comments_link(__('Newer comments &rarr;', 'minima')); ?></div>
                </nav>

            <?php } // check for comment navigation  ?>

            <?php if (!comments_open() && !is_page() && post_type_supports(get_post_type(), 'comments')) { ?>
                <div class="alert">
                    <p><?php _e('Comments are closed.', 'minima'); ?></p>
                </div>
            <?php } ?>
        <?php } ?>

    </section><!-- /#comments -->

    <?php if (!have_comments() && !comments_open() && !is_page() && post_type_supports(get_post_type(), 'comments')) { ?>
        <section>
            <div class="alert">
                <p><?php _e('Comments are closed.', 'minima'); ?></p>
            </div>
        </section><!-- /#comments -->
    <?php } ?>

    <?php if (comments_open()) {
    $args = array(
        'id_form'           => 'commentform',
        'id_submit'         => 'submit',
        'title_reply'       => '<span class="icon-chat"></span>'.__( 'Leave a Reply' ,'minima'),
        'title_reply_to'    => '<span class="icon-chat">O</span>'.__( 'Leave a Reply to %s','minima' ),
        'cancel_reply_link' => __( 'Cancel Reply' ,'minima' ),
        'label_submit'      => __( 'Post Comment' ,'minima' ),

        'comment_field' =>  '<label for="comment-message" class="ti-label">'._x( 'Comment', 'noun' ) .
            '*</label><textarea name="comment" id="comment-message" class="ti-textarea" tabindex="4"></textarea>' .
            '</textarea><br/>',

        'must_log_in' => '<p class="must-log-in">' .
            sprintf(
                __( 'You must be <a href="%s">logged in</a> to post a comment.' ,'minima'),
                esc_url(wp_login_url( apply_filters( 'the_permalink', get_permalink() ) ))
            ) . '</p>',

        'logged_in_as' => '<p class="logged-in-as">' .
            sprintf(
                __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ,'minima' ),
                admin_url( 'profile.php' ),
                $user_identity,
                esc_url(wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) ))
            ) . '</p>',

        'comment_notes_before' => '<p class="comment-notes">' .
            __( 'Your email address will not be published.' ,'minima') . ( $req ? '' : '' ) .
            '</p>',

        'comment_notes_after' => '<p class="form-allowed-tags">' .
            sprintf(
                __( 'You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes: %s' ),
                ' <code>' . allowed_tags() . '</code>'
            ) . '</p>',

        'fields' => apply_filters( 'comment_form_default_fields', array(

                'author' =>
                    '<label for="author" class="ti-label">' . __( 'Name', 'minima' ) .
                    ( $req ? '<span class="required">*</span>' : '' ) . '</label> ' .
                    '<input id="author" name="author" class="text ti-text" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
                    '" size="30"' . $req . ' /><br/>',

                'email' =>
                    '<label for="email" class="ti-label">' . __( 'Email', 'minima' ) .
                    ( $req ? '<span class="required">*</span>' : '' ) . '</label> ' .
                    '<input id="email" name="email" type="text" class="text ti-text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                    '" size="30"' . $req . ' /><br/>',

                'url' =>
                    '<label for="url" class="ti-label">' .
                    __( 'Website', 'minima' ) . '</label>' .
                    '<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
                    '" size="30" /><br/>'
            )
        ),
    );
    comment_form($args);
} ?>