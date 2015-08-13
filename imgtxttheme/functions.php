<?php show_admin_bar( true ); ?>
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
 
        global $my_widget_num;
        $this_id = $params[0]['id'];
        $arr_registered_widgets = wp_get_sidebars_widgets(); 
 
        if(!$my_widget_num) {
                $my_widget_num = array();
        }
 
        if(!isset($arr_registered_widgets[$this_id]) || !is_array($arr_registered_widgets[$this_id])) {
                return $params;
        }
 
        if(isset($my_widget_num[$this_id])) {
                $my_widget_num[$this_id] ++;
        } else {
                $my_widget_num[$this_id] = 1;
        }
 
        $class = 'class="widgets-count-' . count($arr_registered_widgets[$this_id]) . ' ';
        $class .= 'widget-' . $my_widget_num[$this_id] . ' ';
       
        if($my_widget_num[$this_id] == 1) {
                $class .= 'widget-first ';
        } elseif($my_widget_num[$this_id] == count($arr_registered_widgets[$this_id])) {
                $class .= 'widget-last ';
        }
 
        $params[0]['before_widget'] = str_replace('class="', $class, $params[0]['before_widget']);
 
        return $params;
 
}
add_filter('dynamic_sidebar_params','widget_first_last_classes');
?>