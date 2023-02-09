<?php /* Template Name: Bio Template */ ?>

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

        <section class="bio about-bio about-bio-template">
        <?php $bioimage = get_theme_mod( 'fp-bio-image'); ?>
        <div class="wrapper grid-fixed">
            <div class="text-wrapper">
                    <h1><?php echo the_title(); ?></h1>
                    <div class="intro-text">
                        <?php 
                            $intro_text = get_field( "intro_text" );

                            if( $intro_text ) {
                                echo $intro_text;
                            } 
                        ?>
                    </div>
                    <div class="cta">
                        <?php 
                                $cta = get_field("cta");
                                $ctaText = $cta['text'];

                                if( $ctaText ) {
                                    $ctaLink = $cta['link'];
                                } 
                            ?>
                        </div>
                        <?php if ($ctaText) { ?>
                                <a class="btn-round" href="<?php echo $ctaLink ?>"><?php echo $ctaText ?></a>
                        <?php } ?>
            </div>
            <div class="image-wrapper">
                <figure>
                    <?php echo get_the_post_thumbnail( $post_id, 'bio-square'); ?>
                </figure>
            </div>
        </div>
    </section> 

   

    <?
        // get_template_part( 'template-parts/content', 'page' );
        endwhile; // End of the loop.
    ?>

	</main><!-- #main -->

<?php
get_footer();
