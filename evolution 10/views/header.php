<!doctype html>
<html>
<head>
	<title>Test</title>
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/default.css">
	<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/themes/sunny/jquery-ui.css" />
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
	<script type="text/javascript" src="<?php echo URL; ?>public/js/custom.js"></script>
	<?php
	if (isset($this->js)) {
		foreach ($this->js as $js ) {
			echo '<script type="text/javascript" src="'. URL .'views/'. $js .'"></script>';	
		}
	}
	?>
</head>

<body>
	<?php Session::init(); ?>
	<div id="header">
		<?php if (Session::get('loggedIn') == false):?>
			<a href="<?php echo URL; ?>index">Index</a>
			<a href="<?php echo URL; ?>help">Help</a>
		<?php endif; ?>	
		<?php if (Session::get('loggedIn') == true):?>
			<a href="<?php echo URL; ?>dashboard">Dashboard</a>
			<a href="<?php echo URL; ?>note">Notes</a>
			
			<?php if (Session::get('role') == 'owner'):?>
			<a href="<?php echo URL; ?>user">Users</a>
			<?php endif; ?>
			
			<a href="<?php echo URL; ?>dashboard/logout">Logout</a>	
		<?php else: ?>
			<a href="<?php echo URL; ?>login">Login</a>
		<?php endif; ?>
	</div>

	<div id="content">