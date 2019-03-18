<?php
	require_once ("all_about_users.php");
	require_once ("check.php");
	$file = 'data.txt';
	check('admin' , '1234' , data_users($file));
	

?>