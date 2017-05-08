<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Загрузка pdf-файла</title>
	</head>
<body>
	<h2>Загрузите свой pdf-файл</h2>
	<p>(максимальный размер = 5 МB)</p>
	<br>
	<form action="upload.php" method="post" enctype="multipart/form-data">
		<input type="file" name="filename" accept="application/pdf">
		<br>
		<input type="submit" value="Загрузить">
	</form> 
</body>
</html>