<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<?php the_excerpt(); ?>
		<button><a href="<?php echo the_permalink(); ?>">Read more</a></button>
	</header><!-- .entry-header -->
	<div class="post-thumbnail-wrapper">
		<?php the_post_thumbnail('sm-square'); ?>
	</div>
</article>
