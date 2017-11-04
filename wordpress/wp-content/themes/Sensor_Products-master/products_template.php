<?php  /* Template Name: Products Template */ ?>
<?php $args = array('post_type' => 'products', 'post_status' => 'publish', 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC'); $the_query = new WP_Query( $args ); ?>
<?php get_header(); ?>
<main class="site-content">
  <div class="contentBox">    
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="<?php echo get_the_ID(); ?>">
          <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
          <div class="post-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
          <div class="post-content"><?php the_content(); ?></div>
        </div>
        <hr />
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
  </div>
</main>
<!--end of site-content-->
<?php get_footer(); ?>