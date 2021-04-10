<!DOCTYPE html>
<html class="no-js">
	<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">

	</head>
	<body>
		<div id="fh5co-page">
			<header id="fh5co-header" role="banner">
				<div class="container">
					<div class="header-inner">
							<?php if( has_custom_logo() ){
							echo '<div class="logo">' . get_custom_logo() . 
							'<span class="logo-name">' . get_bloginfo('name') . '</span>' . '</div>';
							} else {
								echo '<i class="sl-icon-energy"></i>' . get_bloginfo('name');
							} ?>
						<?php 
							wp_nav_menu( [
								'theme_location'  => 'header_menu',
								'container'       => 'nav', 
								'container_class' => 'header-nav', 
								'container_id'    => '',
								'menu_class'      => 'header-menu', 
								'echo'            => true,
							] );
						?>
					</div>
				</div>
			</header>
	