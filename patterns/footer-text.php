<?php
/**
 * Title: Footer Text
 * Slug: carter/footer-text
 * Inserter: no
*/
?>

<!-- wp:paragraph {"className":"flip-link-hover"} -->
<p class="flip-link-hover">&copy; <?php echo wp_kses_post( date_i18n( 'Y' ) . ' ' . get_bloginfo( 'name' ) ); ?> | <a href="#"><?php _e( 'Privacy Policy', 'carter' ); ?></a> | <a href="#"><?php _e( 'Imprint', 'carter' ); ?></a></p>
<!-- /wp:paragraph -->
