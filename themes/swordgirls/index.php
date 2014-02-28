 <?php 
 /* Template Name: new-home */
 ?>

<?php get_header('new'); ?>

<div class="row main-content">
	<div class="col-md-8 col-sm-8">
		<?php 
			$args = array(
				'numberposts' => -1,
				'orderby' => 'meta_value',
				'order' => 'DESC',	
				'post_type' => 'post',
				'showposts' => 1
			);
			$query_posts = new WP_Query( $args );
		?>
		<?php if( $query_posts->have_posts() ): ?>
			<ul class="feature-home-posts">
			<?php while ( $query_posts->have_posts() ) : $query_posts->the_post();  ?>					
				<li class="feature-home-post">
					<h2><a href="<?php echo get_permalink(); ?>"><?php echo the_title() ?></a></h2>
					<div class="feature-post-content">
						<?php the_content(); ?>
					</div>
				</li>									
			<?php endwhile ?>
			</ul>
		<?php endif ?>
		
		<div class="sign-up col-md-6">
			<h3 class="sign-up-header">Sign Up for Beta</h3>
			<link href="//cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
			<div id="mc_embed_signup">
				<form class="navbar-form navbar-left" action="http://swordgirls.us7.list-manage.com/subscribe/post?u=4dd6a3e209b373abedf465887&amp;id=5872984230" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" >
					<div class="form-group">
				
						<input  class="form-control" type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="EMAIL ADDRESS" required>
					</div>			
					 <button type="submit" class="btn btn-default" name="subscribe" id="mc-embedded-subscribe">Submit</button>			
				</form>

				<div class="clearfix"></div>
			</div>
		</div>

	</div>
	<div class="col-md-4 col-sm-4 random-gallery">
		<a href="/contact">
			<img src="http://localhost/wordpress/wp-content/themes/swordgirls/img/theme/sita-girl.jpg">
			<div class="overlay"></div>
		</a>
	</div>
</div>

<?php get_footer('new'); ?>