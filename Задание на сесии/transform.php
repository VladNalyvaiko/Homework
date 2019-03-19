<?php
	function transform($file){
		$data = fopen($file, 'r');
		$i = 0;
		$word = array();
		while(feof($data) == false) { 
			$word[$i] = explode('..,' , fgets($data));
			$i ++;
		}
		$all_about_users = array();
		foreach ($word as $key => $value) {
		$all_about_users['name'][] = $value[0];
		$all_about_users['cost'][] = $value[1];
		$all_about_users['quantity'][] = $value[2];
		}
		return $all_about_users;
	}

?>