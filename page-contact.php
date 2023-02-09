<?php
get_header();
?>

	<main id="primary" class="site-main contact-main">

		<?php
        while ( have_posts() ) :
            the_post();
            // $title = get_field( "title" );
            // $text = get_field( "text" );
            $thumbnail = get_the_post_thumbnail();
        ?>
        <div class="intro-container">
    <section class="intro-text overlay-top">
        <div class="wrapper grid-fixed">
            <div class="text-wrapper">
                <div class="contact-form">
                    <h1>Get in Touch</h1>
                    <?php echo do_shortcode('[contact-form-7 id="6089" title="Contact form"]') ?>
                </div>
                <div class="inquiries">
                    <h3>Inquiries</h3>
                    <p>For media inquiries, email <a href="mailto:rachel@wellwithrae.com"> rachel@wellwithrae.com</a></p>
                </div>
                <div class="social-menu">
                    <h3>Social</h3>
                    <nav id="header-social-menu" class="header-social-menu">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'social-menu',
									'menu_id'        => 'social-menu',
								)
							);
						?>
					</nav>
                </div>
            </div>
        </div>
    </section>
    <section class="overlay">
        <div class="wrapper grid-fixed">
            <div class="image-wrapper">
                <?php wwr2021_post_thumbnail(); ?>
            </div>
        </div>
    </section>
    </div>
    <? endwhile ?>

    <div class="the-clinic">
        <?php
            $clinicPage = get_page_by_title( 'The Clinic' );
            $id = $clinicPage->ID;
            $address1 = get_field( "address1", $id );
            $address2 = get_field( "address2" , $id);
            $addressUrl = get_field( "address_url", $id );
            $phone = get_field( "phone_number", $id  );
            $service1 = get_field( "service_1", $id  );
            $service2 = get_field( "service_2", $id  );
            $service3 = get_field( "service_3", $id  );
            $service4 = get_field( "service_4", $id  );
            $service5 = get_field( "service_5" );
            $service6 = get_field( "service_6" );
            $service7 = get_field( "service_7" );
            $service8 = get_field( "service_8" );
            $post_thumbnail_id = get_post_thumbnail_id( $id ); 
            $thumbnail = wp_get_attachment_image_src( $post_thumbnail_id );
        ?>
        <section class="clinic-info">
            <div class="wrapper grid-fixed">
                
            <div class="text-wrapper">
                <h2>The Clinic</h2>
                <p><a href="tel:<?php echo $phone ?>"><?php echo $phone ?></a></p>
                <p class="address"><a href="<?php echo $addressUrl?>" target="_blank"><?php echo $address1 ?><br/><?php echo $address2 ?></a></p>    
                <h3>Services</h3>
                <ul>
                    <li><?php echo $service1['name'] ?></li>
                    <li><?php echo $service2['name'] ?></li>
                    <li><?php echo $service3['name'] ?></li>
                    <li><?php echo $service4['name'] ?></li>
                    <li><?php echo $service5['name'] ?></li>
                    <li><?php echo $service6['name'] ?></li>
                    <li><?php echo $service7['name'] ?></li>
                    <li><?php echo $service8['name'] ?></li>
                </ul>
                <div class="button flat contact-cta"><span class="text"><a href="tel:<?php echo $phone ?>">Call for an appointment</span><span class="icon icon-arrow icon-arrow-up"></span></a></div>
            </div>

            <div class="image-wrapper">
                <img src="<?php echo $thumbnail[0]; ?>" />
            </div>

        </section>
   </div>

   <div class="the-wellness-ctr">
        <?php
            $wellnessCtrPage = get_page_by_title( 'The Wellness Center' );
            $id = $wellnessCtrPage->ID;
            $address1 = get_field( "address1", $id);
            $address2 = get_field( "address2", $id);
            $addressUrl = get_field( "address_url", $id );            
            $phone = get_field( "phone_number", $id  );
            $service1 = get_field( "service_1", $id  );
            $service2 = get_field( "service_2", $id  );
            $service3 = get_field( "service_3", $id  );
            $service4 = get_field( "service_4", $id  );
            $service5 = get_field( "service_5", $id  );
            $service6 = get_field( "service_6", $id  );
            $service7 = get_field( "service_7", $id  );
            $post_thumbnail_id = get_post_thumbnail_id( $id ); 
            $thumbnail = wp_get_attachment_image_src( $post_thumbnail_id );
        ?>


   <section class="wellness-ctr-info overlay-top">
        <div class="wrapper grid-fixed">
        <div class="text-wrapper">
            <h2>Wellness Center</h2>
            <p><a href="tel:<?php echo $phone ?>"><?php echo $phone ?></a></p>
            <p class="address"><a href="<?php echo $addressUrl?>" target="_blank"><?php echo $address1 ?><br/><?php echo $address2 ?></a></p>    
            <h3>Services</h3>
            <ul>
                <li><?php echo $service1['name'] ?></li>
                <li><?php echo $service2['name'] ?></li>
                <li><?php echo $service3['name'] ?></li>
                <li><?php echo $service4['name'] ?></li>
                <li><?php echo $service5['name'] ?></li>
                <li><?php echo $service6['name'] ?></li>
                <li><?php echo $service7['name'] ?></li>
            </ul>
            <button class="flat contact-cta"><span class="text"><a href="/the-wellness-center#booking">Book an appointment</a></span><span class="icon icon-arrow"></span></button>
        </div>

        </div>

    </section>
    <section class="overlay">
            <div class="wrapper grid-fixed">
                <div class="image-wrapper">
                    <img src="<?php echo $thumbnail[0]; ?>" />
                </div>
            </div>
        </section>
    </div>
    <?php    get_template_part( 'template-parts/instafeed' ) ?>

	</main><!-- #main -->

<?php
get_footer();
