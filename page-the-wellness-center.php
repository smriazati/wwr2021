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

	<main id="primary" class="site-main wellness-ctr-main has-overlay">

		<?php
		while ( have_posts() ) :
			the_post();
            $address1 = get_field( "address1" );
            $address2 = get_field( "address2" );
            $addressUrl = get_field( "address_url" );
            $phone = get_field( "phone_number" );
            $service1 = get_field( "service_1" );
            $service2 = get_field( "service_2" );
            $service3 = get_field( "service_3" );
            $service4 = get_field( "service_4" );
            $service5 = get_field( "service_5" );
            $service6 = get_field( "service_6" );
            $thumbnail = get_the_post_thumbnail();
?>
<div class="wrapper-for-overlay">

    <section class="wellness-ctr-info overlay-top">
        <div class="wrapper grid-fixed">
            
        <div class="text-wrapper">
            <h2>Wellness Center</h2>
            <p><a href="tel:<?php echo $phone ?>"><?php echo $phone ?></a></p>
            <p class="address"><a href="<?php echo $addressUrl?>" target="_blank"><?php echo $address1 ?><br/><?php echo $address2 ?></a></p>            <h3>Services</h3>
            <ul>
                <li><?php echo $service1['name'] ?></li>
                <li><?php echo $service2['name'] ?></li>
                <li><?php echo $service3['name'] ?></li>
                <li><?php echo $service4['name'] ?></li>
                <li><?php echo $service5['name'] ?></li>
                <li><?php echo $service6['name'] ?></li>
            </ul>
            <button class="flat contact-cta"><span class="text"><a href="#booking">Book an appointment</a></span><span class="icon icon-arrow"></span></button>
        </div>

        </div>

    </section>
    <section class="overlay wellness-ctr-image">
        <div class="wrapper grid-fixed">
            <div class="image-wrapper">
                <?php wwr2021_post_thumbnail(); ?>
            </div>
        </div>
    </section>


</div>
    

    <section class="wellness-ctr-services underneath">
        <div class="wrapper grid-fixed">
            
            <div class="card">
                <div class="text-wrapper">
                    <h3><?php echo $service1['name'] ?></h3>
                    <p><?php echo $service1['description'] ?></p>
                </div>
            </div>
            <div class="card">
                <div class="text-wrapper">
                    <h3><?php echo $service2['name'] ?></h3>
                    <p><?php echo $service2['description'] ?></p>
                </div>
            </div>
            <div class="card">
                <div class="text-wrapper">
                <h3><?php echo $service3['name'] ?></h3>
                <p><?php echo $service3['description'] ?></p>
            </div>
                </div>
            <div class="card">
                <div class="text-wrapper">
                    <h3><?php echo $service4['name'] ?></h3>
                    <p><?php echo $service4['description'] ?></p>
                </div>
            </div>
            <div class="card">
                <div class="text-wrapper">
                    <h3><?php echo $service5['name'] ?></h3>
                    <p><?php echo $service5['description'] ?></p>
                </div>
            </div>
            <div class="card">
                <div class="text-wrapper">
                    <h3><?php echo $service6['name'] ?></h3>
                    <p><?php echo $service6['description'] ?></p>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part( 'template-parts/booking') ?>
            


    </section>

<? endwhile ?>

	</main><!-- #main -->

<?php
get_footer();
