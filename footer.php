<?php

?>

	<footer id="colophon" class="site-footer">
		
		<div class="row row-contained primary-footer">
			<div class="col">
				<?php dynamic_sidebar( 'footer-column-1' ); ?>
				<div class="social-menu">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'social-menu',
							'menu_id'        => 'social-menu',
						)
					);
					?>
				</div>
			</div>
			<div class="col">
            	<?php dynamic_sidebar( 'footer-column-2' ); ?>
			</div>
			<div class="col">
           		<?php dynamic_sidebar( 'footer-column-3' ); ?>
			</div>
			<div class="col">
            	<?php dynamic_sidebar( 'footer-column-4' ); ?>
				<div class="form-embed">
					<?php get_template_part( 'template-parts/mailchimp-signup') ?>
				</div>
			</div>
		</div>
	
		<div class="row row-contained sub-footer">
			<div class="site-credit">
				<p>
					&copy; Well With Rae, <?php echo date('Y'); ?>. Made by <a href="https://otherlove.co/">Otherlove</a>
				</p>
			</div>
			<div class="submark">
				<div class="image-wrapper">
					<img src="<?php echo get_site_icon_url() ?>" alt="">
				</div>
			</div>
			<div class="footer-legal-menu">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer-legal-menu',
						'menu_id'        => 'footer-legal-menu',
					)
				);
				?>
			</div>
		</div>
			
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
