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
  width: 18%;
  height: 40px;
  padding: 20px 0 0;
  overflow: hidden;
  border: 1px solid;
  -webkit-border-radius: 10px / 2px;
  border-radius: 10px / 2px;
  font: normal 16px/1 "Times New Roman", Times, serif;
  color: rgba(255,255,255,1);
  text-align: center;
  -o-text-overflow: ellipsis;
  text-overflow: ellipsis;
  background: -webkit-linear-gradient(-126deg, rgba(203,96,179,0.41) 0, rgba(173,18,131,0.52) 50%, rgba(70,196,221,0.58) 100%), #557582;
  background: -moz-linear-gradient(216deg, rgba(203,96,179,0.41) 0, rgba(173,18,131,0.52) 50%, rgba(70,196,221,0.58) 100%), #557582;
  background: linear-gradient(216deg, rgba(203,96,179,0.41) 0, rgba(173,18,131,0.52) 50%, rgba(70,196,221,0.58) 100%), #557582;
  background-position: 50% 50%;
  -webkit-background-origin: padding-box;
  background-origin: padding-box;
  -webkit-background-clip: border-box;
  background-clip: border-box;
  -webkit-background-size: auto auto;
  background-size: auto auto;
  -webkit-box-shadow: 1px 1px 1px 0 rgba(0,0,0,0.3) ;
  box-shadow: 1px 1px 1px 0 rgba(0,0,0,0.3) ;
  text-shadow: 1px 1px 1px rgba(0,0,0,0.2) ;
  float:left;
  

  
}
.input-css {
  display: inline-block;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  width:100%;
 
  -webkit-border-radius: 10px / 2px;
  border-radius: 10px / 2px;
  font: normal 85px/normal "Times New Roman", Times, serif;
  color: rgba(0,114,155,1);
  -o-text-overflow: clip;
  text-overflow: clip;
  word-spacing: 1px;
  background: -webkit-linear-gradient(-54.462322208025626deg, rgba(183,222,237,1) 0, rgba(183,222,237,1) 48%, rgba(113,206,239,1) 50%, rgba(33,180,226,0.65) 57%, rgba(183,222,237,1) 100%), rgba(255,255,255,1);
  background: -moz-linear-gradient(144.46232220802563deg, rgba(183,222,237,1) 0, rgba(183,222,237,1) 48%, rgba(113,206,239,1) 50%, rgba(33,180,226,0.65) 57%, rgba(183,222,237,1) 100%), rgba(255,255,255,1);
  background: linear-gradient(144.46232220802563deg, rgba(183,222,237,1) 0, rgba(183,222,237,1) 48%, rgba(113,206,239,1) 50%, rgba(33,180,226,0.65) 57%, rgba(183,222,237,1) 100%), rgba(255,255,255,1);
  background-position: 50% 50%;
  -webkit-background-origin: padding-box;
  background-origin: padding-box;
  -webkit-background-clip: border-box;
  background-clip: border-box;
  -webkit-background-size: auto auto;
  background-size: auto auto;
  -webkit-box-shadow: 2px 2px 2px 0 rgba(219,0,0,0.2) inset;
  
  text-shadow: 1px 1px 0 rgba(255,255,255,0.66) ;
  -webkit-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  -moz-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  -o-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  height:60px;
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

<?php
require "odnosiki.php";
?>



  <br>


 

<div>
 <div style="float:left;background-color:;width:15%;min-height:30px;font-size:15px;text-align:center; font: normal 20px/1 black-ops-one, Helvetica, sans-serif;" > Login  </div>
 <div style="float:left;background-color:;min-width:10%;min-height:30px;font-size:15px;text-align:center;font: normal 20px/1 black-ops-one, Helvetica, sans-serif;" >  klasa   </div>
	  <div style="float:left;background-color:;width:10%;min-height:30px;font-size:15px;text-align:center;font: normal 20px/1 black-ops-one, Helvetica, sans-serif;" >    lekcja</div>
	  <div style="float:left;background-color:;min-width:43%;min-height:30px;font-size:15px;text-align:center;font: normal 20px/1 black-ops-one, Helvetica, sans-serif;" > oceny   </div>
	    <div style="float:left;background-color:;min-width:15%;min-height:30px;font-size:15px;text-align:center;font: normal 20px/1 black-ops-one, Helvetica, sans-serif;" > Srednia Ocen   </div>
	  

    <div style="cleat:both" id="clear"> </div>
	
	 </div>
	  <form method="POST" action="SkryptRozpiskaPodrecznikow.php">
	  <div>
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


  if ($result = $wynik->query("SELECT * FROM `loginy` WHERE klasa='$klasa'")) {
   
    while($w=$result->fetch_assoc()){
		$login=$w['id'];
      ?>
	  
	  
	 
	 
	 <div class="div-css" style="width:15%"><?php  echo $w['login']; ?></div>
	  	 <div class="div-css" style="width:10%"><?php   echo $klasssa; ?></div>
	 <div class="div-css" style="width:10%"><?php   echo $lekcjaaa; ?></div>
	 
			<div class="div-css" style="width:45%"><?php $oceny="oceny"; require "Skryptocen.php"; ?></div>
			<div class="div-css"style="width:10%">><?php    ?></div>
	<div style="float:Left;width:3%"> <input maxlength="1"  class="input-css" name="ocenaS[]" placeholder="0"/> </div>
	  <div style="cleat:both" id="clear">      </div>
	  
	
	  
	  
	 <?php 
		
  }}
	 
	
	 ?>
	 <br>
	 </div>
	 <?php 
		
       
    
 

?>

</form>

  
  
  
</div>
 <div style="height:200px;width:100%;background-color:red;">
 
 </div>

 

    
 
</body>
</html>
