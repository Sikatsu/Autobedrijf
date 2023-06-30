<?php $categories = array(); ?>
<p>
	<label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_name( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $instance['title'] ); ?>">
</p>
<p>
	<label for="<?php echo $this->get_field_id( 'open_data_rdw_class' ); ?>"><?php _e( 'Widget class:' ); ?></label>
	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('open_data_rdw_class')); ?>" name="<?php echo $this->get_field_name( 'open_data_rdw_class' ); ?>" type="text" value="<?php echo esc_attr( $open_data_rdw_class ); ?>">
</p>
<hr>
<table class="open-data-settings-table" style="margin-bottom: 15px;">
<?php

if (isset($fields)) {
	$categories = array();
	foreach ($fields as $f) {

		if (!in_array($f['category'], $categories)) {

			$categories[] = $f['category'];

			echo'<tr class="open-rdw-header">';
			echo'<th colspan="2">';
			echo'<a href="#">'.$f['category'].'</a>';
			echo'</th>';
			echo'</tr>';

			foreach ($fields as $f) {
				if ($f['category'] == end($categories)) {

					$checked = ($instance[$f['name']] ? 'checked="checked"' : '');
					echo'<tr style="display:none">';
					echo'<td style="width: 16px;"><input type="checkbox" class="checkbox" id="'.$this->get_field_id($f['name']).'" name="'.$this->get_field_name($f['name']).'" '.$checked.'></td>';
					echo'<td><label for="'.$this->get_field_id($f['name']).'">'.$f['label'].'</label></td>';
					echo'</tr>';

				}
			}
		}
	}
}

?>
</table>