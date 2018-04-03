<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta lang="pl"/>
	<meta charset="utf-8"/>
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	<link rel="Stylesheet" type="text/css" href="style.css" />
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
<form method="post" action="admin.php">
	<input type='submit' style="height:30px; margin:1%" value="Powrót do głównego panelu">
</form>

<div id="okno">
<form action="skrypt_dodawania_dyrektora.php" method="POST" >
	Wybierz nauczyciela, który ma zostać dyrektorem:  
    <select style="width:120px;height:30px;border-radius:400px;" name='nauc'>
    <?php
	require "baza.php";
	if ($result = $wynik->query("SELECT * FROM loginy WHERE typ <> 'admin' and typ <> 'uczen'"))
		{
			while($w=$result->fetch_assoc())
			{
				echo "<option value=".$w['id'].">".$w['imie']." ".$w['nazwisko']."</option>";      
			}
			$result->close();
	}
	?>
	</select>
	<br>
	<input type="submit" value="Wybierz">
</form>

</div>
</body>
</html>