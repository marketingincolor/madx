<?php while ( have_posts() ) : the_post(); ?>

<div class="show-for-small-only">
	<?php get_template_part('template-parts/menus/'.get_post_type().'-header-menu'); ?>
</div>

<div id="header-grid" class="grid-container">
	<div class="grid-x">
		<div class="small-10 small-offset-1 large-12 large-offset-0 show-for-medium-only">
			<?php get_template_part('template-parts/menus/'.get_post_type().'-tablet-menu'); ?>
		</div>
		<div class="small-10 small-offset-1 large-12 large-offset-0 show-for-large">
			<?php get_template_part('template-parts/menus/'.get_post_type().'-header-menu'); ?>
		</div>
	</div>
</div>

<section class="taxonomy-intro">
	<div class="grid-container">
		<div class="grid-x">
			<div class="large-8 medium-10 medium-offset-1 large-offset-2 cell text-center">
				<h1 class="blue"><?php get_field('product_title') ? the_field('product_title') : the_title(); ?></h1>
			</div>
		</div>
	</div>
</section>

<section id="tax-posts" class="taxonomy-products" style="padding-top: 0">
  <div class="grid-container">
    <div class="grid-x">
      <div class="small-10 small-offset-1 large-12 large-offset-0 cell">
        <div class="grid-x grid-margin-x grid-margin-y">
          <?php
            // Get current url and split it up by '/'
            $current_url =  $_SERVER['REQUEST_URI'];
            $url_array   = explode('/', $current_url);
            $url1_split  = explode('-', $url_array[1]);
            $url1_joined = implode(' ', $url1_split);
            $url3_split  = explode('-', $url_array[3]);
            $url3_joined = implode(' ', $url3_split);
            $url4_split  = explode('-', $url_array[4]);
            $url4_joined = implode(' ', $url4_split);
          ?>
          <div class="small-12 large-10 large-offset-1 cell">
            <div id="breadcrumbs" class="breadcrumbs" style="margin:20px 0 0">
              <h5 class="breadcrumb-title"><a href="<?php echo '/'. $url_array[1]; ?>"><?php echo $url1_joined; ?></a> <i class="fas fa-chevron-right"></i> <a href="<?php echo '/'. $url_array[1] .'/'. $url_array[2]; ?>"><span><?php echo $url_array[2]; ?></span></a> <?php if($url4_joined){ ?><i class="fas fa-chevron-right"></i> <a href="<?php echo '/'. $url_array[1] .'/'. $url_array[2] .'/'. $url_array[3] . '/' . $url_array[4]; ?>"><span><?php echo $url4_joined; ?></span></a></h5><?php } ?>
            </div>
          </div>
          <div id="single-post" class="small-12 large-10 large-offset-1 cell module auto-height" style="margin-top:0">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" style="margin-bottom:0">

            <div class="meta">
              <div class="grid-x grid-margin-x grid-margin-y">
                <div class="medium-12 large-10 large-offset-1 cell">
                  <h4><?php _e('Product Details','madx'); ?></h4>
                  <div class="content"><?php the_content(); ?></div>

                  <?php if( have_rows('product_downloads') ) : ?>

                    <h4><?php _e(ucfirst(get_post_type()) . ' Resources','madx') ?></h4>
                    <hr>
                    <div class="grid-x grid-margin-y grid-margin-x file-downloads">

                    <?php
                      $dl_count = 1;
                      while ( have_rows('product_downloads') ) : the_row(); ?>

                      <div class="medium-6 large-5<?php if($dl_count % 2 !== 0){echo ' medium-offset-0 large-offset-1';} ?> cell">
                        <div class="grid-x grid-margin-x grid-margin-y">
                          <div class="medium-2 cell text-center">
                            <i class="fal fa-file-pdf"></i>
                          </div>
                          <div class="medium-10 cell">
                            <?php if(get_post_type() === 'specialty'): ?>
                              
                              <a href="#!" class="data-sheet" data-pdf="<?php the_sub_field('document_file'); ?>"><?php the_sub_field('document_title'); ?></a>

                            <?php else: ?>

                              <a href="<?php the_sub_field('document_file'); ?>" class="data-sheet" target="_blank"><?php the_sub_field('document_title'); ?></a>

                            <?php endif; ?>
                            <p><?php the_sub_field('document_download_cta'); ?></p>
                          </div>
                        </div>
                      </div>
                    
                    <?php $dl_count++;endwhile; ?>

                    </div>
                    <hr style="margin-bottom:40px">

                  <?php endif; ?>

                  <div><a href="<?php echo '/'. $url_array[1] .'/'. $url_array[2]; ?>">
                    <button class="btn-lt-blue border"><i class="fas fa-arrow-alt-left"></i>&nbsp; Back</button>
                  </a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php if(strpos($current_url, 'specialty-solutions') !== false){ ?>
  <?php get_template_part('template-parts/taxonomy/specialty-solutions/contact'); ?>
<?php } ?>

<?php endwhile; ?>

  <script type="text/javascript">
    var _ss = _ss || [];
    console.log(location.href.indexOf('specialty-solutions/products'));
    var callThisOnReturn = function(resp) {
      console.log(resp);
      if(location.href.indexOf('specialty-solutions/products') > -1){
        jQuery('.data-sheet').on('click',function(){
          var that = $(this);
          if (resp && resp.contact) {
            jQuery('#specialty-pdf-modal').find('iframe').attr('src',jQuery(this).data('pdf'))
            jQuery('#specialty-pdf-modal').foundation('open');
          } else {
        jQuery('#specialty-form-modal').foundation('open');
        var pdfLink = jQuery(this).data('pdf');
        console.log(pdfLink);
        //jQuery('#input_6').val(pdfLink);
        //jQuery('#$jot_id').find('button[type=submit]').on('click',function(event){
        //  event.preventDefault();
        //  submitForm(pdfLink);
        //});
          }
        });
      }
    };
    _ss.push(['_setResponseCallback', callThisOnReturn]);
    _ss.push(['_setDomain', 'https://koi-3QNHJKLJ4E.marketingautomation.services/net']);
    _ss.push(['_setAccount', 'KOI-42O9KA253C']);
    _ss.push(['_trackPageView']);
    (function() {
        var ss = document.createElement('script');
        ss.type = 'text/javascript'; ss.async = true;
        ss.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'koi-3QNHJKLJ4E.marketingautomation.services/client/ss.js?ver=1.1.1';
        var scr = document.getElementsByTagName('script')[0];
        scr.parentNode.insertBefore(ss, scr);
    })();
  </script>
<!-- Form Modal -->
  <div class="reveal" id="specialty-form-modal" v-reveal>
    <h3 class="blue">Please fill out the form to access the product's data sheet</h3>
    <?php echo do_shortcode(get_field('jotspring_code')); ?>
    <button class="close-button" data-close aria-label="Close modal" type="button">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
<!-- /Form Modal -->

<!-- PDF Modal -->
  <div class="reveal" id="specialty-pdf-modal" v-reveal style="height:100%">
    <iframe src="" style="border:0;height:100%;width:100%"></iframe>
    <button class="close-button" data-close aria-label="Close modal" type="button">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
<!-- /PDF Modal -->
