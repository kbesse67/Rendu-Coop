<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>
		<div class="footer-container" data-sticky-footer>
			<footer class="footer">
				<!-- Nav ARROW-->
				<div class="row">
					<div class="large-12 columns">
								<a href="#" class="uparrow text-center wow fadeInUp" data-wow-delay="0.4s">
									<img src="wp-content/themes/thcoop/assets/images/footer/arrow.png" alt="arrow" />
								</a>
					</div>
				</div>
				<!-- Liens-->
				<div class="row">
					<div class="large-4 large-offset-4 columns ">
						<h5 class="text-center wow fadeInUp" data-wow-delay="0.4s">
							<a href="http://localhost/lacoop/?page_id=40">Mentions légales</a>
							- <a href="#">Cookie</a>
							- <a href="#">Vie Privée</a>
						</h5>
					</div>
					<div class="large-4 columns "></div>
				</div>
			<!-- Social-->
				<div class="row">
					<div class="large-12 columns">
						<ul class="text-center">
							<li><img src="wp-content/themes/thcoop/assets/images/footer/googleplus.png" alt="Google" class="wow fadeInUp" data-wow-delay="0.4s"/></li>
							<li><img   src="wp-content/themes/thcoop/assets/images/footer/facebook.png" alt="Facebook" class="wow fadeInUp" data-wow-delay="0.5s"/></li>
							<li><img  src="wp-content/themes/thcoop/assets/images/footer/twitter.png" alt="Twitter"/ class="wow fadeInUp" data-wow-delay="0.6s"></li>
						</ul>
					</div>
				</div>
				<!-- COPYRIGHT-->
				<div class="row">
					<div class="large-12 columns">
						<h5 class="text-center wow fadeInUp" data-wow-delay="1s">
							Copyright - BESSE Kévin
						</h5>
					</div>
				</div>

				<?php do_action( 'foundationpress_before_footer' ); ?>
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
				<?php do_action( 'foundationpress_after_footer' ); ?>

			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		</div><!-- Close off-canvas content -->
	</div><!-- Close off-canvas wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>



</body>
</html>
