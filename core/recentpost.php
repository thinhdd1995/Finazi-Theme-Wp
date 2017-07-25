<?php
/*
Plugin Name: Recent Post Widget
Plugin URI: https://finazi.com
Description: Thực hành tạo widget item.
Author: finazi
Version: 1.0
Author URI: http://google.com
*/


/*
 * Khởi tạo widget item
 */
add_action( 'widgets_init', 'create_finazi_widget' );
function create_finazi_widget() {
        register_widget('Recent_Post_Widget');
}

/**
 * Tạo class finazi_Widget
 */
class Recent_Post_Widget extends WP_Widget {
 
        /**
         * Thiết lập widget: đặt tên, base ID
         */
        function __construct() {
 			parent::__construct(
            'recent_post',
            'My Recent Post Thumbnail',
            array( 'description'  =>  'Widget hiển thị bài viết gần đây' )
        );
        }
 
        /**
         * Tạo form option cho widget
         */
        function form( $instance ) {
 			$default = array(
	            'title' => 'My Recent Post Thumbnail',
	            'post_number' => 3
	        );
	        $instance = wp_parse_args( (array) $instance, $default );
	        $title = esc_attr($instance['title']);
	        $post_number = esc_attr($instance['post_number']);
	 
	        echo '<p>Nhập tiêu đề <input type="text" class="widefat" name="'.$this->get_field_name('title').'" value="'.$title.'"/></p>';
	        echo '<p>Số lượng bài viết hiển thị <input type="number" class="widefat" name="'.$this->get_field_name('post_number').'" value="'.$post_number.'" placeholder="'.$post_number.'" max="30" /></p>';
	 
        }
 
        /**
         * save widget form
         */
 
        function update( $new_instance, $old_instance ) {
 			$instance = $old_instance;
	        $instance['title'] = strip_tags($new_instance['title']);
	        $instance['post_number'] = strip_tags($new_instance['post_number']);
	        return $instance;
        }
 
        /**
         * Show widget
         */
 
        function widget( $args, $instance ) {
 			extract($args);
	        $title = apply_filters( 'widget_title', $instance['title'] );
	        $post_number = $instance['post_number'];
	 
	        echo $before_widget;
	        echo $before_title.$title.$after_title;
	        $random_query = new WP_Query('posts_per_page='.$post_number);
	 
	        if ($random_query->have_posts()):
	        	// echo '<pre>';
	        	// print_r($random_query->posts);
	            echo "<ul>";
	            	foreach ($random_query->posts as $key => $post) {?>
	            			<li class="clearfix">
		            			<div class="recentpost-thumb">
								    <?php
								    	echo get_the_post_thumbnail( $post->ID, 'thumbnail', array() );
								    ?>
								</div>
								<div class="recentpost-content">
								    <h4>
								    	<a href="<?php echo get_permalink($post->ID) ?>"><?php echo $post->post_title ?></a>
								    </h4>
								    <div class="recentpost-date">
								    	<span><?php echo get_the_date('d F Y',$post->ID); ?></span>
								    </div>
							    </div>    
	            			</li>
	            	<?php }
	            echo "</ul>";
	        endif;
	        echo $after_widget;
        }
 
}