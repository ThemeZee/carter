<?php
/**
 * Title: Query (List)
 * Slug: carter/query-list
 * Block Types: core/query
 * Categories: query
 *
 * @package Carter
 */

?>

<!-- wp:query {"queryId":1,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true}} -->
<div class="wp-block-query">

	<!-- wp:post-template -->

		<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|80"}}}} -->
		<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--80)">

			<!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"}},"fontSize":"small"} /-->
			<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} /-->

			<!-- wp:post-excerpt {"moreText":"Continue reading"} /-->

		</div>
		<!-- /wp:group -->

	<!-- /wp:post-template -->

	<!-- wp:query-pagination {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<!-- wp:query-pagination-numbers /-->
	<!-- /wp:query-pagination -->

</div>
<!-- /wp:query -->
