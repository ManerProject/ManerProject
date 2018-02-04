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
Panel wicedyrektora
<img style="height:125px;width:200px;margin-top:-20px;float:left"  src="../Grafika/logomm.png"> </img>
<form action="../wyloguj.php" method="_POST" >
 

  <input style="float:right;background-color:#191919;:width:50px;height:100px;position:relative;
    bottom: 40px;cursor:pointer;color:white;font-family: 'Audiowide', cursive;border-left:2px dotted #1F1F1F;border-top:0;border-right:0;border-bottom:0" type="submit" value="WYLOGUJ"/>
 
 
 </form>
</div>
<form   method="post" action="panel_wyboru_lekcji_do_dodania_Ocen.php" style="font-size:25px;">
<input type='submit' style="width:100px; height:30px;margin-left:15%"value="Powrot do glownego panelu">
</form>


 	<div style="margin-left:9%;font-size:25px;float:left;">Obserwacja w klasie</div>
	 </br>
<form   method="post" action="skrypt_obserwacja.php" style="font-size:25px;">
klasa
<select name="klasa">
<?php
require "baza.php";
$id=$_SESSION['id'];
$_SESSION['id']=$id;
if ($result1 = $wynik->query("SELECT * FROM klasy")) {
   $i=1;
    while($w=$result1->fetch_assoc()){
			 $num=$w['numer'];
			 $naz=$w['nazwa'];
			 $id=$w['id'];
			 echo "<option value='$id'>$num";
			 echo " ";
			 echo "$naz</option>";
			 $i++;
    }
	}
	?>
</select>
<br>
nr lekcji 
<select name="nr_l">
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
</select>
<br>
 Data  <input type="date" value=""  style =""name="data" > <br>
 <input type="text" name="opinia">
<input type='submit' style="width:100px; height:30px;margin-left:15%"value="Wprowadź dane">

</form>	

</div>
    
</body>
</html>