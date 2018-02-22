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
<br>
 <table border="1">
 <tr>
 <td>uczen</td>
 <td>ocena z zachowania na pierwszy semestr</td>
 <td>ocena z zachowania na drugi semestr</td>
 </tr>
<?php
require "baza.php";
$klasa=$_SESSION['klasa'];
			  if($result = $wynik->query("SELECT * FROM `loginy` WHERE klasa='$klasa'")) {
					while($w=$result->fetch_assoc()){
						echo "<tr>";
							 $id=$w['id'];
							 $imie=$w['imie'];
							 $nazwisko=$w['nazwisko'];
							echo "<td>".$imie.' '.$nazwisko."</td>";
							$q='1';
							if ($resultat = $wynik->query("SELECT * FROM `oceny_z_zachowania` WHERE `id_ucznia`='$id' AND `semestr`='$q'")) {
								$ww=$resultat->fetch_assoc();
								$ocena=$ww['ocena'];
								if($ocena=='1')
										 {
											 echo "<td>naganne</td>";
										 }
										 if($ocena=='2')
										 {
											 echo "<td>nieodpowiednie</td>";
										 }
										 if($ocena=='3')
										 {
											 echo "<td>poprawne</td>";
										 }
										 if($ocena=='4')
										 {
											 echo "<td>dobre</td>";
										 }
										 if($ocena=='5')
										 {
											 echo "<td>bardzo dobre</td>";
										 }
										 if($ocena=='6')
										 {
											 echo "<td>wzorowe</td>";
										 }
							}
							$l=2;
							if ($resultat = $wynik->query("SELECT * FROM `oceny_z_zachowania` WHERE id_ucznia='$id' AND semestr='$l'")) {
								while($www=$resultat->fetch_assoc()){
										 $ocena=$www['ocena'];
										 echo "<td>";
										 if($ocena=='1')
										 {
											 echo "naganne";
										 }
										 if($ocena=='2')
										 {
											 echo "nieodpowiednie";
										 }
										 if($ocena=='3')
										 {
											 echo "poprawne";
										 }
										 if($ocena=='4')
										 {
											 echo "dobre";
										 }
										 if($ocena=='5')
										 {
											 echo "bardzo dobre";
										 }
										 if($ocena=='6')
										 {
											 echo "wzorowe";
										 }
										 echo "</td>";
								}
							}
						echo "</tr>";
					}
			  }
$_SESSION['klasa']=$klasa;
?>
</table>
<?php
require "baza.php";
$klasa=$_SESSION['klasa'];
$q=1;
if ($resultat = $wynik->query("SELECT * FROM `oceny_z_zachowania` WHERE `klasa`='$klasa' AND `semestr`='$q'")) {
		$je=0;
		$dw=0;
		$tr=0;
		$cz=0;
		$pi=0;
		$sz=0;
	while($ww=$resultat->fetch_assoc()){
		$ocena=$ww['ocena'];
		if($ocena=='1')
		{
			$je++;
		}
		if($ocena=='2')
		{
			$dw++;
		}
		if($ocena=='3')
		{
			$tr++;
		}
		if($ocena=='4')
		{
			$cz++;
		}
		if($ocena=='5')
		{
			$pi++;
		}
		if($ocena=='6')
		{
			$sz++;
		}
	}
}
echo "Oceny na pierwszy semestr: <br>";
echo "Ilosc ocen nagannych: ".$je."<br>";
echo "Ilosc ocen nieodpowiednich: ".$dw."<br>";
echo "Ilosc ocen poprawnych: ".$tr."<br>";
echo "Ilosc ocen dobrych: ".$cz."<br>";
echo "Ilosc ocen bardzo dobrych: ".$pi."<br>";
echo "Ilosc ocen wzorowych: ".$sz."<br>";
?>
<hr>
<?php
$l=2;
if ($resultat = $wynik->query("SELECT * FROM `oceny_z_zachowania` WHERE `klasa`='$klasa' AND `semestr`='$l'")) {
		$je=0;
		$dw=0;
		$tr=0;
		$cz=0;
		$pi=0;
		$sz=0;
	while($ww=$resultat->fetch_assoc()){
		$ocena=$ww['ocena'];
		if($ocena=='1')
		{
			$je++;
		}
		if($ocena=='2')
		{
			$dw++;
		}
		if($ocena=='3')
		{
			$tr++;
		}
		if($ocena=='4')
		{
			$cz++;
		}
		if($ocena=='5')
		{
			$pi++;
		}
		if($ocena=='6')
		{
			$sz++;
		}
	}
}
echo "Oceny na drugi semestr: <br>";
echo "Ilosc ocen nagannych: ".$je."<br>";
echo "Ilosc ocen nieodpowiednich: ".$dw."<br>";
echo "Ilosc ocen poprawnych: ".$tr."<br>";
echo "Ilosc ocen dobrych: ".$cz."<br>";
echo "Ilosc ocen bardzo dobrych: ".$pi."<br>";
echo "Ilosc ocen wzorowych: ".$sz."<br>";
?>
<br>
 </div>

</body>
</html>
