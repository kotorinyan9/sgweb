 <?php 
 /* Template Name: new-home */
 ?>

<?php get_header('new'); ?>

<?php// get_template_part('carousel'); ?>
	<div class="wrapper">
<div class="main">


		<div class="feature-home-post-container">

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
						<h1><a href="<?php echo get_permalink(); ?>"><?php echo the_title() ?></a></h1>
							<div class="meta-timestamp">
								[<span class="date"><?php the_time('F j, Y'); ?></span>
								<span class="author"><?php _e( 'Post by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>]
							</div>					
						<div class="feature-post-content">
							<?php the_content(); ?>
						</div>
					</li>									
				<?php endwhile ?>
				</ul>
			<?php endif ?>

			<div class="sign-up">
				<link href="//cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
				<div id="mc_embed_signup">
					<form action="http://swordgirls.us7.list-manage.com/subscribe/post?u=4dd6a3e209b373abedf465887&amp;id=5872984230" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" >
						<div class="sign-up-header">Sign Up for Beta</div>
						<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="EMAIL ADDRESS" required>
						<input type="submit" value="Go!" name="subscribe" id="mc-embedded-subscribe" class="signup-btn">
					</form>
					<div class="clearfix"></div>
				</div>
			</div>		
		</div>
	</div>
</div>


<?php get_footer('new'); ?>