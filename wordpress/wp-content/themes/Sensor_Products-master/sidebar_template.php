<?php /* Template Name: Sidebar Template  */ ?>
<?php get_header(); ?>
<main class="site-content">
	<div class="featuredImg">
		<div class="imgBox"><img src="<?php the_post_thumbnail_url(); ?>"></div>
	</div>
	<!--end of .featuredImg-->
	<?php include('inc/component_includes/feature-button-box.php'); ?>
	<!--show hide buttons-->
	<div class="contentBox">
		<div class="row">
			<div class="col-md-3"><?php get_sidebar(); ?></div>
			<div class="col-md-9">
				<div class="content">
					<?php if(have_posts() ) : while(have_posts() ) : the_post(); ?>
					<div class="<?php post_class(); ?>">
						<h2 class="the-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
						<div class="the-content"><?php the_content(); ?></div>
					</div>
					<?php endwhile ?>
					<?php endif ?>
				</div>
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>