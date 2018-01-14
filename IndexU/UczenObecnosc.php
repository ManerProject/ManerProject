<?php 
session_start();

require "baza.php";



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

Semestr 1
<form method="POST" action="indexs2.php">

  <input  type="submit" name="seme" value="semestr2" >
  </form>
  <form method="POST" action="wiadomosci.php">

  <input  type="submit" name="seme" value="wiadomosc" >
  </form>
  <form method="POST" action="UczenObecnosc.php">

  <input  type="submit" name="seme" value="obecnosc" >
  </form>

 

<br>
 
 
 

<br>
legenda</br> U Nieobecnosc Uspr </br>    S spoznienie     </br>        - Nieobecnosc nieuspr   </br>   0 obecny
<div style="background-color:;"id="panel">

 <div style="float:left;background-color:;width:20%;min-height:30px" > Login    </div>
	  <div style="float:left;background-color:;width:10%;min-height:30px" >    Klasa  </div>
	  <div style="float:left;background-color:;min-width:35%;min-height:30px" >  Data </div>
	  <div style="float:left;background-color:;width:35%;min-height:30px" >   Obecność  </div>

    <div style="cleat:both" id="clear"> </div>
<?php

$login= $_SESSION['login'];

 
 
 if ($result = $wynik->query("SELECT klasy.klasa,loginy.id FROM loginy,klasy where klasy.id=loginy.klasa and loginy.login='uczenkl12'")) {
   
    while($w=$result->fetch_assoc()){
		
      $id= $w['id'];
	  $klasa=$w['klasa'];
	}
 }




 $i=0;
 if ($result = $wynik->query("SELECT * FROM `obeconsc` WHERE `uczen`=$id AND `obecnosc`=2 OR `obecnosc`=11 GROUP BY `data`")) {
   
    while($w=$result->fetch_assoc()){
		
      ?>
	  
	  <div style="float:left;background-color:;width:19%;min-height:30px;border:1px dotted black" id="login"> <?php echo $login  ?>     </div>
	  <div style="float:left;background-color:;width:8%;min-height:30px;border:1px dotted black" id="klasa"> <?php  echo $klasa ?>     </div>
	   <div style="float:left;background-color:;width:25%;min-height:30px;border:1px dotted black" id="przedmiot">   <?php echo $w['data']; ?>     </div>
	  <div style="float:left;background-color;min-width:39%;min-height:40px;border:1px dotted black" id="Oceny">    <?php require "SkryptSprObecnosciUcznia.php"; ?>  </div>

	
	  <div style="cleat:both" id="clear">      </div>
	 <?php 
		
	 
	 
	
	 ?>
	 <br>
	 
	 <?php 
		
       
    }
 }

?>

</div>



   

 </div>
    
 </div>
</body>
</html>
