
<?php 
	// Wordpress Logic
	$args = array(
		'numberposts' => -1,
		'orderby' => 'meta_value',
		'order' => 'ASC',	
		'post_type' => 'slides',
		's' => 'home',
	);
	$query_posts = new WP_Query( $args );
?>

<?php if( $query_posts->have_posts() ): ?>
	<?php ob_start() ?>
	<ul class="bxslider">
	<?php while ( $query_posts->have_posts() ) : $query_posts->the_post();  ?>
		<?php if($repeater = get_field('repeater_slider')): ?>
		<?php 
			foreach( $repeater as $key => $row )
			    $column_id[ $key ] = $row['sort_order'];

			array_multisort( $column_id, SORT_ASC, $repeater );
		?>
			<?php foreach( $repeater as $key => $row ): ?>
				<li>
					<img src="<?php $image = $row['slide_img']; echo $image['sizes']['carousel_frame'] ?>">
				</li>
			<?php endforeach ?>
		<?php endif ?>
	<?php endwhile ?>
	</ul>
	<?php $bxslider = ob_get_contents() ?>
	<?php ob_end_clean() ?>
<?php endif ?>


<div class="slider-container">

	<?php echo $bxslider ?>


</div>