<?php
/**
 * Demo Content: About
 *
 * @package Carter
 */

?>

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
<!-- /wp:paragraph -->

<!-- wp:image {"align":"wide","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image alignwide size-full has-custom-border is-style-default">
	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-image.png" alt="" style="border-radius:12px"/>
</figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","right":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|80"},"margin":{"top":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="margin-top:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)">

	<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"primary"} -->
	<p class="has-primary-color has-text-color" style="font-style:normal;font-weight:500">About us</p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
	<h2 style="margin-top:var(--wp--preset--spacing--20)">Meet our dedicated <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color">team of experts</mark>.</h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"},"margin":{"top":"var:preset|spacing|70"}}}} -->
	<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--70)">

		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"12px"}}} -->
			<figure class="wp-block-image size-full has-custom-border is-style-default">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/team-member.png" alt="" style="border-radius:12px"/>
			</figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"white"} -->
			<p class="has-white-color has-text-color" style="font-style:normal;font-weight:700">John Doe</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}}} -->
			<p style="margin-top:0">Founder &amp; CEO</p>
			<!-- /wp:paragraph -->

			<!-- wp:social-links {"iconColor":"light-gray","iconColorValue":"#abacad","size":"has-small-icon-size","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"className":"is-style-logos-only"} -->
			<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only" style="margin-top:var(--wp--preset--spacing--20)">

				<!-- wp:social-link {"url":"mailto://example@email.com","service":"mail"} /-->
				<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->
				<!-- wp:social-link {"url":"https://linkedin.com","service":"linkedin"} /-->

			</ul>
			<!-- /wp:social-links -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"12px"}}} -->
			<figure class="wp-block-image size-full has-custom-border is-style-default">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/team-member.png" alt="" style="border-radius:12px"/>
			</figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"white"} -->
			<p class="has-white-color has-text-color" style="font-style:normal;font-weight:700">Jane Smith</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}}} -->
			<p style="margin-top:0">Online Marketer</p>
			<!-- /wp:paragraph -->

			<!-- wp:social-links {"iconColor":"light-gray","iconColorValue":"#abacad","size":"has-small-icon-size","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"className":"is-style-logos-only"} -->
			<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only" style="margin-top:var(--wp--preset--spacing--20)">

				<!-- wp:social-link {"url":"mailto://example@email.com","service":"mail"} /-->
				<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->
				<!-- wp:social-link {"url":"https://linkedin.com","service":"linkedin"} /-->

			</ul>
			<!-- /wp:social-links -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"12px"}}} -->
			<figure class="wp-block-image size-full has-custom-border is-style-default">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/team-member.png" alt="" style="border-radius:12px"/>
			</figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"white"} -->
			<p class="has-white-color has-text-color" style="font-style:normal;font-weight:700">Mark Miller</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}}} -->
			<p style="margin-top:0">Public Relations Specialist</p>
			<!-- /wp:paragraph -->

			<!-- wp:social-links {"iconColor":"light-gray","iconColorValue":"#abacad","size":"has-small-icon-size","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"className":"is-style-logos-only"} -->
			<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only" style="margin-top:var(--wp--preset--spacing--20)">

				<!-- wp:social-link {"url":"mailto://example@email.com","service":"mail"} /-->
				<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->
				<!-- wp:social-link {"url":"https://linkedin.com","service":"linkedin"} /-->

			</ul>
			<!-- /wp:social-links -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"},"margin":{"top":"var:preset|spacing|70"}}}} -->
	<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--70)">

		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"12px"}}} -->
			<figure class="wp-block-image size-full has-custom-border is-style-default">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/team-member.png" alt="" style="border-radius:12px"/>
			</figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"white"} -->
			<p class="has-white-color has-text-color" style="font-style:normal;font-weight:700">John Doe</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}}} -->
			<p style="margin-top:0">Founder &amp; CEO</p>
			<!-- /wp:paragraph -->

			<!-- wp:social-links {"iconColor":"light-gray","iconColorValue":"#abacad","size":"has-small-icon-size","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"className":"is-style-logos-only"} -->
			<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only" style="margin-top:var(--wp--preset--spacing--20)">

				<!-- wp:social-link {"url":"mailto://example@email.com","service":"mail"} /-->
				<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->
				<!-- wp:social-link {"url":"https://linkedin.com","service":"linkedin"} /-->

			</ul>
			<!-- /wp:social-links -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"12px"}}} -->
			<figure class="wp-block-image size-full has-custom-border is-style-default">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/team-member.png" alt="" style="border-radius:12px"/>
			</figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"white"} -->
			<p class="has-white-color has-text-color" style="font-style:normal;font-weight:700">Jane Smith</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}}} -->
			<p style="margin-top:0">Online Marketer</p>
			<!-- /wp:paragraph -->

			<!-- wp:social-links {"iconColor":"light-gray","iconColorValue":"#abacad","size":"has-small-icon-size","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"className":"is-style-logos-only"} -->
			<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only" style="margin-top:var(--wp--preset--spacing--20)">

				<!-- wp:social-link {"url":"mailto://example@email.com","service":"mail"} /-->
				<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->
				<!-- wp:social-link {"url":"https://linkedin.com","service":"linkedin"} /-->

			</ul>
			<!-- /wp:social-links -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"12px"}}} -->
			<figure class="wp-block-image size-full has-custom-border is-style-default">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/team-member.png" alt="" style="border-radius:12px"/>
			</figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"white"} -->
			<p class="has-white-color has-text-color" style="font-style:normal;font-weight:700">Mark Miller</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}}} -->
			<p style="margin-top:0">Public Relations Specialist</p>
			<!-- /wp:paragraph -->

			<!-- wp:social-links {"iconColor":"light-gray","iconColorValue":"#abacad","size":"has-small-icon-size","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"className":"is-style-logos-only"} -->
			<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only" style="margin-top:var(--wp--preset--spacing--20)">

				<!-- wp:social-link {"url":"mailto://example@email.com","service":"mail"} /-->
				<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->
				<!-- wp:social-link {"url":"https://linkedin.com","service":"linkedin"} /-->

			</ul>
			<!-- /wp:social-links -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p>Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet.</p>
<!-- /wp:paragraph -->
