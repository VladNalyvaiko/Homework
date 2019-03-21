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
	    $slaid = 'Ноутбук '.$name.'<br/>Цена: '. $cost.' грн<br/>Количество всего на складе: '.$quantity.'<br/>';
	    return $slaid;
	    
	}
	function order($data){
		$order = 'Ваш заказ :<br/>';
		for ($i=0; $i < count($data['quantity']); $i++) { 
			if ($data['quantity'][$i] != 0) {
				$order .= $data['name'][$i].' в количестве '.$data['quantity'][$i] .'<br/>';
			}
		}
		return $order;
	}
	function value_input($data , $i){
		if ($data[$i] != 0) {
			$value = $data[$i];
		} else{
			$value = 0;
		}
		return $value;
	}
	$number = array();
	for ($i=0; $i < count($slaid['name']); $i++) { 
		$number[$i] = $_POST['product_'.$i];
	}
	foreach ($number as $key => $value) {
		$_SESSION['quantity'][$key] = $value; 
	}
	for ($k=0; $k < count($_SESSION['quantity']); $k++) { 
		if ($_SESSION['quantity'][$k] != 0) {
			$_SESSION['name'][$k] = $slaid['name'][$k];
		}
	}
	require_once('html.php');
	
?>