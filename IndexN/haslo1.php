<?php 
session_start();
require "baza.php";
$klasa= $_SESSION['kl'];
$data= date('Y.m.d');
for($j=0;$j<strlen($data);$j++)
{
	if($data[$j]=='.')
	{
		$data[$j]='-';
	}
}
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
	font-size:25px;
	font-family: 'Acme', sans-serif;
}
#logo
{
	width:100%;
	min-height:102px;
	background-color:black;
	padding: 9px 9px 9px 0px;
	float:right
	text-align: center;
	color:white;
}
#okno
{
	margin-left:5%;
	width: 95%;
} 
</style>

<div id="all">
<div id="logo">
Panel Nauczyciela
<img style="height:125px;width:200px;margin-top:-20px;float:left;"  src="../Grafika/logomm.png">

<form action="../wyloguj.php" method="POST">
  <input style="float:right;background-color:#191919;width:80px;height:70px;position:relative;
    bottom:40px;cursor:pointer;color:white;font-family:'Audiowide', cursive;border-left:0px dotted #1F1F1F;border-top:0;border-right:0;border-bottom:0; margin-right:1%;" type="submit" value="WYLOGUJ"/> 
</form>
</div>

<form method="post" action="panel_wyboru_lekcji_do_dodania_Ocen.php">
	<input type='submit' style="height:30px; margin:1%" value="Powrót do głównego panelu">
</form>

<div id="okno">

<form method="post" action="skrypthaslo1.php" style="font-size:15px;">
	<input type="password" name="haslo" style="height:25px;border-radius:4px;" placeholder="podaj stare hasło"value="">
	<input type="password" name="nhaslo" style="height:25px;border-radius:4px;" placeholder="podaj nowe hasło"value="">
	<input type='submit' style="height:50px;border-radius:400px;" value="Zmień hasło">
</form>

</div>
</div>
</body>
</html>