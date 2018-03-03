<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta name="google-site-verification" content="Ig4uV7VyUoHyiTEmbirupX_Fq7xNnx7ydQbCIWUWalw" />
		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
		<meta name="google-site-verification" content="Ig4uV7VyUoHyiTEmbirupX_Fq7xNnx7ydQbCIWUWalw" />

	</head>
	<body data-spy="scroll" data-target="#navbar" data-offset="30" <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- Nav Menu -->

			<div class="nav-menu fixed-top">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<nav class="navbar navbar-dark navbar-expand-lg">
							<a class="navbar-brand" href="/"><img src="images/logo.png" class="img-fluid" alt="logo"></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
							<div class="collapse navbar-collapse" id="navbar">
								<ul class="navbar-nav ml-auto">
									<li class="nav-item"> <a class="nav-link active" href="#home">HOME <span class="sr-only">(current)</span></a> </li>
									<!-- <li class="nav-item"> <a class="nav-link" href="#features">FEATURES</a> </li>
									<li class="nav-item"> <a class="nav-link" href="#gallery">GALLERY</a> </li>
									<li class="nav-item"> <a class="nav-link" href="#pricing">PRICING</a> </li>
									<li class="nav-item"> <a class="nav-link" href="#contact">CONTACT</a> </li>
									<li class="nav-item"><a href="#" class="btn btn-outline-light my-3 my-sm-0 ml-lg-3" style="
    box-shadow: none !important;">Download</a></li> -->
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
