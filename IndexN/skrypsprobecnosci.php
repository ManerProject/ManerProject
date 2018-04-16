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

<form method="POST" action="naus1.php">
	<input  type="submit" name="seme" value="semestr2">
</form>
<form method="POST" action="nau.php">
	<input  type="submit" name="seme" value="semestr1">
</form>
<form method="POST" action="paneluwag.php">
	<input  type="submit" name="uwagi" value="uwagi">
</form>
<form method="POST" action="braklekcji.php">
	<input  type="submit" name="brak lekcji" value="brak lekcji">
</form>
<form method="POST" action="obecnosc.php">
	<input  type="submit" name="obecnosc" value="obecnosc">
</form>
<form method="POST" action="skryptskryptsprobecnosci.php">
	<br>
	Lista Nieobecnosci ucznia 
	<div style="background-color:;"id="panel">
		<div style="float:left;background-color:;width:20%;min-height:30px"> Login </div>
		<div style="float:left;background-color:;width:10%;min-height:30px"> Klasa </div>
		<div style="float:left;background-color:;min-width:35%;min-height:30px"> Numer_lekcji </div>
		<div style="float:left;background-color:;width:35%;min-height:30px"> Data </div>
		<div style="cleat:both" id="clear"> </div>
		<?php
		require "baza.php";
		$klasa=$_SESSION['kl'];
		$uczen=$_SESSION['uczenxdxd']; 
		$lekcja= $_SESSION['xdlekcja'];
		if ($result = $wynik->query("SELECT * FROM `loginy` WHERE id='$uczen'"))
		{
			while($w=$result->fetch_assoc())
			{
				$login=$w['login'];
			}
		}
		if ($result = $wynik->query("SELECT * FROM `klasy` WHERE id='$klasa'"))
		{
			while($w=$result->fetch_assoc())
			{
				$numer=$w['numer'];
				$nazwa=$w['nazwa'];
			}
		}
		$i=0;
		if ($result = $wynik->query("SELECT * FROM `obeconsc` WHERE `obecnosc`=2 and `uczen`='$uczen' ORDER by `DATA`,`numer_lekcji`"))
		{
			while($w=$result->fetch_assoc())
			{
				if($i==0)
				{
					$pom=$w['data'];
				}	
				if($w['data']!=$pom)
				{
					?> </br>  </br> </br> <?php
					$pom=$w['data'];
				}
				$i=1;
		?>
		<div style="float:left;background-color:;width:19%;min-height:30px;border:1px dotted black" id="login"> <?php  echo $login; ?> </div>
		<div style="float:left;background-color:;width:8%;min-height:30px;border:1px dotted black" id="klasa"> <?php  echo $numer." ".$nazwa; ?> </div>
		<div style="float:left;background-color:;width:25%;min-height:30px;border:1px dotted black" id="przedmiot"> <?php  echo $w['numer_lekcji']; ?> </div>
		<div style="float:left;background-color;min-width:39%;min-height:40px;border:1px dotted black" id="Oceny"> <?php   echo $w['data']; ?> </div>
		<div style="float:left;background-color;width:5.5%;min-height:30px;border:1px dotted black" id="Input"> 
			<select name="obecnosc[]">
				<option>1 Nie obecny</option>
				<option>2 Usprawliwione</option>
			</select>
		</div>
		<div style="cleat:both" id="clear"> </div>
		 <?php 
		 ?>
		 <br>
		 <?php  
			}
		}
		?>
		<input type='submit' style=""value="wyslij">
	</div>
</form>

</div>
</div>
</body>
</html>