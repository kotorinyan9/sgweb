<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">

		<?php if(is_home()): ?>
			<title>Swordgirls.net</title>
			<meta name="description" content="Play Sword Girls Now! Feature Cute Girls, Dungeons, Epic Raids, PVP Rankings and more!">
		<?php else: ?>		
			<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
			<meta name="description" content="<?php bloginfo('description'); ?>">
		<?php endif ?>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="initial-scale=1">
		<link rel="icon" type="image/png"  href="<?php echo get_template_directory_uri(); ?>/img/icons/favicons.ico" >
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,700,600,300' rel='stylesheet' type='text/css'>			

		<?php wp_head(); ?>
		<script>

		</script>
	</head>
	<body <?php body_class() ?> >

		<div class="header">
			<div class="row tool-bar">
				<div class="logo">
					<a href="/">swordgirls</a>
				</div>
			</div>
<!-- 			<?php if(is_home()): ?>
				<?php get_template_part('carousel'); ?>
			<?php endif ?> -->
			<div class="row navigation">
				<?php headerNav();?>
			</div>
		</div>


		

