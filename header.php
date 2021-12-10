<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo get_bloginfo("name") ?></title>
	<meta name="description" content="<?php echo get_bloginfo("description") ?>">
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<nav><?php wp_nav_menu() ?></nav>
	</header>