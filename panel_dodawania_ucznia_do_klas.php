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
<form action="wyloguj.php" method="_POST" >
 

  <input style="float:right;background-color:#191919;:width:50px;height:98px;position:relative;
    bottom: 40px;cursor:pointer;color:white;font-family: 'Audiowide', cursive;border-left:2px dotted #1F1F1F;border-top:0;border-right:0;border-bottom:0" type="submit" value="WYLOGUJ"/>
 
 
 </form>
</div>

<?php
if(isset($_SESSION['admin1']))
{
	echo $_SESSION['admin1'];
	unset($_SESSION['admin1']);
}

if(!isset($_SESSION['admin']))
{
	header ('Location:login.php');
	exit();
}
?>

 



</br>


  <div id=tekst><span style="margin-left:9%;">Wybierz klase</span></div>
  <div id="okno">
    <form method="post" action="skrypt_panel_dodawania_ucznia_do_klas.php" style="font-size:15px;">
    <select style="width:85%;height:30px;border-radius:400px;" name='sele'>
 </div>
    <?php
require "baza.php";
 
 

 
 
if ($result = $wynik->query("SELECT * FROM `klasy`  ")) {
   
    while($klasa=$result->fetch_assoc()){
        echo "<option value=".$klasa['id_klasy'].">".$klasa['klasy']."</option>";      
        $_SESSION['klasy']=$klasa['id_klasy'];
		
       
    }
 
 
  $result->close();
  $wynik->close();
}
 
?>

    </select>	
	
<div id=tekst>Wybierz ucznia</div>
  <div id="okno">
    <select style="width:85%;height:30px;border-radius:400px;" name='sele1'>
 </div>
    <?php
require "baza.php";
 
 

 
 
if ($result = $wynik->query("SELECT * FROM loginy WHERE typ = 'uczen'")) {
   
    while($w=$result->fetch_assoc()){
        echo "<option value=".$w['login'].">".$w['login']."</option>";      
        $_SESSION['login']=$w['login'];
		
       
    }
 
 
  $result->close();
  $wynik->close();
}
 
?>
	<input type='submit'>
	</form>
    </select>	
  <input type='button' onclick="window.location.href='admin.php'" id="cofnijdopaneluadmina" value="Cofnij do panelu">

</body>
</html>