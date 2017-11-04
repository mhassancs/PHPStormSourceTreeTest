<?php

add_action('init','add_homepage_slider_taxonomy');
function add_homepage_slider_taxonomy(){
    
    $taxonomy    = 'homepage_slider_taxonomy';
    $object_type = array('homepage_slider');
    $taxonomy_slug = 'homepage_slider_taxonomy';
    
    $labels = array(
        'name'               => 'Slider Categories',
        'singular_name'      => 'Slider Categories',
        'search_items'       => 'Search Slider Categories',
        'all_items'          => 'Slider Categories',
        'parent_item'        => 'Parent Slider Categories',
        'parent_item_colon'  => 'Parent Slider Categories:',
        'update_item'        => 'Update Slider Categories',
        'edit_item'          => 'Edit Slider Categories',
        'add_new_item'       => 'Add New Slider Categories', 
        'new_item_name'      => 'New Slider Categories',
        'menu_name'          => 'Slider Categories'
    );
     
    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true,
        'show_ui'           => true,
        'how_in_nav_menus'  => true,
        'public'            => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => $taxonomy_slug)
    );

    register_taxonomy($taxonomy, $object_type, $args); 
}
// end of add_homepage_slider_taxonomy

add_action('init','add_research_article_taxonomy');
function add_research_article_taxonomy(){
    
    $taxonomy    = 'research_article_taxonomy';
    $object_type = array('research_articles', 'news', 'video', 'applications', 'lenord_bauer', 'services_post', 'selling_tools', 'homepage_slider');
    $taxonomy_slug = 'research_article_taxonomy';
    
    $labels = array(
        'name'               => 'Article Categories',
        'singular_name'      => 'Article Categories',
        'search_items'       => 'Search Article Categories',
        'all_items'          => 'Article Categories',
        'parent_item'        => 'Parent Article Categories',
        'parent_item_colon'  => 'Parent Article Categories:',
        'update_item'        => 'Update Article Categories',
        'edit_item'          => 'Edit Article Categories',
        'add_new_item'       => 'Add New Article Categories', 
        'new_item_name'      => 'New Article Categories',
        'menu_name'          => 'Article Categories'
    );
     
    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true,
        'show_ui'           => true,
        'how_in_nav_menus'  => true,
        'public'            => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => $taxonomy_slug)
    );

    register_taxonomy($taxonomy, $object_type, $args); 
}
// end of add_research_article_taxonomy


add_action('init','add_application_taxonomy');
function add_application_taxonomy(){
    
    $taxonomy    = 'application_taxonomy';
    $object_type = array('research_articles', 'news', 'products', 'video', 'applications', 'lenord_bauer', 'services_post', 'testimonials', 'selling_tools', 'homepage_slider');
    $taxonomy_slug = 'applications_taxonomy';
    
    $labels = array(
        'name'               => 'Application Categories',
        'singular_name'      => 'Application Categories',
        'search_items'       => 'Search Application Categories',
        'all_items'          => 'Application Categories',
        'parent_item'        => 'Parent Application Categories',
        'parent_item_colon'  => 'Parent Application Categories:',
        'update_item'        => 'Update Application Categories',
        'edit_item'          => 'Edit Application Categories',
        'add_new_item'       => 'Add New Application Categories', 
        'new_item_name'      => 'New Application Categories',
        'menu_name'          => 'Application Categories'
    );
     
    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true,
        'show_ui'           => true,
        'how_in_nav_menus'  => true,
        'public'            => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => $taxonomy_slug)
    );

    register_taxonomy($taxonomy, $object_type, $args); 
}
// end of add_application_taxonomy

add_action('init','add_lenord_bauer_taxonomy');
function add_lenord_bauer_taxonomy(){
    
    $taxonomy    = 'lenord_bauer_taxonomy';
    $object_type = array('research_articles', 'news', 'products', 'video', 'applications', 'lenord_bauer', 'services_post', 'testimonials', 'selling_tools', 'homepage_slider');
    $taxonomy_slug = 'lenord_bauer_taxonomy';
    
    $labels = array(
        'name'               => 'Lenord + Bauer Categories',
        'singular_name'      => 'Lenord + Bauer Categories',
        'search_items'       => 'Search Lenord + Bauer Categories',
        'all_items'          => 'Lenord + Bauer Categories',
        'parent_item'        => 'Parent Lenord + Bauer Categories',
        'parent_item_colon'  => 'Parent Lenord + Bauer Categories:',
        'update_item'        => 'Update Lenord + Bauer Categories',
        'edit_item'          => 'Edit Lenord + Bauer Categories',
        'add_new_item'       => 'Add New Lenord + Bauer Categories', 
        'new_item_name'      => 'New Lenord + Bauer Categories',
        'menu_name'          => 'Lenord + Bauer Categories'
    );
     
    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true,
        'show_ui'           => true,
        'how_in_nav_menus'  => true,
        'public'            => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => $taxonomy_slug)
    );

    register_taxonomy($taxonomy, $object_type, $args); 
}
// end of add_lenord_bauer_taxonomy

add_action('init','add_products_taxonomy');
function add_products_taxonomy(){
    
    $taxonomy    = 'products_taxonomy';
    $object_type = array('research_articles', 'news', 'products', 'video', 'applications', 'lenord_bauer', 'services_post', 'testimonials', 'selling_tools', 'homepage_slider');
    $taxonomy_slug = 'product_taxonomy';
    
    $labels = array(
        'name'               => 'Product Categories',
        'singular_name'      => 'Product Categories',
        'search_items'       => 'Search Product Categories',
        'all_items'          => 'Product Categories',
        'parent_item'        => 'Parent Product Categories',
        'parent_item_colon'  => 'Parent Product Categories:',
        'update_item'        => 'Update Product Categories',
        'edit_item'          => 'Edit Product Categories',
        'add_new_item'       => 'Add New Product Categories', 
        'new_item_name'      => 'New Product Categories',
        'menu_name'          => 'Product Categories'
    );
     
    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true,
        'show_ui'           => true,
        'how_in_nav_menus'  => true,
        'public'            => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => $taxonomy_slug)
    );

    register_taxonomy($taxonomy, $object_type, $args); 
}
// end of add_products_taxonomy

add_action('init','add_testimonials_taxonomy');
function add_testimonials_taxonomy(){
    
    $taxonomy    = 'testimonials_taxonomy';
    $object_type = array('news', 'video', 'testimonials');
    $taxonomy_slug = 'testimonials_taxonomy';
    
    $labels = array(
        'name'               => 'Testimonial Categories',
        'singular_name'      => 'Testimonial Categories',
        'search_items'       => 'Search Testimonial Categories',
        'all_items'          => 'Testimonial Categories',
        'parent_item'        => 'Parent Testimonial Categories',
        'parent_item_colon'  => 'Parent Testimonial Categories:',
        'update_item'        => 'Update Testimonial Categories',
        'edit_item'          => 'Edit Testimonial Categories',
        'add_new_item'       => 'Add New Testimonial Categories', 
        'new_item_name'      => 'New Testimonial Categories',
        'menu_name'          => 'Testimonial Categories'
    );
     
    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true,
        'show_ui'           => true,
        'how_in_nav_menus'  => true,
        'public'            => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => $taxonomy_slug)
    );

    register_taxonomy($taxonomy, $object_type, $args); 
}
// end of add_testimonials_taxonomy


add_action('init','add_news_taxonomy');
function add_news_taxonomy(){
    
    $taxonomy    = 'news_taxonomy';
    $object_type = array('research_articles', 'news', 'video');
    $taxonomy_slug = 'news_taxonomy';
    
    $labels = array(
        'name'               => 'News Categories',
        'singular_name'      => 'News Categories',
        'search_items'       => 'Search News Categories',
        'all_items'          => 'News Categories',
        'parent_item'        => 'Parent News Categories',
        'parent_item_colon'  => 'Parent News Categories:',
        'update_item'        => 'Update News Categories',
        'edit_item'          => 'Edit News Categories',
        'add_new_item'       => 'Add New News Categories', 
        'new_item_name'      => 'New News Categories',
        'menu_name'          => 'News Categories'
    );
     
    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true,
        'show_ui'           => true,
        'how_in_nav_menus'  => true,
        'public'            => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => $taxonomy_slug)
    );

    register_taxonomy($taxonomy, $object_type, $args); 
}
// end of add_news_taxonomy


add_action('init','add_selling_tools_taxonomy');
function add_selling_tools_taxonomy(){
    
    $taxonomy    = 'selling_tools_taxonomy';
    $object_type = array('selling_tools');
    $taxonomy_slug = 'selling_tools_taxonomy';
    
    $labels = array(
        'name'               => 'Selling Tool Categories',
        'singular_name'      => 'Selling Tool Categories',
        'search_items'       => 'Search Selling Tool Categories',
        'all_items'          => 'Selling Tool Categories',
        'parent_item'        => 'Parent Selling Tool Categories',
        'parent_item_colon'  => 'Parent Selling Tool Categories:',
        'update_item'        => 'Update Selling Tool Categories',
        'edit_item'          => 'Edit Selling Tool Categories',
        'add_new_item'       => 'Add New Selling Tool Categories', 
        'new_item_name'      => 'New Selling Tool Categories',
        'menu_name'          => 'Selling Tool Categories'
    );
     
    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true,
        'show_ui'           => true,
        'how_in_nav_menus'  => true,
        'public'            => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => $taxonomy_slug)
    );

    register_taxonomy($taxonomy, $object_type, $args); 
}
// end of add_selling_tools_taxonomy

add_action('init','add_services_post_taxonomy');
function add_services_post_taxonomy(){
    
    $taxonomy    = 'services_post_taxonomy';
    $object_type = array('research_articles', 'news', 'products', 'video', 'applications', 'lenord_bauer', 'services_post', 'testimonials', 'selling_tools', 'homepage_slider');
    $taxonomy_slug = 'services_post_taxonomy';
    
    $labels = array(
        'name'               => 'Service Categories',
        'singular_name'      => 'Service Categories',
        'search_items'       => 'Search Service Categories',
        'all_items'          => 'Service Categories',
        'parent_item'        => 'Parent Service Categories',
        'parent_item_colon'  => 'Parent Service Categories:',
        'update_item'        => 'Update Service Categories',
        'edit_item'          => 'Edit Service Categories',
        'add_new_item'       => 'Add New Service Categories', 
        'new_item_name'      => 'New Service Categories',
        'menu_name'          => 'Service Categories'
    );
     
    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true,
        'show_ui'           => true,
        'how_in_nav_menus'  => true,
        'public'            => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => $taxonomy_slug)
    );

    register_taxonomy($taxonomy, $object_type, $args); 
}
// end of add_services_post_taxonomy

add_action('init','add_Key_Benefits_taxonomy');
function add_Key_Benefits_taxonomy(){
    
    $taxonomy    = 'Key_Benefits_taxonomy';
    $object_type = array('applications', 'lenord_bauer', 'services_post', 'products');
    $taxonomy_slug = 'Key_Benefits_taxonomy';
    
    $labels = array(
        'name'               => 'Benefits',
        'singular_name'      => 'Benefit',
        'search_items'       => 'Search Benefits',
        'all_items'          => 'Benefits',
        'parent_item'        => 'Parent Benefits',
        'parent_item_colon'  => 'Parent Benefit:',
        'update_item'        => 'Update Benefit',
        'edit_item'          => 'Edit Benefit',
        'add_new_item'       => 'Add New Benefit', 
        'new_item_name'      => 'New Benefit',
        'menu_name'          => 'Benefits'
    );
     
    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true,
        'show_ui'           => true,
        'how_in_nav_menus'  => true,
        'public'            => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => $taxonomy_slug)
    );

    register_taxonomy($taxonomy, $object_type, $args); 
}
// end of add_Key_Benefits_taxonomy






