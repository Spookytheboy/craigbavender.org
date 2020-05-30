<?php
/**
 * Craigbavender.org
 *
 * Part: Header
 * Author: Craig
 * Date: 03/13/2020
 */
?>

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	
	<meta property="twitter:card" content="Summary">
	<meta property="twitter:site" content="craigbavender.org">
	<meta property="twitter:title" content="Los Angeles Full Stack PHP Developer">
	<meta property="twitter:description" content="Programmer and artist and living in LA">
	<meta property="twitter:creator" content="@spookytheboy">
	<meta property="twitter:image:src" content="https://craigbavender.org/assets/img/card-bg-default.png">        
	<meta property="twitter:domain" content="craigbavender.org">
	
	
	<title><?php echo $config['pageTitle']; ?></title>
	
	<link rel="shortcut icon" type="image/png" href="/favicon.ico">

	<link href="https://craigbavender.org/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://craigbavender.org/assets/css/main.css" rel="stylesheet">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-168035525-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-168035525-1');
	</script>

	
	<header>
		<div class="container">
			<div class="row">
				<div class="col-4">
					<div class="img-and-name">
						<a href="https://craigbavender.org">
							<div class="name">Craig Bavender</div>
						</a>
					</div>
				</div>
				<div class="col-8">
					<nav>
						<ul>
							<li><a href="https://craigbavender.org/archive">archive</a></li>
							<li><a href="https://craigbavender.org/projects">projects</a></li>
							<li><a href="https://craigbavender.org/about">about</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
</head>
