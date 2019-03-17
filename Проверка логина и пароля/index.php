<?php 
	$login = $_POST['login'];
	$password = $_POST['password'];
	$word = [];
	$correct = '';
	$incorrect = '';
	$file = fopen('My_logins_site.txt', 'r');
	$i = 0;
	$w = 0;
	$boolean = false;
	$boolean_1 = false;
	while(feof($file) == false) { 
		$word[$i] = explode(' ' , fgets($file));
		$i ++;
	}
	fclose('login.txt');
	$logins = [];
	$passwords = [];
	$k = 0;
	foreach ($word as $key => $value) {
		$logins[$k] = $value[0];
		$passwords[$k] = $value[1];
		$k ++;
	}
	foreach ($logins as $value) {
		if ($value == $login) {
			$boolean = true;
		}
	}
	foreach ($logins as $value) {
		if ($value == $login) {
			$boolean_1 = true;
		}
	}
	$incorrect = $login.' Неправильних вводов: '.$w;
	if ($boolean == true && $boolean_1 == true) {
		$correct = 'Приветствую '.$login;
		file_put_contents($login.'.txt', $incorrect);
		$w = 0;
	}else{
		$w ++;
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Проверка логина и пароля</title>

</head>
<body>
	<form method="post">
		<div>Логин</div><input  name="login"><br/>
		<div>Пароль</div><input  name="password">
		<input type="submit" value="Отправить"> 
	</form>
	<?php echo '<h1>'.$correct.'</h1>'; ?>
</body>
</html>