<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div class="wrapper">

            <header class="header">
                <div class="header-content">
                    <div class="contentBox">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="header-logo"><a href="/demo"><img src="<?php echo get_template_directory_uri() ;?>/images/header-logo.png" /></a></div>
                            </div>

                            <div class="col-md-6">
                                <div class="header-contact">
                                    <p><span class="fa fa-phone"></span> +1(973)884-1755</p>
                                    <p><span class="fa fa-phone"></span> +1(800)755-2201</p>
                                    <p><span class="fa fa-envelope"></span> <a href="mailtp:sample@sample.com">sales@sensorprod.com</a></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--end of .header-content-->

                <div class="header-navigation">
                    <div class="contentBox">
                        <div class="row">
                            <div class="col-md-9">
                                <nav>
                                    <?php 
                                        wp_nav_menu( array(
                                        'menu'              => 'primary',
                                        'theme_location'    => 'primary',
                                        'depth'             => 2,
                                        'container'         => 'div',
                                        'container_class'   => 'collapse navbar-collapse',
                                        'container_id'      => 'menu navbar',
                                        'menu_class'        => 'nav navbar-nav',
                                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                        'walker'            => new wp_bootstrap_navwalker())
                                        ); 
                                    ?>
                                </nav>
                            </div>

                            <div class="col-md-3"></div>
                        </div>
                    </div>
                </div>
                <!--end of .header-navigation-->
            </header>
            <!--end of .header-->
