<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php global $ec3; $ec3->nocss=true; ?>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<?php if (is_tag()) : ?>
<title><?php bloginfo('name'); ?> &raquo; Posts Tagged <?php
single_cat_title(); ?></title>
<?php else : ?>
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
<?php endif; ?>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<style type="text/css" media="screen">
    <!-- @import url( <?php bloginfo('template_directory'); ?>/ec3.css ); -->
</style>
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="/rss2.xml"/>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0); ?>
<?php remove_action( 'template_redirect', 'wp_shortlink_header', 11 ); ?>
<?php wp_head(); ?>
</head>
<body>

<div id="wrap">
<div id="header"><h1><a href="<?php echo get_settings('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
<p class="description"><?php bloginfo('description'); ?></p>
</div>
