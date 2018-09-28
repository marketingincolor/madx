</div><!-- Close div#app from header.php -->

<footer class="footer">
  <div class="grid-container">
  	<div class="grid-x grid-margin-x grid-margin-y">
      <div class="small-10 small-offset-1 large-12 large-offset-0">
    		<div class="grid-x grid-margin-x grid-margin-y">
          <div class="small-6 medium-4 large-2 cell">
            <img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/logo-blue.png" alt="Madico">
          </div>
          <div class="small-6 medium-4 large-2 cell">
            <ul>
              <li class="heading"><h6 class="blue">Company</h6></li>
              <li><a href="/about">Overview</a></li>
              <li><a href="/about/our-businesses">Our Businesses</a></li>
              <li><a href="/about/madico-cares">Madico Cares</a></li>
              <li><a href="/about/news">News</a></li>
              <li><a href="/about/press-releases">Press Releases</a></li>
              <li><a href="/blog">Blog</a></li>
              <li><a href="/about/careers">Careers</a></li>
              <li><a href="#">FAQs</a></li>
            </ul>
          </div>
          <div class="small-6 medium-4 large-2 cell">
            <ul>
              <li class="heading"><h6 class="blue">Films</h6></li>
              <li><a href="/auto">Auto</a></li>
              <li><a href="/residential">Residential</a></li>
              <li><a href="/commercial">Commercial</a></li>
              <li><a href="/safety-security">Safety &amp; Security</a></li>
              <li><a href="/performance">Performance</a></li>
              <li><a href="/warranty">Warranty</a></li>
            </ul>
          </div>
          <div class="small-6 medium-4 large-2 cell">
            <ul>
              <li class="heading"><h6 class="blue">Specialty</h6></li>
              <li><a href="/specialty-solutions">Specialty Solutions</a></li>
              <li><a href="#">Industries</a></li>
              <li><a href="#">Products</a></li>
              <li><a href="#">Applications</a></li>
              <li><a href="#">Capabilities</a></li>
              <li><a href="#">Start a Project</a></li>
            </ul>
          </div>
          <div class="small-6 medium-4 large-2 cell">
            <ul>
              <li class="heading"><h6 class="blue">Dealers</h6></li>
              <li><a href="#">Dealer Portal</a></li>
              <li><a href="#">Become a Dealer</a></li>
              <li><a href="#">Products</a></li>
              <li><a href="#">Madico U</a></li>
              <li><a href="#">Dealer Programs</a></li>
              <li><a href="#">Distribution</a></li>
              <li><a href="#">FAQs</a></li>
            </ul>
          </div>
          <div class="small-6 medium-4 large-2 cell">
            <ul>
              <li class="heading"><h6 class="blue">Connect</h6></li>
              <li><a href="#"><i class="fab fa-facebook"></i>&nbsp; Facebook</a></li>
              <li><a href="#"><i class="fab fa-twitter"></i>&nbsp; Twitter</a></li>
              <li><a href="#"><i class="fab fa-google-plus-g"></i>&nbsp; Google Plus</a></li>
              <li><a href="#"><i class="fab fa-linkedin"></i>&nbsp; LinkedIn</a></li>
              <li><a href="#"><i class="fab fa-youtube"></i>&nbsp; YouTube</a></li>
              <li><a href="#"><i class="fab fa-instagram"></i>&nbsp; Instagram</a></li>
            </ul>
          </div>
          <div class="small-12 cell text-center credits">
            <address>9251 Belcher Road N. Pinellas Park, FL 33782</address>
            <ul class="privacy">
              <li><a href="/contact">Contact Us</a></li>&nbsp; |
              <li><a href="/terms-conditions">Terms &amp; Conditions</a></li>&nbsp; |
              <li><a href="/privacy-policy">Privacy Policy</a></li>
            </ul>
            <p>Copyright <?php echo date('Y'); ?> Madico<sup>&reg;</sup>, Inc.</p>
          </div>
        </div>
      </div>
  	</div>
  </div>
</footer>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<?php wp_footer(); ?>
</body>
</html>