<div class="contentBox">
  <?php if(have_posts() ) : while(have_posts() ) : the_post(); ?>
    <div class="<?php post_class(); ?>">
      <div class="the-content"><?php the_content(); ?></div>
    </div>
  <?php endwhile ?>
  <?php endif ?>
</div>