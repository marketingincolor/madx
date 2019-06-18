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
            // This is horrible code. 
            $current_url =  $_SERVER['REQUEST_URI'];
            $url_array   = explode('/', $current_url);
            $url1_split  = explode('-', $url_array[1]);
            $url1_joined = implode(' ', $url1_split);
            $url2_split  = explode('-', $url_array[2]);
            $url2_joined = implode(' ', $url2_split);
            $url3_split  = explode('-', $url_array[3]);
            $url3_joined = implode(' ', $url3_split);
            $url4_split  = explode('-', $url_array[4]);
            $url4_joined = implode(' ', $url4_split);
          ?>
          <div class="small-12 large-10 large-offset-1 cell">
            <div id="breadcrumbs" class="breadcrumbs" style="margin:20px 0 0">
              <h5 class="breadcrumb-title"><a href="<?php echo '/'. $url_array[1]; ?>"><?php echo $url1_joined; ?></a>
                <i class="fas fa-chevron-right"></i> <a
                  href="<?php echo '/'. $url_array[1] .'/'. $url_array[2]; ?>"><span><?php echo $url2_joined; ?></span></a>
                <?php if($url4_joined){ ?><i class="fas fa-chevron-right"></i> <a
                  href="<?php echo '/'. $url_array[1] .'/'. $url_array[2] .'/'. $url_array[3] . '/' . $url_array[4]; ?>"><span><?php echo $url4_joined; ?></span></a>
              </h5><?php } ?>
            </div>
          </div>
          <div id="single-post" class="small-12 large-10 large-offset-1 cell module auto-height" style="margin-top:0">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" style="margin-bottom:0">

            <?php if(get_field('product_dropdown_information')) { ?>
            <div id="testing" class="testing relative">
              <p class="learn-more white text-center absolute" @click="testingSlideDown"><span
                  class="white"><?php _e('Learn More','madx') ?></span><br><i class="far fa-chevron-down"></i></p>
              <div class="grid-x grid-margin-x grid-margin-y">
                <div class="medium-2 large-1 large-offset-1 cell show-for-large text-right">
                  <img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/testing-icon.svg"
                    alt="window film testing regulations">
                </div>
                <div class="medium-12 large-9 cell">
                  <h4 class="white"><?php the_field('product_dropdown_title'); ?></h4>
                  <div id="testing-content" class="testing-content">
                    <?php the_field('product_dropdown_information'); ?>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>

            <div class="meta">
              <div class="grid-x grid-margin-x grid-margin-y">
                <?php if( have_rows('product_specs') ): 
									$show_product_colums = 'medium-12 large-6 cell ';
									else:
									$show_product_colums = 'medium-12 cell '; 
								endif; ?>
                <div class="<?php echo $show_product_colums; ?>single-product-details">
                  <h4 style="margin-bottom:20px"><?php _e('Product Details','madx'); ?></h4>
                  <div class="content" style="margin-bottom:0"><?php the_content(); ?></div>
                </div>

                <?php if( have_rows('product_specs') ): ?>
                <div class="<?php echo $show_product_colums; ?>single-product-specs">
                  <div class="table">
                    <div class="grid-x grid-margin-x small-margin-collapse film-performance-measurements align-middle">
                      <div class="cell small-6 medium-7 data-title text-center alt-left">
                        <p>Film Performance Measurements</p>
                      </div>
                      <div class="cell small-6 medium-5 data-title text-center alt-right">
                        <ul class="tabs" v-tabs id="product-tabs">
                          <select id="product-list" @change="openProductTab" style="margin-bottom:0">

                            <?php $rowCount = 0; ?>
                            <?php while ( have_rows('product_specs') ) : the_row();
                              
                              $each_product = get_sub_field_object('specsheet_product_name'); ?>

                            <option value="#panel<?php echo $rowCount; ?>"><?php echo $each_product['value']; ?>
                            </option>
                            <?php $rowCount++;endwhile; ?>

                          </select>
                        </ul>
                      </div>

                      <div id="tabs-content" class="tabs-content small-12 cell" data-tabs-content="product-tabs">
                        <div class="grid-x">

                          <?php $rowCount = 0; ?>
                          <?php while ( have_rows('product_specs') ) : the_row(); ?>

                          <div id="panel<?php echo $rowCount; ?>"
                            class="small-12 cell tabs-panel<?php if($rowCount === 0){echo ' is-active';} ?>">

                            <div class="grid-x">
                              <?php if( have_rows('specsheet_product_specs')):
                                    while ( have_rows('specsheet_product_specs') ) : the_row();
                                      $each_label = get_sub_field('specsheet_data_item_label');
                                      $each_value = get_sub_field('specsheet_data_item_value');
                                      echo '<div class="cell medium-7 small-6 data-element text-center">'.$each_label.'</div>';
                                      echo '<div class="cell medium-5 small-6 data-element text-center">'.$each_value.'</div>';
                                    endwhile; endif; ?>
                            </div>

                          </div>

                          <?php $rowCount++;endwhile; ?>
                        </div>
                      </div> <!-- /#tabs-content -->
                    </div> <!-- /film-performance-measurements -->
                  </div> <!-- /.table -->
                </div>
                <?php endif; // /if statement from line 69 ?>

                <?php if(get_field('image_gallery_selector')) { //Start image gallery ?>
                
                  <div class="medium-12 large-10 large-offset-1 cell single-product-gallery">
                    <div id="img-gallery" class="grid-x grid-margin-x grid-margin-y">
                      <!-- Main Image -->
                      <div class="medium-8 medium-offset-2 large-5 large-offset-0 cell">
                        <div id="image-holder">
                          <img src="<?php the_field('gallery_main_image'); ?>" alt="" id="constant-img" style="height:auto">
                        </div>
                      </div>
                      <!-- Image Thumbnails -->
                      <div class="medium-8 medium-offset-2 large-7 large-offset-0 cell">
                        <h3 class="blue"><?php the_field('gallery_title'); ?></h3>
                        <p><?php the_field('gallery_subhead'); ?></p>
                
                        <?php
                            $count  = 0;
                            $images = get_field('gallery_images');
                            $size   = 'full';
                            if( $images ): ?>
                
                        <ul class="gallery-list">
                
                          <?php foreach( $images as $image ): ?>
                
                          <li>
                            <a @click="gallerySwitcher">
                              <div class="bg-img<?php if($count === 0){echo ' gallery-active';} ?>"
                                style="background-image: url(<?php echo wp_get_attachment_image_url( $image['ID'], $size ); ?>)">
                              </div>
                              <span class="swatch-title"><?php echo $image['title']; ?></span>
                            </a>
                          </li>
                
                          <?php $count++;endforeach; ?>
                
                        </ul>
                
                        <?php endif; ?>
                
                      </div>
                    </div>
                  </div>
                <?php } // End image gallery ?>

                <div id="single-benefits" class="medium-12 cell" style="margin-bottom: 30px;">
                  <h4 style="margin-bottom:20px;color:#FFF"><?php _e('Benefits','madx'); ?></h4>
                  <div class="grid-x">
                    <?php get_template_part('template-parts/taxonomy/benefits'); ?>
                  </div>
                </div>

                <?php if(get_field('product_secondary_data_title')): ?>
                  <div class="small-12 cell">
                    <h4><?php the_field('product_secondary_data_title'); ?></h4>
                  </div>
                <?php endif; ?>
                
                <?php if(get_field('product_secondary_data_content')): ?>
                  <div class="small-12 cell">
                    <div class="content" style="margin-bottom:0px"><?php the_field('product_secondary_data_content'); ?></div>
                  </div>
                <?php endif; ?>
                
                <?php if(get_field('blog_resource_title')): ?>
                  <div class="small-12 cell">
                    <div class="wp-block-media-text alignwide is-stacked-on-mobile" style="grid-template-columns: 14% auto;">
                      <figure class="wp-block-media-text__media" style="text-align: center;">
                        <img src="http://madicomain.wpengine.com/wp-content/uploads/2018/10/Blog-Icon-01.png" alt="madico blog" srcset="https://madico.com/wp-content/uploads/2018/10/Blog-Icon-01.png 336w, https://madico.com/wp-content/uploads/2018/10/Blog-Icon-01-150x150.png 150w, https://madico.com/wp-content/uploads/2018/10/Blog-Icon-01-300x300.png 300w" sizes="(max-width: 639px) 98vw, (max-width: 1199px) 64vw, 336px" class="wp-image-17390" style="max-width: 125px !important; height: auto !important;">
                      </figure> 
                      <div class="NOTwp-block-media-text__content" style="margin: 0px 10px;">
                        <p></p> 
                        <h4 id="mce_7"><?php the_field('blog_resource_title'); ?></h4> 
                        <p></p> 
                        <p></p> 
                        <span><?php the_field('blog_resource_content'); ?></a></span> 
                        <p></p>
                      </div>
                    </div>
                  </div>
                <?php endif; ?>

                <?php if(get_field('youtube_video')): ?>
                  <div style="text-align: center; position: relative; padding-bottom: 56.25%; padding-top: 25px; height: 0;">
                    <iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://www.youtube.com/embed/<?php the_field('youtube_video'); ?>" width="720" height="480" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                  </div>
                <?php endif; ?>

                <div class="medium-12 cell single-product-details">
                  <?php if(get_field('anchoring_system_title')) { ?>
                  <h4><?php the_field('anchoring_system_title'); ?></h4>
                  <?php } ?>

                  <?php if(get_field('anchoring_system_copy')) { ?>
                  <div class="content"><?php the_field('anchoring_system_copy') ?></div>
                  <?php } ?>

                  <?php if(get_field('product_tabs')) { ?>

                  <ul class="tabs" id="safety-tabs" v-tabs>
                    <?php
                        $tab_title_count = 0;
                        if( have_rows('product_tabs') ):
                          while ( have_rows('product_tabs') ) : the_row(); ?>

                    <li class="tabs-title <?php if($tab_title_count == 0){ echo 'is-active';} ?>">
                      <a href="#<?php echo 'tab'.$tab_title_count; ?>"
                        @click="openDistributionTab"><?php the_sub_field('tab_title'); ?></a>
                    </li>

                    <?php $tab_title_count++;endwhile;endif; ?>

                  </ul>

                  <div id="safety-tabs-content" class="tabs-content" data-tabs-content="safety-tabs">

                    <?php
                        $tab_panel_count = 0;
                        if( have_rows('product_tabs') ):
                          while ( have_rows('product_tabs') ) : the_row(); ?>

                    <div class="tabs-panel <?php if($tab_panel_count == 0){ echo 'is-active';} ?>"
                      id="<?php echo 'tab'.$tab_panel_count; ?>">
                      <article><?php the_sub_field('tab_content'); ?></article>
                    </div>

                    <?php $tab_panel_count++;endwhile;endif; ?>

                  </div>

                  <?php } ?>

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

                          <a href="#!" class="data-sheet"
                            data-pdf="<?php the_sub_field('document_file'); ?>"><?php the_sub_field('document_title'); ?></a>

                          <?php else: ?>

                          <a href="<?php the_sub_field('document_file'); ?>" class="data-sheet"
                            target="_blank"><?php the_sub_field('document_title'); ?></a>

                          <?php endif; ?>
                          <p><?php the_sub_field('document_download_cta'); ?></p>
                        </div>
                      </div>
                    </div>

                    <?php $dl_count++;endwhile; ?>

                  </div>
                  <hr style="margin-bottom:40px">

                  <?php endif; ?>

                  <p class="go-back">
                    <a href="<?php echo '/'. $url_array[1] .'/'. $url_array[2]; ?>">
                      <button class="btn-lt-blue border"><i class="fas fa-arrow-alt-left"></i>&nbsp; Back</button>
                    </a>
                  </p>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--</div> --><!-- was crippling the Node app -->
</section>

<?php if(strpos($current_url, 'specialty-solutions') !== false){ ?>
  <?php get_template_part('template-parts/taxonomy/specialty-solutions/contact'); ?>
<?php } ?>

<?php endwhile; ?>

<script type="text/javascript">
var _ss = _ss || [];
var callThisOnReturn = function(resp) {
  if (location.href.indexOf('specialty-solutions/products') > -1) {
    jQuery('.data-sheet').on('click', function() {
      var that = $(this);
      if (resp && resp.contact) {
        jQuery('#specialty-pdf-modal').find('iframe').attr('src', jQuery(this).data('pdf'))
        jQuery('#specialty-pdf-modal').foundation('open');
      } else {
        jQuery('#specialty-form-modal').foundation('open');
        var pdfLink = jQuery(this).data('pdf');
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
  ss.type = 'text/javascript';
  ss.async = true;
  ss.src = ('https:' == document.location.protocol ? 'https://' : 'http://') +
    'koi-3QNHJKLJ4E.marketingautomation.services/client/ss.js?ver=1.1.1';
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