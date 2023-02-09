<?php
get_header();
?>
	<?php if ( is_category() ) : ?>
		<main id="primary" class="site-main no-article-grid grid-fixed archive-wrapper">

	<?php else : ?>
		<main id="primary" class="site-main search-wrapper">

	<?php endif; ?>

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title fancy-type">', '</h1>' ); ?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				if (is_category()) {
					get_template_part( 'template-parts/content', 'archive' );
				} else {
					get_template_part( 'template-parts/content', 'search' );
				}
				

			endwhile;
			// the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
	if(is_category() && have_posts()){
		$cat = get_query_var('cat');
		$category = get_category ($cat);
		$count = $category->category_count;
		if ($count > 9) {
			echo do_shortcode('[ajax_load_more category="'.$category->slug.'" loading_style="infinite skype" offset="9" cache="true" cache_id="cache-'.$category->slug.'" container_type="div" post_type="post" posts_per_page="6" button_label="Load More" button_loading_label="Loading posts..." button_done_label="No posts remain" no_results_text="Sorry, no posts were found. " ]');
		}
	} else {
		the_posts_navigation();
	}


get_footer();
