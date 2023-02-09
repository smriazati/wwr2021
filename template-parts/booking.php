<section id="booking" class="booking-embed">
    <?php 
        $wellnessCtrPage = get_page_by_title( 'The Wellness Center' );
        $id = $wellnessCtrPage->ID;
    ?>

    <!-- <div class="image-wrapper">
        <img src="<?php echo get_field("booking_section_image", $id) ?>" alt="Logo for Wellness Center" />
    </div> -->
    <div class="grid-fixed">
       <?php echo do_shortcode('[scheduling site="https://app.squarespacescheduling.com/schedule.php?owner=24081163"]' )?>
    </div>
</section>