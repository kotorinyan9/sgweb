<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">

		<?php if(is_home()): ?>
			<title>Sword Girls CE</title>
			<meta name="description" content="Play Sword Girls Now! Feature Cute Girls, Dungeons, Epic Raids, PVP Rankings and more!">
		<?php else: ?>		
			<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<?php endif ?>
		
		<!-- dns prefetch -->
		<link href="//www.google-analytics.com" rel="dns-prefetch">
		
		<!-- meta -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		
		<!-- icons -->
		<link rel="icon" type="image/png"  href="<?php echo get_template_directory_uri(); ?>/img/icons/favicons.ico" >
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
			
		<!-- css + javascript -->
		<?php wp_head(); ?>
		<script>
		// !function(){
		// 	// configure legacy, retina, touch requirements @ conditionizr.com
		// 	conditionizr()
		// }()
		</script>
	</head>
	<body <?php body_class(); ?>>