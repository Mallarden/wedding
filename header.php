<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<?php wp_head(); ?>
	<link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
	<!-- Facebook Pixel Code -->
	<script>
		!function(f,b,e,v,n,t,s)
		{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];
		s.parentNode.insertBefore(t,s)}(window, document,'script',
		'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '791882217919962');
		fbq('track', 'PageView');
		</script>
		<noscript><img height="1" width="1" style="display:none"
		src="https://www.facebook.com/tr?id=791882217919962&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Facebook Pixel Code -->
</head>

<body>
	<div class="wrapper">
		<!-- header -->
		<header class="container clear" role="banner">
			<div class="d-flex">
				<!-- logo -->
				<div class="col">
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/img/AransLogo_clean_brun-1024x350.png"
								type='image/png' class="" />
						</a>
						<!-- /logo -->
					</div>
				</div>
				<div class="col">
					<!-- nav -->
					<nav class="nav header-menu fatface" role="navigation">
						<?php wp_nav_menu(); ?>
					</nav>
					<!-- /nav -->
				</div>
			</div>
		</header>
		<!-- /header -->
		<hr class="header-hr"/>