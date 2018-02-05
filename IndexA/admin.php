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
	min-height:102px;
	background-color:black;
	float:right
	text-align: center;
	pading:9px;
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
Panel Admina s
<img style="height:125px;width:200px;margin-top:-20px;float:left"  src="../Grafika/logomm.png"> </img>

<form action="../wyloguj.php" method="_POST" >


  <input style="float:right;background-color:#191919;:width:50px;height:100px;position:relative;
    bottom: 40px;cursor:pointer;color:white;font-family: 'Audiowide', cursive;border-left:0px dotted #1F1F1F;border-top:0;border-right:0;border-bottom:0" type="submit" value="WYLOGUJ"/>
 
 
 </form>
</div>

<?php
if(isset($_SESSION['admin1']))
{
	echo $_SESSION['admin1'];
	unset($_SESSION['admin1']);
}

?>

 



</br>


  <span style="margin-left:9%;"> wybierz uzytkownika aby został teacherem </span>
  <div id="okno">
    <form method="post" action="admin1.php" style="font-size:15px;">
    <select style="width:120px;height:30px;border-radius:400px;" name='sele'>
    <?php
require "baza.php";
 
 

 
 
if ($result = $wynik->query("SELECT * FROM loginy WHERE typ <> 'admin'")) {
   
    while($w=$result->fetch_assoc()){
        echo "<option value=".$w['login'].">".$w['login']."</option>";      
        $_SESSION['login']=$w['login'];
		
       
    }
 
 
  $result->close();
  $wynik->close();
}
 
?>

    </select>
	
	
	<input type='submit' style="width:40px; height:30px;"value="ok ">
	<div id=wybierz>
	<span style="font-size:25px;float:left;"> Wybierz przedmiot nauczyciela </span>
    </form>
	
	<form   method="post" action="panel_dodawania_lekcji_dla_nau.php" style="font-size:15px;">
<input type='submit' style="width:100px; height:30px;;margin-left:15%"value="Dalej">

</form>
</div>
<div>
<div style="margin-left:9%;font-size:25px;float:left;">Dodaj nową lekcje</div>
<form   method="post" action="panel_dodawania_lekcji_do ocen.php" style="font-size:25px;">
<input type='submit' style="width:100px; height:30px;;margin-left:15%"value="Dodaj">

</form>
	<div style="margin-left:9%;font-size:25px;float:left;">Dodaj nową klasę</div>
<form   method="post" action="panel_dodawania_klas.php" style="font-size:25px;">
<input type='submit' style="width:100px; height:30px;;margin-left:15%"value="Dodaj">

</form>	
	<div style="margin-left:9%;font-size:25px;float:left;">Dodaj uczniowi klasę</div>
<form   method="post" action="panel_dodawania_ucznia_do_klas.php" style="font-size:25px;">
<input type='submit' style="width:100px; height:30px;;margin-left:15%"value="Dodaj">

</form>	
    
 </div>
 	<div style="margin-left:9%;font-size:25px;float:left;">Edytuj ucznia</div>
	 </br>
<form   method="post" action="panel_zmiany_ucznia.php" style="font-size:25px;">
<input type='submit' style="width:100px; height:30px;;margin-left:15%"value="Dodaj">

</form>	

    	<div style="margin-left:9%;font-size:25px;float:left;">Plan lekcji</div>
	 </br>
<form   method="post" action="planlekcji.php" style="font-size:25px;">
<input type='submit' style="width:100px; height:30px;;margin-left:15%"value="Dodaj">

</form>	
 </div>
 
 
 
</body>
</html>
