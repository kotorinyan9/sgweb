 <?php 
 /* Template Name: gallery */

$rows_per_page = 18;
$page = 1;
$i = 0;

if( !empty($_GET['page']) )
    $page = $_GET['page'];

$min = $page * $rows_per_page;
$max = $min + $rows_per_page;

?>

<?php $pager_count = (int)(count($images) / $rows_per_page + 0.5); ?>
<?php if ((count($images) % $rows_per_page) === 0): ?>
    <?php $pager_count = (int)(count($images) / $rows_per_page); ?>
<?php endif ?>

<?php get_header('new'); ?>
<div class="row main-content">
    <div class="col-md-12 col-sm-12">
        <h1><?php echo the_title() ?></h1>
        <?php $images = get_field('gallery') ?>
        <ul class="gallery">
            <?php foreach( $images as $image ):  $i++;?>
                <?php if( $i < ($min - ($rows_per_page-1))) continue; ?>
                <?php if( $i > ($max - ($rows_per_page)) ) break; ?>     
                <li class="col-sm-2">
                    <a class="f" rel="group"  href="<?php echo $image['sizes']['large']; ?>">
                        <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <div class="overlay"></div>
                    <span class="title"><?php echo $image['title'] ?></span>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
        <ul  class="pagination">
        <?php foreach(range(1,($pager_count)) as $key => $link): ?>
            <li class="<?php if($key+1 == $page) echo 'active'; ?>"><a href="<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] . "?page=" . ($key + 1); ?>"><?php echo $key + 1; ?></a></li>
        <?php endforeach ?>
        </ul>
    </div>
</div>



<?php get_footer('new'); ?>