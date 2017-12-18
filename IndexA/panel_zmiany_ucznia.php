<!DOCTYPE html>
<?php 
session_start();
?>


<head>
<meta lang="pl"/>
<meta charset="utf-8"/>
<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
<link rel="Stylesheet" type="text/css" href="style.css" />

</head>
<body>
  <style>
  body
  {
	background-color:#E6E6E6;
	margin:0%;
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
	
	width:350px;
	height:100px;
	margin-left:9%;
}
#tekst{
		margin-right:20%;
}  
  </style>

<div id="all">
<div id="logo">
Panel Admina 
<img style="height:125px;width:200px;margin-top:-20px;float:left"  src="../Grafika/logomm.png"> </img>
<form action="wyloguj.php" method="_POST" >
 

  <input style="float:right;background-color:#191919;:width:50px;height:98px;position:relative;
    bottom: 40px;cursor:pointer;color:white;font-family: 'Audiowide', cursive;border-left:2px dotted #1F1F1F;border-top:0;border-right:0;border-bottom:0" type="submit" value="WYLOGUJ"/>
 
 
 </form>
</div>
</div>

	<?php
	//"SELECT lekcje.lekcja from lekcje,nau where nau.nau='$id' and nau.przedmiot1=lekcje.id"
	$i=0;
	if ($result1 = $wynik->query("SELECT `id`, `login`, `haslo`, `email`, `typ`, `id_loginy_klasy` FROM `loginy` WHERE 1")) {
   
    while($w=$result1->fetch_assoc()){
			 $login=$w['login'];
	}
	}
 ?>
 
		
<input type='submit' name="tak" style="width:100px; height:50px;border-radius:400px;margin-left:15%"value="<?php echo $login;?>"/>

<?php

	 $i++;
	 echo  $i;
	?>

    
  <input type='button' onclick="window.location.href='admin.php'" id="cofnijdopaneluadmina" value="Cofnij do panelu">

</body>