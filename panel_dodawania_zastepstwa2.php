<?php 
session_start();
 ?>
<!DOCTYPE html>
<?php
$data= date('Y.m.d');

for ($j=0; $j<strlen($data); $j++)
{
	if ($data[$j]=='.')
		$data[$j]='-';
}
$sele=$_POST['sele'];
$sele2=$_POST['sele2'];
?>
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
Kurde wywiadówka

<img style="height:125px;width:200px;margin-top:-20px;float:left"  src="../Grafika/logomm.png"> </img>
<form action="../wyloguj.php" method="_POST" >
 

  <input style="float:right;background-color:#191919;:width:50px;height:100px;position:relative;
    bottom: 40px;cursor:pointer;color:white;font-family: 'Audiowide', cursive;border-left:2px dotted #1F1F1F;border-top:0;border-right:0;border-bottom:0" type="submit" value="WYLOGUJ"/>
 
 
 </form>
</div>

 
 </div>
 <div id="con">
   <form method="post" action="skrypt_zastepstwo.php" style="font-size:15px;">
    <select style="width:120px;height:30px;border-radius:400px;" name='sele'>
<?php
require "baza.php";
$_SESSION['data']=$data;
$_SESSION['sele2']=$sele;

$klasa=$_SESSION['kl'];


	
echo $klasa; 
	    if ($result = $wynik->query("SELECT * FROM planlekcji WHERE klasa='$sele' AND dzien='$sele2'")) {
   
    while($w=$result->fetch_assoc()){
        echo "<option value='1'>".$w['lekcja1']."</option>";  
		echo "<option value='2'>".$w['lekcja2']."</option>"; 
		echo "<option value='3'>".$w['lekcja3']."</option>"; 
		echo "<option value='4'>".$w['lekcja4']."</option>"; 
		echo "<option value='5'>".$w['lekcja5']."</option>"; 
		echo "<option value='6'>".$w['lekcja6']."</option>"; 
		echo "<option value='7'>".$w['lekcja7']."</option>"; 
		echo "<option value='8'>".$w['lekcja8']."</option>"; 
		echo "<option value='9'>".$w['lekcja9']."</option>"; 		
      
		
       
    }
 
 
  $result->close();
  $wynik->close();
}
		 
		  
	
	
?>
<input type="text" placeholder="lekcja" name="lekcja"/>
<input type="number" placeholder="Numer sali" name="numer_sali"/>

    </select>

	<input type='submit' style="width:100px; height:50px;border-radius:400px;"value="ok ">

    </form>

</br>



</div>
 
</body>
</html>
