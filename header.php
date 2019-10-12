<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body>
<header class="header">
	<div class="header_container">
		<a class="header__logo_container" href="<?php echo site_url('')?>">
			<img class="header__logo" src="<?php echo get_template_directory_uri(); ?>/dist/images/logos/logo_with_wordmark.svg" alt="Lab Genomic">
		</a>
		<div class="header__mobile-nav">
			<a class="header__mobile-nav-item <?php if(is_page('drug-metabolism')) echo 'header__mobile-nav-item--active';?>" href="<?php echo site_url('/drug-metabolism')?>">Drug Metabolism</a>
			<a class="header__mobile-nav-item <?php if(is_page('pgs')) echo 'header__mobile-nav-item--active';?>" href="<?php echo site_url('/pgs')?>">PGS</a>
			<a class="header__mobile-nav-item <?php if(is_page('determine-10')) echo 'header__mobile-nav-item--active';?>" href="<?php echo site_url('/determine-10')?>">Determine 10</a>
			<a class="header__mobile-nav-item <?php if(is_page('infectious-disease')) echo 'header__mobile-nav-item--active';?>" href="<?php echo site_url('/infectious-disease')?>">Infectious Disease</a>
			<a class="header__mobile-nav-item <?php if(get_post_type() == 'post') echo 'header__mobile-nav-item--active';?>" href="<?php echo site_url('/resources')?>">Resources</a>
		</div>
		<img class="header__mobile-icon" src="<?php echo get_template_directory_uri(); ?>/dist/images/common/menu.svg" alt="Lab Genomic">
		<div class="header__nav">
			<a class="header__nav-item <?php if(is_page('drug-metabolism')) echo 'header__nav-item--active';?>" href="<?php echo site_url('/drug-metabolism')?>">Drug Metabolism</a>
			<a class="header__nav-item <?php if(is_page('pgs')) echo 'header__nav-item--active';?>" href="<?php echo site_url('/pgs')?>">PGS</a>
			<a class="header__nav-item <?php if(is_page('determine-10')) echo 'header__nav-item--active';?>" href="<?php echo site_url('/determine-10')?>">Determine 10</a>
			<a class="header__nav-item <?php if(is_page('infectious-disease')) echo 'header__nav-item--active';?>" href="<?php echo site_url('/infectious-disease')?>">Infectious Disease</a>
			<a class="header__nav-item <?php if(get_post_type() == 'post') echo 'header__nav-item--active';?>" href="<?php echo site_url('/resources')?>">Resources</a>
		</div>
		<a class="header__button" href="tel://7144381009">Give Us a Call <img src="<?php echo get_template_directory_uri(); ?>/dist/images/common/lg_right-arrow.svg" alt=""></a>
	</div>
</header>
