 <?php 
 /* Template Name: gallerygallery */
 ?>

<?php get_header('new'); ?>
<div class="sticky">
<div class="main">
<div class="wrapper">
<h1><?php echo the_title() ?></h1>
	<?php $images = get_field('gallery'); ?>
    <ul class="gallery">
            <?php foreach( $images as $image ): ?>
                <li>
                	<a class="f" rel="group"  href="<?php echo $image['sizes']['large']; ?>">
                    	<img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                	</a>
                </li>
            <?php endforeach; ?>
        </ul>
</div>
	</div>
		</div>
<?php get_footer('new'); ?>