<?php 
require('reqnau.php');
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
   
    
<form action="skrypt_dane_osobowe1.php" method="POST" >
  <input type="submit" value="Zmień"/>
 <br><br>
	<?php
	require "baza.php";
		$id=$_POST['dane'];
		if($result=$wynik->query("SELECT * FROM loginy WHERE id='$id'"))
		{
			$w=$result->fetch_assoc();
			$imie=$w['imie'];
			$nazwisko=$w['nazwisko'];
		}
		echo $imie.' '.$nazwisko;
		echo "<br>";
		if($rezultat=$wynik->query("SELECT * FROM dane_osobowe WHERE id_ucznia='$id'"))
		{
			$w=$rezultat->fetch_assoc();
			$numer=$w['numer_ewidencyjny'];
			$data=$w['data_urodzenia'];
			$miejsce=$w['miejsce_urodzenia'];
			$pesel=$w['PESEL'];
			$zamieszkanie=$w['miejsce_zamieszkania'];
			$wm=$w['wies/miasto'];
			$imie_m=$w['imie_matki'];
			$nazwisko_m=$w['nazwisko_matki'];
			$imie_t=$w['imie_ojca'];
			$nazwisko_t=$w['nazwisko_ojca'];
			$adres=$w['adres_rodzicow'];
			$telefon=$w['telefon_kontaktowy'];
			$email=$w['email_rodzicow'];
			echo "numer ewidencyjny ";
			echo "<input type='text' name='numer' value='$numer'><br>";
			echo "data urodzenia ";
			echo "<input type='text' name='data' value='$data'><br>";
			echo "miejsce urodzenia ";
			echo "<input type='text' name='miejsce' value='$miejsce'><br>";
			echo "PESEL: ";
			echo "<input type='text' name='pesel' value='$pesel'><br>";
			echo "miejsce zamieszkania: ";
			echo "<input type='text' name='zamieszkanie' value='$zamieszkanie'><br>";
			echo "wieś/miasto (zamieszkanie): ";
			echo "<select name='wm'>";
				echo "<option value='1'>wies</option>";
				echo "<option value='2'>miasto</option>";
			echo "</select><br>";
			echo "imiona i nazwiska rodziców, opiekunów prawnych <br>";
			echo "<input type='text' name='imie_m' value='$imie_m'><br>";
			echo "<input type='text' name='nazwisko_m' value='$nazwisko_m'><br>";
			echo "<input type='text' name='imie_t' value='$imie_t'><br>";
			echo "<input type='text' name='nazwisko_t' value='$nazwisko_t'><br>";
			echo "adres rodziców, opiekunow prawnych ";
			echo "<input type='text' name='adres' value='$adres'><br>";
			echo "telefon kontaktowy ";
			echo "<input type='text' name='tel' value='$telefon'><br>";
			echo "email rodziców, opiekunów prawnych ";
			echo "<input type='text' name='email' value='$email'><br>";
		}
		$_SESSION['id']=$id;
	?>
 
</form>
    
</body>
</html>