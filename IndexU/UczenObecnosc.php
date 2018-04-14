<?php 
session_start();
require "baza.php";
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
Panel Ucznia
<img style="height:125px;width:200px;margin-top:-20px;float:left"  src="../Grafika/logomm.png">

<form action="../wyloguj.php" method="POST">
  <input style="float:right;background-color:#191919;width:80px;height:70px;position:relative;
    bottom:40px;cursor:pointer;color:white;font-family:'Audiowide', cursive;border-left:0px dotted #1F1F1F;border-top:0;border-right:0;border-bottom:0; margin-right:1%;" type="submit" value="WYLOGUJ"/> 
</form>
</div>

<form method="post" action="index1.php">
	<input type='submit' style="height:30px; margin:1%" value="Powrót do głównego panelu">
</form>

<div id="okno">
Semestr 1
<form method="POST" action="indexs2.php">
	<input  type="submit" name="seme" value="semestr2" >
</form>
<form method="POST" action="wiadomosci.php">
	<input  type="submit" name="seme" value="wiadomosc" >
</form>
<form method="POST" action="UczenObecnosc.php">
	<input  type="submit" name="seme" value="obecnosc" >
</form>
</br>

legenda</br>
U Nieobecnosc Uspr </br>
S spoznienie</br>
- Nieobecnosc nieuspr</br>
0 obecny
<hr>
<?php
$login= $_SESSION['login'];
$id=$_SESSION['uczenid'];
if ($result = $wynik->query("SELECT klasy.numer,klasy.nazwa,loginy.id,loginy.imie,loginy.nazwisko FROM loginy,klasy where klasy.id=loginy.klasa and loginy.login='$login'"))
{
    $w=$result->fetch_assoc();
		$id=$w['id'];
		$numer=$w['numer'];
		$nazwa=$w['nazwa'];
		$imie=$w['imie'];
		$nazwisko=$w['nazwisko'];
	echo $imie." ".$nazwisko;
	echo "<br>Klasa ".$numer." ".$nazwa."<br>";
}
?>
<div style="background-color:;"id="panel">

	<div style="float:left;width:45%;min-height:30px">Data</div>
	<div style="float:left;width:45%;min-height:30px">Obecność</div>
    <div style="cleat:both" id="clear"></div>
<?php
$i=0;
if ($result = $wynik->query("SELECT * FROM `obeconsc` WHERE `uczen`=$id AND `obecnosc`=2 OR `obecnosc`=11 GROUP BY `data`"))
{
    while($w=$result->fetch_assoc())
	{
?>
<div style="float:left;width:45%;min-height:30px;border:1px dotted black" id="przedmiot"><?php echo $w['data']; ?></div>
<div style="float:left;width:45%;min-height:40px;border:1px dotted black" id="Oceny"><?php require "SkryptSprObecnosciUcznia.php"; ?></div>

<div style="cleat:both" id="clear"></div>

<br>
<?php 
}
}
?>
</div>
</div>
</div>
</body>
</html>