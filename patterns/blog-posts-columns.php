<?php
/**
 * Title: Blog Posts (Columns)
 * Slug: carter/blog-posts-columns
 * Categories: carter_blog
 *
 * @package Carter
 */

?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","right":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|80"},"margin":{"top":"0"},"blockGap":"var:preset|spacing|70"}},"layout":{"contentSize":"1440px","wideSize":"1440px","type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)">

	<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"primary"} -->
	<p class="has-primary-color has-text-color" style="font-style:normal;font-weight:500">Latest News</p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
	<h2 style="margin-top:var(--wp--preset--spacing--20)">Stay in touch with us.</h2>
	<!-- /wp:heading -->

	<!-- wp:query {"queryId":1,"query":{"perPage":"3","pages":"3","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
	<div class="wp-block-query">

		<!-- wp:post-template -->

			<!-- wp:group -->
			<div class="wp-block-group">

				<!-- wp:post-featured-image {"isLink":true,"style":{"border":{"radius":"12px"}}} /-->

				<!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"}},"fontSize":"small"} /-->

				<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"fontSize":"x-large"} /-->

				<!-- wp:post-excerpt {"moreText":"Continue reading"} /-->

			</div>
			<!-- /wp:group -->

		<!-- /wp:post-template -->

	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->
