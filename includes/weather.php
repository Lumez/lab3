<?php
	$data = json_decode(file_get_contents('http://comp2203.ecs.soton.ac.uk/labs/lab3/api/location.php?location=3772'));
?>



<div id="weather">
	<?php print_r($data); ?>
</div>