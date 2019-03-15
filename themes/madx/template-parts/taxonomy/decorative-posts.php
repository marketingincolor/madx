<?php $post_type = explode('_', $term->taxonomy)[0]; ?>

<section id="posts-container" class="taxonomy-products" style="margin-bottom:0">
  <div class="grid-x">
    <div class="small-10 small-offset-1 large-12 large-offset-0 cell">
      <div class="grid-x grid-margin-x grid-margin-y">

          <?php
            $args = array(
              'post_type'      => $post_type,
              'posts_per_page' => -1,
              'orderby'        => 'title',
              'order'          => 'ASC',
              'tax_query'      => array(
                array(
                  'taxonomy' => $term->taxonomy,
                  'field'    => 'slug',
                  'terms'    => $term->slug
                ),
              ),
            );
            $query = new WP_Query( $args );
            while ( $query->have_posts() ) : $query->the_post();
          ?>

            <div class="medium-6 large-4 cell module auto-height relative">
              <a href="<?php the_permalink(); ?>"><div class="module-bg" style="background-image: url(<?php the_post_thumbnail_url() ?>)"></div></a>
              <div class="meta">
                <h4 class="blue"><?php the_title(); ?></h4>
                <div class="content">
                  <?php if (get_field('short_description')) {
                    the_field('short_description');
                  }else{
                    echo wp_trim_words( get_the_content(), 25, '...' );
                  }
                  ?>
                </div>
                <a href="<?php the_permalink(); ?>" class="read-more blue">View Product Details &nbsp;<i class="far fa-long-arrow-right"></i></a>
              </div>
            </div>

          <?php endwhile; wp_reset_postdata(); ?>

      </div>
    </div>
  </div>
</section>