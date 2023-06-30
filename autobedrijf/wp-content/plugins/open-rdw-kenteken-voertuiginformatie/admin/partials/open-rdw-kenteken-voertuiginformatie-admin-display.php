<?php
	/**
	* Facebook script (should "officially" be at the start of the body)
	*/
?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.5";
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php
	/**
	 * Our fancy back-end view.
	 */
?>
<div id="app-container">
	<section class="panel app">
		<div id="header">
			<header class="panel-heading">
				<h2 class="panel-title pull-left">Open data RDW</h2>
				<!-- <div class="pull-right"><a href="#" class="btn btn-primary save-changes">Opslaan</a></div> -->
				<div class="clearfix"></div>
				<ul class="van van-tabs">
					<li class="active"><a href="#dashboard-doc"><span class="dashicons dashicons-dashboard"></span> Dashboard</a></li>
					<li><a href="#widget-doc"><span class="dashicons dashicons-admin-appearance"></span></span> Widget</a></li>
					<li><a href="#shortcode-doc"><span class="dashicons dashicons-editor-code"></span> Shortcode</a></li>
					<li><a href="#contactform7-doc"><span class="dashicons dashicons-email"></span> Contact Form 7</a></li>
					<li><a href="#extensions"><span class="dashicons dashicons-email"></span> Uitbreidingen</a></li>
				</ul>
			</header>
		</div>
		<div class="panel-body">
			<div id="dashboard-doc">
				<h2><?= __('Dashboard', 'Open RDW kenteken voertuiginformatie') ?>:</h2>
				<p><?= __('Thanks for using our Opendata RDW WordPress plugin. You can use this plugin in a couple of different ways and these are explained in more detail in the following tabs.', 'Open RDW kenteken voertuiginformatie') ?></p>
				<p><?= __('You can display this plugin by using Open RDW widgets in your sidebar, next to widgets there is also a possibility to use the WYSIWYG editor to add a shortcode to your page or post (or different CPT). It is also possible to integrate the plugin with Contact Form 7.', 'Open RDW kenteken voertuiginformatie') ?></p>
				<p><?= __('By using this plugin with Contact Form 7 you can easily create "stock forms". The functionality from Contact Form 7 stays the same, this means you can also add extra fields or attachments (pictures).', 'Open RDW kenteken voertuiginformatie') ?></p>

				<h2>Extra:</h2>
				<p><?= __('At the moment you are using the free version of our Open Data RDW plugin, in this version you have 20 different fields to display and only the functions mentioned above are available. Would you like to have more options available? Then this is possible. ', 'Open RDW kenteken voertuiginformatie') ?></p>
				<p><?= __('The Open Data RDW-Premium plugin works identical to this version, but offers support for WooCommerce, has over 60 different fields to display (e.g. fuel information, body work information). The premium version also allows you to sort the fields and categories as you wish.', 'Open RDW kenteken voertuiginformatie') ?></p>
				<p><?= __('This way you can request even more data and you can decide yourself in what order you would like it to be displayed.', 'Open RDW kenteken voertuiginformatie') ?></p>
				<p><?= __('You can order the premium version of this plugin for &euro; 69,- per year.', 'Open RDW kenteken voertuiginformatie') ?> <a href="https://tussendoor.nl/wordpress-plugins/open-rdw" target="_BLANK"><?= __('Order here.', 'Open RDW kenteken voertuiginformatie') ?></a></p>
			</div>
			<div id="widget-doc" style="display: none;">
				<img src="<?= plugin_dir_url( __FILE__ ) . '../images/widget_'.__('en', 'Open RDW kenteken voertuiginformatie').'.png' ?>" height="auto" width="auto" style="float: right; padding: 0 0 30px 30px;" />
				<h2><?= __('Add widget:', 'Open RDW kenteken voertuiginformatie') ?></h2>
				<p><?= __('To add the widget to your view please go to', 'Open RDW kenteken voertuiginformatie') ?> <a href="http://www.jorrits.ma/wordpress/wp-admin/widgets.php" target="_BLANK">widgets</a>. <?= __('Here you can find the Open RDW kenteken widget as an available widget. As soon as you add the widget to one of your sidebars it will show you more options.', 'Open RDW kenteken voertuiginformatie') ?></p>
				<p><strong><?= __('Widget title:', 'Open RDW kenteken voertuiginformatie') ?></strong> <?= __('Here you can fill in the widget title which will be displayed at the top of the widget.', 'Open RDW kenteken voertuiginformatie') ?></p>
				<p><strong>Widget class:</strong> <?= __('This class enables you to style the widget to your own needs.', 'Open RDW kenteken voertuiginformatie') ?></p>

				<ol>
					<li><strong><?= __('Toggle all:', 'Open RDW kenteken voertuiginformatie') ?></strong> <?= __('*Only possible in premium version*. As soon as you toggle the category checkbox, all child checkboxes will be checked as well. this enables you to easily select all the fields in one go.', 'Open RDW kenteken voertuiginformatie') ?></li>
					<li><strong><?= __('Re-sort:', 'Open RDW kenteken voertuiginformatie') ?></strong> <?= __('*Only possible in premium version*. As soon as you click on a category and keep your mouse pressed you can drag and drop your category. This allows you to configure the positions of the categories the way you want.', 'Open RDW kenteken voertuiginformatie') ?></li>
					<li><strong><?= __('Open list:', 'Open RDW kenteken voertuiginformatie') ?></strong> <?= __('As soon as you click on the title of a category, it will slide down and show you all it\'s child fields. After doing this you can easily select the fields you would like to show on your website.', 'Open RDW kenteken voertuiginformatie') ?></li>
					<li><strong><?= __('Re-sort:', 'Open RDW kenteken voertuiginformatie') ?></strong> <?= __('*Only possible in permium version*. Just like you can sort the categories to your own needs it is also possible to sort the single fields within it\'s own category. This way you can display the fields on your website the way you want.', 'Open RDW kenteken voertuiginformatie') ?></li>
				</ol>
			</div>
			<div id="shortcode-doc" style="display: none;">
				<img src="<?= plugin_dir_url( __FILE__ ) . '../images/tinymce_'.__('en', 'Open RDW kenteken voertuiginformatie').'.png' ?>" height="auto" width="auto" style="float: right; padding: 0 0 30px 30px;" />
				<h3><?= __('Add shortcode:', 'Open RDW kenteken voertuiginformatie') ?></h3>
				<p><?= sprintf(__('As soon as you add or edit a page or post you will find the Open RDW button (%s) in your WYSIWYG menu. As soon as you hover your mouse over this button you will see the option "Insert shortcode".', 'Open RDW kenteken voertuiginformatie'), '<img src="'. plugin_dir_url( __FILE__ ) . '../images/open-rdw_grey.png'.'" height="13">') ?></p>
				<p><?= __('If you click on the button you will see a popup screen appear in which you can easily select which options you would like ot display on your page. As soon as you have checked the fields you would like to display you can click on the blue button "Add shortcode" to place the shortcode in your text area.', 'Open RDW kenteken voertuiginformatie') ?></p>
				<p><?= __('After saving your page or post your shortcode will be active immediately.', 'Open RDW kenteken voertuiginformatie') ?></p>

				<ol>
					<li><strong><?= __('Toggle all:', 'Open RDW kenteken voertuiginformatie') ?></strong> <?= __('*Only possible in premium version*. As soon as you toggle the category checkbox, all child checkboxes will be checked as well. this enables you to easily select all the fields in one go.', 'Open RDW kenteken voertuiginformatie') ?></li>
					<li><strong><?= __('Re-sort:', 'Open RDW kenteken voertuiginformatie') ?></strong> <?= __('*Only possible in premium version*. As soon as you click on a category and keep your mouse pressed you can drag and drop your category. This allows you to configure the positions of the categories the way you want.', 'Open RDW kenteken voertuiginformatie') ?></li>
					<li><strong><?= __('Open list:', 'Open RDW kenteken voertuiginformatie') ?></strong> <?= __('As soon as you click on the title of a category, it will slide down and show you all it\'s child fields. After doing this you can easily select the fields you would like to show on your website.', 'Open RDW kenteken voertuiginformatie') ?></li>
					<li><strong><?= __('Re-sort:', 'Open RDW kenteken voertuiginformatie') ?></strong> <?= __('*Only possible in permium version*. Just like you can sort the categories to your own needs it is also possible to sort the single fields within it\'s own category. This way you can display the fields on your website the way you want.', 'Open RDW kenteken voertuiginformatie') ?></li>
				</ol>
			</div>
			<div id="contactform7-doc" style="display: none;">
				<img src="<?= plugin_dir_url( __FILE__ ) . '../images/cf7_'.__('en', 'Open RDW kenteken voertuiginformatie').'.png' ?>" height="auto" width="auto" style="float: right; padding: 0 0 30px 30px; width: 400px;" />
				<h3><?= __('Contact Form 7 integration:', 'Open RDW kenteken voertuiginformatie') ?></h3>
				<p><?= __('You can fully integrate our Open Data RDW plugin into your Contact Form 7 forms. As soon as you add or edit a form you will see a button called "Kenteken Open RDW". When you klick on this button you will see a popup screen which allows you to add the license plate field.', 'Open RDW kenteken voertuiginformatie') ?></p>
				<p><?= __('Next to adding the license plate field you also have some other options, you can also choose to add the brand, model and for example the MOT expiry date. You can easily copy and paste these fields into your form.', 'Open RDW kenteken voertuiginformatie') ?></p>
				<p><?= __('See below for an example form.', 'Open RDW kenteken voertuiginformatie') ?></p>
				<textarea rows="11" cols="40" readonly style="resize: none;" onclick="this.select();"><p><?= __('Search license', 'Open RDW kenteken voertuiginformatie') ?><br />&#13;&#10;[open_rdw open_rdw-ID]</p>&#13;&#10;&#13;&#10;<p><?= __('Brand', 'Open RDW kenteken voertuiginformatie') ?><br />&#13;&#10;[text merk]</p>&#13;&#10;&#13;&#10;<p>Model<br />&#13;&#10;[text handelsbenaming]</p>&#13;&#10;&#13;&#10;<p><?= __('MOT expiry', 'Open RDW kenteken voertuiginformatie') ?><br />&#13;&#10;[text vervaldatum_apk]</p></textarea>
				<p><strong><?= __('*Attention*:', 'Open RDW kenteken voertuiginformatie') ?></strong> <?= __('It is important to add the fields in both your form and mail template from Contact Form 7. If you don\'t do this you will not receive the filled in form data in your mail.', 'Open RDW kenteken voertuiginformatie') ?></p>
				<ol>
					<li><strong><?= __('Open list:', 'Open RDW kenteken voertuiginformatie') ?></strong> <?= __('As soon as you click on the title of a category, it will slide down and show you all it\'s child tags.', 'Open RDW kenteken voertuiginformatie') ?></li>
					<li><strong><?= __('Select tag:', 'Open RDW kenteken voertuiginformatie') ?></strong> <?= __('When you click on one of the tag boxes it will automatically select the tag and enable you to easily copy and paste the tag in your form.', 'Open RDW kenteken voertuiginformatie') ?></li>
				</ol>
			</div>

			<div id="extensions" style="display:none;">
				<div class="row extension-list">
					<h3>Uitbreidingen voor de Open RDW Pro plugin</h3>
					<p>Vanaf versie 2.0 van onze Open RDW Pro plugin hebben we de mogelijkheid om (evt. op verzoek) uitbreidingen te schrijven. Zo zijn er integraties met posts waarbij alle data van een auto (aan de hand van het kenteken) wordt opgeslagen in een post. Maar ook het berekenen van de reistijd naar je bedrijf toe aan de hand van adres- of locatiegegevens. </p>
					<p>Addons zijn beschikbaar voor de <a href="https://tussendoor.nl/wordpress-plugins/open-rdw" title="Open RDW Pro" target="_BLANK">Open RDW PRO</a> variant. </p>
					<p>Mis je een functie of heb je een geweldig idee voor een add-on? Laat het ons weten via <a href="mailto:info@tussendoor.nl">info@tussendoor.nl</a>!</p>
					<hr>

					<div class="column column-50 extension-item">
						<span class="ribbon"><span>Alleen voor PRO</span></span>
						<div class="row">
							<h3>Post via kentekeninvoer</h3>
							<a href="https://tussendoor.nl/wordpress-plugins/open-rdw" title="Add CPT via kenteken" target="_BLANK">
								<img src="<?php echo ORK_PLUGIN_PATH; ?>/admin/images/addon_cpt_add.png" name="Add CPT via kenteken">
							</a>
							<p>Eenvoudig voertuigen toevoegen als WordPress post via het kenteken? Check! Op verzoek hebben we deze addon ontwikkeld, waardoor je alle informatie in de post verwerkt via het ingevoerde kenteken. Je bent natuurlijk vrij om de data aan te passen en uit te breiden met foto's, aanbiedingtekst, formulieren en andere afbeeldingen.</p>
							<p>Prijs: &euro;35,- per jaar (excl. btw)</p>
							<p class="center">
								<a class="btn btn-primary" href="https://tussendoor.nl/wordpress-plugins/open-rdw" title="Add CPT via kenteken" target="_BLANK">Download nu</a>
							</p>
						</div>
					</div>

					<div class="column column-50 extension-item">
						<span class="ribbon"><span>Alleen voor PRO</span></span>
						<div class="row">
							<h3>Reistijd berekenen</h3>
							<a href="https://tussendoor.nl/wordpress-plugins/open-rdw" title="WP Travel Time" target="_BLANK">
								<img src="<?php echo ORK_PLUGIN_PATH; ?>/admin/images/addon_tt_add.png" name="WP Travel Time">
							</a>
							<p><?php echo __('This plugin simply shows the traveltime or the distance between your company and the address of the visitor of your website. This extensions uses the Google Distance Matrix API, therefor an API key is required. Not sure how to get one? Contact us.', 'Open RDW kenteken voertuiginformatie'); ?></p>
							<p>Prijs: &euro;20,- per jaar (excl. btw)</p>
							<p class="center">
								<a class="btn btn-primary" href="https://tussendoor.nl/wordpress-plugins/open-rdw" title="Add CPT via kenteken" target="_BLANK">Download nu</a>
							</p>
						</div>
					</div>
				</div>
				<div class="row extension-list">
					<div class="column column-50 end extension-item">
						<div class="row">
							<h3>Mis je een uitbreiding?</h3>
							<a href="https://tussendoor.nl/contact" title="Extension name" target="_BLANK">
								<img src="<?php echo ORK_PLUGIN_PATH; ?>/admin/images/addon_custom_new.png" name="Uitbreidingen op aanvraag">
							</a>
							<p>Mis je een functie of heb je een geweldig idee voor een add-on? Laat het ons weten via <a href="mailto:info@tussendoor.nl">info@tussendoor.nl</a>.</p> 
							<p>Je kunt ook op de contact button hieronder klikken. Thanks.</p>
							<p class="center"><a class="btn btn-primary" href="https://tussendoor.nl/contact" target="_BLANK" title="Extension name">Contact</a></p>
						</div>
					</div>
				</div>

			</div>
		</div>
		<footer class="panel-footing clearfix">
			<div class="footer">
				<div class="address">
					Tussendoor internet &amp; marketing<br />
					Celsiusweg 2<br />
					8912 AN Leeuwarden<br />
				</div>
				<div class="logo">
					<svg viewBox="-640.296 424.875 184 50" height="55px"><path d="m-634.22 452.68v-11.339h-1.948c-0.383 0-0.575 0.259-0.575 0.773v1.174l-2.546-0.174v-4.245h13.06v4.245l-2.547 0.174v-1.174c0-0.281-0.042-0.482-0.125-0.599-0.083-0.115-0.283-0.175-0.599-0.175h-1.698v11.935l1.973 0.076v2.122h-7.042v-2.022l1.323-0.073c0.49-0.05 0.73-0.28 0.73-0.69z" fill="#003A60"></path><path d="m-611.79 453.5v1.972h-4.046v-1.621c-0.915 1.299-2.264 1.948-4.045 1.948-2.581 0-3.871-1.441-3.871-4.321v-5.767c0-0.45-0.208-0.682-0.624-0.701l-0.8-0.049v-2.05h4.395v7.917c0 0.883 0.125 1.549 0.375 1.998 0.25 0.447 0.766 0.674 1.549 0.674 0.782 0 1.411-0.24 1.885-0.725 0.475-0.482 0.712-1.064 0.712-1.747v-5.269c0-0.266-0.046-0.454-0.137-0.563-0.092-0.107-0.254-0.167-0.488-0.187l-0.799-0.049v-2.05h4.396v9.79c0 0.267 0.04 0.444 0.125 0.537 0.083 0.092 0.25 0.154 0.499 0.188l0.87 0.07z" fill="#003A60"></path><path d="m-603.97 444.81c-0.4-0.151-0.883-0.224-1.449-0.224s-1.02 0.128-1.361 0.385c-0.342 0.261-0.513 0.575-0.513 0.95 0 0.374 0.063 0.666 0.188 0.873 0.125 0.209 0.32 0.388 0.588 0.537 0.415 0.217 0.914 0.405 1.498 0.562 0.583 0.159 1.015 0.284 1.298 0.376s0.637 0.246 1.061 0.461c0.424 0.218 0.745 0.45 0.962 0.7 0.582 0.615 0.873 1.405 0.873 2.372 0 1.249-0.453 2.225-1.361 2.935-0.907 0.705-2.06 1.062-3.458 1.062-2.031 0-3.563-0.26-4.594-0.775v-3.471l2.247-0.175v1.196c0 0.733 0.698 1.1 2.098 1.1 1.399 0 2.097-0.508 2.097-1.523 0-0.366-0.12-0.665-0.361-0.898-0.241-0.232-0.479-0.392-0.712-0.475s-0.511-0.166-0.836-0.249c-0.324-0.084-0.642-0.167-0.949-0.25-0.308-0.083-0.641-0.195-0.999-0.337s-0.754-0.346-1.187-0.613c-0.849-0.55-1.274-1.469-1.274-2.759s0.458-2.284 1.374-2.983c0.916-0.699 2.069-1.05 3.459-1.05s2.767 0.334 4.133 0.999v2.997l-2.248 0.174v-1.049c-0.01-0.42-0.2-0.7-0.58-0.85z" fill="#003A60"></path><path d="m-592.71 444.81c-0.4-0.151-0.883-0.224-1.449-0.224-0.565 0-1.02 0.128-1.36 0.385-0.341 0.261-0.512 0.575-0.512 0.95 0 0.374 0.062 0.666 0.188 0.873 0.124 0.209 0.32 0.388 0.587 0.537 0.416 0.217 0.914 0.405 1.498 0.562 0.583 0.159 1.015 0.284 1.299 0.376 0.283 0.092 0.636 0.246 1.061 0.461 0.425 0.218 0.745 0.45 0.962 0.7 0.582 0.615 0.874 1.405 0.874 2.372 0 1.249-0.454 2.225-1.361 2.935-0.908 0.705-2.061 1.062-3.459 1.062-2.031 0-3.563-0.26-4.595-0.775v-3.471l2.247-0.175v1.196c0 0.733 0.699 1.1 2.098 1.1s2.098-0.508 2.098-1.523c0-0.366-0.121-0.665-0.362-0.898-0.242-0.232-0.479-0.392-0.712-0.475s-0.512-0.166-0.836-0.249c-0.324-0.084-0.641-0.167-0.949-0.25s-0.641-0.195-0.999-0.337c-0.358-0.142-0.753-0.346-1.186-0.613-0.85-0.55-1.274-1.469-1.274-2.759s0.459-2.284 1.375-2.983 2.067-1.05 3.458-1.05c1.389 0 2.767 0.334 4.132 0.999v2.997l-2.248 0.174v-1.049c0-0.42-0.19-0.7-0.57-0.85z" fill="#003A60"></path><path d="m-581.72 442.54c1.249 0 2.238 0.304 2.972 0.912 0.732 0.606 1.098 1.459 1.098 2.559 0 0.733-0.158 1.378-0.473 1.936-0.317 0.558-0.708 0.994-1.175 1.312-0.466 0.315-1.032 0.572-1.697 0.771-1.116 0.335-2.373 0.502-3.771 0.502 0.05 0.88 0.325 1.592 0.823 2.134 0.5 0.542 1.266 0.812 2.299 0.812 1.031 0 2.063-0.367 3.096-1.1l0.949 2.022c-0.333 0.3-0.895 0.608-1.686 0.925-0.79 0.316-1.694 0.475-2.709 0.475-2.031 0-3.521-0.563-4.47-1.686-0.95-1.125-1.425-2.668-1.425-4.633s0.542-3.613 1.624-4.943c1.09-1.34 2.61-2 4.56-2zm-1.14 5.7c0.607-0.109 1.17-0.352 1.685-0.725 0.516-0.375 0.774-0.822 0.774-1.335 0-1.018-0.5-1.526-1.499-1.526-0.932 0-1.647 0.371-2.147 1.111-0.5 0.743-0.775 1.628-0.824 2.661 0.74-0.01 1.41-0.07 2.02-0.18z" fill="#003A60"></path><path d="m-576.06 444.91v-1.998h4.221v1.624c0.432-0.615 1.007-1.102 1.722-1.461 0.716-0.357 1.49-0.536 2.323-0.536 1.266 0 2.243 0.362 2.934 1.086s1.036 1.811 1.036 3.258v6.519l1.424 0.076v1.995h-5.943v-1.897l0.824-0.074c0.25-0.033 0.432-0.103 0.549-0.213 0.118-0.108 0.176-0.311 0.176-0.609v-5.145c0-0.915-0.142-1.594-0.426-2.036-0.283-0.44-0.82-0.66-1.611-0.66s-1.42 0.249-1.886 0.749c-0.465 0.497-0.698 1.089-0.698 1.773v6.041l1.423 0.076v1.995h-5.944v-1.897l0.825-0.074c0.25-0.033 0.432-0.103 0.549-0.213 0.117-0.108 0.175-0.311 0.175-0.609v-6.918c0-0.499-0.208-0.758-0.625-0.775l-1.04-0.09z" fill="#003A60"></path><path d="m-554.66 442.54c0.715 0 1.399 0.1 2.048 0.299v-2.52c0-0.366-0.217-0.567-0.649-0.602l-1.073-0.075v-1.972h4.644v15.183c0.017 0.384 0.225 0.574 0.625 0.574l0.874 0.051v1.995h-4.046v-1.471l-0.074-0.026c-0.75 1.217-1.883 1.824-3.397 1.824-1.898 0-3.23-0.633-3.996-1.899-0.699-1.148-1.049-2.556-1.049-4.218 0-2.166 0.537-3.897 1.611-5.195 1.09-1.28 2.58-1.92 4.49-1.92zm2.05 9.04v-6.469c-0.599-0.268-1.232-0.398-1.897-0.398-1.099 0-1.902 0.441-2.411 1.321-0.507 0.884-0.761 2.008-0.761 3.371 0 2.799 0.9 4.197 2.697 4.197 0.683 0 1.249-0.198 1.697-0.588 0.45-0.39 0.67-0.87 0.67-1.43z" fill="#003A60"></path><path d="m-546.74 449.18c0-1.233 0.183-2.303 0.55-3.21 0.365-0.907 0.857-1.604 1.473-2.085 1.181-0.899 2.488-1.349 3.92-1.349 0.999 0 1.844 0.162 2.535 0.487 0.69 0.323 1.232 0.699 1.623 1.124 0.392 0.423 0.724 1.04 1 1.847 0.273 0.809 0.411 1.759 0.411 2.859 0 2.296-0.558 4.037-1.674 5.218-1.115 1.186-2.542 1.774-4.282 1.774-1.739 0-3.101-0.561-4.083-1.687-0.99-1.11-1.48-2.77-1.48-4.97zm5.74 4.47c1.814 0 2.722-1.465 2.722-4.394 0-1.482-0.205-2.607-0.613-3.374-0.407-0.766-1.091-1.148-2.048-1.148s-1.66 0.367-2.11 1.099c-0.449 0.733-0.674 1.733-0.674 2.997 0 2.348 0.433 3.819 1.299 4.421 0.38 0.25 0.86 0.39 1.42 0.39z" fill="#003A60"></path><path d="m-533.56 449.18c0-1.233 0.183-2.303 0.55-3.21 0.366-0.907 0.857-1.604 1.473-2.085 1.181-0.899 2.488-1.349 3.921-1.349 0.999 0 1.843 0.162 2.535 0.487 0.69 0.323 1.231 0.699 1.623 1.124 0.39 0.423 0.724 1.04 0.999 1.847 0.275 0.809 0.412 1.759 0.412 2.859 0 2.296-0.558 4.037-1.673 5.218-1.115 1.186-2.543 1.774-4.282 1.774-1.74 0-3.101-0.561-4.083-1.687-0.98-1.11-1.48-2.77-1.48-4.97zm5.75 4.47c1.815 0 2.722-1.465 2.722-4.394 0-1.482-0.204-2.607-0.612-3.374-0.409-0.766-1.091-1.148-2.048-1.148-0.958 0-1.661 0.367-2.11 1.099-0.45 0.733-0.675 1.733-0.675 2.997 0 2.348 0.433 3.819 1.299 4.421 0.39 0.25 0.86 0.39 1.43 0.39z" fill="#003A60"></path><path d="m-518.82 452.68v-6.918c0-0.266-0.046-0.454-0.138-0.563-0.092-0.107-0.253-0.167-0.487-0.187l-1.047-0.073v-2.023h4.218v1.872c0.3-0.648 0.766-1.186 1.399-1.61 0.632-0.424 1.36-0.637 2.186-0.637 0.824 0 1.61 0.184 2.36 0.551v3.721l-2.323 0.174v-1.148c0-0.334-0.083-0.541-0.25-0.625-0.184-0.082-0.408-0.124-0.675-0.124-0.666 0-1.21 0.237-1.635 0.712s-0.636 1.078-0.636 1.811v5.792l2.172 0.101v1.973h-6.692v-1.899l0.824-0.073c0.25-0.032 0.433-0.104 0.55-0.214 0.13-0.1 0.19-0.31 0.19-0.6z" fill="#003A60"></path><path d="m-483.01 455.84c-0.583 0-1.032-0.162-1.349-0.487-0.316-0.324-0.474-0.749-0.474-1.273s0.162-0.956 0.487-1.299c0.325-0.343 0.766-0.512 1.323-0.512 0.558 0 1.003 0.162 1.336 0.488 0.333 0.324 0.499 0.749 0.499 1.272 0 0.524-0.157 0.957-0.474 1.299-0.33 0.35-0.77 0.51-1.36 0.51z" fill="#003A60"></path><path d="m-478.12 444.91v-1.998h4.221v1.624c0.432-0.615 1.006-1.102 1.723-1.461 0.716-0.357 1.49-0.536 2.322-0.536 1.265 0 2.243 0.362 2.935 1.086 0.691 0.724 1.036 1.811 1.036 3.258v6.519l1.424 0.076v1.995h-5.944v-1.897l0.824-0.074c0.25-0.033 0.433-0.103 0.55-0.213 0.117-0.108 0.175-0.311 0.175-0.609v-5.145c0-0.915-0.143-1.594-0.425-2.036-0.283-0.44-0.82-0.66-1.61-0.66-0.792 0-1.42 0.249-1.886 0.749-0.466 0.497-0.699 1.089-0.699 1.773v6.041l1.424 0.076v1.995h-5.944v-1.897l0.824-0.074c0.25-0.033 0.433-0.103 0.549-0.213 0.118-0.108 0.176-0.311 0.176-0.609v-6.918c0-0.499-0.209-0.758-0.625-0.775l-1.04-0.09z" fill="#003A60"></path><path d="m-458.52 437.67v15.731l1.423 0.076v1.995h-5.943v-1.897l0.824-0.074c0.483-0.051 0.724-0.316 0.724-0.799v-12.312c0-0.365-0.208-0.565-0.624-0.599l-0.874-0.049v-2.073h4.47z" fill="#003A60"></path><rect y="439.08" x="-506.12" height="16.964" width="2.134" fill="#009EE2"></rect><path d="m-499.86 424.81c-3.459 0-6.262 2.804-6.262 6.261v14.723h18.179c1.549 0 2.804-1.257 2.804-2.807v-18.177h-14.72z" fill="#009EE2"></path><path d="m-492.92 431.68h-5.405c-0.511 0-0.927 0.417-0.927 0.927s0.416 0.925 0.927 0.925h1.777v4.48c0 0.509 0.416 0.927 0.926 0.927s0.926-0.418 0.926-0.927v-4.48h1.776c0.51 0 0.927-0.415 0.927-0.925s-0.44-0.94-0.95-0.94z" fill="#fff"></path><g fill="#009EE2"><path d="m-636.24 464.46c1.69 0 2.319 1.474 2.319 1.474h0.026s-0.052-0.241-0.052-0.551v-2.921h-1.271v-0.522h1.834v8.562c0 0.2 0.107 0.297 0.294 0.297h0.805v0.522h-0.884c-0.549 0-0.778-0.229-0.778-0.737v-0.148c0-0.31 0.052-0.469 0.052-0.469h-0.026s-0.576 1.515-2.425 1.515c-1.796 0-2.896-1.435-2.896-3.512 0-2.13 1.24-3.51 3-3.51zm-0.08 6.47c1.233 0 2.387-0.872 2.387-2.976 0-1.488-0.765-2.946-2.333-2.946-1.312 0-2.384 1.083-2.384 2.959-0.01 1.82 0.95 2.97 2.32 2.97z"></path><path d="m-627.94 464.46c1.824 0 2.737 1.433 2.737 3.053 0 0.149-0.028 0.364-0.028 0.364h-5.373c0 1.943 1.312 3.056 2.866 3.056 1.287 0 2.077-0.846 2.077-0.846l0.309 0.469s-0.939 0.926-2.386 0.926c-1.888 0-3.455-1.367-3.455-3.497-0.02-2.26 1.52-3.52 3.24-3.52zm2.14 2.89c-0.068-1.635-1.045-2.372-2.157-2.372-1.233 0-2.371 0.804-2.613 2.372h4.77z"></path><path d="m-619.68 465.14h-1.273v-0.521h1.273v-1.864h0.562v1.864h1.756v0.521h-1.756v3.711c0 1.771 1.059 1.997 1.595 1.997 0.187 0 0.309-0.025 0.309-0.025v0.521s-0.135 0.027-0.336 0.027c-0.697 0-2.129-0.255-2.129-2.478v-3.75z"></path><path d="m-613.49 464.62h2.575v0.521h-1.059l1.916 5.013c0.081 0.201 0.121 0.429 0.121 0.429h0.025s0.042-0.228 0.124-0.429l1.914-5.013h-1.057v-0.521h2.572v0.521h-0.911l-2.386 6.179h-0.536l-2.385-6.179h-0.914v-0.52z"></path><path d="m-601.53 467.23h0.445v-0.292c0-1.436-0.738-1.946-1.783-1.946-1.181 0-1.97 0.656-1.97 0.656l-0.321-0.455s0.844-0.736 2.305-0.736c1.539 0 2.33 0.831 2.33 2.464v3.578c0 0.2 0.107 0.297 0.297 0.297h0.803v0.522h-0.885c-0.549 0-0.776-0.229-0.776-0.737v-0.148c0-0.363 0.051-0.603 0.051-0.603h-0.027s-0.589 1.648-2.372 1.648c-1.071 0-2.25-0.605-2.25-1.983 0-2.23 3-2.27 4.15-2.27zm-1.9 3.73c1.542 0 2.347-1.513 2.347-2.84v-0.363h-0.429c-0.497 0-3.578-0.12-3.578 1.677 0 0.77 0.57 1.52 1.66 1.52z"></path><path d="m-598.48 470.8h1.206v-5.359c0-0.203-0.107-0.297-0.294-0.297h-0.979v-0.521h1.059c0.549 0 0.779 0.227 0.779 0.734v0.442c0 0.308-0.056 0.551-0.056 0.551h0.027c0.228-0.63 1.166-1.89 2.84-1.89 1.745 0 2.213 1.031 2.213 2.613v3.726h1.205v0.522h-1.769v-4.047c0-1.166-0.146-2.264-1.649-2.264-1.595 0-2.812 1.364-2.812 2.987v2.801h1.204v0.522h-2.974v-0.51z"></path><path d="m-586.27 470.8h1.206v-5.656h-1.273v-0.521h1.837v6.177h1.205v0.522h-2.975v-0.52zm1.13-8.86h0.722v0.979h-0.722v-0.98z"></path><path d="m-582.32 470.8h1.206v-5.359c0-0.203-0.107-0.297-0.294-0.297h-0.978v-0.521h1.058c0.55 0 0.777 0.227 0.777 0.734v0.442c0 0.308-0.052 0.551-0.052 0.551h0.025c0.229-0.63 1.169-1.89 2.842-1.89 1.742 0 2.21 1.031 2.21 2.613v3.726h1.208v0.522h-1.769v-4.047c0-1.166-0.147-2.264-1.648-2.264-1.594 0-2.815 1.364-2.815 2.987v2.801h1.207v0.522h-2.976v-0.51z"></path><path d="m-572.63 465.14h-1.275v-0.521h1.275v-1.864h0.562v1.864h1.755v0.521h-1.755v3.711c0 1.771 1.058 1.997 1.595 1.997 0.188 0 0.308-0.025 0.308-0.025v0.521s-0.133 0.027-0.335 0.027c-0.697 0-2.13-0.255-2.13-2.478l-0.02-3.75z"></path><path d="m-565.95 464.46c1.822 0 2.733 1.433 2.733 3.053 0 0.149-0.025 0.364-0.025 0.364h-5.375c0 1.943 1.313 3.056 2.868 3.056 1.286 0 2.078-0.846 2.078-0.846l0.307 0.469s-0.938 0.926-2.385 0.926c-1.89 0-3.458-1.367-3.458-3.497 0-2.26 1.54-3.52 3.25-3.52zm2.15 2.89c-0.067-1.635-1.045-2.372-2.156-2.372-1.232 0-2.373 0.804-2.614 2.372h4.77z"></path><path d="m-561.85 470.8h1.072v-5.359c0-0.203-0.107-0.297-0.296-0.297h-0.978v-0.521h1.059c0.55 0 0.777 0.227 0.777 0.734v0.47c0 0.307-0.027 0.548-0.027 0.548h0.027c0.336-1.03 1.061-1.808 2.117-1.808 0.201 0 0.388 0.039 0.388 0.039v0.564s-0.158-0.027-0.307-0.027c-1.569 0-2.199 1.917-2.199 3.284v2.372h1.073v0.522h-2.707v-0.5z"></path><path d="m-556.93 470.8h1.204v-5.359c0-0.203-0.107-0.297-0.293-0.297h-0.979v-0.521h1.058c0.552 0 0.778 0.227 0.778 0.734v0.442c0 0.308-0.053 0.551-0.053 0.551h0.025c0.23-0.63 1.167-1.89 2.844-1.89 1.739 0 2.209 1.031 2.209 2.613v3.726h1.207v0.522h-1.769v-4.047c0-1.166-0.146-2.264-1.647-2.264-1.596 0-2.816 1.364-2.816 2.987v2.801h1.205v0.522h-2.973v-0.51z"></path><path d="m-544.72 464.46c1.823 0 2.735 1.433 2.735 3.053 0 0.149-0.026 0.364-0.026 0.364h-5.375c0 1.943 1.314 3.056 2.868 3.056 1.286 0 2.076-0.846 2.076-0.846l0.309 0.469s-0.938 0.926-2.385 0.926c-1.888 0-3.457-1.367-3.457-3.497-0.02-2.26 1.52-3.52 3.24-3.52zm2.14 2.89c-0.067-1.635-1.044-2.372-2.157-2.372-1.232 0-2.371 0.804-2.612 2.372h4.77z"></path><path d="m-539.81 465.14h-1.272v-0.521h1.272v-1.864h0.564v1.864h1.755v0.521h-1.755v3.711c0 1.771 1.059 1.997 1.594 1.997 0.188 0 0.307-0.025 0.307-0.025v0.521s-0.132 0.027-0.334 0.027c-0.696 0-2.131-0.255-2.131-2.478l0.01-3.75z"></path><path d="m-531.15 466.24v-0.026s-1.354-0.388-1.354-2.104c0-1.34 1.044-2.331 2.867-2.331 0.401 0 0.993 0.133 0.993 0.133l-0.189 0.512s-0.495-0.109-0.843-0.109c-1.259 0-2.224 0.687-2.224 1.784 0 0.669 0.254 1.888 2.331 1.888h2.412v-1.364h0.575v1.364h1.302v0.536h-1.302v1.5c0 2.386-1.259 3.459-3.121 3.459-1.891 0-3.214-1.166-3.214-2.719-0.01-1.1 0.6-2.2 1.76-2.52zm1.44 4.68c1.514 0 2.546-0.79 2.546-2.894v-1.5h-2.426c-1.876 0-2.732 0.91-2.732 2.21 0 1.2 0.97 2.18 2.61 2.18z"></path><path d="m-520.95 470.8h1.206v-5.359c0-0.203-0.107-0.297-0.296-0.297h-0.976v-0.521h1.057c0.55 0 0.777 0.227 0.777 0.734v0.442c0 0.308-0.054 0.551-0.054 0.551h0.028c0.336-1.006 1.529-1.89 2.573-1.89 1.34 0 1.969 0.63 2.117 1.824h0.027c0.375-0.94 1.394-1.824 2.545-1.824 1.729 0 2.238 1.019 2.238 2.613v3.726h1.206v0.522h-1.769v-4.047c0-1.261-0.255-2.292-1.675-2.292-1.461 0-2.491 1.555-2.491 3.016v2.801h1.206v0.522h-1.769v-4.047c0-1.152-0.146-2.292-1.634-2.292-1.462 0-2.548 1.541-2.548 3.016v2.801h1.208v0.522h-2.976v-0.51h-0.01z"></path><path d="m-503.52 467.23h0.443v-0.292c0-1.436-0.738-1.946-1.78-1.946-1.183 0-1.971 0.656-1.971 0.656l-0.322-0.455s0.844-0.736 2.304-0.736c1.542 0 2.332 0.831 2.332 2.464v3.578c0 0.2 0.107 0.297 0.295 0.297h0.803v0.522h-0.884c-0.551 0-0.777-0.229-0.777-0.737v-0.148c0-0.363 0.052-0.603 0.052-0.603h-0.026s-0.592 1.648-2.372 1.648c-1.072 0-2.251-0.605-2.251-1.983 0.01-2.23 3.01-2.27 4.16-2.27zm-1.9 3.73c1.541 0 2.346-1.513 2.346-2.84v-0.363h-0.43c-0.495 0-3.578-0.12-3.578 1.677 0 0.77 0.57 1.52 1.66 1.52z"></path><path d="m-500.4 470.8h1.072v-5.359c0-0.203-0.106-0.297-0.294-0.297h-0.977v-0.521h1.058c0.548 0 0.776 0.227 0.776 0.734v0.47c0 0.307-0.026 0.548-0.026 0.548h0.026c0.335-1.03 1.058-1.808 2.117-1.808 0.2 0 0.389 0.039 0.389 0.039v0.564s-0.162-0.027-0.31-0.027c-1.567 0-2.196 1.917-2.196 3.284v2.372h1.073v0.522h-2.709v-0.5z"></path><path d="m-495.7 470.8h1.208v-8.337h-1.276v-0.521h1.836v5.319h1.126l1.809-2.117h-1.045v-0.521h2.72v0.521h-0.951l-2.01 2.319v0.027c0.015 0 0.175 0.065 0.443 0.509l1.504 2.506c0.144 0.242 0.238 0.295 0.641 0.295h0.495v0.523h-0.523c-0.724 0-0.87-0.135-1.219-0.711l-1.528-2.533c-0.161-0.257-0.322-0.294-0.684-0.294h-0.778v3.015h1.208v0.523h-2.977v-0.52z"></path><path d="m-485.29 464.46c1.821 0 2.734 1.433 2.734 3.053 0 0.149-0.026 0.364-0.026 0.364h-5.375c0 1.943 1.313 3.056 2.867 3.056 1.286 0 2.077-0.846 2.077-0.846l0.309 0.469s-0.939 0.926-2.386 0.926c-1.888 0-3.457-1.367-3.457-3.497 0.01-2.26 1.55-3.52 3.26-3.52zm2.15 2.89c-0.065-1.635-1.042-2.372-2.156-2.372-1.232 0-2.371 0.804-2.612 2.372h4.77z"></path><path d="m-480.38 465.14h-1.271v-0.521h1.271v-1.864h0.562v1.864h1.757v0.521h-1.757v3.711c0 1.771 1.06 1.997 1.596 1.997 0.186 0 0.309-0.025 0.309-0.025v0.521s-0.136 0.027-0.338 0.027c-0.696 0-2.13-0.255-2.13-2.478v-3.75z"></path><path d="m-477.04 470.8h1.205v-5.656h-1.273v-0.521h1.839v6.177h1.203v0.522h-2.974v-0.52zm1.13-8.86h0.722v0.979h-0.722v-0.98z"></path><path d="m-473.08 470.8h1.206v-5.359c0-0.203-0.107-0.297-0.294-0.297h-0.98v-0.521h1.06c0.551 0 0.779 0.227 0.779 0.734v0.442c0 0.308-0.055 0.551-0.055 0.551h0.027c0.229-0.63 1.165-1.89 2.842-1.89 1.74 0 2.21 1.031 2.21 2.613v3.726h1.205v0.522h-1.769v-4.047c0-1.166-0.147-2.264-1.647-2.264-1.598 0-2.814 1.364-2.814 2.987v2.801h1.204v0.522h-2.974v-0.51z"></path><path d="m-461.45 473.58c1.433 0 2.545-0.684 2.545-2.306v-0.777c0-0.306 0.055-0.549 0.055-0.549h-0.027c-0.402 0.815-1.14 1.366-2.25 1.366-1.742 0-2.977-1.366-2.977-3.457s1.14-3.402 2.882-3.402c1.019 0 1.97 0.388 2.333 1.271h0.025s-0.042-0.094-0.042-0.334c0-0.55 0.202-0.775 0.779-0.775h0.992v0.52h-0.911c-0.188 0-0.295 0.095-0.295 0.298v5.84c0 2.05-1.474 2.854-3.069 2.854-0.736 0-1.447-0.188-2.104-0.52l0.268-0.498c0 0.01 0.83 0.47 1.79 0.47zm2.56-5.72c0-2.157-1.021-2.853-2.333-2.853-1.434 0-2.292 1.042-2.292 2.853 0 1.81 0.991 2.905 2.424 2.905 1.18 0.01 2.2-0.73 2.2-2.9z"></path></g></svg>
				</div>
				<div class="info">
					<div class="info-container">
						<br />
						<strong>e.</strong> <a href="mailto:info@tussendoor.nl">info@tussendoor.nl</a><br />
						<strong>w.</strong> <a href="http://tussendoor.nl" target="_blank">http://tussendoor.nl</a>
					</div>
				</div>
			</div>
		</footer>
	</section>
	<!-- <section class="panel feed">
		<div id="header">
			<header class="panel-heading">
				<h2 class="panel-title"><?= __('Recent news on Tussendoor.nl', 'Open RDW kenteken voertuiginformatie'); ?></h2>
			</header>
			<div class="panel-body"></div>
		</div>
	</section> -->
	<section class="panel feed">
		<div id="header">
			<header class="panel-heading">
				<h2 class="panel-title"><?= __('Like us on Facebook', 'Open RDW kenteken voertuiginformatie') ?></h2>
				<p><?= __('Like us on Facebook and stay tuned on all our updates.', 'Open RDW kenteken voertuiginformatie') ?></p>
			</header>
			<div class="panel-body" style="text-align: center;">
				<div class="fb-page" data-href="https://www.facebook.com/TussendoorHQ/" data-tabs="timeline" data-small-header="false" data-height="700" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
					<div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/TussendoorHQ/"></blockquote>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>