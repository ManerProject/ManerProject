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


<form   method="post" action="panel_wyboru_lekcji_do_dodania_Ocen.php" style="font-size:25px;">
<input type='submit' style="width:100px; height:30px;margin-left:15%"value="Powrot do glownego panelu">
</form>
   
    
<form action="skrypt_rady_rodzicow.php" method="POST" >
 Przewodniczacy rady rodzicow
 <?php
 require "baza.php";
$klasa=$_SESSION['klasa'];
if ($result1 = $wynik->query("SELECT * FROM rady_rodzicow WHERE klasa='$klasa' AND pozycja=0")) {
   
    while($w=$result1->fetch_assoc()){
			 $rodzic=$w['rodzic'];
			 if ($result = $wynik->query("SELECT * FROM loginy WHERE id='$rodzic'")) {
				 while($ww=$result->fetch_assoc()){
						echo " (obecny: ";
						echo $ww['imie'].' '.$ww['nazwisko'];
						echo ")";
				 }
			 }
		}
}
 ?>
 <select name="przewodniczacy">
 <?php
require "baza.php";
if ($result1 = $wynik->query("SELECT * FROM loginy WHERE klasa='$klasa' AND typ='rodzic'")) {
   
    while($w=$result1->fetch_assoc()){
			 $imie=$w['imie'];
			 $nazwisko=$w['nazwisko'];
			 $id=$w['id'];
			echo "<option value='$id'>";
			echo $imie.' '.$nazwisko;
			echo "</option>";
    }
}
?>
 </select>
<br>
 Zastepca klasy
 <?php
 require "baza.php";
if ($result1 = $wynik->query("SELECT * FROM rady_rodzicow WHERE klasa='$klasa' AND pozycja=1")) {
   
    while($w=$result1->fetch_assoc()){
			 $rodzic=$w['rodzic'];
			 if ($result = $wynik->query("SELECT * FROM loginy WHERE id='$rodzic' AND typ='rodzic'")) {
				 while($ww=$result->fetch_assoc()){
						echo " (obecny: ";
						echo $ww['imie'].' '.$ww['nazwisko'];
						echo ")";
				 }
			 }
    }
}
 ?>
 <select name="wiceprzewodniczacy">
 <?php
require "baza.php";
$klasa=$_SESSION['klasa'];
if ($result1 = $wynik->query("SELECT * FROM loginy WHERE klasa='$klasa' AND typ='rodzic'")) {
   
    while($w=$result1->fetch_assoc()){
			 $imie=$w['imie'];
			 $nazwisko=$w['nazwisko'];
			 $id=$w['id'];
			echo "<option value='$id'>";
			echo $imie.' '.$nazwisko;
			echo "</option>";
    }
}
?>
 </select>
<br>
Skarbnik klasy
 <?php
 require "baza.php";
$klasa=$_SESSION['klasa'];
if ($result1 = $wynik->query("SELECT * FROM rady_rodzicow WHERE klasa='$klasa' AND pozycja=2")) {
   
    while($w=$result1->fetch_assoc()){
			 $rodzic=$w['rodzic'];
			 if ($result = $wynik->query("SELECT * FROM loginy WHERE id='$rodzic' AND typ='rodzic'")) {
				 while($ww=$result->fetch_assoc()){
						echo " (obecny: ";
						echo $ww['imie'].' '.$ww['nazwisko'];
						echo ")";
				 }
			 }
    }
}
 ?>
 <select name="skarbnik">
 <?php
require "baza.php";
if ($result1 = $wynik->query("SELECT * FROM loginy WHERE klasa='$klasa' AND typ='rodzic'")) {
   
    while($w=$result1->fetch_assoc()){
			 $imie=$w['imie'];
			 $nazwisko=$w['nazwisko'];
			 $id=$w['id'];
			echo "<option value='$id'>";
			echo $imie.' '.$nazwisko;
			echo "</option>";
    }
}
$_SESSION['klasa']=$klasa;
?>
 </select>
<br>
  <input type="submit" value="Wprowadz dane"/>
 </div>

 </form>
 
 
 </form>
	
	
	

 </div>
    
 </div>
</body>
</html>