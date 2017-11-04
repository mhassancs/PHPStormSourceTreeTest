<?php $args = array('post_type' => 'research_articles', 'post_status' => 'publish', 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC'); $the_query = new WP_Query( $args ); ?>
<div class="contentBox">
  <h2>Article Downloads</h2>
  <div class="row">  
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <div class="col-md-3">
    <div class="home-article">
      <div class="img-box"><a href="<?php the_permalink(); ?>"><img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>"></a></div>
      <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
    </div>
  </div>
  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>
  </div>
</div>