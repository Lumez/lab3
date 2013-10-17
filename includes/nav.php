<?php 
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$page = $components[4];
?>
<div class="row">
	<div class="col-md-12">
		<ul class="nav nav-tabs">
			<li class="<?php if ($page=="index.php") {echo "active"; }?>"><a href="index.php">Home</a></li>
			<li class="<?php if ($page=="finances.php") {echo "active"; }?>"><a href="finances.php">Finances</a></li>
			<li class="<?php if ($page=="about.php") {echo "active"; }?>"><a href="about.php">About</a></li>
			<li class="<?php if ($page=="contact.php") {echo "active"; }?>"><a href="contact.php">Contact Us</a></li>
		</ul>
	</div>
</div>