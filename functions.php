<?php
add_action('after_setup_theme', 'motivo_setup');

function motivo_setup(){
  load_theme_textdomain('motivo', get_template_directory() . '/languages');
  add_theme_support('title-tag');
  add_theme_support('automatic-feed-links');
  add_theme_support('post-thumbnails');
  global $content_width;
  if(!isset($content_width))
    $content_width = 640;
  //register_nav_menus(array('main-menu' => __('Main Menu', 'motivo')));
}

add_action('wp_enqueue_scripts', 'motivo_load_scripts');

function motivo_load_scripts(){
  wp_enqueue_script('jquery');
  wp_register_script('motivo-js', get_template_directory_uri() . '/js/scripts.min.js', array('jquery'), true);
  
  //wp_register_style('bootstrap-css', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', array(), '3.0.1', 'all');
  wp_enqueue_script('motivo-js');
  wp_register_script('js-info-bubble', get_template_directory_uri() . '/js/infobubble.js', array('jquery'), true);
  wp_enqueue_script('js-info-bubble');
  
  wp_register_style('styles', get_template_directory_uri() . '/css/main.css', array(),  'all');
  
  wp_enqueue_style('styles');

  wp_register_script('bootstrap-js', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array('jquery'), true);
  wp_enqueue_script('bootstrap-js');
  // wp_register_style('bootstrap-styles', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', array(), '3.0.1', 'all');
  // wp_enqueue_style('bootstrap-styles');

  wp_register_style('motivo', get_stylesheet_uri());
  wp_enqueue_style('motivo');
}

add_action('comment_form_before', 'motivo_enqueue_comment_reply_script');

function motivo_enqueue_comment_reply_script(){
  if (get_option('thread_comments')) { 
    wp_enqueue_script('comment-reply'); 
  }
}

add_filter('the_title', 'motivo_title');

function motivo_title($title) {
  if ($title == '') {
    return '&rarr;';
  } else {
    return $title;
  }
}

add_filter('wp_title', 'motivo_filter_wp_title');

function motivo_filter_wp_title($title){
  return $title . esc_attr(get_bloginfo('name'));
}

add_action('widgets_init', 'motivo_widgets_init');

function motivo_widgets_init(){
  register_sidebar(
    array (
      'name' => __('Sidebar Widget Area', 'motivo'),
      'id' => 'primary-widget-area',
      'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
      'after_widget' => "</li>",
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
    )
  );
}

function motivo_custom_pings($comment){
  $GLOBALS['comment'] = $comment;
  ?>
  <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
  <?php 
}

add_filter('get_comments_number', 'motivo_comments_number');

function motivo_comments_number($count){
  if (!is_admin()) {
    global $id;
    $comments_by_type = &separate_comments(get_comments('status=approve&post_id=' . $id));
    return count($comments_by_type['comment']);
  } else {
    return $count;
  }
}

function acf_wysiwyg_remove_wpautop() {
    remove_filter('acf_the_content', 'wpautop' );
}
add_action('acf/init', 'acf_wysiwyg_remove_wpautop');

remove_filter('the_content', 'wpautop');

function custom_excerpt_length( $length ) {
   if (ICL_LANGUAGE_CODE=='ja'){
       return 150;
   }
   else
   {
       return $length;
   }
}
add_filter( 'excerpt_length', 'custom_excerpt_length');

//
// CATEGORIES AND TAXONOMIES WITH COLOR
//

function admin_add_color_picker( $hook ) {
    if( is_admin() ) { 
        // Add the color picker css file       
        wp_enqueue_style( 'wp-color-picker' ); 
        // Include our custom jQuery file with WordPress Color Picker dependency
        wp_enqueue_script( 'custom-script-handle', get_template_directory_uri() . '/js/custom.js', array( 'wp-color-picker' ), false, true ); 
    }
}
add_action( 'admin_enqueue_scripts', 'admin_add_color_picker' );

// Add extra fields to add category area
add_action( 'category_add_form_fields', 'pt_taxonomy_add_new_meta_field', 10, 2 );
add_action( 'add_tag_form_fields', 'pt_taxonomy_add_new_meta_field', 10, 2 );
 
add_action( 'job_skills_add_form_fields', 'pt_taxonomy_add_new_meta_field', 10, 2 );
add_action( 'job_categories_add_form_fields', 'pt_taxonomy_add_new_meta_field', 10, 2 );

function pt_taxonomy_add_new_meta_field() {
    // this will add the custom meta field to the add new term page
    ?>
    <div class="form-field">
        <label for="term_meta[cat_color]"><?php _e( 'Background Color', 'pt' ); ?></label>
        <input type="text" name="term_meta[cat_color]" id="term_meta[cat_color]" class="color-field" value="">
        <p class="description">Insert the color using the color picker or directly with hex code.</p>
    </div>
<?php
}

// Add extra fields to edit category area
add_action( 'category_edit_form_fields', 'pt_taxonomy_edit_meta_field', 10, 2 );
add_action( 'edit_tag_form_fields', 'pt_taxonomy_edit_meta_field', 10, 2 );

function pt_taxonomy_edit_meta_field($term) {
    // put the term ID into a variable
    $t_id = $term->term_id;
 
    // retrieve the existing value(s) for this meta field. This returns an array
    $term_meta = get_option( "taxonomy_$t_id" ); ?>
    <tr class="form-field">
    <th scope="row" valign="top"><label for="term_meta[cat_color]"><?php _e( 'Background Color', 'pt' ); ?></label></th>
        <td>
            <input type="text" name="term_meta[cat_color]" id="term_meta[cat_color]" class="color-field" value="<?php echo esc_attr( $term_meta['cat_color'] ) ? esc_attr( $term_meta['cat_color'] ) : ''; ?>">
            <p class="description">Insert the color using the color picker or directly with hex code.</p>
        </td>
    </tr>
<?php
}

// Save extra taxonomy fields callback function.
add_action( 'edited_category', 'pt_save_taxonomy_custom_meta', 10, 2 );
add_action( 'create_category', 'pt_save_taxonomy_custom_meta', 10, 2 );
 
add_action( 'edited_term', 'pt_save_taxonomy_custom_meta', 10, 2 );
add_action( 'create_term', 'pt_save_taxonomy_custom_meta', 10, 2 );

function pt_save_taxonomy_custom_meta( $term_id ) {
    if ( isset( $_POST['term_meta'] ) ) {
        $t_id = $term_id;
        $term_meta = get_option( "taxonomy_$t_id" );
        $cat_keys = array_keys( $_POST['term_meta'] );
        foreach ( $cat_keys as $key ) {
            if ( isset ( $_POST['term_meta'][$key] ) ) {
                $term_meta[$key] = $_POST['term_meta'][$key];
            }
        }
        // Save the option array.
        update_option( "taxonomy_$t_id", $term_meta );
    }
}

add_filter('next_post_link', 'post_link_next');
add_filter('previous_post_link', 'post_link_prev');

function post_link_next($output) {
    $injection = 'class="next-button-ar"';
    return str_replace('<a href=', '<a '.$injection.' href=', $output);
}

function post_link_prev($output) {
    $injection = 'class="prev-button-ar"';
    return str_replace('<a href=', '<a '.$injection.' href=', $output);
}


// POST VIEWS

/************************************CODE-1***************************************
* @Author: Boutros AbiChedid 
* @Date:   January 16, 2012
* @Websites: http://bacsoftwareconsulting.com/ ; http://blueoliveonline.com/
* @Description: Displays the Number of times Posts are Viewed on Your Blog.
* Function: Sets, Tracks and Displays the Count of Post Views (Post View Counter)
* Code is browser and JavaScript independent.
* @Tested on: WordPress version 3.2.1 
*********************************************************************************/
//Set the Post Custom Field in the WP dashboard as Name/Value pair 
function motivo_PostViews($post_ID) {
 
    //Set the name of the Posts Custom Field.
    $count_key = 'post_views_count'; 
     
    //Returns values of the custom field with the specified key from the specified post.
    $count = get_post_meta($post_ID, $count_key, true);
     
    //If the the Post Custom Field value is empty. 
    if($count == ''){
        $count = 0; // set the counter to zero.
         
        //Delete all custom fields with the specified key from the specified post. 
        delete_post_meta($post_ID, $count_key);
         
        //Add a custom (meta) field (Name/value)to the specified post.
        add_post_meta($post_ID, $count_key, '0');
        return $count . ' View';
     
    //If the the Post Custom Field value is NOT empty.
    }else{
        $count++; //increment the counter by 1.
        //Update the value of an existing meta key (custom field) for the specified post.
        update_post_meta($post_ID, $count_key, $count);
         
        //If statement, is just to have the singular form 'View' for the value '1'
        if($count == '1'){
        return $count . ' View';
        }
        //In all other cases return (count) Views
        else {
        return $count . ' Views';
        }
    }
}

/*********************************CODE-3********************************************
* @Author: Boutros AbiChedid 
* @Date:   January 16, 2012
* @Websites: http://bacsoftwareconsulting.com/ ; http://blueoliveonline.com/
* @Description: Adds a Non-Sortable 'Views' Columnn to the Post Tab in WP dashboard.
* This code requires CODE-1(and CODE-2) as a prerequesite.
* Code is browser and JavaScript independent.
* @Tested on: WordPress version 3.2.1
***********************************************************************************/
 
//Gets the  number of Post Views to be used later.
function get_PostViews($post_ID){
    $count_key = 'post_views_count';
    //Returns values of the custom field with the specified key from the specified post.
    $count = get_post_meta($post_ID, $count_key, true);
 
    return $count;
}
 
//Function that Adds a 'Views' Column to your Posts tab in WordPress Dashboard.
function post_column_views($newcolumn){
    //Retrieves the translated string, if translation exists, and assign it to the 'default' array.
    $newcolumn['post_views'] = __('Views');
    return $newcolumn;
}
 
//Function that Populates the 'Views' Column with the number of views count.
function post_custom_column_views($column_name, $id){
     
    if($column_name === 'post_views'){
        // Display the Post View Count of the current post.
        // get_the_ID() - Returns the numeric ID of the current post.
        echo get_PostViews(get_the_ID());
    }
}
//Hooks a function to a specific filter action.
//applied to the list of columns to print on the manage posts screen.
add_filter('manage_posts_columns', 'post_column_views');
 
//Hooks a function to a specific action. 
//allows you to add custom columns to the list post/custom post type pages.
//'10' default: specify the function's priority.
//and '2' is the number of the functions' arguments.
add_action('manage_posts_custom_column', 'post_custom_column_views',10,2);



/*
 * Search testing
 */


// function change_search_url_rewrite() {
//     if ( is_search() ) {
//       if(! empty( $_GET['s'] )){
//         wp_redirect( home_url( "/search/" ) . urlencode( get_query_var( 's' ) ) );
//         exit();
//       } 
//       /*else {
//         wp_redirect( home_url( "/".get_query_var( 'post_type' )."/" ) );
//         exit();
//       }*/
//     }
// }
// add_action( 'template_redirect', 'change_search_url_rewrite' );

function taxonomy_search_join( $join )
{
    global $wpdb;
    if( is_search() )
  {
      $join .= "
        INNER JOIN
              {$wpdb->term_relationships} ON {$wpdb->posts}.ID = {$wpdb->term_relationships}.object_id
          INNER JOIN
              {$wpdb->term_taxonomy} ON {$wpdb->term_taxonomy}.term_taxonomy_id = {$wpdb->term_relationships}.term_taxonomy_id
        INNER JOIN
            {$wpdb->terms} ON {$wpdb->terms}.term_id = {$wpdb->term_taxonomy}.term_id
        ";
  }
    return $join;
}
add_filter('posts_join', 'taxonomy_search_join');

function taxonomy_search_where( $where )
{
  global $wpdb;
  //echo '<scripts type="text/javascript">console.log('.$where.');</scripts>';
  if( is_search() )
  {
      $post_type = '';
      // add the search term to the query
      if(get_query_var('post_type') != 'any' && get_query_var('post_type') != 'page')
        $post_type = "AND {$wpdb->posts}.post_type LIKE '".$wpdb->escape( get_query_var('post_type') )."'";

      $words = explode(" ", $wpdb->escape(get_query_var('s')));
      
      $query_string = "REGEXP '";
      for($i=0;$i<count($words);$i++){
        if($i == 0)  $query_string .= $words[$i];
        else $query_string .= "|".$words[$i];
        // $query_string .= "LIKE '%".$words[$i]."%' OR ";
      }
      $query_string .= "'";
       
      if($query_string == "REGEXP ''")
        $query_string = "LIKE 'any'";
      // $query_string = SUBSTR($query_string,0,STRLEN($query_string)-4);
    //{$wpdb->terms}.name LIKE ('%".$wpdb->escape( get_query_var('s') )."%') 
    //{$wpdb->posts}.post_type LIKE ('%".$wpdb->escape( get_query_var('s') )."%') 

      $where .= " OR
      (
        (
          {$wpdb->term_taxonomy}.taxonomy LIKE 'category' OR 
          {$wpdb->term_taxonomy}.taxonomy LIKE 'post_tag' OR 
          {$wpdb->term_taxonomy}.taxonomy LIKE 'job_categories' OR 
          {$wpdb->term_taxonomy}.taxonomy LIKE 'job_skills' 
        )
        AND
        (
          (
            {$wpdb->terms}.name ".$query_string."
          )
          ".$post_type."
        )
        OR 
        (
          {$wpdb->posts}.post_type ".$query_string."
        )
      ) ";
  }
  // echo '<scripts type="text/javascript">console.log('.$where.');</scripts>';
  return $where;
}
add_filter('posts_where', 'taxonomy_search_where');

function taxonomy_search_groupby( $groupby )
{
    global $wpdb;
    if( is_search() )
    {
      $groupby = "{$wpdb->posts}.ID";
    }
    return $groupby;
}
add_filter('posts_groupby', 'taxonomy_search_groupby');



// Creates Jobs Custom Post Type
add_action( 'init', 'jobs_init' );
add_filter( 'post_updated_messages', 'jobs_messages' );

function jobs_init() {
    $labels = array(
      'name' => _x('Jobs', 'post type general name'),
      'singular_name' => _x('Job', 'post type singular name'),
      'add_new' => _x('Add New', 'portfolio item'),
      'add_new_item' => __('Add New Job'),
      'edit_item' => __('Edit Job'),
      'new_item' => __('New Job'),
      'view_item' => __('View Job'),
      'search_items' => __('Search Jobs'),
      'not_found' =>  __('Nothing found'),
      'not_found_in_trash' => __('Nothing found in Trash'),
      'parent_item_colon' => ''
    );

    $args = array(
      'labels' => $labels,
      'public' => true,
      'show_ui' => true,
      // 'taxonomies' => array( 'job_skills','job_categories'),
      'capability_type' => 'post',
      'hierarchical' => false,
      'query_var' => true,
      'rewrite' => array('slug' => 'jobs'),
      'menu_icon' => 'dashicons-format-aside',
      'supports' => array(
        'title',
        'taxonomy',
        'editor',
        'excerpt',
        // 'trackbacks',
        // 'custom-fields',
        // 'comments',
        'revisions',
        'thumbnail',
        'author',
        // 'post-formats',
        // 'page-attributes',
        ),
      'has_archive' => true,
    );
    register_taxonomy("job_skills", array("jobs"), 
      array("hierarchical" => true, "label" => "Skills", "singular_label" => "Skill", 'query_var' => true, "rewrite" => array('slug' => 'jobs/skills', 'with_front' => false)));
    register_taxonomy("job_categories", array("jobs"), 
      array("hierarchical" => true, "label" => "Categories", "singular_label" => "Category", 'query_var' => true, "rewrite" => array('slug' => 'jobs/categories', 'with_front' => false)));     
    register_post_type( 'jobs', $args );
    // register_taxonomy("job_skills", array("jobs"), array("hierarchical" => true, "label" => "Skills", "singular_label" => "Skill", "rewrite" => true));
}

function jobs_messages( $messages ) {
  $post = get_post();

  $messages['jobs'] = array(
    0  => '',
    1  => 'Jobs updated.',
    2  => 'Custom field updated.',
    3  => 'Custom field deleted.',
    4  => 'Jobs updated.',
    5  => isset( $_GET['revision'] ) ? sprintf( 'Jobs restored to revision from %s',wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
    6  => 'Jobs published.',
    7  => 'Jobs saved.',
    8  => 'Jobs submitted.',
    9  => sprintf(
      'Jobs scheduled for: <strong>%1$s</strong>.',
      date_i18n( 'M j, Y @ G:i', strtotime( $post->post_date ) )
    ),
    10 => 'Jobs draft updated.'
  );

  return $messages;
}