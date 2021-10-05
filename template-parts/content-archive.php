<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="image-wrapper post-thumbnail-wrapper">
        <?php wwr2021_post_thumbnail('bio-square'); ?>
    </div>
	<div class="text-wrapper entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark" class="icon icon-arrow">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<button><a href="<?php echo the_permalink(); ?>">Read more</a></button>
    </div>
</article>
