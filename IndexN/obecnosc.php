<?php 
session_start();
$klasa= $_SESSION['kl'];
require "baza.php";
$data= date('Y.m.d');
for($j=0;$j<strlen($data);$j++)
{
	if($data[$j]=='.')
	{
		$data[$j]='-';
	}
}
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

<?php
require "odnosiki.php";
?>
<hr>
<?php
if ($result = $wynik->query("SELECT * FROM `klasy` WHERE id='$klasa'"))
		{
			while($w=$result->fetch_assoc())
			{
				$numer=$w['numer'];
				$nazwa=$w['nazwa'];
			}
		}
		echo "Klasa ".$numer." ".$nazwa;
?>
<form method="POST" action="obecnoscskrypt.php">
	<?php
	echo $data;
	$_SESSION['data']=$data;
	?>
	<br>
	Numer lekcji <input type="number" min="1" max="9" value="<?php require"placeholderdoobecnosc.php"?>" name="numer_lekcji">
	<?php
	$_SESSION['numer']=$numer;
	if ($result = $wynik->query("SELECT * FROM `obeconsc` WHERE data='$data' AND numer_lekcji>=1"))
	{
		if($result->num_rows>0)
		{
	?>
	<input type="button" value="Brak zmian" onclick="window.location.href='brak_zmian2.php'"/>
	<?php
		}
	}
	if ($result = $wynik->query("SELECT * FROM `obeconsc` WHERE data='$data' AND numer_lekcji>=1"))
	{
		if($result->num_rows>0)
		{
	?>
	<input type="button" value="Brak zmian -spoźnienia" onclick="window.location.href='brak_zmian.php'"/>
	<?php
		}
	}
	?>
	<div style="background-color:;"id="panel">
		<div style="float:left;background-color:;width:20%;min-height:30px"> Login </div>
		<div style="float:left;background-color:;min-width:35%;min-height:30px"> Data </div>
		<div style="float:left;background-color:;width:35%;min-height:30px"> Obecność </div>
		<div style="cleat:both" id="clear"> </div>
		<?php
		$lekcja=$_SESSION['xdlekcja'];
		if ($result = $wynik->query("SELECT * FROM `klasy` WHERE id='$klasa'"))
		{
			while($w=$result->fetch_assoc())
			{
				$numer=$w['numer'];
				$nazwa=$w['nazwa'];
			}
		}
		$i=0;
		if ($result = $wynik->query("SELECT * FROM `loginy` WHERE klasa='$klasa'")) 
		{
			while($w=$result->fetch_assoc())
			{
				$_SESSION['loginy']=$w['login'];
				$login=$w['login'];
				$id=$w['id']
		?>
		<div style="float:left;background-color:;width:19%;min-height:30px;border:1px dotted black" id="login"> <?php echo $w['login']; ?> </div>
		<div style="float:left;background-color:;width:25%;min-height:30px;border:1px dotted black" id="przedmiot"> <?php echo $data ?> </div>
		<div style="float:left;background-color;min-width:39%;min-height:40px;border:1px dotted black" id="Oceny"> <?php require "skryptsprobecnosci.php"; ?> </div>
		<div style="float:left;background-color;width:5.5%;min-height:30px;border:1px dotted black" id="Input"> 
			<select name="obecnosc[]">
				<option>1 Obecny</option>
				<option>2 Nie obecny</option>
				<option>3 Spoznienie</option>
			</select>
		</div>
		<div style="clear:both" id="clear"> </div>
		<br>
		<?php    
			}
		}
		?>
		<input type='submit' style=""value="wyslij">
	</div>
</form>
</div>
    
</div>
</body>
</html>