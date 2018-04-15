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
	padding-left: 0px;
	color:white;
}
#okno
{
	margin-left:5%;
	width: 90%;
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
<form method="POST" action="nau2.php">
	za co<input  style =""name="zaco">
	<br>
	<div id="panel">
		<div style="float:left;width:20%;height:30px"> Login </div>
		<div style="float:left;width:20%;height:30px"> Klasa </div>
		<div style="float:left;width:20%;height:30px"> Przedmiot </div>
		<div style="float:left;width:20%;height:30px"> Oceny </div>
		<div style="clear:both" id="clear"> </div>
		<?php
		require "baza.php";
		$klasa= $_SESSION['kl'];
		$id=$_SESSION['nauczycielid'];
		$_SESSION['nauczycielid']=$id;
		$lekcja=$_SESSION['xdlekcja'];
		if ($result = $wynik->query("SELECT * FROM `klasy` WHERE id='$klasa'")) 
		{
			while($w=$result->fetch_assoc())
			{
				$klasssa_num=$w['numer'];
				$klasssa_naz=$w['nazwa'];
				$klasssa=$w['id'];
			}
		}
		if ($result = $wynik->query("SELECT * FROM `lekcje` WHERE id='$lekcja'"))
		{
			while($w=$result->fetch_assoc())
			{
				$lekcjaaa=$w['lekcja'];
			}
		}
		$i=0;
		if ($result = $wynik->query("SELECT * FROM `loginy` WHERE klasa='$klasa'")) 
		{
			while($w=$result->fetch_assoc())
			{
				$login=$w['id'];
			}
		 }
		$_SESSION['klasa']=$klasa;
		?>
		<div style="float:left;background-color:;width:20%;min-height:30px;border:1px dotted black" id="login"> <?php  echo $w['login']; ?> </div>
		<div style="float:left;background-color:;width:20%;min-height:30px;border:1px dotted black" id="klasa"> <?php  echo $klasssa_num.' '.$klasssa_naz ?> </div>
		<div style="float:left;background-color:;width:20%;min-height:30px;border:1px dotted black" id="przedmiot"> <?php  echo $lekcjaaa ?> </div>
		<div style="float:left;background-color;min-width:20%;min-height:40px;border:1px dotted black" id="Oceny"> <?php $oceny="oceny"; require "Skryptocen.php"; ?> </div>
		<div style="float:left;background-color;width:10%;min-height:30px;border:1px dotted black" id="Input"> <input maxlength="1" placeholder="0" style ="width:30px;"name="hej[]"> </div>
		<div style="clear:both" id="clear"> </div>
		<br>
		<?php ?>
		<input type='submit' style=""value="wyslij">
	</div>
</form>
<?php ?>
</div>
</div>   
</body>
</html>