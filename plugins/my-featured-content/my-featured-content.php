<?php 
/*
Plugin Name: Find Dealer Widget
Version: 1.0
Plugin URI: http://madico.com
Description: Creates a find dealer widget consisting of a title, image, description and link.
Author: Nate Beers
Author URI: https://techtuts.co/
Text Domain: my_featured_content
*/


add_action( 'widgets_init', 'mfc_init' );

function mfc_init() {
	register_widget( 'mfc_widget' );
}

class mfc_widget extends WP_Widget{

    public function __construct(){
      $widget_details = array(
          'classname' => 'mfc_widget',
          'description' => 'Creates a find dealer widget consisting of a title, image, description and link.'
      );

      parent::__construct( 'mfc_widget', 'Find Dealer Widget', $widget_details );

      add_action('admin_enqueue_scripts', array($this, 'mfc_assets'));
    }

		public function mfc_assets(){
	    wp_enqueue_script('media-upload');
      wp_enqueue_script('thickbox');
      wp_enqueue_script('mfc-media-upload', plugin_dir_url(__FILE__) . 'mfc-media-upload.js', array('jquery'));
      wp_enqueue_style('thickbox');
		}

    public function widget( $args, $instance ){
			echo $args['before_widget'];
		?>

		<div class="module auto-height">
			<a href="<?php echo esc_url( $instance['link_url'] ) ?>"><img src="<?php echo $instance['image'] ?>" alt="<?php echo esc_html( $instance['title'] ) ?>"></a>
			<div class="meta">
				<h4><?php echo esc_html( $instance['title'] ) ?></h4>
				<p class="content"><?php echo wpautop( esc_html( $instance['description'] ) ) ?></p>
				<a href="<?php echo esc_url( $instance['link_url'] ) ?>" class="read-more"><?php echo esc_html( $instance['link_title'] ) ?> &nbsp;<i class="far fa-long-arrow-right"></i></a>
			</div>
		</div>

		<?php

		echo $args['after_widget'];
    }

	public function update( $new_instance, $old_instance ) {  
	    return $new_instance;
	}

    public function form( $instance ){

		$title = '';
    if( !empty( $instance['title'] ) ) {
        $title = $instance['title'];
    }

    $description = '';
    if( !empty( $instance['description'] ) ) {
        $description = $instance['description'];
    }

    $link_url = '';
    if( !empty( $instance['link_url'] ) ) {
        $link_url = $instance['link_url'];
    }

    $link_title = '';
    if( !empty( $instance['link_title'] ) ) {
        $link_title = $instance['link_title'];
    }

		$image = '';
		if(isset($instance['image'])){
		  $image = $instance['image'];
		}
        ?>
        <p>
          <label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>

        <p>
          <label for="<?php echo $this->get_field_name( 'description' ); ?>"><?php _e( 'Description:' ); ?></label>
          <textarea class="widefat" id="<?php echo $this->get_field_id( 'description' ); ?>" name="<?php echo $this->get_field_name( 'description' ); ?>" type="text" ><?php echo esc_attr( $description ); ?></textarea>
        </p>

        <p>
          <label for="<?php echo $this->get_field_name( 'link_url' ); ?>"><?php _e( 'Link URL:' ); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id( 'link_url' ); ?>" name="<?php echo $this->get_field_name( 'link_url' ); ?>" type="text" value="<?php echo esc_attr( $link_url ); ?>" />
        </p>

        <p>
          <label for="<?php echo $this->get_field_name( 'link_title' ); ?>"><?php _e( 'Link Title:' ); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id( 'link_title' ); ?>" name="<?php echo $this->get_field_name( 'link_title' ); ?>" type="text" value="<?php echo esc_attr( $link_title ); ?>" />
        </p>

        <p>
          <label for="<?php echo $this->get_field_name( 'image' ); ?>"><?php _e( 'Image:' ); ?></label>
          <input name="<?php echo $this->get_field_name( 'image' ); ?>" id="<?php echo $this->get_field_id( 'image' ); ?>" class="widefat" type="text" size="36"  value="<?php echo esc_url( $image ); ?>" />
          <input class="upload_image_button" type="button" value="Upload Image" />
        </p>
    <?php
    }
}