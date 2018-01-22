<?php 
session_start();






 ?>
<!DOCTYPE html>

<html>

<head>
<meta lang="pl"/>
<meta charset="utf-8"/>
<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
<script type="text/javascript" script-name="black-ops-one" src="http://use.edgefonts.net/black-ops-one.js"></script>
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

.div-css {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
 min-height:40px;
  width: 24%;
  float:left;
   padding-top: 20px;
  overflow: hidden;
  -webkit-box-shadow: 0 0 9px 4px rgba(255,153,0,0.93) , 1px 6px 1px 0 rgba(255,153,0,0.46) ;
  box-shadow: 0 0 9px 4px rgba(255,153,0,0.93) , 1px 6px 1px 0 rgba(255,153,0,0.46) ;

  font: normal 17px/1 "black-ops-one", Helvetica, sans-serif;
  color: rgba(255,153,0,1);
  text-align: center;
  -o-text-overflow: ellipsis;
  text-overflow: ellipsis;
  word-spacing: 2px;
  background: #26363d;
  
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
   <form method="POST" action="RozpiskaPodrecznikow.php">
  <input  type="submit" name="wywiadowek" value="Rozpiska Podrecznikow" >
  </form>



  <br>


 
<div style="cleat:both" id="clear"> </div>

 <div style="float:left;background-color:;width:24%;min-height:30px;font-size:15px;text-align:center; font: normal 20px/1 black-ops-one, Helvetica, sans-serif;" > Klasa   </div>
 <div style="float:left;background-color:;min-width:24%;min-height:30px;font-size:15px;text-align:center;font: normal 20px/1 black-ops-one, Helvetica, sans-serif;" >  lekcja   </div>
	  <div style="float:left;background-color:;width:24%;min-height:30px;font-size:15px;text-align:center;font: normal 20px/1 black-ops-one, Helvetica, sans-serif;" >    Nazwa podrecznika</div>
	  <div style="float:left;background-color:;min-width:24%;min-height:30px;font-size:15px;text-align:center;font: normal 20px/1 black-ops-one, Helvetica, sans-serif;" > Nazwa czwiczen   </div>
	  

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
$klasa= $_SESSION['kl'];
 $i=0;

  if ($result = $wynik->query("SELECT * from klasy,lekcje,podreczniki,loginy where podreczniki.idklasy=klasy.id and podreczniki.idlekcja=lekcje.id and podreczniki.idnauczyciel=loginy.id and podreczniki.idklasy='$klasa'")) {
   
    while($w=$result->fetch_assoc()){
		$lekcjaaa=$w['lekcja'];
		$klasssa=$w['klasa'];
		$pdr=$w['NazwaPodrecznika'];
		$czw=$w['NazwaCzwiczen'];
      ?>
	  
	  
	 <form method="POST" action="SkryptRozpiskaPodrecznikow.php">
	 <div class="div-css"><?php   echo $klasssa; ?></div>
	  	 <div class="div-css"><?php   echo $lekcjaaa; ?></div>
	 <div class="div-css"><?php   echo $pdr; ?></div>
	 
			<div class="div-css"><?php   echo $czw; ?></div>
	
	  <div style="cleat:both" id="clear">      </div>
	  
	
	 
	  
	 <?php 
		
  }}
	 
	
	 ?>
	 <br>
	 
	 <?php 
		
       
    
 

?>

</form>

  
  
  
</div>

  

    
 
</body>
</html>
