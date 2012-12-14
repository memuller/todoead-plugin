<input type="hidden" <?php html_attributes( array( 
	'name' => $name, 'id' => $id, 'value' => $object->$field, 'class' => 'file_upload field'
	)) ?> <?php echo $html ?> <?php echo $validations ?> >
<input type="hidden" <?php html_attributes(array('name' => $id.'_post_id', 'id' => $id.'_post_id', 'value' => $object->ID, 'class' => 'file_upload post_id')) ?> >

<?php if( ! $object->$field ){
	$label = 'Enviar arquivo' ;
} else {
	$label = explode('/', $object->$field) ; $label = 'Substituir '.$label[sizeof($label)-1];
} ?>

<input type="button" <?php html_attributes(array('name' => $id.'_button',
	'id' => $id.'_button', 'class' => 'file_upload button', 'value' => $label )) ?> >

<?php description($options['description']) ?>