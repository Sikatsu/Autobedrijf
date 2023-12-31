<div class="card-wrapper">
	<?php
	global $wpdb;
	$table_name = $wpdb->prefix . 'autos';

	// Haal de data uit de database, sorteer en limiteer en wijs deze toe aan $results
	$results = $wpdb->get_results("SELECT * FROM $table_name ORDER BY id DESC LIMIT 3");

  // Data aanwezig? Haal waarden op uit elke rij van de resultaten
  if ($results) {
    foreach ($results as $row) {
	  	  $auto_id = $row->id;
      	$kenteken = $row->kenteken;
      	$merk = $row->merk;
	  	  $handelsbenaming = $row->handelsbenaming;
      	$omschrijving = $row->omschrijving;
      	$prijs = $row->prijs;
	  	  $afbeelding_url = $row->afbeelding_url;
		    $site_url = $row->site_url;
		
      // Echo de resultaten in kaart formaat, toon een delete knop als gebruiker admin is
      ?>

    <div class="card">
		  <?php if (!empty($site_url)) : ?>
		    <a href="<?php echo esc_url($site_url); ?>" target="_blank">
		  <?php endif; ?>
	  <img src="<?php echo $afbeelding_url; ?>">
	  <div class="wrapper-text">
		<?php if (current_user_can('administrator')) : ?>
		  <form method="post" onsubmit="return confirm('Weet je zeker dat je de auto met kenteken <?php echo $kenteken; ?> wilt verwijderen?');">
        <input type="hidden" name="auto_id" value="<?php echo $auto_id; ?>">
        <button type="submit" name="delete_car" class="delete-button"><i class="fas fa-trash"></i></button>
      </form>
		 <?php endif; ?>
        <h2><?php echo $merk; ?> <?php echo $handelsbenaming; ?></h2>
        <p><?php echo strtoupper($kenteken); ?></p>
        <p><?php echo $omschrijving; ?></p>
        <p>€ <?php echo $prijs = number_format($prijs, 2, ',', '.'); ?></p>
      </div>
		  </a>
	</div>

      <?php
    }
  } else {
    echo "Geen data gevonden.";
  }
	
// Verwijder de auto uit de database en de kaart van de website
  if (isset($_POST['delete_car'])) {
    $auto_id = $_POST['auto_id'];
    $wpdb->delete($table_name, array('id' => $auto_id));
	  
// 	Wegens plugin compatibility issues gebruiken we javascript om de pagina te herladen
	echo '<script>window.location.href = "' . esc_url(get_permalink()) . '";</script>';
    exit();
  }
  ?>
</div>