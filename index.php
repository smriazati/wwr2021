<?php
get_header();
?>


<?php

// Query Arguments
$livewell_args = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'post_status' => 'publish',
    'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'field' => 'slug',
            'terms' => 'live-well'
        )
    )
);

$bewell_args = array(
    'post_type' => 'post',
    'posts_per_page' => 2,
    'post_status' => 'publish',
    'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'field' => 'slug',
            'terms' => 'be-well'
        )
    )
);

$eatwell_args = array(
    'post_type' => 'post',
    'posts_per_page' => 2,
    'post_status' => 'publish',
    'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'field' => 'slug',
            'terms' => 'eat-well'
        )
    )
);

?>

<main id="primary" class="site-main blog-wrapper">

<?php $bewellquery = new WP_Query($bewell_args); ?>
    <section class="be-well featured-posts">
        <div class="wrapper grid-fixed">
            <div class="section-header">
                <div class="section-title">
                    <h2><span class="sans-serif">Be</span> <span class="serif">Well</span></h2>
                </div>
                <div class="section-link align-text-center">
                    <button><a class="button button-dark" href="/category/be-well">Read More</a></button>
                </div>
            </div>

            <?php if ($bewellquery->have_posts()) { ?>
                <div class="featured-posts-wrapper grid-fixed">
                <?php while ($bewellquery->have_posts()) {
                    $bewellquery->the_post(); ?>
                    <div class="card-wrapper">
                        <?php if (has_post_thumbnail()) { ?>
                            <div class="image-wrapper">
                                <a href="<?php echo get_permalink() ?>">
                                <?php echo get_the_post_thumbnail(get_the_ID(), 'homepage-thumb') ?>
                                </a>
                            </div>
                        <?php } ?>
                        <div class="text-wrapper">
                            <h3 class="entry-title">
                                <a href="<?php echo get_permalink() ?>">
                                    <?php echo the_title() ?>
                                    <span class="icon icon-arrow"></span>
                                </a>
                            </h3>
                           
                            <?php the_excerpt('<p class="entry-excerpt">', '</p>'); ?>
                        </div>
                    </div>
                <?php  } // end while loop 
                ?>
                    </div>

            <?php } else { ?>
                <p>No posts in this category.</p>
            <?php  } ?>
        </div>
    </section>
    <?php wp_reset_postdata(); ?>

    <?php $livewellquery = new WP_Query($livewell_args); ?>
    <section class="live-well featured-posts">
        <div class="wrapper grid-fixed">
            <div class="section-header">
                <div class="section-title">
                    <h2><span class="sans-serif">Live</span> <span class="serif">Well</span></h2>
                </div>
                <div class="section-link align-text-center">
                    <button><a class="button button-dark" href="/category/live-well">Read More</a></button>
                </div>
            </div>

            <?php if ($livewellquery->have_posts()) { ?>
                <div class="featured-posts-wrapper grid-fixed">
                <?php while ($livewellquery->have_posts()) {
                    $livewellquery->the_post(); ?>
                    <div class="card-wrapper">
                        <?php if (has_post_thumbnail()) { ?>
                            <div class="image-wrapper">
                                <a href="<?php echo get_permalink() ?>">
                                <?php echo get_the_post_thumbnail(get_the_ID(), 'homepage-thumb') ?>
                                </a>
                            </div>
                        <?php } ?>
                        <div class="text-wrapper">
                            <h3 class="entry-title">
                                <a href="<?php echo get_permalink() ?>">
                                    <span class="text"><?php echo the_title() ?></span>
                                    <span class="icon icon-arrow"></span>
                                </a>
                            </h3>
                            
                            <?php the_excerpt('<p class="entry-excerpt">', '</p>'); ?>
                        </div>
                    </div>
                <?php  } // end while loop 
                ?>
                    </div>

            <?php } else { ?>
                <p>No posts in this category.</p>
            <?php  } ?>
        </div>
    </section>
    <?php wp_reset_postdata(); ?>

    <?php $eatwellquery = new WP_Query($eatwell_args); ?>
    <section class="be-well featured-posts">
        <div class="wrapper grid-fixed">
            <div class="section-header">
                <div class="section-title">
                    <h2><span class="sans-serif">Eat</span> <span class="serif">Well</span></h2>
                </div>
                <div class="section-link align-text-center">
                    <button><a class="button button-dark" href="/category/eat-well">Read More</a></button>
                </div>
            </div>

            <?php if ($eatwellquery->have_posts()) { ?>
                <div class="featured-posts-wrapper grid-fixed">
                <?php while ($eatwellquery->have_posts()) {
                    $eatwellquery->the_post(); ?>
                    <div class="card-wrapper">
                        <?php if (has_post_thumbnail()) { ?>
                            <div class="image-wrapper">
                                <a href="<?php echo get_permalink() ?>">
                                <?php echo get_the_post_thumbnail(get_the_ID(), 'homepage-thumb') ?>
                                </a>
                            </div>
                        <?php } ?>
                        <div class="text-wrapper">
                            <h3 class="entry-title">
                                <a href="<?php echo get_permalink() ?>">
                                    <span class="text"><?php echo the_title() ?></span>
                                    <span class="icon icon-arrow"></span>
                                </a>
                            </h3>
                           
                            <?php the_excerpt('<p class="entry-excerpt">', '</p>'); ?>
                        </div>
                    </div>
                <?php  } // end while loop 
                ?>
                    </div>

            <?php } else { ?>
                <p>No posts in this category.</p>
            <?php  } ?>
        </div>
    </section>
    <?php wp_reset_postdata(); ?>
</main><!-- #main -->

<?php
get_footer();