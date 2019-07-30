<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php get_template_part('_includes/iOS', 'icons') ?>
	<?php wp_head() ?>
</head>
<body>

	<?php get_template_part('_includes/nav', 'bootstrap4') ?>

	<div class="container my-5 py-5 text-center">

		<a href="<?php bloginfo('url') ?>"><h1 class="gold-color"><?php echo bloginfo('name') ?></h1></a>
		<h2><?php echo bloginfo('description') ?></h2>
