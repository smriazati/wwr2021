<section class="featured-shop-links">
    <div class="wrapper grid-fixed">
        <div class="text-wrapper">
                <h2><?php echo get_theme_mod( 'featuredshoplinks-headline' ) ?></h2>
                <p><?php echo get_theme_mod( 'featuredshoplinks-text' ) ?></p>
                <button>
                    <a class="detail" href="<?php echo get_theme_mod( 'featuredshoplinks-link' ) ?>" target="_blank">Shop more</a>
                </button>
        </div>
        <div class="product-list featured-products-wrapper">
            <div class="slider">
                <div class="slider-items">
                <?php for ( $count = 1; $count <= 6; $count++ ) { ?>

                    <div class="image-wrapper image-<?php echo $count ?>">
                        
                        <a href="<?php echo get_theme_mod( 'ftshop-item-1-link' ) ?>" target="_blank">
                        <?php echo wp_get_attachment_image( get_theme_mod( 'ftshop-item-'. $count .'-img'), 'sm-square' ); ?></a>
                    </div>

                    <?php } ?> 
                </div>
                <div class="slider-nav">
                    <button class="flat light row">
                        <span class="text visually-hidden">Next</span>
                        <span class=" icon-arrow"></span></button>
                </div>
            </div>

        </div>

    
    </div>
</section>
