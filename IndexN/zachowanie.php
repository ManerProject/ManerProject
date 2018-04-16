<?php
require('reqnau.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta lang="pl"/>
	<meta charset="utf-8"/>
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
</head>
<body>
<style>
body
{
	background-color:#E6E6E6;
	margin:0px;
	font-size:20px;
	font-family: 'Acme', sans-serif;
}
#logo
{
	width:100%;
	min-height:102px;
	background-color:black;
	float:right
	text-align: center;
	padding:9px;
	color:white;
}
#okno
{
	margin-left:5%;
}
</style>

<div id="all">
<div id="logo">
Panel Nauczyciela
<img style="height:125px;width:200px;margin-top:-20px;float:left"  src="../Grafika/logomm.png">

<form action="../wyloguj.php" method="POST">
  <input style="float:right;background-color:#191919;width:80px;height:70px;position:relative;
    bottom:40px;cursor:pointer;color:white;font-family:'Audiowide', cursive;border-left:0px dotted #1F1F1F;border-top:0;border-right:0;border-bottom:0; margin-right:1%;" type="submit" value="WYLOGUJ"/> 
</form>
</div>

<form method="post" action="panel_wyboru_lekcji_do_dodania_Ocen.php">
	<input type='submit' style="height:30px; margin:1%" value="Powrót do głównego panelu">
</form>
<div id="okno">

<br>
<form action="skrypt_zachowanie.php" method="post">
	<?php
	require "baza.php";
	$klasa=$_SESSION['klasa'];
	if ($result = $wynik->query("SELECT * FROM `loginy` WHERE klasa='$klasa'"))
	{
		while($w=$result->fetch_assoc())
		{
			$id=$w['id'];
			$imie=$w['imie'];
			$nazwisko=$w['nazwisko'];
			echo $imie.' '.$nazwisko.' ';
			echo "<select name='$id'>";
				echo "<option value='1'>1</option>";
				echo "<option value='2'>2</option>";
				echo "<option value='3'>3</option>";
				echo "<option value='4'>4</option>";
				echo "<option value='5'>5</option>";
				echo "<option value='6'>6</option>";
			echo "</select>";
			echo "<hr>";
		}
	}
	$_SESSION['klasa']=$klasa;
	?>
	</select>
	<input type="submit" value="Wprowadź oceny z zachowania">
	</br>
</form>

</div>
</div>   
</body>
</html>