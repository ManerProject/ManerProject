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
Panel
<img style="height:125px;width:200px;margin-top:-20px;float:left"  src="../Grafika/logomm.png">

<form action="../wyloguj.php" method="POST">
  <input style="float:right;background-color:#191919;width:80px;height:70px;position:relative;
    bottom:40px;cursor:pointer;color:white;font-family:'Audiowide', cursive;border-left:0px dotted #1F1F1F;border-top:0;border-right:0;border-bottom:0; margin-right:1%;" type="submit" value="WYLOGUJ"/> 
</form>
</div>

<input type='button' style="height:30px; margin:1%" onclick="window.location.href='admin.php'" id="cofnijdopaneluadmina" value="Cofnij do panelu">
<div id="okno">

<form method="post" action="skrypt_dodawania_lekcji_xD_JD.php" style="font-size:15px;">
    <select style="width:120px;height:30px;border-radius:400px;" name='sele'>
    <?php
	require "baza.php";
	if ($result = $wynik->query("SELECT * FROM loginy WHERE typ <> 'admin' and typ <> 'uczen'"))
	{
		while($w=$result->fetch_assoc())
		{
			echo "<option value=".$w['login'].">".$w['login']."</option>";      
			$_SESSION['login']=$w['login']; 
		}
		$result->close();
	}
	?>
	</select>
	<select style="width:120px;height:30px;border-radius:400px;" name='selekl'>
    <?php
	if($result = $wynik->query("SELECT * FROM klasy "))
	{
		while($w=$result->fetch_assoc())
		{
			echo "<option value=".$w['id'].">".$w['klasa']."</option>";      
		}
		$result->close();
	}
	?>
	</select>
	<select style="width:120px;height:30px;border-radius:400px;" name='przedmiot'>
    <?php
	if ($result = $wynik->query("SELECT * FROM `lekcje`"))
	{
		while($w=$result->fetch_assoc())
		{
			echo "<option value=".$w['id'].">".$w['lekcja']."</option>";       
		}
		$result->close();
	}
	?>
	</select>
	<!-- Polski 1<input type="radio" name="Przedmiot" value="1"> 
	Matma 2<input type="radio" name="Przedmiot" value="2"> 
	WF 3<input type="radio" name="Przedmiot" value="3"> 
	Filozofia 4<input type="radio" name="Przedmiot" value="4"> 
	-->
	<input type='submit' style="width:100px; height:30px;background-color:white;border:1px solid black" value="ok">
</form>

</div>
</div>
</body>
</html>