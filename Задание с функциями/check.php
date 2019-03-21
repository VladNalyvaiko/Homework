<?php
	function check($login , $password , $base_data){
		$i = 0;
		$boolean = false;
		while ($i <= count($base_data['name'])) {
			if ($base_data['login'][$i] == $login && $base_data['password'][$i] == $password) {
				echo "Пользователь зарегистрирован : с логином ".$login. " и паролем ".$password;
				$boolean = true;
			} 
			next($base_data['login']);
			next($base_data['password']);
			$i ++;
		}
		if ($boolean == false) {
			echo "Пользователь не найден";
		}
		
		
	}
?>