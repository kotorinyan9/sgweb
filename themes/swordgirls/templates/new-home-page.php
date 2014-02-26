 <?php 
 /* Template Name: new-home */
 ?>

<?php get_header('new'); ?>



<?php 
	// Wordpress Logic
	$args = array(
		'numberposts' => -1,
		'orderby' => 'meta_value',
		'order' => 'ASC',	
		'post_type' => 'pillars',
		's' => 'home',
	);
	$query_posts = new WP_Query( $args );
?>

<?php if( $query_posts->have_posts() ): ?>
	<?php ob_start() ?>
	<ul class="pillars">
	<?php while ( $query_posts->have_posts() ) : $query_posts->the_post();  ?>
		<?php if($repeater = get_field('repeater_home_frames')): ?>
		<?
			foreach( $repeater as $key => $row )
			{
			    $column_id[ $key ] = $row['sort_order'];
			}  
			array_multisort( $column_id, SORT_ASC, $repeater );
		?>
			<?php foreach( $repeater as $key => $row ): ?>
				<li style="background:url('<?php $image = $row['background']; echo $image['sizes']['full']; ?>') center no-repeat;">
					<div class="stuff-container">
						<div class="mascot-img" style="<?php echo $image = $row['position'] ?>:0px;">
							<img  src="<?php $image = $row['mascot_image']; echo $image['sizes']['large'] ?>">
						</div>
						<?php if ($description = $row['description']): ?>
							<div class="pillar-text">
								<?php echo $description ?>
							</div>
						<?php endif ?>				
					</div>	
				</li>
			<?php endforeach ?>
		<?php endif ?>
	<?php endwhile ?>
	</ul>
	<?php $pillars = ob_get_contents() ?>
	<?php ob_end_clean() ?>
<?php endif ?>


<div class="pillar-container">
	<?php echo $pillars ?>
</div>

<?php get_footer('new'); ?>