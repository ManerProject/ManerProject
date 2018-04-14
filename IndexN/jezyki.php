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

<?php
require "baza.php";
$klasa=$_SESSION['klasa'];
if ($result = $wynik->query("SELECT * FROM `klasy` WHERE id='$klasa'"))
{
    while($w=$result->fetch_assoc())
	{
		$numer=$w['numer'];
		$nazwa=$w['nazwa'];
		echo $numer.' '.$nazwa;
    }
}
if ($result = $wynik->query("SELECT * FROM `jezyki_obce` WHERE klasa='$klasa'"))
{
    while($w=$result->fetch_assoc())
	{
		$ilosc=$w['ilosc_uczniow'];
		echo " - ".$ilosc." uczniów";
    }
}
?>

<table border="1">
	<tr>
		<td>język 1</td>
		<td>uczniowie uczący się podanego języka</td>
		<td>język 2</td>
		<td>uczniowie uczący się podanego języka</td> 
	</tr>
	<?php
	require "baza.php";
	$login= $_SESSION['login'];
	$klasa=$_SESSION['klasa'];
	if ($result = $wynik->query("SELECT * FROM `jezyki_obce` WHERE klasa='$klasa'")) 
	{
		while($w=$result->fetch_assoc())
		{
			$jezyk1=$w['jezyk1'];
			$uczniowie1=$w['uczniowie1'];
			$jezyk2=$w['jezyk2'];
			$uczniowie2=$w['uczniowie2'];
		echo "<tr>";
			echo "<td>";
			if($rezult=$wynik->query("SELECT * FROM lekcje WHERE id='$jezyk1'"))
			{
				$w=$rezult->fetch_assoc();
				echo $w['lekcja'];
			}
			echo "</td>";
			$tab=explode(",",$uczniowie1);
			$l=0;
			foreach($tab as $t)
			{
				$l++;
		 	}
			echo "<td>";
			for($k=0;$k<$l;$k++)
			{
				$pom=$tab[$k];
				if($rezult=$wynik->query("SELECT * FROM loginy WHERE id='$pom'"))
				{
					$w=$rezult->fetch_assoc();
					echo $w['imie'];
					echo " ";
					echo $w['nazwisko'];
				}
				echo ", ";
			}
			echo "</td>";
			echo "<td>";
			if($rezult=$wynik->query("SELECT * FROM lekcje WHERE id='$jezyk2'"))
			{
				$w=$rezult->fetch_assoc();
				echo $w['lekcja'];
			}
			echo "</td>";
			echo "<td>";
			$tab=explode(",",$uczniowie2);
			$l=0;
			foreach($tab as $t)
			{
				$l++;
		 	}
			for($k=0;$k<$l;$k++)
			{
				$pom=$tab[$k];
				if($rezult=$wynik->query("SELECT * FROM loginy WHERE id='$pom'"))
				{
					$w=$rezult->fetch_assoc();
					echo $w['imie'];
					echo " ";
					echo $w['nazwisko'];
				}
				echo ", ";
			}
			echo "</td>";
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