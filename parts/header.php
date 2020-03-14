<?php
/**
 * Craigbavender.org
 *
 * Part: Header
 * Author: Craig
 * Date: 03/13/2020
 */

ini_set("display_errors", 1);
error_reporting(E_ALL);

?>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo $config['pageTitle']; ?></title>

	<link href="https://craigbavender.org/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://craigbavender.org/assets/css/main.css" rel="stylesheet">
	
	<header>
		<div class="container">
			<div class="row">
				<div class="col-4">
					<div class="img-and-name">
						<a href="https://craigbavender.org">
							<div class="name">craig bavender</div>
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