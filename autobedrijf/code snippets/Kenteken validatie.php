<?php
add_filter('wpcf7_validate_open_rdw', 'validate_license', 10, 2);
add_filter('wpcf7_validate_open_rdw*', 'validate_license', 10, 2);

function validate_license($result, $tag) {
	// Haal de naam op van het veld dat gevalideerd moet worden, tag is de identifier van CF7
    $tag_name = $tag->name;

	// Bekijk of het veldnaam 'kenteken' is
    if ($tag_name === 'kenteken') {
		// Haal de waarde uit het veldnaam en trim deze qua spaties (wit ruimte)
        $license_value = isset($_POST[$tag_name]) ? trim($_POST[$tag_name]) : '';

        // Regex voor alle bestaande kenteken combinaties
        $license_regex = '/^(?:[A-Z]{2}-?\d{2}-?\d{2}|\d{2}-?\d{2}-?[A-Z]{2}|\d{2}-?[A-Z]{2}-?\d{2}|[A-Z]{2}-?\d{2}-?[A-Z]{2}|
        [A-Z]{2}-?[A-Z]{2}-?\d{2}|\d{2}-?[A-Z]{2}-?[A-Z]{2}|\d{2}-?[A-Z]{3}-?\d{1}|\d{1}-?[A-Z]{3}-?\d{2}|
        [A-Z]{2}-?\d{3}-?[A-Z]{1}|[A-Z]{1}-?\d{3}-?[A-Z]{2}|[A-Z]{3}-?\d{2}-?[A-Z]{1}|\d{1}-?[A-Z]{2}-?\d{3})$/i';


		// Komt de ingevoerde waarde overheen met de regex?
        if (!preg_match($license_regex, $license_value)) {
			$result->invalidate($tag, 'Ongeldige invoer.');
        }
    }
	// En anders gaan we hem tonen!
    return $result;
}
?>