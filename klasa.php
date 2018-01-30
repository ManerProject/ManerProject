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
SEMESTR1
<img style="height:125px;width:200px;margin-top:-20px;float:left"  src="../Grafika/logomm.png"> </img>
<form action="../wyloguj.php" method="_POST" >
 

  <input style="float:right;background-color:#191919;:width:50px;height:100px;position:relative;
    bottom: 40px;cursor:pointer;color:white;font-family: 'Audiowide', cursive;border-left:2px dotted #1F1F1F;border-top:0;border-right:0;border-bottom:0" type="submit" value="WYLOGUJ"/>
 
 
 </form>
</div>
<br>
Klasa: <?php
require "baza.php";
$kl=$_SESSION['klasa'];
  if ($result = $wynik->query("SELECT * FROM klasy WHERE id='$kl'")) {
   
						if($ww=$result->fetch_assoc()){
							echo $ww['numer']." ".$ww['nazwa'];
						}
					}
?>
<br>
Rok szkolny:
<br>
Zawód: <?php
require "baza.php";
$kl=$_SESSION['klasa'];
  if ($result = $wynik->query("SELECT * FROM klasy WHERE id='$kl'")) {
   
						if($ww=$result->fetch_assoc()){
							echo $ww['profil'];
						}
					}
?>
<br>
Samorząd klasowy: <br><?php
require "baza.php";
$kl=$_SESSION['klasa'];
if ($result = $wynik->query("SELECT * FROM samorzady WHERE klasa='$kl' AND pozycja=0")) {
   
		if($ww=$result->fetch_assoc()){
			$uczen=$ww['uczen'];
				if ($resultt = $wynik->query("SELECT * FROM loginy WHERE id='$uczen'")) {
							if($w=$resultt->fetch_assoc()){
								$imie=$w['imie'];
								$nazwisko=$w['nazwisko'];
							}
							echo "Przewodniczacy: ";
							echo $imie.' '.$nazwisko;
							echo "<br>";
				}
		}
}
if ($result = $wynik->query("SELECT * FROM samorzady WHERE klasa='$kl' AND pozycja=1")) {
   
		if($ww=$result->fetch_assoc()){
			$uczen=$ww['uczen'];
				if ($resultt = $wynik->query("SELECT * FROM loginy WHERE id='$uczen'")) {
							if($w=$resultt->fetch_assoc()){
								$imie=$w['imie'];
								$nazwisko=$w['nazwisko'];
							}
							echo "Wiceprzewodniczacy: ";
							echo $imie.' '.$nazwisko;
							echo "<br>";
				}
		}
}
if ($result = $wynik->query("SELECT * FROM samorzady WHERE klasa='$kl' AND pozycja=2")) {
   
		if($ww=$result->fetch_assoc()){
			$uczen=$ww['uczen'];
				if ($resultt = $wynik->query("SELECT * FROM loginy WHERE id='$uczen'")) {
							if($w=$resultt->fetch_assoc()){
								$imie=$w['imie'];
								$nazwisko=$w['nazwisko'];
							}
							echo "Skarbnik: ";
							echo $imie.' '.$nazwisko;
							echo "<br>";
				}
		}
}				
?>
<br>
<form action='dane_klasy_samorzad.php' method='post'>
		<input type='submit' style='width:100px; height:50px;border-radius:400px;' value='zmień samorzad klasowy'>
</form>
Rada rodziców: <br>
<?php
require "baza.php";
$kl=$_SESSION['klasa'];
if ($result = $wynik->query("SELECT * FROM rady_rodzicow WHERE klasa='$kl' AND pozycja=0")) {
   
		if($ww=$result->fetch_assoc()){
			$rodzic=$ww['rodzic'];
				if ($resultt = $wynik->query("SELECT * FROM loginy WHERE id='$rodzic'")) {
							if($w=$resultt->fetch_assoc()){
								$imie=$w['imie'];
								$nazwisko=$w['nazwisko'];
							}
							echo "Przewodniczacy: ";
							echo $imie.' '.$nazwisko;
							echo "<br>";
				}
		}
}
if ($result = $wynik->query("SELECT * FROM rady_rodzicow WHERE klasa='$kl' AND pozycja=1")) {
   
		if($ww=$result->fetch_assoc()){
			$rodzic=$ww['rodzic'];
				if ($resultt = $wynik->query("SELECT * FROM loginy WHERE id='$rodzic'")) {
							if($w=$resultt->fetch_assoc()){
								$imie=$w['imie'];
								$nazwisko=$w['nazwisko'];
							}
							echo "Wiceprzewodniczacy: ";
							echo $imie.' '.$nazwisko;
							echo "<br>";
				}
		}
}
if ($result = $wynik->query("SELECT * FROM rady_rodzicow WHERE klasa='$kl' AND pozycja=2")) {
   
		if($ww=$result->fetch_assoc()){
			$rodzic=$ww['rodzic'];
				if ($resultt = $wynik->query("SELECT * FROM loginy WHERE id='$rodzic'")) {
							if($w=$resultt->fetch_assoc()){
								$imie=$w['imie'];
								$nazwisko=$w['nazwisko'];
							}
							echo "Skarbnik: ";
							echo $imie.' '.$nazwisko;
							echo "<br>";
				}
		}
}				
?>
<br>
<form action='dane_rady_rodzicow.php' method='post'>
		<input type='submit' style='width:100px; height:50px;border-radius:400px;' value='zmień sklad rady rodzicow'>
</form>
Wychowawca: <?php
require "baza.php";
$nau=$_SESSION['id'];
  if ($result = $wynik->query("SELECT * FROM loginy WHERE id='$nau'")) {
   
						if($ww=$result->fetch_assoc()){
							echo $ww['imie'];
							echo " ";
							echo $ww['nazwisko'];
						}
					}
?>
<br>

 </div>
    
 </div>
</body>
</html>