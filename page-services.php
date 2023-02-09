<?php
get_header();
?>

	<main id="primary" class="site-main contact-main services-main">

    <div class="the-clinic">
        <?php
            $clinicPage = get_page_by_title( 'The Clinic' );
            $clinicId = $clinicPage->ID;
            $clinicAddress1 = get_field( "address1", $clinicId );
            $clinicAddress2 = get_field( "address2" , $clinicId);
            $clinicAddressUrl = get_field( "address_url", $clinicId );
            $clinicPhone = get_field( "phone_number", $clinicId  );
            $clinicService1 = get_field( "service_1", $clinicId  );
            $clinicService2 = get_field( "service_2", $clinicId  );
            $clinicService3 = get_field( "service_3", $clinicId  );
            $clinicService4 = get_field( "service_4", $clinicId  );
            $clinicService5 = get_field( "service_5", $clinicId  );
            $clinicService6 = get_field( "service_6", $clinicId  );
            $clinicService7 = get_field( "service_7", $clinicId  );
            $clinicService8 = get_field( "service_8", $clinicId  );
            $clinic_post_thumbnail_id = get_post_thumbnail_id( $clinicId ); 
            $clinicThumbnail = wp_get_attachment_image_src( $clinic_post_thumbnail_id, 'full' );
        ?>
        <section class="clinic-info">
            <div class="wrapper grid-fixed">
                
            <div class="text-wrapper">
                <h2>The Clinic</h2>
                <p class="address"><a href="<?php echo $clinicAddressUrl?>" target="_blank"><?php echo $clinicAddress1 ?><br/><?php echo $clinicAddress2 ?></a></p>    
                <p><a href="tel:<?php echo $clinicPhone ?>"><?php echo $clinicPhone ?></a></p>
                <h3>Services</h3>
                <ul>
                    <li><?php echo $clinicService1['name'] ?></li>
                    <li><?php echo $clinicService2['name'] ?></li>
                    <li><?php echo $clinicService3['name'] ?></li>
                    <li><?php echo $clinicService4['name'] ?></li>
                    <li><?php echo $clinicService5['name'] ?></li>
                    <li><?php echo $clinicService6['name'] ?></li>
                    <li><?php echo $clinicService7['name'] ?></li>
                    <li><?php echo $clinicService8['name'] ?></li>
                </ul>
            </div>

            <div class="image-wrapper">
                <img src="<?php echo $clinicThumbnail[0]; ?>" />
            </div>
            <div class="cta-wrapper">
                <div class="contact-cta"><span class="text"><a class="btn-round" href="tel:<?php echo $clinicPhone ?>">Call for an appointment</span></a></div>
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
            </div>
            <div class="image-wrapper">
                <img src="<?php echo $thumbnail[0]; ?>" />
            </div>
            <div class="cta-wrapper">
                <button class="flat contact-cta"><span class="text"><a class="btn-round" href="/the-wellness-center#booking">Book an appointment</a></span></button>
            </div>
        </div>
    

    </section>

    </div>

	</main><!-- #main -->

<?php
get_footer();
