<?php
	$file = fopen('data.txt','r');
	$word = array();
	$i = 0;
	while(feof($file) == false) { 
		$word[$i] = explode(' ' , fgets($file));
		$i ++;
	}
	$all_about_users = array();
	$i = 0;
	foreach ($word as $key => $value) {
		$all_about_users['name'][] = $value[0];
		$all_about_users['login'][] = $value[1];
		$all_about_users['password'][] = $value[2];
		$all_about_users['email'][] = $value[3];
		$all_about_users['lang'][] = $value[4];
	}
?>