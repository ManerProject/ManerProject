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
	font-size:20px;
}
#okno
{
	margin-left:5%;
}
</style>

<div id="all">
<div id="logo">
Panel Admina
<img style="height:125px;width:200px;margin-top:-20px;float:left"  src="../Grafika/logomm.png">

<form action="../wyloguj.php" method="POST">
  <input style="float:right;background-color:#191919;width:80px;height:70px;position:relative;
    bottom:40px;cursor:pointer;color:white;font-family:'Audiowide', cursive;border-left:0px dotted #1F1F1F;border-top:0;border-right:0;border-bottom:0; margin-right:1%;" type="submit" value="WYLOGUJ"/> 
</form>
</div>

<?php
if(isset($_SESSION['admin1']))
{
	echo $_SESSION['admin1'];
	unset($_SESSION['admin1']);
}
?>
</br>

<div id="okno">

<form method="post" action="dodawanie_nauczyciela.php">
	<span style="font-size:20px;">Dodaj nowego nauczyciela</span>
	<input type='submit' style="height:30px;"value="dodaj">
</form>
<br>
<form method="post" action="panel_dodawania_lekcji_dla_nau.php">
	<span style="font-size:20px;"> Wybierz przedmiot nauczyciela </span>
	<input type='submit' style="height:30px;" value="Wybierz">
</form>
<br>
<form method="post" action="panel_dodawania_lekcji_do ocen.php">
	<span style="font-size:20px;">Dodaj nowy przedmiot w szkole</span>
	<input type='submit' style="height:30px;" value="Dodaj">
</form>
<br>
<form method="post" action="panel_dodawania_klas.php">
	<span style="font-size:20px;">Dodaj nową klasę</span>
	<input type='submit' style="height:30px;" value="Dodaj">
</form>	
<br>   
<form method="post" action="panel_zmiany_ucznia.php">
	<span style="font-size:20px;">Edytuj ucznia</span>
	<input type='submit' style="height:30px;" value="Dodaj">
</form>	
<br>
<form   method="post" action="planlekcji.php">
	<span style="font-size:20px;">Plan lekcji</span>
	<input type='submit' style="height:30px;" value="Dodaj">
</form>	
<br>
<form   method="post" action="panel_dodania_wychowawcy.php">
	<span style="font-size:20px;">Nadaj nauczycielowi wychowawstwo</span>
	<input type='submit' style="height:30px;"value="Dodaj">
</form>	
<br>
<form   method="post" action="panel_dodania_dyrektora.php">
	<span style="font-size:20px;">Dodaj dyrektora, wicedyrektora</span>
	<input type='submit' style="height:30px;"value="Dodaj">
</form>	
<br>
<form   method="post" action="panel_dodania_dat.php">
	<span style="font-size:20px;">Dodaj date do wydarzenia szkolnego</span>
	<input type='submit' style="height:30px;"value="Dodaj">
</form>	

</div>
 
 
</div>
</body>
</html>