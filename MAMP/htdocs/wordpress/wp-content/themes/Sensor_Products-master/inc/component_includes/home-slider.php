<div class="home-slides">
  <div id="homepageCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
    <div class="carousel-inner">
      <?php $args = array('post_type' => 'homepage_slider', 'post_status' => 'publish', 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC'); $the_query = new WP_Query( $args ); ?>
      <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
      <div class="item <?php if( $the_query->current_post == 0 ): ?>active<?php endif; ?>">
        <div class="img-box"><img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>" alt="Slide"></div>
      </div>
      <?php endwhile; endif; ?>
      <?php wp_reset_postdata(); ?>
    </div>
    <!--end of .carousel-inner-->
    <!-- Carousel controls -->
    <a class="carousel-control left" href="#homepageCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="carousel-control right" href="#homepageCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
  </div> 
</div>