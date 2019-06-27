<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">   
		<link rel="icon" type="image/x-icon" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		

	</head>
	<body <?php body_class(); ?>>

		
		<div class="container">
			<!-- header -->
			<header class="header row" role="banner">

					<!-- logo -->
					<div class="logo col-sm-3">
						<a href="<?php echo home_url(); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
						</a>
					</div>
					<!-- /logo -->

					<!-- nav -->
					<nav class="col-sm-9 navbar navbar-expand-md navbar-light" role="navigation">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#reponsive-menu" aria-controls="reponsive-menu" aria-expanded="false" aria-label="Toggle navigation">
						    <span class="navbar-toggler-icon"></span>
						</button>
						
						<div id="reponsive-menu" class="collapse navbar-collapse">
							<?php html5blank_nav(); ?>
						</div>
					</nav>
					<!-- /nav -->

			</header>
			<!-- /header -->
		</div>

		<!-- SLideShow -->
		<div class="slide">
			<div class="container">
				<div class="row">
					<div class="col-sm-5 offset-sm-7">
						
					</div>
				</div>
			</div>
		</div>
		<!-- END SLideShow -->