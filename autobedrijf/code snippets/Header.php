<div id="top-menu">
	<ul>
		<li><a href="/autobedrijf/contact">Hulp nodig? Mail ons: info@autobedrijf.nl</a></li>
		<!-- Wordpress functie (conditional statement) om te kijken of de gebruiker is ingelogd -->
	<?php if (is_user_logged_in()) : ?>
		<!-- Wordpress functie (conditional statement) om te kijken op welke pagina de gebruiker zich bevind -->
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