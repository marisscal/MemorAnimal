<?php	
	
	session_start();
	error_reporting(E_ALL ^ E_NOTICE);
	
	# CONTROLLER
	include('controller/config.php');

	# MODEL
	include('model/m.start.php');

	# VIEW
	include('tmp/head.phtml');
	include('view/body.phtml');
	include('tmp/footer.phtml');
	
?>
