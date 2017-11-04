<?php /* Template Name: WP Single Page App */ ?>
<?php get_header(); ?>
<main class="site-content" ng-controller="sampleCtrl">
  <div class="contentBox">
    <div ng-repeat="post in wpPost">
      <div>{{post.title}}</div>
      <div>{{post.theContent}}</div>
      <div>{{post.author}}</div>
      <div><img ng-src="{{post.thumbnail}}" /></div>
    </div>
  </div>
</main>
<?php get_footer(); ?>