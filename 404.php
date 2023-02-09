<?php
get_header();
?>

	<main id="primary" class="site-main main-404 row-contained">


			<div class="submark">
				<div class="image-wrapper">
					<img src="<?php echo get_site_icon_url() ?>" alt="">
				</div>
			</div>

			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( "Sorry, we can't find that page!", 'wwr2021' ); ?></h1>
			</header>

			<div class="page-content">
				<p><?php esc_html_e( 'It looks like this page is missing. Maybe try a search below.', 'wwr2021' ); ?></p>

					<?php
					get_search_form();
					?>

					
			</div>

	</main>

<?php
get_footer();


