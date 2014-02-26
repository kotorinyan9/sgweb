<?php get_header('new'); ?>
	<div class="wrapper">
<div class="sticky">
<div class="main">


	<!-- section -->

		<section role="main">
		
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
				<!-- post thumbnail -->
				<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_post_thumbnail(); // Fullsize image for the single post ?>
					</a>
				<?php endif; ?>
				<!-- /post thumbnail -->
				
				<!-- post title -->
				<h1>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h1>
				<div class="meta-timestamp">
					[<span class="date"><?php the_time('F j, Y'); ?></span>
					<span class="author"><?php _e( 'Post by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>]
				</div>

				<?php the_content(); ?>				
							
				<p><?php _e( 'Category in: ', 'html5blank' ); the_category(', '); ?></p>

				<?php edit_post_link();?>
				<div class="clearfix"></div>
				<?php comments_template(); ?>
				
			</article>
			<!-- /article -->
			
		<?php endwhile; ?>
		
		<?php else: ?>
		
			<!-- article -->
			<article>
				
				<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
				
			</article>
			<!-- /article -->
		
		<?php endif; ?>
		
		</section>
		<!-- /section -->
	</div>
	</div>
	</div>
<?php get_footer('new'); ?>