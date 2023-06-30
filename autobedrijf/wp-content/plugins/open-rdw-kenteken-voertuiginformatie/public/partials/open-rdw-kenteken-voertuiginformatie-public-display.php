<?php

/**
 * Public-facing view for the plugin.
 */

$categories = array();
$allfields = $settings['allfields'];
if (isset($settings['checkedfields'])) {
	$checkedfields = $settings['checkedfields'];
} else {
	$checkedfields = null;
}

?>
<section id="<?= $args['widget_id']; ?>" class="widget open_rdw_kenteken_widget <?= $settings['class']; ?>">
	<h2><?= $settings['title']; ?></h2>
	<form method="post" action="<?= $_SERVER['REQUEST_URI'] ?>">
		<p><input type="text" name="<?= $args['widget_id']; ?>" value="<?php if (isset($kenteken)) { echo $kenteken; } ?>" maxlength="8"></p>
		<p><input name="submit" type="submit" id="submit" value="<?= __('Search license', 'Open RDW kenteken voertuiginformatie'); ?>"></p>
	</form>
<?php

if (!isset($kentekeninfo) && isset($kenteken)) {
	echo '<p>' . sprintf(__( 'Unfortunately no vehicle information was found for license plate %s.', 'Open RDW kenteken voertuiginformatie' ), $kenteken)  . '</p>';
} elseif (empty($checkedfields)) {
	echo '<p>' . __('No widget settings were found, please add them or alert the website administrator about this.', 'Open RDW kenteken voertuiginformatie') . '</p>';
} elseif (isset($kentekeninfo)) {
	echo '<table>';
	foreach ($checkedfields as $field) {
		$field = strtolower($field);

		if (!isset($kentekeninfo[$field])) { continue; }
		$data = $kentekeninfo[$field];

		if ($data != '' && $data !== '0' && $data != 'Niet geregistreerd' && $data != 'N.v.t.') {

			if (!in_array($allfields[$field]['category'], $categories)) {

				$categories[] = $allfields[$field]['category'];
				echo '<tr class="open-rdw-head"><th colspan="2"><a>' . $allfields[$field]['category'] . '</a></th></tr>';

			}

			echo '<tr style="display: none;">';
			echo '<td>' . $allfields[$field]['label'] . '</td>';
			echo '<td>' . $kentekeninfo[$field] . '</td>';
			echo '</tr>';

		}

	}
	echo '</table>';
}

?>
</section>