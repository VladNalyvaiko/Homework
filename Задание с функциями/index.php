<?php
	require_once ("all_about_users.php");
	require_once ("check.php");
	$file = 'data.txt';
	check('admin' , '12345' , data_users($file));
	

?>