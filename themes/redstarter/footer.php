<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>
			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<!-- <a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a> -->
					
					<div class="footer-container-item contact-info">
					<h3>Contact Info</h3>
					<p class="email-block"><i class="fas fa-envelope fa-lg"></i><a href="mailto:info@inhabitent.com" class="email-info">&nbsp info@inhabitent.com</a></p>
					<p class="number-block"><i class="fas fa-phone fa-lg"></i><a href="tell:778-456-7891" class="number-info">&nbsp 778-456-7891</a></p>
					<p></p>
					<div class="social-media-block">
						<p><i class="fab fa-facebook-square fa-lg"></i></p>
						<p><i class="fab fa-twitter-square fa-lg"></i></p>
						<p><i class="fab fa-google-plus-square fa-lg"></i></p>
					</div>
					</div> <!-- End of contact-info class -->
					<div class="footer-container-item business-hours">
					<h3>Business Hours</h3>
					<p class="mon-fri-hours"><span>Monday-Friday:</span> 9am to 5pm</p>
					<p class="sat-hours"><span>Saturday:</span> 10am to 2pm</p>
					<p class="sun-hours"><span>Sunday:</span> Closed</p>
					</div>
					<div class="footer-container-item footer-logo">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/inhabitent-logo-text.svg">
					</div>
					
					<div class="website-copyright">
					<p>Copyright &copy; 2019 Inhabitent</p>
					</div>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
