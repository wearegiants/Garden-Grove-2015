<?php
add_action( 'after_setup_theme', 'gridded_setup' );
function gridded_setup()
{
load_theme_textdomain( 'gridded', get_template_directory() . '/languages' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
global $content_width;
if ( ! isset( $content_width ) ) $content_width = 640;
register_nav_menus(
array( 'main-menu' => __( 'Main Menu', 'gridded' ) )
);
}
add_action( 'wp_enqueue_scripts', 'gridded_load_scripts' );
function gridded_load_scripts()
{
wp_enqueue_script( 'jquery' );
}
add_action( 'comment_form_before', 'gridded_enqueue_comment_reply_script' );
function gridded_enqueue_comment_reply_script()
{
if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
add_filter( 'the_title', 'gridded_title' );
function gridded_title( $title ) {
if ( $title == '' ) {
return '&rarr;';
} else {
return $title;
}
}
add_filter( 'wp_title', 'gridded_filter_wp_title' );
function gridded_filter_wp_title( $title )
{
return $title . esc_attr( get_bloginfo( 'name' ) );
}
add_action( 'widgets_init', 'gridded_widgets_init' );
function gridded_widgets_init()
{
register_sidebar( array (
'name' => __( 'Footer Widget Area', 'gridded' ),
'id' => 'fooder-widget-area',
'before_widget' => '<div id="%1$s" class="bit-66 widget-container %2$s">',
'after_widget' => "</div>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );

register_sidebar( array (
'name' => __( 'Sidebar Widget Area', 'gridded' ),
'id' => 'primary-widget-area',
'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
'after_widget' => "</div>",
'before_title' => '<h3 class="thehand widget-title">',
'after_title' => '</h3>',
) );

}
function gridded_custom_pings( $comment )
{
$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php 
}
add_filter( 'get_comments_number', 'gridded_comments_number' );
function gridded_comments_number( $count )
{
if ( !is_admin() ) {
global $id;
$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}

function excerpt($num) {
$limit = $num+1;
$excerpt = explode(' ', get_the_excerpt(), $limit);
array_pop($excerpt);
$excerpt = implode(" ",$excerpt)."... <p class='readmore'><a href='" .get_permalink($post->ID) ." '>Read more</a></p>";
echo $excerpt;
}


function removeRecentComments() {  
global $wp_widget_factory;  
remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );  
}  
add_action( 'widgets_init', 'removeRecentComments' );
add_image_size( 'homepage-thumb', 400, 400, true );
add_filter('show_admin_bar', '__return_false');
