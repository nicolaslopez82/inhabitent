<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */
?>
			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="content-to-center"> 
					<div class="site-contact">
						<h2>Contact Info</h2>
						<ul class="fa-ul">	
							<li>
								<span class="fa-li"><i class="fas fa-phone"></i></span><a class="phone" href="tel:+17784567891" rel="nofollow">+1 778-456-7891</a>
							</li>
							<li>
								<span class="fa-li"><i class="fas fa-envelope"></i></span><a class="email" href="mailto:info@inhabitent.com" rel="nofollow">info@inhabitent.com</a>
							</li>
						</ul>
						<ul class="fa-ul socialNetwork">
							<li>
								<span class="fa-li"><i class="fab fa-facebook-square"></i></span><a class="facebook" href="#" target="_black" rel="nofollow">http://facebook.com/inhabitent</a>
							</li>
							<li>
								<span class="fa-li"><i class="fab fa-twitter-square"></i></span><a class="twitter" href="#" target="_black" rel="nofollow">http://twitter.com/inhabitent</a>
							</li>
							<li>
								<span class="fa-li"><i class="fab fa-google-plus-square"></i></span><a class="googlePlus" href="#" target="_black" rel="nofollow">http://google.com/+/inhabitent</a>
							</li>
						</ul>
					</div>

					<?php
						if(is_active_sidebar('footer-sidebar')){
							dynamic_sidebar('footer-sidebar');
						}
					?>

					<div class="logo">
						<div class="screen-reader-text">Inhabitent Company Supply Co.</div>
					</div>
				</div>
                <div class="copyright content-to-center">
					<p>Copyright <i class="far fa-copyright"></i> 2018 Inhabitent</p>
                </div>
			</footer><!-- #colophon -->

		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
