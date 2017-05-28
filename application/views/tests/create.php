<?php 
foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
 
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
 
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>




<?php echo validation_errors(); ?>

<?php

echo uri_string();

if(uri_string() == 'tests/create_question/add' || uri_string() == 'tests/create_answers/add')
{
	foreach(range(0, 3) as $row) {
		echo $output;
	}
}

else
{
	 echo $output; 
}

 
 
 ?>
