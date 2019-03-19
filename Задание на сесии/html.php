<!DOCTYPE html>
<html>
<head>
	<title>Shop</title>
</head>
<body>
<form method="post">
	<div>
		<?php 
			slaid(0 , $slaid);
	    ?>
	    Купить: <input value="0" name="product_1" type="number" min="0" max=<?php echo max_quantity($slaid,0);?>>
	</div>
	<hr/>
	<div>
		<?php 
			slaid(1 , $slaid);
	    ?>
	    Купить: <input value="0" name="product 2" type="number" min="0" max=<?php echo max_quantity($slaid,1);?>>
	</div>
	<hr/>
	<div>
		<?php 
			slaid(2 , $slaid);
	    ?>
	    Купить: <input value="0" name="product 3" type="number" min="0" max=<?php echo max_quantity($slaid,2);?>>
	</div>
	<hr/>
	<div>
		<?php 
			slaid(3 , $slaid);
	    ?>
	    Купить: <input value="0" name="product 4" type="number" min="0" max=<?php echo max_quantity($slaid,3);?>>
	</div>
	<hr/>
	<div>
		<?php 
			slaid(4 , $slaid);
	    ?>
	    Купить: <input value="0" name="product 5" type="number" min="0" max=<?php echo max_quantity($slaid,4);?>>
	</div>
	<hr/>
	<input type="submit" value="Заказать">
</form>
<hr/>
<div><?php echo order($_SESSION);?></div>
	

</body>
</html>