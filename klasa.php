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
Informacje na temat twojej klasy
<form method="POST" action="naus1.php">

  <input  type="submit" name="seme" value="semestr2" >
  </form>
  <form method="POST" action="nau.php">

  <input  type="submit" name="seme" value="semestr1" >
  </form>
  <form method="POST" action="paneluwag.php">

  <input  type="submit" name="uwagi" value="uwagi" >
  </form>
  <form method="POST" action="obecnosc.php">

  <input  type="submit" name="obecnosc" value="obecnosci" >
  </form>

<form method="POST" action="nau2.php">
 

  za co  <input  style =""name="zaco" >
 
 

<br>

<div style="background-color:;"id="panel">

 <div style="float:left;background-color:;width:20%;min-height:30px" > Login    </div>
	  <div style="float:left;background-color:;min-width:35%;min-height:30px" > Przedmiot   </div>
	  <div style="float:left;background-color:;width:35%;min-height:30px" >   Oceny   </div>

    <div style="cleat:both" id="clear"> </div>
<?php
require "baza.php";
$klasa=$_SESSION['kl'];
	 if($result = $wynik->query("SELECT * from klasy WHERE id='$klasa'") ){
   
		$w=$result->fetch_assoc();
			 $numer=$w['numer'];
			 $nazwa=$w['nazwa'];
     }	

 $lekcja=$_SESSION['xdlekcja'];
 

 

 $i=0;
 if ($result = $wynik->query("SELECT * FROM `loginy` WHERE klasa='$klasa'")) {
   
    while($w=$result->fetch_assoc()){
		$login=$w['login'];
		$login=$w['login'];
      ?>
	  
	  <div style="float:left;background-color:;width:19%;min-height:30px;border:1px dotted black" id="login"> <?php  echo $w['login']; ?>     </div>
	   <div style="float:left;background-color:;width:25%;min-height:30px;border:1px dotted black" id="przedmiot"> <?php  echo $lekcja ?>     </div>
	  <div style="float:left;background-color;min-width:39%;min-height:40px;border:1px dotted black" id="Oceny">  <?php $oceny="oceny"; require "Skryptocen.php"; ?>    </div>
	  <div style="float:left;background-color;width:4%;min-height:30px;border:1px dotted black" id="Input">  <input maxlength="1" placeholder="0" style ="width:30px;"name="hej[]" >    </div>
	
	  <div style="cleat:both" id="clear">      </div>
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
<?php
   
 ?>
 </div>
    
 </div>
</body>
</html>