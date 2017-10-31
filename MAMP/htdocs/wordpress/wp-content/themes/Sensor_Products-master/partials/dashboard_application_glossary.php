<?php $args = array('post_type' => 'application_glossary', 'post_status' => 'publish', 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC'); $the_query = new WP_Query( $args ); ?>
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <h4 class="<?php echo get_the_ID(); ?>"><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a></h4>
        <hr />
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
