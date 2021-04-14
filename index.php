<?php
get_header();
?>
<?php
    $args = array( 'slider', 'masonry' );
    // Get the parts.
    $template_parts = get_theme_mod( 'dreamer_sortable_homepage_setting', $args );

    // Loop parts.
    foreach ( $template_parts as $template_part ) {
        get_template_part( 'template-parts/home/section', $template_part );
    }
?>
<?php
get_footer();
