<?php
/**
 * Title: Hero (Gallery)
 * Slug: carter/hero-gallery
 * Categories: carter_hero
 *
 * @package Carter
 */

?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","right":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|80"},"margin":{"top":"0"}}},"layout":{"contentSize":"1440px","wideSize":"1440px","type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)">

	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|80","left":"var:preset|spacing|80"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">

			<!-- wp:heading {"level":1} -->
			<h1>Let us tell your <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color">story</mark>.<br><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color">Attract</mark> your audience.<br>Elevate your <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color">brand</mark>.</h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">

				<!-- wp:button -->
				<div class="wp-block-button">
					<a class="wp-block-button__link wp-element-button">Our Services</a>
				</div>
				<!-- /wp:button -->

				<!-- wp:button {"backgroundColor":"medium-gray","textColor":"white","className":"is-style-fill"} -->
				<div class="wp-block-button is-style-fill">
					<a class="wp-block-button__link has-white-color has-medium-gray-background-color has-text-color has-background wp-element-button">Contact us</a>
				</div>
				<!-- /wp:button -->

			</div>
			<!-- /wp:buttons -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">

			<!-- wp:gallery {"columns":2,"linkTo":"none"} -->
			<figure class="wp-block-gallery has-nested-images columns-2 is-cropped">

				<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"12px"}}} -->
				<figure class="wp-block-image size-full has-custom-border">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-image.png" alt="" style="border-radius:12px"/>
				</figure>
				<!-- /wp:image -->

				<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"12px"}}} -->
				<figure class="wp-block-image size-full has-custom-border">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-image.png" alt="" style="border-radius:12px"/>
				</figure>
				<!-- /wp:image -->

				<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"12px"}}} -->
				<figure class="wp-block-image size-full has-custom-border">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-image.png" alt="" style="border-radius:12px"/>
				</figure>
				<!-- /wp:image -->

				<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"12px"}}} -->
				<figure class="wp-block-image size-full has-custom-border">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-image.png" alt="" style="border-radius:12px"/>
				</figure>
				<!-- /wp:image -->

			</figure>
			<!-- /wp:gallery -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
