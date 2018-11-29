
<?php 
	
	require "form1.php";

		if(isset($_POST["fam"]))
			$Fam=($_POST['fam']);
		echo 'Фамилия: ';
		if ($Fam=="")
			echo ("Вы не ввели Фамилию!");
		else echo $Fam;
		if(isset($_POST["name"]))
			$Name=($_POST['name']);
		echo '<br>Имя: ';
		if ($Name=="")
			echo ("Вы  не ввели Имя!");
		else echo $Name;
		if(isset($_POST["otch"]))
			$Otch=($_POST['otch']);
		echo '<br>Отчество: ';
		if ($Otch=="")
			echo "Вы не ввели Отчество!";
		else echo $Otch;
		if(isset($_POST["age"]))
			$Age=($_POST['age']);
		echo '<br>Возраст: ';
		if ($Age=="")
			echo ("Вы  не ввели Возраст!");
		else echo $Age;
