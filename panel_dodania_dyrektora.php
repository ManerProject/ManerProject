<?php 
session_start();
 ?>
<!DOCTYPE html>

<html>

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
<form action="../wyloguj.php" method="_POST" >
 

  <input style="float:right;background-color:#191919;:width:50px;height:98px;position:relative;
    bottom: 40px;cursor:pointer;color:white;font-family: 'Audiowide', cursive;border-left:2px dotted #1F1F1F;border-top:0;border-right:0;border-bottom:0" type="submit" value="WYLOGUJ"/>
 
 
 </form>
</div>
</div>

<form action="skrypt_dodawania_dyrektora.php" method="POST" >
    <select style="width:120px;height:30px;border-radius:400px;" name='nauc'>
    <?php
require "baza.php";
 
if ($result = $wynik->query("SELECT * FROM loginy WHERE typ <> 'admin' and typ <> 'uczen'")) {
   
    while($w=$result->fetch_assoc()){
        echo "<option value=".$w['id'].">".$w['login']."</option>";      
        $_SESSION['login']=$w['login'];
		
       
	}
 
  $result->close();
 
}
?>
 </select>
  <input type="submit" value="Dodaj"/>
 </div>

 
 
 </form>
  <input type='button' onclick="window.location.href='admin.php'" id="cofnijdopaneluadmina" value="Cofnij do panelu">
</body>
</html>