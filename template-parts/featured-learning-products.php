<?php 
    $all_ids = get_posts( array(
    'post_type' => 'product',
    'numberposts' => 10,
    'post_status' => 'publish',
    'fields' => 'ids',
    'tax_query' => array(
        array(
            'taxonomy' => 'product_cat',
            'field' => 'slug',
            'terms' => 'learning', /*category name*/
            'operator' => 'IN',
            )
        ),
    ));
?>
<section class="featured-products-wrapper">
    <div class="slider">
        <div class="slider-items">
            <?php 
            foreach ( $all_ids as $id ) {
                // echo $id . "+";
            
            ?>
                <div class="slider-item featured-product featured-product-<?php echo $id ?>">
                    <div class="image-wrapper">
                        <a href="<?php echo get_permalink($id)?>">
                            <?php echo wp_get_attachment_image( get_post_thumbnail_id( $id ), 'sm-square' ) ?>
                        </a>
                    </div>
                </div>
            <?php
                } // end foreach
            ?>
            
        </div>
        <div class="slider-nav">
            <button class="flat light row">
                <span class="text visually-hidden">Next</span>
                <span class=" icon-arrow"></span></button>
        </div>
    </div>

</section>