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
	font-size:35px;
	font-family: 'Acme', sans-serif;
}
#all
{
	width:100%;
	height:100%;
}
#logo
{
	width:100%;
	height:100px;
	background-color:black;
	float:right
	text-align: center;
	padding:10px;
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
<?php
require "odnosiki.php";
?>

wybierz ucznia  <form method="post" action="pomskrypsprobecnosci.php">
    <select style="width:120px;height:30px;border-radius:400px;" name='sele'>
    <?php
	require "baza.php";
	$kl= $_SESSION['kl'];
	if ($result = $wynik->query("SELECT * FROM `loginy` WHERE klasa='$kl'"))
	{
		while($w=$result->fetch_assoc())
		{
			echo "<option value=".$w['id'].">".$w['login']."</option>";      
		}
		$result->close();
		$wynik->close();
	}
	?>
    </select>
	<input type='submit' style="height:30px;"value="Wybierz">
	<div id=wybierz>
</form>
</div>

</div>
</div>
</body>
</html>