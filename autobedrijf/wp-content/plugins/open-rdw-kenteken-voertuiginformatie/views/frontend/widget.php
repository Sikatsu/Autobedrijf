<?php echo $before_widget; 
	echo $before_title;
		echo $title;
	echo $after_title; ?>
	<form method="post" action="<?php echo esc_attr($_SERVER['REQUEST_URI']) ?>">
		<p><input type="text" name="open_data_rdw_kenteken" value="<?php if(isset($_POST['open_data_rdw_kenteken'])){echo esc_attr($_POST['open_data_rdw_kenteken']);} ?>" maxlength="8"></p> 
		<p><input name="submit" type="submit" id="submit" value="<?php _e('Kenteken opzoeken', 'open_data_rdw') ?>"></p>
	</form>
	<?php if (isset($data)): ?>
		<h3><?php _e('Voertuiggegevens', 'open_data_rdw') ?></h3>
		<table>
			<?php

			$options = get_option('widget_open_rdw_widget');
			$categories = array();

			foreach ($data as $d) {

				$label = trim($d['label']);
				$label = str_replace(' ','',$label);
				$label = str_replace('Brandstof(1)','Hoofdbrandstof',$label);
				$label = str_replace('Numberofaxis','Aantalassen',$label);
				
				if (!in_array($d['category'], $categories) && trim($options[2][$label]) == 1 && isset($d['value']) && $d['value'] != '0' && $d['value'] != 'Niet geregistreerd' && $d['value'] != 'N.v.t.') {

					$categories[] = $d['category'];

					echo '<tr class="open-rdw-header">';
					echo '<td colspan="2" style="font-weight: bold;">';
					echo '<a href="#">'.$d['category'].'</a>';
					echo '</td>';
					echo '</tr>';

					foreach ($data as $d) {
						if ($d['category'] == end($categories) && isset($d['value']) && $d['value'] != '0' && $d['value'] != 'Niet geregistreerd' && $d['value'] != 'N.v.t.') {

							echo '<tr style="display:none">';
							echo '<td>'.$d['label'].'</td>';
							echo '<td>'.$d['value'].'</td>';
							echo '</tr>';

						}
					}
				}
			}

			?>
		</table>
	<?php else: ?>
		<?php if(isset($_POST['open_data_rdw_kenteken'])): ?>
			<p class="open-data-rdw-no-info">Er is geen voertuig informatie beschikbaar voor dit voertuig. Dit kan zijn omdat deze bijvoorbeeld geschorst, geïmporteerd of geëxporteerd is.</p>
		<?php endif; ?>
	<?php endif; ?>
<?php echo $after_widget; ?>