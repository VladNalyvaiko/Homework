<?php
	session_start();
	require_once('transform.php');
	$file = 'data.txt';
	$slaid = transform($file);
	function max_quantity($data , $i){
		$max = $data['quantity'][$i];
		return $max;
	}
	function slaid($i , $data){
		$name = $data['name'][$i];
		$cost = $data['cost'][$i];
		$quantity = $data['quantity'][$i];
		echo 'Ноутбук '.$name.'<br/>'; 
		echo 'Цена: '. $cost.' грн<br/>';
	    echo 'Количество всего на складе: '.$quantity.'<br/>'; 
	}
	function order($data){
		echo 'Ваш заказ :<br/>';
		for ($i=0; $i <= count($data['quantity']); $i++) { 
			if ($data['quantity'][$i + 1] != 0) {
				echo $data['name'][$i + 1].' в количестве '.$data['quantity'][$i + 1] .'<br/>';
			}
		}
	}
	require_once('html.php');
	$number = array();
	 
	$number = $_POST['product_'.$i];
	for ($i=1; $i <= count($slaid['name']); $i++) { 
		$number[$i] = $_POST['product_'.$i];
	}
	foreach ($number as $key => $value) {
		$_SESSION['quantity'][$key] = $value; 
	}
	for ($k=0; $k <= count($_SESSION['quantity']); $k++) { 
		if ($_SESSION['quantity'][$k] != 0) {
			$_SESSION['name'][$k] = $slaid['name'][$k - 1];
		}
	}


	
	

?>