<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wwr2021
 */

get_header();
?>

	<main id="primary" class="site-main about-main">

		<?php
		while ( have_posts() ) :
			the_post();
?>

        <section class="bio about-bio">
        <?php $bioimage = get_theme_mod( 'fp-bio-image'); ?>
        <div class="wrapper grid-fixed">
            <div class="text-wrapper">
                <h1><?php echo the_title(); ?></h1>
                    <div class="intro-text">
                        <?php 
                        
                            $intro_text = get_field( "intro_text" );

                            if( $intro_text ) {
                                echo $intro_text;
                            } else {
                                echo 'empty';
                            }
                        ?>
                    </div>
            </div>
            <div class="image-wrapper">
                <?php echo wp_get_attachment_image($bioimage, 'bio-square')  ?>
            </div>
            <div class="highlight-wrapper">
                <div class="text-wrapper">
                    <p><?php echo get_theme_mod( 'fp-bio-shop-link-text' ) ?></p>
                    <button><a href="<?php echo get_theme_mod( 'fp-bio-shop-link-url' ) ?>/">Shop</a></button>
                </div>
            </div>
        </div>
    </section>            
    <section id="featured-pages-section" class="featured-pages about-featured-pages">
        <div class="row grid-fixed">
            <div class="title-wrapper">
                <h2>Explore</h2>
            </div>
            <?php get_template_part( 'template-parts/featured-pages') ?>
            
        </div>


    </section>

    <?php    get_template_part( 'template-parts/instafeed' ) ?>


<?
			// get_template_part( 'template-parts/content', 'page' );


		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
