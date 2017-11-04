<?php /* Template Name: Homepage Template  */ ?>
<?php get_header(); ?>
<div class="site-content">
  <div class="home-featured">
    <?php include('inc/component_includes/home-slider.php'); ?>
  </div>
  <!--end of .home-featured-->
  <?php include('inc/component_includes/feature-button-box.php'); ?>
  <div class="homeagpe-tabs">
    <?php include('inc/component_includes/home-tab-pane.php'); ?>
  </div>
  <!--end of .homeagpe-tabs-->
  <div class="homepage-content">
    <?php include('inc/component_includes/home-content-txt.php'); ?>
  </div>
  <!--end of homepage-content-->
  <div class="home-articles-downloads">
    <?php include('inc/component_includes/home-articles.php'); ?>
  </div>
  <!--end of .home-articles-downloads-->
  <div class="home-testimonial">
    <?php include('inc/component_includes/home-testimonials.php'); ?>
  </div>
  <!--end of .home-testimonial-->
</div>
<!--end of .site-content-->
<?php get_footer(); ?>