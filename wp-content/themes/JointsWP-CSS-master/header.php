<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section
 *
 */
?>

<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/motion-ui@1.2.3/dist/motion-ui.min.css" />
		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">
		
		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />	
	    <?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

	</head>
			
	<body <?php body_class(); ?>>
		<header class="header" role="banner">
			<div class="top-bar">
				<div class="top-bar-left">
					<img src="wp-content/themes/JointsWP-CSS-master/assets/images/header-logo.png" alt="Opticron">
				</div>
			</div>
			<div class="top-bar">
				
				<div class="top-bar-left">
					<ul class="menu">
					<li><a href="#">Our Products</a></li>
					<li><a href="#">Where to Buy</a></li>
					<li><a href="#">News & Reviews</a></li>
					<li><a href="#">Help & Support</a></li>
					<li><a href="#">My Opticron</a></li>
					</ul>
				</div>
				<div class="top-bar-right">
					<form>
						<div class="row collapse">
							<div class="large-9 columns">
								<input type="search" placeholder="My Opticron...">
							</div>
							<div class="large-3 columns">
								<span class="postfix"><i class="fa fa-search"></i></span>
							</div>
						</div>
					</form>
				</div>
			</div>
			
				

		</header> <!-- end .header -->

		