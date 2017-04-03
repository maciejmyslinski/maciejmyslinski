<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package maciejmyslinski
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:700" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header class="site-header" role="banner">
			<a class="site-header__link" href="<?php echo get_home_url(); ?>">
				<img class="site-header__logo"
					src="<?php echo get_template_directory_uri() . "/img/logo-maciej-myslinski.png"; ?>"
					alt="logo Maciej Myślinski">
			</a>
	</header>

	<div id="content" class="site-content">
