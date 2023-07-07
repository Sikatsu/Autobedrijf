<?php
// Voordat een mail wordt verzonden, trigger de 'save_cf7_form_data' functie
add_action('wpcf7_before_send_mail', 'save_cf7_form_data');

function save_cf7_form_data($contact_form) {
    // Haal het formulier ID op
    $form_id = $contact_form->id();

    // Controleer of het het juiste formulier is (gelijk aan)
    if ($form_id == 273) {
        // Haal de ingevoerde formulier data op
        $submission = WPCF7_Submission::get_instance();

		// Als er data is, ken deze toe aan $data
        if ($submission) {
            $data = $submission->get_posted_data();

            // Controleer of er een afbeelding geüpload is
            $uploaded_files = $_FILES['afbeelding'];

			// Afbeelding aanwezig? Wijs de waarde toe aan $file_path
            if (!empty($uploaded_files)) {
                $file_path = $uploaded_files['tmp_name'];

				// Haal de informatie van de media library op en sla het op in $upload_dir
                $upload_dir = wp_upload_dir();
				// Haal de naam op van de afbeelding die geüpload is
                $file_name = basename($uploaded_files['name']);
				// De variabel weet nu het exacte pad en de naam van het bestand
                $file_path = $upload_dir['path'] . '/' . $file_name;

                // Haal de url van het bestand op
                $file_url = $upload_dir['url'] . '/' . $file_name;
            } else {
                $file_url = '';
            }

            // Sla de formulier data op in de database
            global $wpdb;
            $table_name = $wpdb->prefix . 'autos';

            $wpdb->insert(
                $table_name,
                array(
                    'kenteken'       => $data['kenteken'],
                    'merk'           => $data['merk'],
                    'handelsbenaming'=> $data['handelsbenaming'],
                    'omschrijving'   => $data['omschrijving'],
                    'prijs'          => $data['prijs'],
                    'afbeelding_url' => $file_url,
					'site_url' 		 => $data['url'],
                )
            );
        }
    }
}
?>