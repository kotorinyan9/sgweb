 <?php 
 /* Template Name: bubble-page */
 ?>

<?php get_header('new'); ?>
<div class="row main-content">
	<div class="col-md-8 col-sm-8">

		
		
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class('left-side'); ?>>
				<h1 ><?php the_title(); ?></h1>
				<?php the_content(); ?>
				<br class="clearfix" style="margin-top:20px;">
				<?php edit_post_link(); ?>
				
			</article>
		<?php endwhile; ?>
		<?php else: ?>
			<article>
				
				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
				
			</article>
		<?php endif; ?>

	</div>
	<div class="col-md-4 col-sm-4 random-gallery">
		<a href="/contact">
			<img src="http://localhost/wordpress/wp-content/themes/swordgirls/img/theme/sita-girl.jpg">
			<div class="overlay"></div>
		</a>
	</div>	
</div>

<?php get_footer('new'); ?>