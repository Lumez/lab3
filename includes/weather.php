<?php
	$data = json_decode(file_get_contents('http://comp2203.ecs.soton.ac.uk/labs/lab3/api/location.php?location=3772'));
?>

<div id="weather">
	<h3><?php print_r($data->name . ', ' . $data->country); ?></h3>
	<p><?php print_r('Lat: ' . $data->position->lat . ', Long: ' . $data->position->long); ?></p>
	<p><?php print_r('Continent: ' . $data->continent); ?></p>
	
	<h3>Current Weather</h3>
	
	<p><?php print_r('Time: ' . $data->time); ?></p>
	<p><?php print_r($data->weather->weatherType); ?></p>
	<p><?php print_r('Temp: ' . $data->weather->temperature); ?>&deg;C</p>
	<p><?php print_r('Pressure: ' . $data->weather->pressure . 'mb');?></p>
	<p><?php print_r('Visibility: ' . $data->weather->visibility / 1000 . 'km'); ?></p>
	
	<h5>Wind</h5>
	
	<p><?php print_r('Direction: ' . $data->weather->wind->compass . ', ' . $data->weather->wind->angle); ?>&deg;</p>
	<p><?php print_r('Speed: ' . $data->weather->wind->speed . 'kph'); ?></p>
</div>