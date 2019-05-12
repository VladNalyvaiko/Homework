<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
	<form method="post" action="/weather">
		{{ csrf_field() }}
		<input type="text" name="town">
		<input type="submit">
	</form>
    
</body>
</html>