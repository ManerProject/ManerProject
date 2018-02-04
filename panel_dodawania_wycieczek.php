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
  
  </style>

<div id="all">
<div id="logo">

<img style="height:125px;width:200px;margin-top:-20px;float:left"  src="../Grafika/logomm.png"> </img>
<form action="../wyloguj.php" method="_POST" >
 

  <input style="float:right;background-color:#191919;:width:50px;height:100px;position:relative;
    bottom: 40px;cursor:pointer;color:white;font-family: 'Audiowide', cursive;border-left:2px dotted #1F1F1F;border-top:0;border-right:0;border-bottom:0" type="submit" value="WYLOGUJ"/>
 
 
 </form>
</div>


<form   method="post" action="panel_wyboru_lekcji_do_dodania_Ocen.php" style="font-size:25px;">
<input type='submit' style="width:100px; height:30px;margin-left:15%"value="Powrot do glownego panelu">
</form>
   
    
<form action="skrypt_dodawania_wycieczki.php" method="POST" >
 data<input type="date" placeholder="data" name="data"/><br>
 czas trwania wycieczki (ilość dni)<input type="text" placeholder="czas trwania wycieczki" name="dni"/><br>
  czas trwania wycieczki (ilość godzin)<input type="text" placeholder="czas trwania wycieczki" name="godz"/><br>
 liczba uczniow <input type="text" name="liczba"/><br>
cel wycieczki <input type="text" placeholder="cel wycieczki" name="cel"/><br>
program wycieczki <input type="text" placeholder="program wycieczki" name="program"><br>
nauczyciel prowadzacy 
<select name="nauczyciel">
<?php
require "baza.php";
$login= $_SESSION['login'];
$klasa=$_SESSION['klasa'];
$_SESSION['klasa']=$klasa;
if ($result1 = $wynik->query("SELECT * FROM loginy WHERE typ='teacher'")) {
   
    while($w=$result1->fetch_assoc()){
			 $imie=$w['imie'];
			 $nazwisko=$w['nazwisko'];
			 $id=$w['id'];
			echo "<option value='$id'>";
			echo $imie.' '.$nazwisko;
			echo "</option>";
    }
}
?>
</select><br>
opiekunowie wycieczki - ile 
<select name="ile">
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
</select><br>
  <input type="submit" value="Wyslij"/>
 </div>

 </form>
 
 
 </form>
	
	
	

 </div>
    
 </div>
</body>
</html>