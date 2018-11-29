<!DOCTYPE html>
<html>
<head>
	<title>Форма1</title>
</head>
<body>
	<form action="WEB-1.php" method="post">
		<p>Ваша фамилия: <input type="text" name="fam" value="<?php if (isset($_POST['fam'])) echo $_POST['fam']; ?> " /></p>		
		<p>Ваше имя: <input type="text" name="name" value="<?php if (isset($_POST['name'])) echo $_POST['name']; ?> " /></p>
		<p>Ваше отчество: <input type="text" name="otch" value="<?php if (isset($_POST['otch'])) echo $_POST['otch']; ?> "/></p>
		<p>Ваш возраст: <input type="text" name="age" value="<?php if (isset($_POST['age'])) echo $_POST['age']; ?> "/></p>
		<p><input type="submit" /></p>
	</form>

</body>
</html>