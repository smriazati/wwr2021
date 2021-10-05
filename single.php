<?php
get_header();
?>

	<main id="primary" class="site-main main-single">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . 'Prev </span>',
					'next_text' => '<span class="nav-subtitle">' . 'Next </span>',
				)
			);

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
