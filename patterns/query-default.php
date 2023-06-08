<?php
/**
 * Title: Query (Default)
 * Slug: carter/query-default
 * Block Types: core/query
 * Categories: query
 *
 * @package Carter
 */

?>

<!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true}} -->
<div class="wp-block-query">

	<!-- wp:post-template -->

		<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|80","left":"var:preset|spacing|80"},"margin":{"bottom":"var:preset|spacing|70"},"padding":{"bottom":"var:preset|spacing|70"}}}} -->
		<div class="wp-block-columns" style="margin-bottom:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">

			<!-- wp:column -->
			<div class="wp-block-column">

				<!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"}},"fontSize":"small"} /-->
				<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} /-->
				<!-- wp:post-excerpt {"moreText":"Continue reading"} /-->

			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">

				<!-- wp:post-featured-image {"isLink":true,"style":{"border":{"radius":"12px"}}} /-->

			</div>
			<!-- /wp:column -->

		</div>
		<!-- /wp:columns -->

	<!-- /wp:post-template -->

	<!-- wp:query-pagination {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<!-- wp:query-pagination-numbers /-->
	<!-- /wp:query-pagination -->

</div>
<!-- /wp:query -->
