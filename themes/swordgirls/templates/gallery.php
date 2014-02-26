 <?php 
 /* Template Name: gallery */
 ?>

<?php get_header('new'); ?>
<div class="wrapper">
<div class="sticky">
<div class="main">

<h1><?php echo the_title() ?></h1>
<a class="arrow" href="/photo-album"> &#8592; Back to Photo Albums</a>
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