<?php
	if (isset($_GET['id'])) {
		$id = (int)$_GET['id'];}
		
		
		
$action=(isset($_GET['action']) ? $_GET['action']:'add';
echo $action;

	
?>