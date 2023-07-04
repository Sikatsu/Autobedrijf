<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrapper" class="hfeed">
<header id="header" role="banner">
<div id="top-menu">
	<ul>
		<li><a href="/autobedrijf/contact">Hulp nodig? Mail ons: info@autobedrijf.nl</a></li>
		<!-- Wordpress functie om te kijken of de gebruiker is ingelogd -->
	<?php if (is_user_logged_in()) : ?>
		<!-- Wordpress functie om te kijken op welke pagina de gebruiker zich bevind -->
		<?php if (is_page('admin')) : ?>
		<li><a href="<?php echo esc_url('/autobedrijf/auto-overzicht'); ?>">Terug naar overzicht</a></li>
	<?php else : ?>
		<!-- Ingelogd? Toon de admin knop -->
		<li><a href="<?php echo esc_url( '/autobedrijf/admin' ); ?>">Admin</a></li>
		<?php endif; ?>
	<?php else : ?>
  		<!-- Niet ingelogd? Toon de login knop -->
		<li><a href="<?php echo wp_login_url(); ?>">Inloggen</a></li>
	<?php endif; ?>
	</ul>
</div>
<div id="header-wrapper">
	<div id="logo">
		<a href="/autobedrijf"><img src="https://i.imgur.com/0cbK5GW.png"></a>
	</div>
<nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
</nav>
</div>
</header>
<div id="container">
<main id="content" role="main">