<?php
get_header();
?>

	<main id="primary" class="site-main learn-main">

		<?php
		while ( have_posts() ) :
			the_post();
            $title = get_field( "title" );
            $text = get_field( "text" );
            $thumbnail = get_the_post_thumbnail();
?>
    <section class="intro-text">
        <div class="wrapper grid-fixed">
            <div class="image-wrapper">
                <?php wwr2021_post_thumbnail(); ?>
            </div>
            <div class="text-wrapper">
                <h2><?php echo $title ?></h2>
                <p><?php echo $text ?></p>
            </div>
        </div>
    </section>

              
    <section class="featured-products learn-featured-products">
        <div class="row grid-fixed">
            <div class="title-wrapper">
                <h2>Learn more</h2>
            </div>
            
            <?php get_template_part( 'template-parts/featured-learning-products') ?>
            
        </div>


    </section>

<? endwhile ?>

	</main><!-- #main -->

<?php
get_footer();
