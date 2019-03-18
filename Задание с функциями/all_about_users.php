<?php
	function data_users($file){
		$data = fopen($file , 'r');

		$i = 0;
		$word = array();
		while(feof($data) == false) { 
			$word[$i] = explode(' ' , fgets($data));
			$i ++;
		}
		$all_about_users = array();
		foreach ($word as $key => $value) {
		$all_about_users['name'][] = $value[0];
		$all_about_users['login'][] = $value[1];
		$all_about_users['password'][] = $value[2];
		$all_about_users['email'][] = $value[3];
		$all_about_users['lang'][] = $value[4];
	}
	return $all_about_users;
}
?>