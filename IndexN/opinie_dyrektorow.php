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
	font-size:20px;
	font-family: 'Acme', sans-serif;
}
#logo
{
	width:100%;
	min-height:102px;
	background-color:black;
	float:right
	text-align: center;
	padding:9px;
	color:white;
}
#okno
{
	margin-left:5%;
}
</style>

<div id="all">
<div id="logo">
Panel Nauczyciela
<img style="height:125px;width:200px;margin-top:-20px;float:left"  src="../Grafika/logomm.png">

<form action="../wyloguj.php" method="POST">
  <input style="float:right;background-color:#191919;width:80px;height:70px;position:relative;
    bottom:40px;cursor:pointer;color:white;font-family:'Audiowide', cursive;border-left:0px dotted #1F1F1F;border-top:0;border-right:0;border-bottom:0; margin-right:1%;" type="submit" value="WYLOGUJ"/> 
</form>
</div>

<form method="post" action="panel_wyboru_lekcji_do_dodania_Ocen.php">
	<input type='submit' style="height:30px; margin:1%" value="Powrót do głównego panelu">
</form>
<div id="okno">

Wybierz klasę
<form  method="post" style="font-size:25px;">
	<select name="klasa">
		<?php
		require "baza.php";
		$id=$_SESSION['id'];
		$_SESSION['id']=$id;
		if ($result1 = $wynik->query("SELECT * FROM klasy"))
		{
			while($w=$result1->fetch_assoc())
			{
				$num=$w['numer'];
				$naz=$w['nazwa'];
				$id=$w['id'];
				echo "<option value='$id'>$num";
				echo " ";
				echo "$naz</option>";
				$i++;
			}
		}
		?>
	</select>
	<input type='submit' name="a" style="height:30px;margin-left:5%"value="Wybierz">
</form>	

<?php
if(isset($_POST['a']))
{
	$klasa=$_POST['klasa'];
	$rezult=$wynik->query("SELECT * FROM wizyty_dyrektorow WHERE `klasa`='$klasa'");
	$ile=$rezult->num_rows;
	if($ile>0)
	{
		$rez=$wynik->query("SELECT * FROM klasy WHERE id='$klasa'");
		$wq=$rez->fetch_assoc();
		$knu=$wq['numer'];
		$kna=$wq['nazwa'];
		echo $knu." ".$kna;
		echo "<br>";
		echo "<table border='1px'>";
		echo "<tr>";
		echo "<td>lekcja</td>";
		echo "<td>data</td>";
		echo "<td>opinia</td>";
		echo "<td>dyrektor</td>";
		for($i=0;$i<$ile;$i++)
		{
			echo "<tr>";
			$w=$rezult->fetch_assoc();
			$lekcja=$w['lekcja'];
			$data=$w['data'];
			$opinia=$w['opis'];
			$wd=$w['dyrektor'];
			if($rezultat = $wynik->query("SELECT * from loginy WHERE id='$wd'"));
			$il=$rezultat->num_rows;
			if($ile=1)
			{
				$w=$rezultat->fetch_assoc();
				$wda=$w['imie'];
				$wdb=$w['nazwisko'];
			}
			echo "<tr>";
			echo "<td>$lekcja</td>";
			echo "<td>$data</td>";
			echo "<td>$opinia</td>";
			echo "<td>";
			echo $wda;
			echo " ";
			echo $wdb;
			echo "</td>"; 
			echo "</tr>";
		}
		echo "</table>";
	}
}
?>
</div>
</div>   
</body>
</html>