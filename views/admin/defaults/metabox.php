<table class='form-table'>
	<tbody>
		<?php foreach ($fields as $field => $options) { 
			require 'partials/field_handler.php'; ?>
			<tr>
				<th>
					<?php label($options['label'], $id  ) ?>
					<?php if($options['type'] == 'text_area' || $options['type'] == 'geo'){ description($options['description']); } ?>
				</th>
				<td>
					<?php switch ($options['type']) {
						
						case 'boolean':
							require 'fields/boolean.php';
						break;

						case 'geo': 
							require 'fields/geo.php';
						break;

						case 'date':
							require 'fields/date.php';
						break;
						
						case 'post_type':
							require 'fields/post_type.php';	
						break;

						case 'text_area':
							require 'fields/text_area.php';	
						break;

						case 'term_taxonomy':
							require 'fields/term_taxonomy.php';
						break;

						default:
							require 'fields/default.php';	
						break;

					} ?>
				</td>
		<?php } ?>
	</tbody>
</table>

<?php require 'partials/custom_single_field.php' ?>