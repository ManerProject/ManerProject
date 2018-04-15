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

<input type='button' style="height:30px; margin:1%" onclick="window.location.href='panel_wyboru_lekcji_do_dodania_Ocen.php'" id="cofnijdopanelunau" value="Cofnij do panelu">
<div id="okno">

</br>

<form action="skrypt_dodawania_uczniow_do_klasy.php" method="post">	
	Wybierz ucznia
	<br>
    <select style="height:30px;border-radius:400px;" name='sele'>
    <?php
	require "baza.php";
	$klasa=$_SESSION['klasa'];
	if ($result = $wynik->query("SELECT * FROM loginy WHERE typ = 'uczen' AND klasa='NULL'"))
	{
		while($w=$result->fetch_assoc())
		{
			echo "<option value=".$w['id'].">".$w['imie'].' '.$w['nazwisko']."</option>";      
			$_SESSION['login']=$w['login'];
		}
		$result->close();
		$wynik->close();
	}
	$_SESSION['klasa']=$klasa;
	?>
    </select>	
	<input type='submit' name="Dodaj ucznia do swojej klasy">
</form>

</div>
</div>
</body>
</html>