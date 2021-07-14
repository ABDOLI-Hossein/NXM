<?php
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', "//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js", false, null);
    wp_enqueue_script('jquery');
}



function load_stylesheets(){

    wp_register_style('fontawesome','https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');
    wp_enqueue_style('fontawesome');








    wp_register_style('OwlCarousel',get_template_directory_uri() . '/css/owl.carousel.min.css',array(),1,'all');
    wp_enqueue_style('OwlCarousel');

    wp_register_style('OwlCarousel-theme',get_template_directory_uri() . '/css/owl.theme.default.min.css',array(),1,'all');
    wp_enqueue_style('OwlCarousel-theme');


    wp_register_style('styles',get_template_directory_uri() . '/css/styles.css',array(),2,'all');
    wp_enqueue_style('styles');

}
add_action('wp_enqueue_scripts','load_stylesheets');







//load scripts
function addjs()
{



    wp_register_script('jquery',get_template_directory_uri() . '/js/jQuery.js',array(),1,1,1);
    wp_enqueue_script('jquery');

    wp_register_script('OwlCarousel',get_template_directory_uri() . '/js/owl.carousel.min.js',array(),1,1,1);
    wp_enqueue_script('OwlCarousel');

    wp_register_script('custom',get_template_directory_uri() . '/js/custom.js',array(),1,1,1);
    wp_enqueue_script('custom');



}
add_action('wp_enqueue_scripts','addjs');

add_theme_support('menus');

//Register menus
register_nav_menus(
    array(
        'top-menu' => __( 'Top Menu', 'GDC' ),
        'footer-menu' => __('Footer Menu')
    )
);

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active';
    }
    return $classes;
}





function soroush() {


    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'sorushabdoli@gmail.com';
    $subject = "Report";
    $message = "salam";
    $headers = array('Content-Type: text/html; charset=UTF-8','From:'.$email,'Cc:  rajabitr@gmail.com');
    $m = wp_mail($to, $subject, $message,$headers);
    wp_send_json($m);

    return 'salam';

}
add_action('wp_ajax_soroush', 'soroush');
add_action("wp_ajax_nopriv_soroush", 'soroush');





/* Custom Post Type Start */
function create_posttype() {
    register_post_type( 'portfolio',
// CPT Options
        array(
            'labels' => array(
                'name' => __( 'portfolio' ),
                'singular_name' => __( 'portfolio' )
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'portfolio'),
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

function add_portfolio_post() {
    $supports = array(
        'title', // post title
        'editor', // post content
        'thumbnail', // featured images
        'custom-fields', // custom fields
    );
    $labels = array(
        'name' => __('All Portfolios'),
        'singular_name' => __('Portfolio'),
        'menu_name' => __('Portfolios'),
        'name_admin_bar' => __('Portfolios'),
        'add_new' => __('Add New'),
        'add_new_item' => __('Add New Portfolio'),
        'new_item' => __('New Portfolio'),
        'edit_item' => __('Edit Portfolio'),
        'view_item' => __('View Portfolio'),
        'all_items' => __('All Portfolios'),
        'search_items' => __('Search Portfolio'),
        'not_found' => __('No Portfolios found.'),
    );
    $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'public' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'portfolios'),
        'has_archive' => true,
        'hierarchical' => true,
        'menu_icon' => 'http://localhost/wordpress/wp-content/themes/NXM/images/portfolio2.png',
    );
    register_post_type('portfolio', $args);
}
add_action('init', 'add_portfolio_post');




























function wdm_add_meta_box() {

    add_meta_box(
        'wdm_sectionid',
        'Other pages?',
        'wdm_meta_box_callback',
        'portfolio'
    );
    add_meta_box(
        'wdm_sectionid2',
        'homepage mobile?',
        'wdm_meta_box_callback2',
        'portfolio'
    );
    add_meta_box(
        'wdm_sectionid3',
        'Date Of Project',
        'wdm_meta_box_callback3',
        'portfolio'
    );
    add_meta_box(
        'wdm_sectionid4',
        'Category Of Project',
        'wdm_meta_box_callback4',
        'portfolio'
    );

}

add_action( 'add_meta_boxes', 'wdm_add_meta_box' );

/**
 * Prints the box content.
 *
 * @param WP_Post $post The object for the current post/page.
 */
function wdm_meta_box_callback( $post ) {

    // Add an nonce field so we can check for it later.
    wp_nonce_field( 'wdm_meta_box', 'wdm_meta_box_nonce' );

    /*
     * Use get_post_meta() to retrieve an existing value
     * from the database and use the value for the form.
     */
    $value = get_post_meta( $post->ID, 'otherpages', true ); //my_key is a meta_key. Change it to whatever you want

    ?>
    <input type="radio" name="the_name_of_the_radio_buttons" value="true" <?php checked( $value, 'true' ); ?> >Yes<br>
    <input type="radio" name="the_name_of_the_radio_buttons" value="false" <?php checked( $value, 'false' ); ?> >No<br>


    <?php

}

function wdm_meta_box_callback2( $post ) {

    // Add an nonce field so we can check for it later.
    wp_nonce_field( 'wdm_meta_box', 'wdm_meta_box_nonce' );

    /*
     * Use get_post_meta() to retrieve an existing value
     * from the database and use the value for the form.
     */
    $value = get_post_meta( $post->ID, 'homepagesmobile', true ); //my_key is a meta_key. Change it to whatever you want

    ?>
    <input type="radio" name="the_name_of_the_radio_buttons2" value="true" <?php checked( $value, 'true' ); ?> >Yes<br>
    <input type="radio" name="the_name_of_the_radio_buttons2" value="false" <?php checked( $value, 'false' ); ?> >No<br>


    <?php

}
function wdm_meta_box_callback3( $post ) {

    // Add an nonce field so we can check for it later.
    wp_nonce_field( 'wdm_meta_box', 'wdm_meta_box_nonce' );

    /*
     * Use get_post_meta() to retrieve an existing value
     * from the database and use the value for the form.
     */
    $value = get_post_meta( $post->ID, 'dateOfProject', true ); //my_key is a meta_key. Change it to whatever you want

    ?>
    <input type="date" name="date" value="true" <?php checked( $value, 'true' ); ?> >



    <?php

}

function wdm_meta_box_callback4( $post ) {

    // Add an nonce field so we can check for it later.
    wp_nonce_field( 'wdm_meta_box', 'wdm_meta_box_nonce' );

    /*
     * Use get_post_meta() to retrieve an existing value
     * from the database and use the value for the form.
     */
    $value = get_post_meta( $post->ID, 'categoryOfProject', true ); //my_key is a meta_key. Change it to whatever you want
    $pieces = explode(",", $value);




    ?>

        <input type="checkbox" id="BusinessConsulting" name="BusinessConsulting" value="Business Consulting" <?php if (in_array('Business Consulting',$pieces)) { ?> checked="checked" <?php } ?> >
        <label for="BusinessConsulting"> Business Consulting</label><br>

        <input type="checkbox" id="RetailStores" name="RetailStores" value="Retail Stores" <?php if (in_array('Retail Stores',$pieces)) { ?> checked="checked" <?php } ?>>
        <label for="RetailStores"> Retail Stores</label><br>

        <input type="checkbox" id="Educational" name="Educational" value="Educational" <?php if (in_array('Educational',$pieces)) { ?> checked="checked" <?php } ?>>
        <label for="Educational"> Educational</label><br>

        <input type="checkbox" id="Sports" name="Sports" value="Sports"  <?php if (in_array('Sports',$pieces)) { ?> checked="checked" <?php } ?>>
        <label for="Sports"> Sports</label><br>

        <input type="checkbox" id="MedicalDevices" name="MedicalDevices" value="Medical Devices" <?php if (in_array('Medical Devices',$pieces)) { ?> checked="checked" <?php } ?>>
        <label for="MedicalDevices"> Medical Devices</label><br>

        <input type="checkbox" id="Restaurants" name="Restaurants" value="Restaurants"  <?php if (in_array('Restaurants',$pieces)) { ?> checked="checked" <?php } ?>>
        <label for="Restaurants"> Restaurants </label><br>

        <input type="checkbox" id="LegalServices" name="LegalServices" value="Legal Services" <?php if (in_array('Legal Services',$pieces)) { ?> checked="checked" <?php } ?>>
        <label for="LegalServices"> Legal Services</label><br>

        <input type="checkbox" id="GroceryStores" name="GroceryStores" value="Grocery Stores" <?php if (in_array('Grocery Stores',$pieces)) { ?> checked="checked" <?php } ?>>
        <label for="GroceryStores"> Grocery Stores</label><br>

        <input type="checkbox" id="VideoEditing" name="VideoEditing" value="Video Editing" <?php if (in_array('Video Editing',$pieces)) { ?> checked="checked" <?php } ?>>
        <label for="VideoEditing"> Video Editing</label><br>

        <input type="checkbox" id="Dental&Medical" name="Dental&Medical" value="Dental & Medical" <?php if (in_array('Dental & Medical',$pieces)) { ?> checked="checked" <?php } ?>>
        <label for="Dental&Medical"> Dental& Medical</label><br>

        <input type="checkbox" id="MedicalFinancing" name="MedicalFinancing" value="Medical Financing" <?php if (in_array('Medical Financing',$pieces)) { ?> checked="checked" <?php } ?>>
        <label for="MedicalFinancing"> Medical Financing</label><br>

        <input type="checkbox" id="Career&Recruiting" name="Career&Recruiting" value="Career & Recruiting" <?php if (in_array('Career & Recruiting',$pieces)) { ?> checked="checked" <?php } ?>>
        <label for="Career&Recruiting"> Career & Recruiting</label><br>




    <?php

}

/**
 * When the post is saved, saves our custom data.
 *
 * @param int $post_id The ID of the post being saved.
 */
function wdm_save_meta_box_data( $post_id ) {

    /*
     * We need to verify this came from our screen and with proper authorization,
     * because the save_post action can be triggered at other times.
     */

    // Check if our nonce is set.
    if ( !isset( $_POST['wdm_meta_box_nonce'] ) ) {
        return;
    }

    // Verify that the nonce is valid.
    if ( !wp_verify_nonce( $_POST['wdm_meta_box_nonce'], 'wdm_meta_box' ) ) {
        return;
    }

    // If this is an autosave, our form has not been submitted, so we don't want to do anything.
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    // Check the user's permissions.
    if ( !current_user_can( 'edit_post', $post_id ) ) {
        return;
    }


    // Sanitize user input.
    $new_meta_value = ( isset( $_POST['the_name_of_the_radio_buttons'] ) ? sanitize_html_class( $_POST['the_name_of_the_radio_buttons'] ) : '' );

    // Update the meta field in the database.
    update_post_meta( $post_id, 'otherpages', $new_meta_value );

}

add_action( 'save_post', 'wdm_save_meta_box_data' );


function wdm_save_meta_box_data2( $post_id ) {

    /*
     * We need to verify this came from our screen and with proper authorization,
     * because the save_post action can be triggered at other times.
     */

    // Check if our nonce is set.
    if ( !isset( $_POST['wdm_meta_box_nonce'] ) ) {
        return;
    }

    // Verify that the nonce is valid.
    if ( !wp_verify_nonce( $_POST['wdm_meta_box_nonce'], 'wdm_meta_box' ) ) {
        return;
    }

    // If this is an autosave, our form has not been submitted, so we don't want to do anything.
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    // Check the user's permissions.
    if ( !current_user_can( 'edit_post', $post_id ) ) {
        return;
    }


    // Sanitize user input.
    $new_meta_value = ( isset( $_POST['the_name_of_the_radio_buttons2'] ) ? sanitize_html_class( $_POST['the_name_of_the_radio_buttons2'] ) : '' );

    // Update the meta field in the database.
    update_post_meta( $post_id, 'homepagesmobile', $new_meta_value );

}

add_action( 'save_post', 'wdm_save_meta_box_data2' );




function wdm_save_meta_box_data3( $post_id ) {

    /*
     * We need to verify this came from our screen and with proper authorization,
     * because the save_post action can be triggered at other times.
     */

    // Check if our nonce is set.
    if ( !isset( $_POST['wdm_meta_box_nonce'] ) ) {
        return;
    }

    // Verify that the nonce is valid.
    if ( !wp_verify_nonce( $_POST['wdm_meta_box_nonce'], 'wdm_meta_box' ) ) {
        return;
    }

    // If this is an autosave, our form has not been submitted, so we don't want to do anything.
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    // Check the user's permissions.
    if ( !current_user_can( 'edit_post', $post_id ) ) {
        return;
    }


    // Sanitize user input.
    $new_meta_value = ( isset( $_POST['date'] ) ? sanitize_html_class( $_POST['date'] ) : '' );

    // Update the meta field in the database.
    update_post_meta( $post_id, 'dateOfProject', $new_meta_value );

}

add_action( 'save_post', 'wdm_save_meta_box_data3' );


function wdm_save_meta_box_data4( $post_id ) {

    /*
     * We need to verify this came from our screen and with proper authorization,
     * because the save_post action can be triggered at other times.
     */

    // Check if our nonce is set.
    if ( !isset( $_POST['wdm_meta_box_nonce'] ) ) {
        return;
    }

    // Verify that the nonce is valid.
    if ( !wp_verify_nonce( $_POST['wdm_meta_box_nonce'], 'wdm_meta_box' ) ) {
        return;
    }

    // If this is an autosave, our form has not been submitted, so we don't want to do anything.
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    // Check the user's permissions.
    if ( !current_user_can( 'edit_post', $post_id ) ) {
        return;
    }


    // Sanitize user input.

    $output = '';
    if (isset($_POST['BusinessConsulting'])){
        $output.= $_POST['BusinessConsulting'].',';
    }
    if (isset($_POST['RetailStores'])){
        $output.= $_POST['RetailStores'].',';
    }
    if (isset($_POST['Educational'])){
        $output.= $_POST['Educational'].',';
    }
    if (isset($_POST['Sports'])){
        $output.= $_POST['Sports'].',';
    }
    if (isset($_POST['MedicalDevices'])){
        $output.= $_POST['MedicalDevices'].',';
    }
    if (isset($_POST['Restaurants'])){
        $output.= $_POST['Restaurants'].',';
    }
    if (isset($_POST['LegalServices'])){
        $output.= $_POST['LegalServices'].',';
    }
    if (isset($_POST['GroceryStores'])){
        $output.= $_POST['GroceryStores'].',';
    }
    if (isset($_POST['VideoEditing'])){
        $output.= $_POST['VideoEditing'].',';
    }
    if (isset($_POST['Dental&Medical'])){
        $output.= $_POST['Dental&Medical'].',';
    }
    if (isset($_POST['MedicalFinancing'])){
        $output.= $_POST['MedicalFinancing'].',';
    }
    if (isset($_POST['Career&Recruiting'])){
        $output.= $_POST['Career&Recruiting'].',';
    }


//    $new_meta_value =  isset( $_POST['BusinessConsulting'] ) ? sanitize_html_class( $_POST['BusinessConsulting'] ) : '' ;



    // Update the meta field in the database.
    update_post_meta( $post_id, 'categoryOfProject', $output );

}

add_action( 'save_post', 'wdm_save_meta_box_data4' );




//  Custom post type pagination function

function cpt_pagination($pages = '', $range = 4)
{
    $showitems = ($range * 2)+1;
    global $paged;
    if(empty($paged)) $paged = 1;
    if($pages == '')
    {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if(!$pages)
        {
            $pages = 1;
        }
    }
    if(1 != $pages)
    {
        echo "<nav aria-label='Page navigation example'>  <ul class='pagination'>";
        if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
        if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
        for ($i=1; $i <= $pages; $i++)
        {
            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
            {
                echo ($paged == $i)? "<li class=\"page-item active\"><a class='page-link'>".$i."</a></li>":"<li class='page-item'> <a href='".get_pagenum_link($i)."' class=\"page-link\">".$i."</a></li>";
            }
        }
        if ($paged < $pages && $showitems < $pages) echo " <li class='page-item'><a class='page-link' href=\"".get_pagenum_link($paged + 1)."\">i class='flaticon flaticon-back'></i></a></li>";
        if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo " <li class='page-item'><a class='page-link' href='".get_pagenum_link($pages)."'><i class='flaticon flaticon-arrow'></i></a></li>";
        echo "</ul></nav>\n";
    }
}




function yourNewProjectForm(){
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $companyName = $_POST['companyName'];
    $otherInfo = $_POST['otherInfo'];
    $currentWebsiteAddress = $_POST['currentWebsiteAddress'];
    $Budget = $_POST['Budget'];
    $serviceArr = $_POST['service'];
    $service = implode(" | ",$serviceArr);

    //email send
    $to = 'sorushabodli@gmail.com';
    $subject = "Your New Project";
    $headers = array('Content-Type: text/html; charset=UTF-8','From:'.$email,'Cc:  rajabitr@gmail.com');
    $m = wp_mail($to, $subject, $otherInfo,$headers);

    wp_send_json($service);
    exit();
}
add_action('wp_ajax_yourNewProjectForm', 'yourNewProjectForm');
add_action("wp_ajax_nopriv_yourNewProjectForm", 'yourNewProjectForm');


function contactUsForm() {

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    wp_send_json($phone);
    exit();

}
add_action('wp_ajax_contactUsForm', 'contactUsForm');
add_action("wp_ajax_nopriv_contactUsForm", 'contactUsForm');
















