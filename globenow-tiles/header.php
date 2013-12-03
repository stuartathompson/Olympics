<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		
		<!-- dns prefetch -->
		<link href="//www.google-analytics.com" rel="dns-prefetch">
		
		<!-- meta -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<?php if(is_mobile()){ ?><meta id="viewport" name="viewport" content ="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /><?php } ?>
		<meta name="description" content="<?php bloginfo('description'); ?>">
		
		<!-- icons -->
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
			
		<!-- css + javascript -->
		<?php wp_head(); ?>
		<script>
		!function(){
			// configure legacy, retina, touch requirements @ conditionizr.com
			conditionizr()
		}()
		</script>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
		<link href="http://fonts.googleapis.com/css?family=Oswald:400,300" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="http://beta.images.theglobeandmail.com/media/www/css/global.fonts.css">
				
		
<!-- Ad units -->
<!-- Start: GPT Sync -->
<script type='text/javascript'>
	var gptadslots=[];
	(function(){
		var useSSL = 'https:' == document.location.protocol;
		var src = (useSSL ? 'https:' : 'http:') + '//www.googletagservices.com/tag/js/gpt.js';
		document.write('<scr' + 'ipt src="' + src + '"></scr' + 'ipt>');
	})();
</script>
<script type="text/javascript">
		//Adslot 1 declaration
		gptadslots[1]= googletag.defineSlot('/58/theglobeandmail.com/sports/olympics', [[728,90],[960,90]],'div-gpt-ad-311805903592310440-1').setTargeting('ptf',['gpt']).setTargeting('mode',['wp']).setTargeting('adpg',['olympics']).setTargeting('arena',['olympics','sports']).setTargeting('pos',['ldbd']).setTargeting('loc',['n']).addService(googletag.pubads());
		//Adslot 2 declaration
		gptadslots[2]= googletag.defineSlot('/58/theglobeandmail.com/sports/olympics', [[300,250]],'div-gpt-ad-311805903592310440-2').setTargeting('ptf',['gpt']).setTargeting('mode',['wp']).setTargeting('adpg',['olympics']).setTargeting('arena',['olympics','sports']).setTargeting('pos',['boxr']).setTargeting('loc',['n']).addService(googletag.pubads());
		googletag.pubads().enableSingleRequest();
		googletag.pubads().enableSyncRendering();
		googletag.enableServices();

</script>
<!-- End: GPT -->


	</head>
	<body <?php body_class(); ?>>
	
		<!-- wrapper -->
		<div class="hide-overflow">
		<div class="wrapper">
			<?php if(is_mobile()){
?>
			<?php
			} else {
				if(function_exists('globe_header')) globe_header();
				/* Eventually remove this */
			}			
			?>
			<div id="mobile-header">
				<?php if(function_exists('ajax_tags_create_front_end') && is_mobile()) { ?><a href="#menu" id="mobile-header-menu"><img src="<?php bloginfo('template_url'); ?>/img/menu-icon.png"></a><?php } ?>
				<a href="http://www.theglobeandmail.com"><img id="mobile-header-logo" src="<?php bloginfo('template_url'); ?>/img/theglobeandmail.png"></a>
			
				<?php if(function_exists('ajax_refresh_front_end') && is_home()) ajax_refresh_front_end(); ?>
			</div>
			
		<div class="strip small"></div>

		<div id="new-alert-container">
			<a href="#loadnew" id="new-alert">
				<img src="<?php bloginfo('template_url'); ?>/img/plus.png?1" /> <span id="new-alert-number">0</span> <span id="new-alert-text">new update</span>
			</a>
		</div>

		<?php 
			// Get filter bar for all but single pages
			if(!is_single() && function_exists('ajax_tags_create_front_end')) ajax_tags_create_front_end(); 
		?>