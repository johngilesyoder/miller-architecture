
<div class="container-fluid">
	<footer class="site-footer">
		<div class="row">
			<div class="col-lg-8 order-lg-2">
				<div class="row">
					<div class="col-lg-8">
						<p class="footer-callout">
							We would love to talk about your project’s potential; contact us at 406.551.6950 or <a href="mailto:info@miller-roodell.com">info@miller-roodell.com</a>.
						</p>
					</div>
					<div class="col-lg-4 ml-badge">
						<a href="http://www.mountainliving.com/People/The-ML-List-Top-Architects-Designers-2019/" target="_blank">
							<img alt="Mountain Living's 2019 Top Mountain Architects &amp; Designers" src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/badge-ml.png?v=2019" />
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 order-lg-1">
				<address>
					<strong>MILLER | ROODELL ARCHITECTS</strong>
					113 East Oak Street, Suite 2A<br>
					Bozeman, Montana 59715
				</address>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4">
				<div class="footer-company">
					&copy; <?php echo date('Y');?> Miller Roodell Architects. All Rights Reserved.
				</div>
			</div>
			<div class="col-lg-7">
				<div class="footer-social">
					<a href="http://pinterest.com/millerarchitect/" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/icon-pinterest.svg" />
					</a>
					<a href="http://www.houzz.com/pro/ctm7057/miller-architects-ltd" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/icon-houzz.svg" />
					</a>
					<a href="https://plus.google.com/102393456806890657332" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/icon-googleplus.svg" />
					</a>
					<a href="http://www.facebook.com/MillerArchitectsPc" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/icon-facebook.svg" />
					</a>
					<a href="http://www.twitter.com/CMarchitectsMT" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/icon-twitter.svg" />
					</a>
				</div>
			</div>
		</div>
	</footer>
</div>

<script async defer src="//assets.pinterest.com/js/pinit.js"></script>
<?php if ( !is_singular('portfolio') && !is_front_page() ) : ?>
  <script>
    jQuery(document).ready(function() {
      jQuery('.gallery').slick({
        autoplay: true,
        autoPlaySpeed: 4000,
        arrows: false,
        dots: true,
        infinite: true,
        pauseOnFocus: false,
        pauseOnHover: false,
        speed: 3000,
        fade: true,
        cssEase: 'linear'
      });

    });
  </script>
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
