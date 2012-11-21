<input type="text" <?php html_attributes( array( 
	'name' => $name, 'id' => $id, 'value' => $object->$field, 'class' => 'text', 'size' => $size 
	)) ?> <?php echo $html ?> <?php echo $validations ?> > 
<?php description($options['description']) ?>