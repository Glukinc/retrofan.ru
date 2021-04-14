      <footer class="footer">
            <?php if( is_active_sidebar( 'dreamer_blog-footer-left' ) ||
                is_active_sidebar( 'dreamer_blog-footer-middle' ) ||
                is_active_sidebar( 'dreamer_blog-footer-right' ) ) : ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <?php
                            if( is_active_sidebar( 'dreamer_blog-footer-left' ) ) {
                                dynamic_sidebar( 'dreamer_blog-footer-left' );
                            }
                        ?>
                    </div><!-- .col-md-3 -->
                    <div class="col-md-4">
                        <?php
                            if( is_active_sidebar( 'dreamer_blog-footer-middle' ) ) {
                                dynamic_sidebar( 'dreamer_blog-footer-middle' );
                            }
                        ?>
                    </div><!-- .col-md-3 -->
                    <div class="col-md-4">
                        <?php
                            if( is_active_sidebar( 'dreamer_blog-footer-middle' ) ) {
                                dynamic_sidebar( 'dreamer_blog-footer-middle' );
                            }
                        ?>
                    </div><!-- .col-md-3 -->
                </div>
            </div><!-- .container -->
            <?php endif; ?>

            <div class="ct-credits">
                  <p><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                  <span class="footer-info-right">
                    <?php echo esc_html__(' | ', 'dreamer-blog') ?> <a href="<?php echo esc_url('https://androidprog.com/', 'dreamer-blog'); ?>" title="Игры и программы для андроид" target="_blank"><?php echo esc_html__('Androidprog.com', 'dreamer-blog') ?></a>
                  </span></p>
            </div>
        </footer>
    <?php wp_footer(); ?>
  </body>
</html>
