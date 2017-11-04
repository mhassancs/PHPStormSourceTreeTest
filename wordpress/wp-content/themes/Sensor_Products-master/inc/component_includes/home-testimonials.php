<div class="testimonialBox">
    <div class="testimonials">
    <h2>Testimonials</h2>
      <div class="row">
        <div id="homepageTestimonialCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
          <div class="carousel-inner">
          <?php $args = array('post_type' => 'testimonials', 'post_status' => 'publish', 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC'); $the_query = new WP_Query( $args ); ?>
          <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <div class="item <?php if( $the_query->current_post == 0 ): ?>active<?php endif; ?>">
              <div class="box-item">
                <div class="col-md-2"><div><img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>" alt="Slide"></div></div>
                <div class="col-md-10"><?php the_content(); ?></div>
              </div>
            </div>
            <?php endwhile; endif; ?>
            <?php wp_reset_postdata(); ?>
          </div>
          <!--end of .carousel-inner-->
          <!-- Carousel controls -->
          <a class="carousel-control left" href="#homepageTestimonialCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="carousel-control right" href="#homepageTestimonialCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div> 