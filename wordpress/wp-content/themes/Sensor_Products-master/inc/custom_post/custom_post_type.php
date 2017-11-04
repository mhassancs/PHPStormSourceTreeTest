<?php

add_action('init', 'homepage_slider_post_type');
function homepage_slider_post_type(){

	register_post_type( 'homepage_slider',
            array(
                'labels' => array(
                    'name' => 'Homepage Slider',
                    'singular_name' => 'Homepage Slider',
                    'add_new' => 'Add Image Slide',
                    'add_new_item' => 'Add New Image Slide',
                    'edit' => 'Edit',
                    'edit_item' => 'Edit Image Slide',
                    'new_item' => 'New Image Slide',
                    'view' => 'View Homepage Slider',
                    'view_item' => 'View Image Slide',
                    'search_items' => 'Search Image Slider',
                    'not_found' => 'No Images  found',
                    'not_found_in_trash' => 'No Image Slides found in Trash',    
                ),
                'public' => true,
                'menu_position' => 20,
                'supports' => array('title', 'editor', 'thumbnail'),
                'taxonomies' => array( '' ),
                'menu_icon' => 'dashicons-images-alt2',
                'has_archive' => true
            )
        );

}
// end of homepage_slider_post_type

add_action('init', 'products_post_type');
function products_post_type(){

    register_post_type( 'products',
            array(
                'labels' => array(
                    'name' => 'Products',
                    'singular_name' => 'Product',
                    'add_new' => 'Add Product',
                    'add_new_item' => 'Add Product',
                    'edit' => 'Edit',
                    'edit_item' => 'Edit Products',
                    'new_item' => 'New Product',
                    'view' => 'View Products',
                    'view_item' => 'View Products',
                    'search_items' => 'Search Products',
                    'not_found' => 'No Products found',
                    'not_found_in_trash' => 'No Products found in Trash',    
                ),
                'public' => true,
                'menu_position' => 20,
                'supports' => array('title', 'editor', 'thumbnail'),
                'taxonomies' => array( '' ),
                'menu_icon' => 'dashicons-cart',
                'has_archive' => true,
                'rewrite' => array('slug' => '/products')
            )
        );

}
// end of products_post_type

add_action('init', 'research_articles_post_type');
function research_articles_post_type(){

    register_post_type( 'research_articles',
            array(
                'labels' => array(
                    'name' => 'Research Articles',
                    'singular_name' => 'Research Article',
                    'add_new' => 'Add New Article',
                    'add_new_item' => 'Add New Article',
                    'edit' => 'Edit',
                    'edit_item' => 'Edit Research Article',
                    'new_item' => 'New Research Article',
                    'view' => 'View Research Articles',
                    'view_item' => 'View Research Articles',
                    'search_items' => 'Search Research Articles',
                    'not_found' => 'No Research Articles found',
                    'not_found_in_trash' => 'No Research Articles found in Trash',    
                ),
                'public' => true,
                'menu_position' => 20,
                'supports' => array('title', 'editor', 'thumbnail'),
                'taxonomies' => array( '' ),
                'menu_icon' => 'dashicons-media-document',
                'has_archive' => true,
                'rewrite' => array('slug' => '/articles')
            )
        );
}
// end of research_articles_post_type

add_action('init', 'video_post_type');
function video_post_type(){

    register_post_type( 'video',
            array(
                'labels' => array(
                    'name' => 'Video',
                    'singular_name' => 'Video',
                    'add_new' => 'Add New Video',
                    'add_new_item' => 'Add New Video',
                    'edit' => 'Edit',
                    'edit_item' => 'Edit Video',
                    'new_item' => 'New Video',
                    'view' => 'View Video',
                    'view_item' => 'View Videos',
                    'search_items' => 'Search Videos',
                    'not_found' => 'No Videos found',
                    'not_found_in_trash' => 'No Videos found in Trash',    
                ),
                'public' => true,
                'menu_position' => 20,
                'supports' => array('title', 'editor', 'thumbnail'),
                'taxonomies' => array( '' ),
                'menu_icon' => 'dashicons-video-alt',
                'has_archive' => true,
                'rewrite' => array('slug' => 'video')
            )
        );
}
// end of video_post_type

add_action('init', 'SP_applications_post_type');
function SP_applications_post_type(){

    register_post_type( 'applications',
            array(
                'labels' => array(
                    'name' => 'Applications',
                    'singular_name' => 'Application',
                    'add_new' => 'Add Application',
                    'add_new_item' => 'Add Application',
                    'edit' => 'Edit',
                    'edit_item' => 'Edit Application',
                    'new_item' => 'New Application',
                    'view' => 'View Applications',
                    'view_item' => 'View Applications',
                    'search_items' => 'Search Applications',
                    'not_found' => 'No Applications found',
                    'not_found_in_trash' => 'No Applications found in Trash',    
                ),
                'public' => true,
                'menu_position' => 20,
                'supports' => array('title', 'editor', 'thumbnail'),
                'taxonomies' => array( '' ),
                'menu_icon' => 'dashicons-clipboard',
                'has_archive' => true,
                'rewrite' => array('slug' => '/applications')   
            )
        );

}
// end of SP_applications_post_type

add_action('init', 'lenord_bauer_post_type');
function lenord_bauer_post_type(){

    register_post_type( 'lenord_bauer',
            array(
                'labels' => array(
                    'name' => 'Lenord + Bauer',
                    'singular_name' => 'Lenord + Bauer',
                    'add_new' => 'Add Lenord + Bauer',
                    'add_new_item' => 'Add Lenord + Bauer',
                    'edit' => 'Edit',
                    'edit_item' => 'Edit Lenord + Bauer',
                    'new_item' => 'New Lenord + Bauer',
                    'view' => 'View Lenord + Bauer',
                    'view_item' => 'View Lenord + Bauer',
                    'search_items' => 'Search Lenord + Bauer',
                    'not_found' => 'No Lenord + Bauer found',
                    'not_found_in_trash' => 'No Lenord + Bauer found in Trash',    
                ),
                'public' => true,
                'menu_position' => 20,
                'supports' => array('title', 'editor', 'thumbnail'),
                'taxonomies' => array( '' ),
                'menu_icon' => 'dashicons-screenoptions',
                'has_archive' => true,
                'rewrite' => array('slug' => '/lenord-bauer')
            )
        );

}
// end of lenord_bauer_post_type

add_action('init', 'news_post_type');
function news_post_type(){

    register_post_type( 'news',
            array(
                'labels' => array(
                    'name' => 'News',
                    'singular_name' => 'News',
                    'add_new' => 'Add New News',
                    'add_new_item' => 'Add New News',
                    'edit' => 'Edit',
                    'edit_item' => 'Edit News',
                    'new_item' => 'New News',
                    'view' => 'View News',
                    'view_item' => 'View News',
                    'search_items' => 'Search News',
                    'not_found' => 'No News found',
                    'not_found_in_trash' => 'No News found in Trash',    
                ),
                'public' => true,
                'menu_position' => 20,
                'supports' => array('title', 'editor', 'thumbnail'),
                'taxonomies' => array( '' ),
                'menu_icon' => 'dashicons-book-alt',
                'has_archive' => true,
                'rewrite' => array('slug' => '/news')
            )
        );

}
// end of news_post_type

add_action('init', 'services_post_type');
function services_post_type(){

    register_post_type( 'services_post',
            array(
                'labels' => array(
                    'name' => 'Services',
                    'singular_name' => 'Service',
                    'add_new' => 'Add Services',
                    'add_new_item' => 'Add New Services',
                    'edit' => 'Edit',
                    'edit_item' => 'Edit Services',
                    'new_item' => 'New Services',
                    'view' => 'View Services',
                    'view_item' => 'View Services',
                    'search_items' => 'Search Services',
                    'not_found' => 'No Services found',
                    'not_found_in_trash' => 'No Services found in Trash',    
                ),
                'public' => true,
                'menu_position' => 20,
                'supports' => array('title', 'editor', 'thumbnail'),
                'taxonomies' => array( '' ),
                'menu_icon' => 'dashicons-businessman',
                'has_archive' => true,
                'rewrite' => array('slug' => '/services')
            )
        );

}
// end of services_post_type

add_action('init', 'testimonials_post_type');
function testimonials_post_type(){

    register_post_type( 'testimonials',
            array(
                'labels' => array(
                    'name' => 'Testimonials',
                    'singular_name' => 'Testimonial',
                    'add_new' => 'Add New Testimonial',
                    'add_new_item' => 'Add New Testimonial',
                    'edit' => 'Edit',
                    'edit_item' => 'Edit Testimonial',
                    'new_item' => 'New Testimonial',
                    'view' => 'View Testimonials',
                    'view_item' => 'View Testimonials',
                    'search_items' => 'Search Testimonials',
                    'not_found' => 'No Testimonials found',
                    'not_found_in_trash' => 'No Testimonials found in Trash',    
                ),
                'public' => true,
                'menu_position' => 20,
                'supports' => array('title', 'editor', 'thumbnail'),
                'taxonomies' => array( '' ),
                'menu_icon' => 'dashicons-groups',
                'has_archive' => true,
                'rewrite' => array('slug' => '/testimonials')
            )
        );

}
// end of testimonials_post_type

// add_action('init', 'selling_tools_post_type');
// function selling_tools_post_type(){

//     register_post_type( 'selling_tools',
//             array(
//                 'labels' => array(
//                     'name' => 'Selling Tools',
//                     'singular_name' => 'Selling Tool',
//                     'add_new' => 'Add Selling Tools',
//                     'add_new_item' => 'Add New Selling Tools',
//                     'edit' => 'Edit',
//                     'edit_item' => 'Edit Selling Tools',
//                     'new_item' => 'New Selling Tools',
//                     'view' => 'View Selling Tools',
//                     'view_item' => 'View Selling Tools',
//                     'search_items' => 'Search Selling Tools',
//                     'not_found' => 'No Selling Tools found',
//                     'not_found_in_trash' => 'No Selling Tools found in Trash',    
//                 ),
//                 'public' => true,
//                 'menu_position' => 20,
//                 'supports' => array('title', 'editor', 'thumbnail'),
//                 'taxonomies' => array( '' ),
//                 'menu_icon' => 'dashicons-chart-bar',
//                 'has_archive' => true,
//                 'rewrite' => array('slug' => '/selling-tools')
//             )
//         );

// }
// end of selling_tools_post_type

// add_action('init', 'landing_pages_post_type');
// function landing_pages_post_type(){

//     register_post_type( 'landing_pages',
//             array(
//                 'labels' => array(
//                     'name' => 'Landing Pages',
//                     'singular_name' => 'Landing Page',
//                     'add_new' => 'Add Landing Pages',
//                     'add_new_item' => 'Add New Landing Pages',
//                     'edit' => 'Edit',
//                     'edit_item' => 'Edit Landing Pages',
//                     'new_item' => 'New Landing Pages',
//                     'view' => 'View Landing Pages',
//                     'view_item' => 'View Landing Pages',
//                     'search_items' => 'Search Landing Pages',
//                     'not_found' => 'No Landing Pages found',
//                     'not_found_in_trash' => 'No Landing Pages found in Trash',    
//                 ),
//                 'public' => true,
//                 'menu_position' => 20,
//                 'supports' => array('title', 'editor', 'thumbnail'),
//                 'taxonomies' => array( '' ),
//                 'menu_icon' => 'dashicons-format-aside',
//                 'has_archive' => true,
//                 'rewrite' => array('slug' => '/landing-pages')
//             )
//         );

// }
// end of landing_pages_post_type

// add_action('init', 'trade_shows_post_type');
// function trade_shows_post_type(){

//     register_post_type( 'trade_shows',
//             array(
//                 'labels' => array(
//                     'name' => 'Trade Shows',
//                     'singular_name' => 'Trade Show',
//                     'add_new' => 'Add Trade Shows',
//                     'add_new_item' => 'Add New Trade Shows',
//                     'edit' => 'Edit',
//                     'edit_item' => 'Edit Trade Shows',
//                     'new_item' => 'New Trade Shows',
//                     'view' => 'View Trade Shows',
//                     'view_item' => 'View Trade Shows',
//                     'search_items' => 'Search Trade Shows',
//                     'not_found' => 'No Trade Shows found',
//                     'not_found_in_trash' => 'No Trade Shows found in Trash',    
//                 ),
//                 'public' => true,
//                 'menu_position' => 20,
//                 'supports' => array('title', 'editor', 'thumbnail'),
//                 'taxonomies' => array( '' ),
//                 'menu_icon' => 'dashicons-tickets-alt',
//                 'has_archive' => true,
//                 'rewrite' => array('slug' => '/trade-shows')
//             )
//         );

// }
// end of trade_shows_post_type

// add_action('init', 'careers_post_type');
// function careers_post_type(){

//     register_post_type( 'careers',
//             array(
//                 'labels' => array(
//                     'name' => 'Careers',
//                     'singular_name' => 'Position',
//                     'add_new' => 'Add Positions',
//                     'add_new_item' => 'Add New Positions',
//                     'edit' => 'Edit',
//                     'edit_item' => 'Edit Positions',
//                     'new_item' => 'New Positions',
//                     'view' => 'View Positions',
//                     'view_item' => 'View Positions',
//                     'search_items' => 'Search Positions',
//                     'not_found' => 'No Positions found',
//                     'not_found_in_trash' => 'No Positions found in Trash',    
//                 ),
//                 'public' => true,
//                 'menu_position' => 20,
//                 'supports' => array('title', 'editor', 'thumbnail'),
//                 'taxonomies' => array( '' ),
//                 'menu_icon' => 'dashicons-index-card',
//                 'has_archive' => true,
//                 'rewrite' => array('slug' => '/careers')
//             )
//         );

// }
// end of careers_post_type