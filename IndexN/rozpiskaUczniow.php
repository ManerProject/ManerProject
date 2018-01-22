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
.enjoy-css {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  width: 9%;
  height: 30px;
  padding: 12px 0 0;
  overflow: hidden;
  border: none;
  font: normal 20px/1 Arial Black, Gadget, sans-serif;
  color: rgba(12,12,12,1);
  text-align: center;
  -o-text-overflow: clip;
  text-overflow: clip;
  background: -webkit-linear-gradient(-90deg, rgba(255,255,255,1) 0, rgba(255,255,255,1) 49%, rgba(255,0,0,1) 49%, rgba(255,0,0,1) 100%), rgba(160,9,17,0.82);
  background: -moz-linear-gradient(180deg, rgba(255,255,255,1) 0, rgba(255,255,255,1) 49%, rgba(255,0,0,1) 49%, rgba(255,0,0,1) 100%), rgba(160,9,17,0.82);
  background: linear-gradient(180deg, rgba(255,255,255,1) 0, rgba(255,255,255,1) 49%, rgba(255,0,0,1) 49%, rgba(255,0,0,1) 100%), rgba(160,9,17,0.82);
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
	  
	 <div class="enjoy-css"><?php  echo $w['login']; ?></div>
	  <div class="enjoy-css"><?php  echo $klasssa ?> </div>
	   <div class="enjoy-css"><?php $lp=2; require "RozpiskaGNieuspr.php"; ?>  </div>
	    <div class="enjoy-css"><?php $lp=11; require "RozpiskaGNieuspr.php"; ?></div>
		 <div class="enjoy-css"><?php $lp=3; require "RozpiskaGNieuspr.php"; ?></div>
		  <div class="enjoy-css"><?php $lp=1; require "RozpiskaOcen.php";   ?></div>
		   <div class="enjoy-css"><?php $lp=2; require "RozpiskaOcen.php";   ?></div>
		    <div class="enjoy-css"><?php $lp=3; require "RozpiskaOcen.php";   ?></div>
			 <div class="enjoy-css"><?php $lp=4; require "RozpiskaOcen.php";   ?></div>
			  <div class="enjoy-css"><?php $lp=5; require "RozpiskaOcen.php";   ?></div>
			 
	<div class="enjoy-css"><?php $lp=6; require "RozpiskaOcen.php";?></div>
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
