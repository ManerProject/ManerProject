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
Pochwały ucznia 
<?php
require "baza.php";
$id=$_POST['uczen'];
 if ($result = $wynik->query("SELECT * FROM `loginy` WHERE id='$id'")) {
    while($w=$result->fetch_assoc()){
			 $imie=$w['imie'];
			 $nazwisko=$w['nazwisko'];
			 echo $imie.' '.$nazwisko;
	}
 }
?>
<br>
 <table border="1">
 <tr>
 <td>pochwała</td>
 <td>nauczyciel, który dał pochwałę</td>
 <td>data</td>
 </tr>
<?php
require "baza.php";
$klasa=$_SESSION['klasa'];
			  if ($result = $wynik->query("SELECT * FROM `uwagi` WHERE id_login='$id' AND rodzaj='1'")) {
					while($w=$result->fetch_assoc()){
						echo "<tr>";
							$tytul=$w['tytul'];
							$tresc=$w['tresc'];
							$nau=$w['id_nau'];
							$data=$w['data'];
							if ($resultat = $wynik->query("SELECT * FROM `loginy` WHERE id='$nau'")) {
										$ww=$resultat->fetch_assoc();
										$im=$ww['imie'];
										$naz=$ww['nazwisko'];
							}
							echo "<td>".$tytul."<br>".$tresc."</td>";
							echo "<td>".$im." ".$naz."</td>";
							echo "<td>".$data."</td>";
						echo "</tr>";
					}
			  }
$_SESSION['klasa']=$klasa;
?>
</table>	
</br>
Uwagi ucznia 
<?php
require "baza.php";
$id=$_POST['uczen'];
 if ($result = $wynik->query("SELECT * FROM `loginy` WHERE id='$id'")) {
    while($w=$result->fetch_assoc()){
			 $imie=$w['imie'];
			 $nazwisko=$w['nazwisko'];
			 echo $imie.' '.$nazwisko;
	}
 }
?>
<br>
 <table border="1">
 <tr>
 <td>uwaga</td>
 <td>nauczyciel, który dał uwagę</td>
 <td>data</td>
 </tr>
<?php
require "baza.php";
$klasa=$_SESSION['klasa'];
			  if ($result = $wynik->query("SELECT * FROM `uwagi` WHERE id_login='$id' AND rodzaj='2'")) {
					while($w=$result->fetch_assoc()){
						echo "<tr>";
							$tytul=$w['tytul'];
							$tresc=$w['tresc'];
							$nau=$w['id_nau'];
							$data=$w['data'];
							if ($resultat = $wynik->query("SELECT * FROM `loginy` WHERE id='$nau'")) {
										$ww=$resultat->fetch_assoc();
										$im=$ww['imie'];
										$naz=$ww['nazwisko'];
							}
							echo "<td>".$tytul."<br>".$tresc."</td>";
							echo "<td>".$im." ".$naz."</td>";
							echo "<td>".$data."</td>";
						echo "</tr>";
					}
			  }
$_SESSION['klasa']=$klasa;
?>
</table>	
</br>


 </div>
    
 </div>
</body>
</html>
