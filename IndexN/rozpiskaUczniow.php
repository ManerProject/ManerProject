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

  <input  type="submit" name="obecnosc" value="obecnosc" >
  </form>
  <form method="POST" action="braklekcji.php">

  <input  type="submit" name="brak lekcji" value="brak lekcji" >
  </form>
  
  <form method="POST" action="panel_dodawania_wywiadowki2.php">
  <input  type="submit" name="wywiadowek" value="wywiadowek" >
  </form>
  
  <form method="POST" action="panel_wywiadowki_aktywna.php">
  <input  type="submit" name="wywiadowek" value="wywiadowek aktywna" >
  </form>
  
  <form method="POST" action="wiadomosci.php">
  <input  type="submit" name="wiadomosci" value="zobacz se wiadomosci" >
  </form>
  
  <form method="POST" action="panel_wywiadowki_nie_aktywna.php">
  <input  type="submit" name="wywiadowek" value="oznacz wywiadowke jako nie aktywna" >
  </form>
   <form method="POST" action="rozpiskaUczniow.php">
  <input  type="submit" name="wywiadowek" value="RozpiskaUcznoiw" >
  </form>


 

  
 
 

<br>



 <div style="float:left;background-color:;width:9%;min-height:30px;font-size:15px;" > Login    </div>
	  <div style="float:left;background-color:;width:9%;min-height:30px;font-size:15px;" >    Klasa  </div>
	  <div style="float:left;background-color:;min-width:9%;min-height:30px;font-size:15px;" > Liczba g nieuspr   </div>
	  <div style="float:left;background-color:;min-width:9%;min-height:30px;font-size:15px;" > Liczba g Uspr   </div>
	  <div style="float:left;background-color:;min-width:9%;min-height:30px;font-size:15px;" > Liczba g spo   </div>
	  <div style="float:left;background-color:;width:9%;min-height:30px;font-size:15px;" >   Liczba ocen 1   </div>
	    <div style="float:left;background-color:;width:9%;min-height:30px;font-size:15px;" >   Liczba ocen 2   </div>
		  <div style="float:left;background-color:;width:9%;min-height:30px;font-size:15px;" >   Liczba ocen 3   </div>
		    <div style="float:left;background-color:;width:9%;min-height:30px;font-size:15px;" >   Liczba ocen 4   </div>
			  <div style="float:left;background-color:;width:9%;min-height:30px;font-size:15px;" >   Liczba ocen 5   </div>
			    <div style="float:left;background-color:;width:9%;min-height:30px;font-size:15px;" >   Liczba ocen 6   </div>

    <div style="cleat:both" id="clear"> </div>
	
	
<?php
require "baza.php";

$klasa= $_SESSION['kl'];

 $lekcja=$_SESSION['xdlekcja'];
 
if ($result = $wynik->query("SELECT * FROM `klasy` WHERE id='$klasa'")) {
   
    while($w=$result->fetch_assoc()){
		$klasssa=$w['klasa'];
}
}


if ($result = $wynik->query("SELECT * FROM `lekcje` WHERE id='$lekcja'")) {
   
    while($w=$result->fetch_assoc()){
		$lekcjaaa=$w['lekcja'];
}
}
 

 $i=0;
 if ($result = $wynik->query("SELECT * FROM `loginy` WHERE klasa='$klasa'")) {
   
    while($w=$result->fetch_assoc()){
		
		$login=$w['id'];
      ?>
	  
	  <div style="float:left;width:8%;min-height:40px;border:1px dotted black;font-size:18px;text-align:center;" id="login"> <?php  echo $w['login']; ?>     </div>
	  <div style="float:left;width:8%;min-height:40px;border:1px dotted black;font-size:18px;text-align:center;" id="login"> <?php  echo $klasssa ?>     </div>
	  <div style="float:left;width:9%;min-height:40px;border:1px dotted black;font-size:18px;text-align:center;" id="klasa"> <?php $lp=2; require "RozpiskaGNieuspr.php"; ?>     </div>
	  <div style="float:left;width:9%;min-height:40px;border:1px dotted black;font-size:18px;" id="przedmiot"> <?php $lp=11; require "RozpiskaGNieuspr.php"; ?>   </div>
	  <div style="float:left;width:9%;min-height:40px;border:1px dotted black;font-size:18px;text-align:center;" id="przedmiot"> <?php $lp=3; require "RozpiskaGNieuspr.php"; ?>     </div>
	  <div style="float:left;width:9%;min-height:40px;border:1px dotted black;font-size:18px;text-align:center;" id="przedmiot"> <?php $lp=1; require "RozpiskaOcen.php";   ?>     </div>
	  <div style="float:left;width:9%;min-height:40px;border:1px dotted black;font-size:18px;text-align:center;" id="Oceny">  <?php $lp=2; require "RozpiskaOcen.php";   ?>    </div>
	  <div style="float:left;width:9%;min-height:40px;border:1px dotted black;font-size:18px;text-align:center;" id="Oceny">    <?php $lp=3; require "RozpiskaOcen.php";   ?>  </div>
	  <div style="float:left;width:8%;min-height:40px;border:1px dotted black;font-size:18px;text-align:center;" id="Oceny">    <?php $lp=4; require "RozpiskaOcen.php";   ?>  </div>
	  <div style="float:left;width:10%;min-height:40px;border:1px dotted black;font-size:18px;text-align:center;" id="Oceny">   <?php $lp=5; require "RozpiskaOcen.php";   ?>   </div>
	  <div style="float:left;width:10%;min-height:40px;border:1px dotted black;font-size:18px;text-align:center;" id="Input">    <?php $lp=6; require "RozpiskaOcen.php";   ?>  </div>
	
	  <div style="cleat:both" id="clear">      </div>
	 <?php 
		
	 
	 
	
	 ?>
	 <br>
	 
	 <?php 
		
       
    }
 }

?>



   

 </div>
    
 
</body>
</html>
