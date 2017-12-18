<?php 
session_start();
 ?>
<!DOCTYPE html>

<html>

<head>
<meta lang="pl"/>
<meta charset="utf-8"/>
<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
<link rel="stylesheet" href="style.css" type="text/css" >
</head>
<body>

<div id="all">
<div id="logo">
Panel Admina 
<img style="height:125px;width:200px;margin-top:-20px;float:left"  src="logomm.png"> </img>
<form action="wyloguj.php" method="_POST" >

  <input id="wyloguj" type="submit" value="WYLOGUJ"/>
  
 </form>
</div>



   <form method="post" action="skrypt_dodawania_lekcji_xD_JD.php" style="font-size:15px;">
    <select style="width:100px;height:30px;" name='sele'>
    <?php
require "baza.php";
 
 

 
 
if ($result = $wynik->query("SELECT * FROM loginy WHERE typ <> 'admin' and typ <> 'uczen'")) {
   
    while($w=$result->fetch_assoc()){
        echo "<option value=".$w['login'].">".$w['login']."</option>";      
        $_SESSION['login']=$w['login'];
		
       
    }
 
 
 
 
 
  $result->close();
 
}
 	$radio="radio";
		$przedmiot="przedmiot";
	if ($result = $wynik->query("SELECT * FROM `lekcje`")) {
   
    while($w=$result->fetch_assoc()){
       
	   echo $w['lekcja'];
		echo "<input type=".$radio." name=".$przedmiot." value=".$w['id'].">";
       
    }
	
	}
?>

    </select>
	
	
	
	<!-- Polski 1<input type="radio" name="Przedmiot" value="1"> 
	Matma 2<input type="radio" name="Przedmiot" value="2"> 
	WF 3<input type="radio" name="Przedmiot" value="3"> 
	Filozofia 4<input type="radio" name="Przedmiot" value="4"> 
	-->
	<input type='submit' style="width:100px; height:30px;background-color:white;border:1px solid black"value="ok ">
	 <span style="margin-left:9%;font-size:22px"> 
	 </span>
    </form>
	 <input type='button' onclick="window.location.href='admin.php'" id="cofnijdopaneluadmina" value="Cofnij do panelu">


</br>

	
	
	

 </div>
    
 </div>
</body>
</html>
