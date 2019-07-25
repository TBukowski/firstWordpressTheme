<?php

// https://developer.wordpress.org/reference/functions/wp_register_style/
// wp_enqueue_style( $handle, $src, $deps, $ver, $media );
function load_stylesheets()
{
    // wp_register_style('bootstrap');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');

    // wp_register_style('stylesheet');
    wp_enqueue_style('stylesheet', get_template_directory_uri() . '/style.css', array(), false, 'all');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');


// https://developer.wordpress.org/reference/functions/wp_register_script/
// wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer);
function load_js()
{
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ), 1, true);
}
add_action('wp_enqueue_scripts', 'load_js');

// testimonies post type function
function create_post_type() {
    // https://codex.wordpress.org/Function_Reference/register_post_type
    register_post_type('testimonies',
        // custom post type options
        array(
            'labels' => array(
                'name' => __( 'Testimonies' ),
                'singular_name' => __( 'Testimony' )
            ),
            'public' => true
        )
    );
    // goal post type function
    register_post_type( 'goals',
        // custom post type ooptions
        array(
            'labels' => array(
                'name' => __( 'Goals' ),
                'singular_name' => __( 'Goal' )
            ),
            'public' => true
        )
    );
    // about post type 
    register_post_type( 'about',
        // custom post type options
        array(
            'labels' => array(
                'name' =>__( 'About' )
            ),
            'public' => true
        )
    );
}

add_action( 'init', 'create_post_type' );

// add widget locations
function home_widgets_init() {

    register_sidebar( array (
        'name' => 'Index sidebar',
        'id' => 'index_sidebar',
        'before_widget' => '<div class="index-sidebar">',
        'after_widget' => '</div>',
    ) );

    register_sidebar( array (
        'name'  => 'Left body block',
        'id'    => 'left_block_1',
        'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
    ) );

    register_sidebar( array (
        'name'  => 'Center body block',
        'id'    => 'center_block_1',
        'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
    ) );

    register_sidebar( array (
        'name'  => 'Right body block',
        'id'    => 'right_block_1',
        'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
    ) );

    register_sidebar( array (
        'name' => 'Secondary image block',
        'id' => 'secondary_image_block',
        'before_widget' => '<div class="secondary-image">',
        'after_widget' => '</div>',
    ) );
}
add_action( 'widgets_init', 'home_widgets_init' );

// Register and load the widget
function load_block_widget() {
    register_widget( 'block_widget' );
}
add_action( 'widgets_init', 'load_block_widget' );
 
// Create the widget 
class Block_Widget extends WP_Widget {

    function __construct() {
        parent::__construct(
            'block_widget', // Base ID of widget
            esc_html__('Block Widget', 'block_widget_domain'), // Widget name will appear in UI 
            array( 'description' => __( 'Block style widget used to add description for a specific navigation button', 'block_widget_domain' ), ) // Args
        );
    }
 
    // Widget front-end
    
    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );
        
        // before and after widget arguments are defined by themes
        echo $args['before_widget'];
        if ( ! empty( $title ) )
            echo $args['before_title'] . $title . $args['after_title'];
        
        // This is where you run the code and display the output
        echo esc_html__( 'line 100 coded text', 'block_widget_domain' );
        echo $args['after_widget'];
    }
         
    // Widget Backend 
    public function form( $instance ) {
        if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
        }
        else {
            $title = __( 'body block', 'block_widget_domain' );
        }

        // Widget admin form
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <?php 
    }
        
    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
        
        return $instance;
    }
}

add_theme_support( 'post-thumbnails' );

// Navigation menus
register_nav_menus( array( 
    'primary' => __( 'Primary Menu' ),
    'footer' => __( 'Footer Menu' )
));
?>