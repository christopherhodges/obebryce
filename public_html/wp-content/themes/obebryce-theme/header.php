<!DOCTYPE html5>
<html lang="en-US">
<head>
	<link href='http://fonts.googleapis.com/css?family=Yantramanav:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title><?php wp_title( ' | ', true, 'right' ); ?></title>
    <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri() .'/favicon.png?v=1'; ?>" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header id="header" role="header">
	<div class="container">
		<div class="logo">
			<a href="<?php echo home_url(); ?>"><?php include 'images/obebryce-logo.svg'; ?></a>
		</div>
		<ul class="nav">
			<li><a href="#">Photos</a></li>
			<li><a href="#">Videos</a></li>
			<li><a href="#">Development</a></li>
			<li><a href="#">Music</a></li>
			<li><a href="#">Writing</a></li>
			<li><a href="#">People</a></li>
			<li><a href="#">Locations</a></li>
			<li><a href="#">About</a></li>
		</ul>
	</div>
</header>



