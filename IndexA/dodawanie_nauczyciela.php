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
Panel Admina 
<img style="height:125px;width:200px;margin-top:-20px;float:left"  src="../Grafika/logomm.png"> </img>

<form action="../wyloguj.php" method="_POST" >
  <input style="float:right;background-color:#191919;:width:50px;height:100px;position:relative;
    bottom: 40px;cursor:pointer;color:white;font-family: 'Audiowide', cursive;border-left:2px dotted #1F1F1F;border-top:0;border-right:0;border-bottom:0" type="submit" value="WYLOGUJ"/>
</form>

</div>
<div id="okno">
<form   method="post" action="admin.php">
	<input type='submit' style="height:30px;margin:1%" value="Powrót do głównego panelu">
</form>
</br>
    
<form action="skrypt_dodawania_nauczyciela.php" method="POST" style="margin-left: 5%">
	<span style="font-size:20px;">Wybierz, kto ma być nauczycielem: </span>
	<select style="height:30px;border-radius:400px;" name='sele'>
	<?php
	require "baza.php";
	if ($result = $wynik->query("SELECT * FROM `loginy` WHERE typ <> 'admin'"))
	{
		while($w=$result->fetch_assoc())
		{
			echo "<option value=".$w['id'].">".$w['imie']." ".$w['nazwisko']."</option>";          
		}
		$result->close();
		$wynik->close();
	}
	?>
	</select>
	<input type="submit" value="Wyslij"/>
</form>
 
</div>
</div>
</body>
</html>