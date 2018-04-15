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
    
<form action="panel_dodawania_wydarzen.php" method="POST" >
	<input type="submit" value="Dodaj wydarzenie"/>
</form>

Wydarzenia klasowe
<table border="1">
	<tr>
		<td>nr</td>
		<td>data</td>
		<td>wydarzenie</td>
	</tr>
	<?php
	require "baza.php";
	$klasa=$_SESSION['klasa'];
	if($rezultat=$wynik->query("SELECT * FROM `wydarzenia` WHERE klasa='$klasa' OR klasa='0'"))
	{
		$i=1;
		while($w=$rezultat->fetch_assoc())
		{
			echo "<tr>";
				echo "<td>".$i."</td>";
				$i++;
				echo "<td>".$w['data']."</td>";
				echo "<td>".$w['wydarzenie']."</td>";
			echo "</tr>";
		}
	}
	?>
</table>	
	
</div>
</div>
</body>
</html>