<?php 
session_start();
$data= date('Y.m.d');

for ($j=0; $j<strlen($data); $j++)
{
	if ($data[$j]=='.')
	{
		$data[$j]='-';
	}
}
$sele=$_POST['sele'];
$sele2=$_POST['sele2'];
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

<form method="post" action="skrypt_zastepstwo.php">
    <select style="height:30px;border-radius:400px;" name='sele'>
	<?php
	require "baza.php";
	$_SESSION['data']=$data;
	$_SESSION['sele2']=$sele;
	$klasa=$_SESSION['kl'];
	echo $klasa; 
	if ($result = $wynik->query("SELECT * FROM planlekcji WHERE klasa='$sele' AND dzien='$sele2'")) 
	{
		while($w=$result->fetch_assoc())
		{
			echo "<option value='1'>".$w['lekcja1']."</option>";  
			echo "<option value='2'>".$w['lekcja2']."</option>"; 
			echo "<option value='3'>".$w['lekcja3']."</option>"; 
			echo "<option value='4'>".$w['lekcja4']."</option>"; 
			echo "<option value='5'>".$w['lekcja5']."</option>"; 
			echo "<option value='6'>".$w['lekcja6']."</option>"; 
			echo "<option value='7'>".$w['lekcja7']."</option>"; 
			echo "<option value='8'>".$w['lekcja8']."</option>"; 
			echo "<option value='9'>".$w['lekcja9']."</option>"; 		  
		}
		$result->close();
		$wynik->close();
	}	
	?>
	<input type="text" placeholder="lekcja" name="lekcja"/>
	<input type="number" placeholder="Numer sali" name="numer_sali"/>
    </select>
	<input type='submit' style="height:25px;border-radius:4px;"value="Dodaj zastępstwo">
</form>

</div>
</div>
</body>
</html>