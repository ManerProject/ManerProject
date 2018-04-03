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
	height:100px;
	margin-left:5%;
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
<div id="okno">

<form   method="post" action="panel_wyboru_lekcji_do_dodania_Ocen.php">
<input type='submit' style="height:30px;"value="Powrót do głównego panelu">
</form>

<form   method="post" action="oceny_semestralne_klasy2.php">
<input type='submit' style="height:30px"value="Oceny klasy na koniec roku">
</form> 

 </div>
I semestr<br>
Oceny semestralne klasy 
<?php
	require "baza.php";
	$klasa=$_SESSION['klasa']; 
	if($rezult=$wynik->query("SELECT * FROM klasy WHERE id='$klasa'"))
	{
		$w=$rezult->fetch_assoc();
		echo $w['numer'];
		echo " ";
		echo $w['nazwa'];
	}
?>

<table border="1">
<tr>
<td>nr</td>
<td>imie i nazwisko</td>
<?php
require "baza.php";
$klasa=$_SESSION['klasa'];
$r=1;
if($rezultat=$wynik->query("SELECT * FROM `ocenysemestralne` WHERE idklasy='$klasa' AND Semestr='$r'")){
	$i=1;
	while($w=$rezultat->fetch_assoc())
	{
		$idu=$w['iducznia'];
		break;
	}
	if($rezult=$wynik->query("SELECT * FROM `ocenysemestralne` WHERE `iducznia`='$idu' AND Semestr='$r'"))
	{
		while($q=$rezult->fetch_assoc())
		{
			$lekcja=$q['idlekcja'];
			if($rezult1=$wynik->query("SELECT * FROM `lekcje` WHERE id='$lekcja'"))
			{
				$e=$rezult1->fetch_assoc();
				echo "<td>".$e['lekcja']."</td>";
			}
		}
	}
	
}
?>
</tr>
<?php
if($rezultat=$wynik->query("SELECT * FROM `ocenysemestralne` WHERE idklasy='$klasa' AND Semestr=1")){
	$k=$rezultat->num_rows;
	$licz=0;
	for($i=0;$i<$k;$i++)
	{
		$tab[$i]=0;
		$uczn[$i]=0;
	}
	$i=1;
	while($w=$rezultat->fetch_assoc()){
		$idu=$w['iducznia'];
		$idn=$w['idnauczyciela'];
		$semestr=$w['Semestr'];
		$ocena=$w['Ocena'];
		$next=0;
		for($j=0;$j<$k;$j++)
		{
			if($idu==$uczn[$j])
			{
				$next=1;
				break;
			}
		}
		if($next==1)
		{
			continue;
		}
		$uczn[$licz]=$idu;
		echo "<tr>";
		echo "<td>".$i."</td>";
		$i++;
		if($rezult1=$wynik->query("SELECT * FROM loginy WHERE id='$idu'"))
		{
			$q=$rezult1->fetch_assoc();
			echo "<td>".$q['imie']." ".$q['nazwisko']."</td>";
		}
		if($rezult2=$wynik->query("SELECT * FROM `ocenysemestralne` WHERE `iducznia`='$idu' AND Semestr='1'"))
		{
			$l=0;
			while($y=$rezult2->fetch_assoc())
			{
				$lekcja=$y['idlekcja'];
				if($rezult11=$wynik->query("SELECT * FROM `ocenysemestralne` WHERE idlekcja='$lekcja' AND `iducznia`='$idu' AND Semestr='1'"))
				{
					$e=$rezult11->fetch_assoc();
					echo "<td>".$e['Ocena']."</td>";
					if($e['Ocena']==1)
					{
						$l++;
					}
				}
			}
			$tab[$licz]=$l;
			$licz++;
		}
		echo "</tr>";
	}
}
?>
</table>	
<?php
echo "Ilość uczniów z jedną oceną niedostateczną: ";
$l=0; 
for($i=0;$i<$licz;$i++)
{
	if($tab[$i]==1)
	{
		$l++;
	}
}
echo $l."<br>Ilość uczniów z dwoma ocenami niedostatecznymi: ";
$l=0; 
for($i=0;$i<$licz;$i++)
{
	if($tab[$i]==2)
	{
		$l++;
	}
}
echo $l."<br>Ilość uczniów z więcej niż dwoma ocenami niedostatecznymi: ";
$l=0; 
for($i=0;$i<$licz;$i++)
{
	if($tab[$i]>2)
	{
		$l++;
	}
}
echo $l;
?>


</div>
</body>
</html>