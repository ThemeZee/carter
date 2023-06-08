<?php
/**
 * Title: Portfolio (Columns)
 * Slug: carter/portfolio-columns
 * Categories: carter_portfolio
 *
 * @package Carter
 */

?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","right":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|80"},"margin":{"top":"0"}}},"layout":{"contentSize":"1440px","wideSize":"1440px","type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)">

	<!-- wp:heading -->
	<h2>Let our <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color">references</mark> speak for us.</h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"},"margin":{"top":"var:preset|spacing|70"}}}} -->
	<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--70)">

		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"12px"}}} -->
			<figure class="wp-block-image size-full has-custom-border is-style-default">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-image.png" alt="" style="border-radius:12px"/>
			</figure>
			<!-- /wp:image -->

			<!-- wp:heading {"level":3} -->
			<h3>Case Study 1</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis diss parturient.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Learn more</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"12px"}}} -->
			<figure class="wp-block-image size-full has-custom-border is-style-default">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-image.png" alt="" style="border-radius:12px"/>
			</figure>
			<!-- /wp:image -->

			<!-- wp:heading {"level":3} -->
			<h3>Case Study 2</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis diss parturient.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Learn more</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"12px"}}} -->
			<figure class="wp-block-image size-full has-custom-border is-style-default">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-image.png" alt="" style="border-radius:12px"/>
			</figure>
			<!-- /wp:image -->

			<!-- wp:heading {"level":3} -->
			<h3>Case Study 3</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis diss parturient.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Learn more</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
