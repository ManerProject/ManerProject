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
	pading:10px;
	color:white;
	
  }
#okno
{
	width:100px;
	
	height:100px;
	margin-left:15%;
}
  
  </style>

<div id="all">
<div id="logo">

<img style="height:125px;width:200px;margin-top:-20px;float:left"  src="../Grafika/logomm.png"> </img>
<form action="../wyloguj.php" method="_POST" >
 

  <input style="float:right;background-color:#191919;:width:50px;height:100px;position:relative;
    bottom: 40px;cursor:pointer;color:white;font-family: 'Audiowide', cursive;border-left:2px dotted #1F1F1F;border-top:0;border-right:0;border-bottom:0" type="submit" value="WYLOGUJ"/>
 
 
 </form>
</div>

<form method="POST" action="naus1.php">

  <input  type="submit" name="seme" value="semestr2" >
  </form>
   <form method="POST" action="nau.php">

  <input  type="submit" name="seme" value="semestr1" >
  </form>
  <form method="POST" action="paneluwag.php">

  <input  type="submit" name="uwagi" value="uwagi" >
  </form>
   <form method="POST" action="braklekcji.php">

  <input  type="submit" name="brak lekcji" value="brak lekcji" >
  </form>
  <form method="POST" action="obecnosc.php">

  <input  type="submit" name="obecnosc" value="obecnosc" >
  </form>
 
 
 
 wybierz ucznia  <form method="post" action="pomskrypsprobecnosci.php" style="font-size:15px;">
    <select style="width:120px;height:30px;border-radius:400px;" name='sele'>
    <?php
require "baza.php";
 
 

 $kl= $_SESSION['kl'];
 
if ($result = $wynik->query("SELECT * FROM `loginy` WHERE klasa='$kl'")) {
   
    while($w=$result->fetch_assoc()){
        echo "<option value=".$w['id'].">".$w['login']."</option>";      
        
		
       
    }
 
 
  $result->close();
  $wynik->close();
}
 
?>

    </select>
	
	
	<input type='submit' style="width:40px; height:30px;"value="ok ">
	<div id=wybierz>
	
    </form>
 </div>




</body>
</html>
