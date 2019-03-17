<?php
	$fillst = array();
	for ($k = 0; $k < count($all_about_users['password']); $k++) { 
		if (iconv_strlen($all_about_users['password'][$k]) >= 8) {
			$fillst['name'][] = $all_about_users['name'][$k];
			$fillst['login'][] = $all_about_users['login'][$k];
			$fillst['password'][] = $all_about_users['password'][$k];
			$fillst['email'][] = $all_about_users['email'][$k];
			$fillst['lang'][] = $all_about_users['lang'][$k];
			

		}
	}
?>