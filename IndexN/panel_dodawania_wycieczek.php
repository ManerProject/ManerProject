<?php 
session_start();
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
    
<form action="skrypt_dodawania_wycieczki.php" method="POST" >
	data <input type="date" placeholder="data" name="data"/>
	<br>
	czas trwania wycieczki (ilość dni) <input type="text" placeholder="czas trwania wycieczki" name="dni"/>
	<br>
	czas trwania wycieczki (ilość godzin) <input type="text" placeholder="czas trwania wycieczki" name="godz"/>
	<br>
	liczba uczniow <input type="text" name="liczba"/>
	<br>
	cel wycieczki <input type="text" placeholder="cel wycieczki" name="cel"/>
	<br>
	program wycieczki <input type="text" placeholder="program wycieczki" name="program">
	<br>
	nauczyciel prowadzacy 
	<select name="nauczyciel">
	<?php
	require "baza.php";
	$login= $_SESSION['login'];
	$klasa=$_SESSION['klasa'];
	$_SESSION['klasa']=$klasa;
	if ($result1 = $wynik->query("SELECT * FROM loginy WHERE typ='teacher'"))
	{
		while($w=$result1->fetch_assoc())
		{
			$imie=$w['imie'];
			$nazwisko=$w['nazwisko'];
			$id=$w['id'];
			echo "<option value='$id'>";
			echo $imie.' '.$nazwisko;
			echo "</option>";
		}
	}
	?>
	</select>
	<br>
	opiekunowie wycieczki - ile 
	<select name="ile">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
	</select>
	<br>
	<input type="submit" value="Wyslij"/>
</form>

</div>
</div>
</body>
</html>