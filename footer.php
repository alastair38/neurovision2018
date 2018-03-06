		</main> <!-- end .wrapper -->

		<footer id="contact" class="page-footer center">

			<div id="inner-footer" class="container">
				<h4 class="light">Contact</h4>
				<ul class="col s12 l12">
					<?php
					$email_contact = get_theme_mod('tcx_email_contact');
					if ($email_contact) {
						echo ' <li><a href="mailto:' . $email_contact . '" target="_blank">  <svg fill="#fff" height="20" width="20" viewBox="0 0 24 16">
					        <path d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" />
					    </svg> Email Us</a></li>';
					}?>
					<?php
					$twitter_handle = get_theme_mod('tcx_twitter_handle');
					if ($twitter_handle) {
						echo '<li><a href="https://twitter.com/' . $twitter_handle . '" target="_blank">  <svg fill="#fff" height="20" width="20" viewBox="0 0 24 16">
					        <path d="M22.46,6C21.69,6.35 20.86,6.58 20,6.69C20.88,6.16 21.56,5.32 21.88,4.31C21.05,4.81 20.13,5.16 19.16,5.36C18.37,4.5 17.26,4 16,4C13.65,4 11.73,5.92 11.73,8.29C11.73,8.63 11.77,8.96 11.84,9.27C8.28,9.09 5.11,7.38 3,4.79C2.63,5.42 2.42,6.16 2.42,6.94C2.42,8.43 3.17,9.75 4.33,10.5C3.62,10.5 2.96,10.3 2.38,10C2.38,10 2.38,10 2.38,10.03C2.38,12.11 3.86,13.85 5.82,14.24C5.46,14.34 5.08,14.39 4.69,14.39C4.42,14.39 4.15,14.36 3.89,14.31C4.43,16 6,17.26 7.89,17.29C6.43,18.45 4.58,19.13 2.56,19.13C2.22,19.13 1.88,19.11 1.54,19.07C3.44,20.29 5.7,21 8.12,21C16,21 20.33,14.46 20.33,8.79C20.33,8.6 20.33,8.42 20.32,8.23C21.16,7.63 21.88,6.87 22.46,6Z" />
					    </svg> Follow us on Twitter</a></li>';
					}?>
					<?php
					$landline_contact = get_theme_mod('tcx_landline_contact');
					if ($landline_contact) {
						echo '<li aria-label="Our phone number is"><a href="tel://+' . $landline_contact . '" target="_blank"><svg fill="#fff" height="20" width="20" viewBox="0 0 24 16" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
</svg> ' . $landline_contact . '</a></li>';
					}?>

				</ul>

				<div class="col s12">
					<p class="source-org copyright">
						<a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a> &copy; <?php echo date("Y");?>
					</p>
				</div>

			</div> <!-- end #inner-footer -->
		</footer> <!-- end .footer -->
		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->
