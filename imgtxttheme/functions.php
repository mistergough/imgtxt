<?php show_admin_bar( false ); ?>
<?php
if ( function_exists('register_sidebar') ) {

   register_sidebar(array(
   'id' => 'over-content',
   'name' => 'Over Content',
   'before_title' => '<h3>',
   'after_title' => '</h3>'
    ));

   register_sidebar(array(
   'id' => 'left-sidebar',
   'name' => 'Left Sidebar',
   'before_title' => '<h3>',
   'after_title' => '</h3>'
    ));

   register_sidebar(array(
   'id' => 'top-content',
   'name' => 'Top Content',
   'before_title' => '<h3>',
   'after_title' => '</h3>'
    ));

   register_sidebar(array(
   'id' => 'loopless-content',
   'name' => 'Loopless Content',
   'before_title' => '<h3>',
   'after_title' => '</h3>'
    ));

   register_sidebar(array(
   'id' => 'bottom-content',
   'name' => 'Bottom Content',
   'before_title' => '<h3>',
   'after_title' => '</h3>'
    ));

   register_sidebar(array(
   'id' => 'right-sidebar',
   'name' => 'Right Sidebar',
   'before_title' => '<h3>',
   'after_title' => '</h3>'
    ));

   register_sidebar(array(
   'id' => 'under-content',
   'name' => 'Under Content',
   'before_title' => '<h3>',
   'after_title' => '</h3>'
    ));

   register_sidebar(array(
   'id' => 'footer',
   'name' => 'Footer',
   'before_title' => '<h3>',
   'after_title' => '</h3>'
    ));
}?>
<?php
function register_my_menus() {
  register_nav_menus(
    array(
      'header-top' => __( 'Header Top' ),
      'header-left' => __( 'Header Left' ),
      'header-right' => __( 'Header Right' ),
      'header-bottom' => __( 'Header Bottom' )
    )
  );
}
add_action( 'init', 'register_my_menus' );
?>
<?php
add_theme_support( 'post-thumbnails' ); 
?>
<?php
function widget_first_last_classes($params) {
 
        global $my_widget_num; // Global a counter array
        $this_id = $params[0]['id']; // Get the id for the current sidebar we're processing
        $arr_registered_widgets = wp_get_sidebars_widgets(); // Get an array of ALL registered widgets 
 
        if(!$my_widget_num) {// If the counter array doesn't exist, create it
                $my_widget_num = array();
        }
 
        if(!isset($arr_registered_widgets[$this_id]) || !is_array($arr_registered_widgets[$this_id])) { // Check if the current sidebar has no widgets
                return $params; // No widgets in this sidebar... bail early.
        }
 
        if(isset($my_widget_num[$this_id])) { // See if the counter array has an entry for this sidebar
                $my_widget_num[$this_id] ++;
        } else { // If not, create it starting with 1
                $my_widget_num[$this_id] = 1;
        }
 
        $class = 'class="widgets-count-' . count($arr_registered_widgets[$this_id]) . ' '; // Add widget count class for additional styling options
        $class .= 'widget-' . $my_widget_num[$this_id] . ' '; // Add a widget number class for additional styling options
       
        if($my_widget_num[$this_id] == 1) { // If this is the first widget
                $class .= 'widget-first ';
        } elseif($my_widget_num[$this_id] == count($arr_registered_widgets[$this_id])) { // If this is the last widget
                $class .= 'widget-last ';
        }
 
        $params[0]['before_widget'] = str_replace('class="', $class, $params[0]['before_widget']); // Insert our new classes into "before widget"
 
        return $params;
 
}
add_filter('dynamic_sidebar_params','widget_first_last_classes');
?>