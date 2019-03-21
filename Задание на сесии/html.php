<!DOCTYPE html>
<html>
<head>
	<title>Shop</title>
</head>
<body>
<form method="post" action="index.php">
	<div>
		<?php
			for ($i=0; $i < count($slaid['name']); $i++) { 
				echo slaid($i , $slaid);
			?>
			Купить: <input value="<?php echo value_input($number , $i) ?>" name="<?php echo 'product_'.$i;?>"type="number" min="0" max=<?php echo max_quantity($slaid,$i);?> >
			<?php
				echo "<hr/>";
			}
		?>
	</div>
	<input type="submit" value="Заказать">
</form>
<hr/>
<div><?php echo order($_SESSION);?></div>
	

</body>
</html>