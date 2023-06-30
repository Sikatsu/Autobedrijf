<?php
	/**
	 * Our tinyMCE view.
	 */
?>
<div id="rdw-thickbox" class="rdw-popup" style="display: none;">
	<div class="rdw-thickbox-content">
		<div id="rdw-thickbox-header">
			<h3><?= __('Select which feelds you would like to display:', 'Open RDW kenteken voertuiginformatie') ?></h3>
		</div>
		<div id="rdw-thickbox-content">
			<div class="rdw-sort-fields rdw-expand-fields">
				<ul>
				<?php
					$categories = array();

					foreach ($fields as $value) {

						if (!in_array($value['category'], $categories)) {
							
							$categories[] = $value['category'];

							echo '<li class="ui-sortable">';
							echo '<a>'.$value['category'].'</a>';
							echo '<ul style="display:none;">';

							foreach ($fields as $key => $value) {
								
								if (end($categories) == $value['category']) {
									
									echo '<li class="ui-sortable-handle">';
									echo '<label style="display: block;">';
									echo '<input type="checkbox" class="checkbox" id="'.$key.'" name="'.$key.'" value="'.$key.'">'.$value['label'];
									echo '</label>';
									echo '</li>';

								}

							}

							echo '</ul>';
							echo '</li>';

						}

					}
				?>
				</ul>
			</div>
		</div>
		<div id="rdw-thickbox-footer">
			<p>
				<input type="button" value="<?= __('Cancel', 'Open RDW kenteken voertuiginformatie') ?>" class="button" onclick="tb_remove();">
				<input type="button" value="<?= __('Add shortcode', 'Open RDW kenteken voertuiginformatie') ?>" class="button button-primary" id="rdw-thickbox-submit">
			</p>
		</div>
	</div>
</div>