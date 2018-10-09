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
              <li><a href="/about">About</a></li>
              <li><a href="/about/history">History</a></li>
              <li><a href="/about/growth-acquisitions">Growth & Acquistitions</a></li>
              <li><a href="/about/madico-cares">Madico Cares</a></li>
              <li><a href="/about/news">News</a></li>
              <li><a href="/blog">Blog</a></li>
              <li><a href="/about/careers">Careers</a></li>
              <li><a href="/faqs">FAQs</a></li>
            </ul>
          </div>
          <div class="small-6 medium-4 large-2 cell">
            <ul>
              <li class="heading"><h6 class="blue">Films</h6></li>
              <li><a href="/auto">Auto</a></li>
              <li><a href="/residential">Residential</a></li>
              <li><a href="/commercial">Commercial</a></li>
              <li><a href="/safety-security">Safety &amp; Security</a></li>
              <li><a href="/find-dealer">Find a Dealer</a></li>
              <li><a href="/distribution">Distribution</a></li>
            </ul>
          </div>
          <div class="small-6 medium-4 large-2 cell">
            <ul>
              <li class="heading"><h6 class="blue">Specialty</h6></li>
              <li><a href="/specialty-solutions">Specialty Solutions</a></li>
              <li><a href="/specialty-solutions/industries">Industries</a></li>
              <li><a href="/specialty-solutions/products">Products</a></li>
              <li><a href="/specialty-solutions/capabilities">Capabilities</a></li>
              <li><a href="/specialty-solutions/case-studies">Case Studies</a></li>
              <li><a href="/specialty-solutions/contact">Contact</a></li>
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
            </ul>
          </div>
          <div class="small-6 medium-4 large-2 cell">
            <ul>
              <li class="heading"><h6 class="blue">Connect</h6></li>
              <li><a href="https://www.facebook.com/MadicoInc/"><i class="fab fa-facebook"></i>&nbsp; Facebook</a></li>
              <li><a href="https://twitter.com/MadicoInc"><i class="fab fa-twitter"></i>&nbsp; Twitter</a></li>
              <li><a href="https://plus.google.com/+MadicoInc"><i class="fab fa-google-plus-g"></i>&nbsp; Google Plus</a></li>
              <li><a href="https://www.linkedin.com/company/madicoinc"><i class="fab fa-linkedin"></i>&nbsp; LinkedIn</a></li>
              <li><a href="https://www.youtube.com/channel/UCu9s60dm8xsrjHsXtqT49Nw"><i class="fab fa-youtube"></i>&nbsp; YouTube</a></li>
              <li><a href="https://www.instagram.com/clearplex"><i class="fab fa-instagram"></i>&nbsp; Instagram</a></li>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.min.js"></script>
<?php if(is_page_template('page-film-selector.php')) { ?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/vuetify/1.2.6/vuetify.min.js"></script>

<?php } ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
<?php if(is_page_template('page-protectionpro.php')) { ?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<?php } ?>

<?php wp_footer(); ?>
</body>
</html>