<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--link rel="profile" href="https://gmpg.org/xfn/11"-->
	<!-- <link rel="pingback" href="<?php //bloginfo('pingback_url' ); ?>"> -->
	<meta name="description" content="<?php esc_html_e( get_bloginfo( 'description' ), wp_get_theme()->get( 'TextDomain' ) ); ?>">
	<meta name="keywords" content="">
	<?php wp_head(); ?>
</head>