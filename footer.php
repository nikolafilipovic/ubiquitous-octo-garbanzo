			<?php
				/**
				* Fires after the main content, before the footer is output.
				*
				* @since 0.02
				*/
				do_action( 'et_after_main_content' );

				$template_directory_uri = "/wp-content/themes/theoffercompany";
				$footer_menu_1 = wp_nav_menu(array('menu' => 'footer-menu-1','menu_class' => 'footer-links-list','depth' => 1, 'echo' => false));
				$footer_menu_2 = wp_nav_menu(array('menu' => 'footer-menu-2','menu_class' => 'footer-links-list','depth' => 1, 'echo' => false));
				$footer_menu_3 = wp_nav_menu(array('menu' => 'footer-menu-3','menu_class' => 'footer-links-list','depth' => 1, 'echo' => false));
			?>
			<footer class="footer">
				<div class="upper-footer">
					<div class="container">
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 footer-links">
								<h3>Search for homes by state</h3>
								<?php echo( $footer_menu_1 ); ?>
								<a href="#" class="more-link"><i class="fas fa-plus"></i><span>More</span></a>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 footer-links">
								<h3>Search for homes by city</h3>
								<?php echo( $footer_menu_2 ); ?>
								<a href="#" class="more-link"><i class="fas fa-plus"></i><span>More</span></a>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 footer-links">
								<h3>Search for homes by zip code</h3>
								<?php echo( $footer_menu_3 ); ?>
								<a href="#" class="more-link"><i class="fas fa-plus"></i><span>More</span></a>
							</div>
						</div>
					</div>
				</div>
				<div class="bottom-footer">
					<div class="container">
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-5 col-sm-12 col-xs-12 footer-copyright">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-logo"><img src="<?php echo $template_directory_uri; ?>/images/footer-logo.png" alt=""/></a>
								<span>© <?php echo date('Y'); ?> The Offer Company</span>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 footer-social">
								<a href="#"><span class="social-icon"><i class="fab fa-facebook-f"></i></span></a>
								<a href="#"><span class="social-icon"><i class="fab fa-twitter"></i></span></a>
								<a href="#"><span class="social-icon"><i class="fab fa-instagram"></i></span></a>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 footer-contact">
								<h3>(888) 398-4855</h3>
								<span><a href="#">Terms of Use</a> | <a href="#">Privacy Policy</a></span>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div> <!-- #et-main-area -->
	</div> <!-- #page-container -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<?php wp_footer(); ?>
</body>
</html>
