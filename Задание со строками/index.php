<?php
	$date = "31-12-2020";
	$word = explode("-", $date);
	for ($i = 0; $i < 3; $i++) {
		echo $word[$i];
		if ($i == 2) {
		 	break;
		 } 
		echo '.';
	}
	echo "<br/>";
	$text = 'london is the capital of great britain';
	$str = explode(' ' , $text);
	
	for ($i=0; $i < count($str); $i++) { 
		echo ucfirst($str[$i]).' ';
	}
	echo "<br/>";	
	$password = 'djflkgsdkj';
	if (iconv_strlen($password) < 7 || iconv_strlen($password) > 12) {
		echo "Придумайте новий пароль";
	} else{
		echo "Пароль подходит";
	}
	echo "<br/>";
	$str_1 = '1a2b3c4b5d6e7f8g9h0';
	echo ctype_digit($str_1);
	$array = array();
	for ($i=0; $i < iconv_strlen($str_1); $i++) { 
		$array[] = $str_1[$i];
	}
	for ($i=0; $i < count($array); $i++) { 
		if (ctype_digit($array[$i]) == false) {
			echo $array[$i];
		} 
	}

?>