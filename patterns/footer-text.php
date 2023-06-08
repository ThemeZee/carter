<?php
/**
 * Title: Footer Text
 * Slug: carter/footer-text
 * Inserter: no
 *
 * @package Carter
 */

?>

<!-- wp:paragraph {"className":"flip-link-hover"} -->
<p class="flip-link-hover">&copy; <?php echo wp_kses_post( date_i18n( 'Y' ) . ' ' . get_bloginfo( 'name' ) ); ?> | <a href="#"><?php esc_html_e( 'Privacy Policy', 'carter' ); ?></a> | <a href="#"><?php esc_html_e( 'Imprint', 'carter' ); ?></a></p>
<!-- /wp:paragraph -->
