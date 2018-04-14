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
	font-size:25px;
	font-family: 'Acme', sans-serif;
}
#logo
{
	width:100%;
	min-height:102px;
	background-color:black;
	padding: 9px 9px 9px 0px;
	float:right
	text-align: center;
	color:white;
}
#okno
{
	margin-left:5%;
	width: 95%;
}
</style>

<div id="all">
<div id="logo">
Panel Nauczyciela
<img style="height:125px;width:200px;margin-top:-20px;float:left;"  src="../Grafika/logomm.png">

<form action="../wyloguj.php" method="POST">
  <input style="float:right;background-color:#191919;width:80px;height:70px;position:relative;
    bottom:40px;cursor:pointer;color:white;font-family:'Audiowide', cursive;border-left:0px dotted #1F1F1F;border-top:0;border-right:0;border-bottom:0; margin-right:1%;" type="submit" value="WYLOGUJ"/> 
</form>
</div>

<form method="post" action="panel_wyboru_lekcji_do_dodania_Ocen.php">
	<input type='submit' style="height:30px; margin:1%" value="Powrót do głównego panelu">
</form>

<div id="okno"> 
    
<form action="panel_dane_osobowe.php" method="POST">
	<input type="submit" value="Zmień dane"/>
</form>
<br>
 
<table border="1px">
	<tr>
		<td>lp.</td>
		<td>imie i nazwisko ucznia</td>
		<td>numer ewidencyjny</td>
		<td>data urodzenia</td>
		<td>miejsce urodzenia</td>
		<td>PESEL</td>
		<td>miejsce zamieszkania</td>
		<td>wieś/miasto</td>
		<td>imiona i nazwiska rodziców, opiekunów prawnych</td>
		<td>adres rodziców, opiekunow prawnych</td>
		<td>telefon kontaktowy</td>
		<td>email rodziców, opiekunów prawnych</td>
	</tr>
	<?php
	require "baza.php";
		$klasa=$_SESSION['klasa'];
		if ($result = $wynik->query("SELECT * FROM dane_osobowe WHERE klasa='$klasa'")) 
		{
			$i=1;
			while($w=$result->fetch_assoc())
			{
				echo "<tr>";
				$id=$w['id_ucznia'];
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
				if($rezultat=$wynik->query("SELECT * FROM loginy WHERE id='$id'"))
				{
					$w=$rezultat->fetch_assoc();
					$imie=$w['imie'];
					$nazwisko=$w['nazwisko'];
				}
				echo "<td>".$i."</td>";
				echo "<td>".$imie.' '.$nazwisko."</td>";
				echo "<td>".$numer."</td>";
				echo "<td>".$data."</td>";
				echo "<td>".$miejsce."</td>";
				echo "<td>".$pesel."</td>";
				echo "<td>".$zamieszkanie."</td>";
				echo "<td>";
				if($wm==1)
				{
					echo "wies";
				}
				else
				{
					echo "miasto";
				}
				echo "</td>";
				echo "<td>".$imie_m.' '.$nazwisko_m.', '.$imie_t.' '.$nazwisko_t."</td>";
				echo "<td>".$adres."</td>";
				echo "<td>".$telefon."</td>";
				echo "<td>".$email."</td>";
				echo "</tr>";
			}
		}
		$_SESSION['klasa']=$klasa;
	?>
	</tr>
</table>
<br><hr><br>
<table border="1">
	<tr>
		<td>uczen</td>
		<td>rok urodzenia</td>
		<td>miesjce zamieszkania</td>
		<td>wieś/miasto (miejse zamieszkania)</td>
	</tr>
	<?php
	echo "Uczniowie według roku urodzenia: ";
	require "baza.php";
	$klasa=$_SESSION['klasa'];
	if ($result = $wynik->query("SELECT * FROM `dane_osobowe` WHERE klasa='$klasa'")) 
	{
		$q=0;
		while($w=$result->fetch_assoc())
		{
			$id=$w['id_ucznia'];
			$data=$w['data_urodzenia'];
			$miejscowosc=$w['miejsce_zamieszkania'];
			$aa=explode(",",$miejscowosc);
			$miejsce=$aa[0];
			$wm=$w['wies/miasto'];
			$uczen[$q]=$id;
			$wwmm[$q]=$wm;
			$mieszkanie[$q]=$miejsce;
			$da=strtotime($data);
			$rok[$q]=date("Y", $da);
			$q++;
		}
		for($i=0;$i<$q-1;$i++)
		{
			for($j=$i+1;$j<$q;$j++)
			{
				if($rok[$i]>$rok[$j])
				{
					$a=$rok[$i];
					$rok[$i]=$rok[$j];
					$rok[$j]=$a;
					$a=$uczen[$i];
					$uczen[$i]=$uczen[$j];
					$uczen[$j]=$a;
					$a=$wwmm[$i];
					$wwmm[$i]=$wwmm[$j];
					$wwmm[$j]=$a;
					$a=$mieszkanie[$i];
					$mieszkanie[$i]=$mieszkanie[$j];
					$mieszkanie[$j]=$a;
				}
			}
		}
		$k=0;
		$m=0;
		for($i=0;$i<$q;$i++)
		{
			echo "<tr>";
				 $id=$uczen[$i];
				 if ($rezultat = $wynik->query("SELECT * FROM `loginy` WHERE id='$id'")) {
						$w=$rezultat->fetch_assoc();
						$imie=$w['imie'];
						$nazwisko=$w['nazwisko'];
						echo "<td>".$imie.' '.$nazwisko."</td>";
				 }
				echo "<td>".$rok[$i]."</td>";
				echo "<td>".$mieszkanie[$i]."</td>";
				echo "<td>";
				if($wwmm[$i]==1)
				{
					echo "wieś";
					$k++;
				}
				else
				{
					echo "miasto";
					$m++;
				}
				echo "</td>";
			echo "</tr>";
		}
	}
	echo "</table>";
	echo "<br>";
	echo "Ilość uczniów mieszkających na wsi:";
	echo $k;
	echo "<br>";
	echo "Ilość uczniów mieszkających w mieście:";
	echo $m;
	?>
	
</div>
</div>
</body>
</html>