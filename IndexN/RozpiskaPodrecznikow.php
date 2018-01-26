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
  display: inline-block;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  padding: 4px 20px 10px;
  border: 4px solid rgba(3,183,129,1);
  -webkit-border-radius: 10px;
  border-radius: 10px;
  font: normal 16px/normal "Courier New", Courier, monospace;
  color: rgba(255,255,255,1);
  text-align: center;
  text-indent: 1%;
  -o-text-overflow: ellipsis;
  text-overflow: ellipsis;
  white-space: pre;
  word-spacing: 11px;
  background: -webkit-linear-gradient(-145deg, rgba(0,0,0,1) 0, rgba(133,25,158,1) 65%, rgba(234,142,255,1) 66%, rgba(234,142,255,1) 100%);
  background: -moz-linear-gradient(235deg, rgba(0,0,0,1) 0, rgba(133,25,158,1) 65%, rgba(234,142,255,1) 66%, rgba(234,142,255,1) 100%);
  background: linear-gradient(235deg, rgba(0,0,0,1) 0, rgba(133,25,158,1) 65%, rgba(234,142,255,1) 66%, rgba(234,142,255,1) 100%);
  background-repeat: repeat-x;
  background-position: 50% 50%;
  -webkit-background-origin: padding-box;
  background-origin: padding-box;
  -webkit-background-clip: border-box;
  background-clip: border-box;
  -webkit-background-size: contain;
  background-size: contain;
  -webkit-box-shadow: 15px 2px 2px 0 rgba(255,0,0,0.64) inset, 9px -1px 8px 0 rgba(0,255,0,1) ;
  box-shadow: 15px 2px 2px 0 rgba(255,0,0,0.64) inset, 9px -1px 8px 0 rgba(0,255,0,1) ;
  text-shadow: 1px 1px 0 rgba(255,255,255,0.66) ;
  -webkit-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  -moz-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  -o-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  -webkit-transform: rotateX(3.437746770784939deg) rotateY(-31.51267873219528deg)   ;
  transform: rotateX(3.437746770784939deg) rotateY(-31.51267873219528deg)   ;
}
.benjoy-css {
  display: inline-block;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  cursor: pointer;
  padding: 10px 25px;
  border: 3px solid #018dc4;
  -webkit-border-radius: 32px 32px 3px 3px / 23px 23px 3px 3px;
  border-radius: 32px 32px 3px 3px / 23px 23px 3px 3px;
  font: normal 21px/21px Verdana, Geneva, sans-serif;
  color: rgba(0,0,0,0.9);
  text-decoration: overline;
  text-align: center;
  -o-text-overflow: clip;
  text-overflow: clip;
  word-spacing: 5px;
  background: rgba(99,23,99,0.9);
  -webkit-box-shadow: -20px 3px 41px 0 rgba(3,183,129,1) , 13px 5px 66px 0 rgba(64,70,247,1) ;
  box-shadow: -20px 3px 41px 0 rgba(3,183,129,1) , 13px 5px 66px 0 rgba(64,70,247,1) ;
  text-shadow: -1px -1px 0 rgba(224,224,224,1) ;
  -webkit-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  -moz-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  -o-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  -webkit-transform: rotateX(-24.064227395494576deg) rotateY(-1.7188733853924696deg)  translateX(9px) skewX(7deg);
  transform: rotateX(-24.064227395494576deg) rotateY(-1.7188733853924696deg)  translateX(9px) skewX(7deg);
  -webkit-transform-origin: 89% 50% 0;
  transform-origin: 89% 50% 0;
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


 <div style="margin-left:auto;margin-right:auto;background-color" ><a href="SpisWszystkichksiazek.php" style="text-align:center;"> Spis wszystkich Ksiazek</a> </div>
<div style="cleat:both" id="clear"> </div>
 <div style="float:left;background-color:;width:24%;min-height:30px;font-size:15px;text-align:center;" > Klasa   </div>
 <div style="float:left;background-color:;min-width:24%;min-height:30px;font-size:15px;text-align:center;" >  lekcja   </div>
	  <div style="float:left;background-color:;width:24%;min-height:30px;font-size:15px;text-align:center;" >    nazwa podrecznika</div>
	  <div style="float:left;background-color:;min-width:24%;min-height:30px;font-size:15px;text-align:center;" > nazwa czwiczen   </div>
	  

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

      ?>
	  
	  
	 <form method="POST" action="SkryptRozpiskaPodrecznikow.php">
	  <div style="float:left;width:24%;min-height:40px;border:1px dotted black;font-size:18px;text-align:center;" id="login"> <?php  echo $klasssa; ?>     </div>
	   <div style="float:left;width:24%;min-height:40px;border:1px dotted black;font-size:18px;text-align:center;" id="login"> <?php   echo $lekcjaaa; ?>     </div>
	  <div style="float:left;width:24%;min-height:40px;border:1px dotted black;font-size:18px;text-align:center;" id="login">  <input name="pdr" class="enjoy-css" placeholder="<?php  $pom="NazwaPodrecznika"; require"PlaceholderdPodreczniki.php" ?>" />   </div>
	  <div style="float:left;width:24%;min-height:40px;border:1px dotted black;font-size:18px;text-align:center;" id="klasa"> <input name="czw" class="enjoy-css" placeholder="<?php  $pom="NazwaCzwiczen"; require"PlaceholderdPodreczniki.php" ?>" />    </div>

	
	  <div style="cleat:both" id="clear">      </div>
	  <input type="submit" class="benjoy-css" value="WYSLIJ" />
	
	  </form>
	  
	 <?php 
		
	 
	 
	
	 ?>
	 <br>
	 
	 <?php 
		
       
    
 

?>



  
  
  
</div>

  

    
 
</body>
</html>
