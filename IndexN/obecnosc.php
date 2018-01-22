<?php 
session_start();
$klasa= $_SESSION['kl'];
require "baza.php";
$data= date('Y.m.d');

for($j=0;$j<strlen($data);$j++)
{
	if($data[$j]=='.')
		$data[$j]='-';
	
}


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

<?php
require "odnosiki.php";
?>
<form method="POST" action="obecnoscskrypt.php">
 
<?php

echo $data;



$_SESSION['data']=$data;
?>
<br>
 
 Numer lekcji <input type="number" min="1" max="9" value="<?php require"placeholderdoobecnosc.php"?>" name="numer_lekcji">
 
 

<br>

<div style="background-color:;"id="panel">

 <div style="float:left;background-color:;width:20%;min-height:30px" > Login    </div>
	  <div style="float:left;background-color:;width:10%;min-height:30px" >    Klasa  </div>
	  <div style="float:left;background-color:;min-width:35%;min-height:30px" >  Data </div>
	  <div style="float:left;background-color:;width:35%;min-height:30px" >   Obecność  </div>

    <div style="cleat:both" id="clear"> </div>
<?php



 
 $lekcja=$_SESSION['xdlekcja'];
 
 

 if ($result = $wynik->query("SELECT * FROM `klasy` WHERE id='$klasa'")) {
   
    while($w=$result->fetch_assoc()){
		$klasssa=$w['klasa'];
}
}

 $i=0;
 if ($result = $wynik->query("SELECT * FROM `loginy` WHERE klasa='$klasa'")) {
   
    while($w=$result->fetch_assoc()){
		$_SESSION['loginy']=$w['login'];
		$login=$w['login'];
		$id=$w['id']
      ?>
	  
	  <div style="float:left;background-color:;width:19%;min-height:30px;border:1px dotted black" id="login"> <?php  echo $w['login']; ?>     </div>
	  <div style="float:left;background-color:;width:8%;min-height:30px;border:1px dotted black" id="klasa"> <?php  echo $klasssa ?>     </div>
	   <div style="float:left;background-color:;width:25%;min-height:30px;border:1px dotted black" id="przedmiot">   <?php  echo $data ?>     </div>
	  <div style="float:left;background-color;min-width:39%;min-height:40px;border:1px dotted black" id="Oceny">    <?php  require "skryptsprobecnosci.php"; ?>  </div>
	  <div style="float:left;background-color;width:5.5%;min-height:30px;border:1px dotted black" id="Input">  <select name="obecnosc[]">
		<option>1 Obecny</option>
		<option>2 Nie obecny</option>
		<option>3 Spoznienie</option>
	</select>    </div>
	
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

 </div>
    
 </div>
</body>
</html>
