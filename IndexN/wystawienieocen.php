<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta lang="pl"/>
	<meta charset="utf-8"/>
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	<script type="text/javascript" script-name="black-ops-one" src="http://use.edgefonts.net/black-ops-one.js"></script>
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
.div-css 
{
	font: normal 10px/normal "Times New Roman", Times, serif;
	border: 1px solid;
	-webkit-border-radius: 10px / 2px;
	border-radius: 10px / 2px;
	font-size:1em;
	color: rgba(255,255,255,1);
	text-align: center;
	-o-text-overflow: ellipsis;
	text-overflow: ellipsis;
	background: -webkit-linear-gradient(-126deg, rgba(203,96,179,0.41) 0, rgba(173,18,131,0.52) 50%, rgba(70,196,221,0.58) 100%), #557582;
	background: -moz-linear-gradient(216deg, rgba(203,96,179,0.41) 0, rgba(173,18,131,0.52) 50%, rgba(70,196,221,0.58) 100%), #557582;
	background: linear-gradient(216deg, rgba(203,96,179,0.41) 0, rgba(173,18,131,0.52) 50%, rgba(70,196,221,0.58) 100%), #557582;
	-webkit-box-shadow: 1px 1px 1px 0 rgba(0,0,0,0.3) ;
	box-shadow: 1px 1px 1px 0 rgba(0,0,0,0.3) ;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.2) ;
	float:left;
}
.input-css 
{
	display: inline-block;
	-webkit-box-sizing: content-box;
	-moz-box-sizing: content-box;
	box-sizing: content-box;
	width:100%;
	-webkit-border-radius: 10px / 2px;
	border-radius: 10px / 2px;
	font: normal 2.5em/normal "Times New Roman", Times, serif;
	color: rgba(0,114,155,1);
	-o-text-overflow: clip;
	text-overflow: clip;
	word-spacing: 1px;
	background: -webkit-linear-gradient(-54.462322208025626deg, rgba(183,222,237,1) 0, rgba(183,222,237,1) 48%, rgba(113,206,239,1) 50%, rgba(33,180,226,0.65) 57%, rgba(183,222,237,1) 100%), rgba(255,255,255,1);
	background: -moz-linear-gradient(144.46232220802563deg, rgba(183,222,237,1) 0, rgba(183,222,237,1) 48%, rgba(113,206,239,1) 50%, rgba(33,180,226,0.65) 57%, rgba(183,222,237,1) 100%), rgba(255,255,255,1);
	background: linear-gradient(144.46232220802563deg, rgba(183,222,237,1) 0, rgba(183,222,237,1) 48%, rgba(113,206,239,1) 50%, rgba(33,180,226,0.65) 57%, rgba(183,222,237,1) 100%), rgba(255,255,255,1);
	background-position: 50% 50%;
	-webkit-background-origin: padding-box;
	background-origin: padding-box;
	-webkit-background-clip: border-box;
	background-clip: border-box;
	-webkit-background-size: auto auto;
	background-size: auto auto;
	-webkit-box-shadow: 2px 2px 2px 0 rgba(219,0,0,0.2) inset;
	text-shadow: 1px 1px 0 rgba(255,255,255,0.66) ;
	-webkit-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
	-moz-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
	-o-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
	transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
	height:74px;
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

<form method="POST" action="OcenySmestralne.php">
	<br>
	<div style="background-color:;"id="panel">
		<div style="float:left;background-color:;width:20%;min-height:30px;text-align:center;"> Login </div>
		<div style="float:left;background-color:;width:12%;min-height:30px"> Klasa </div>
		<div style="float:left;background-color:;min-width:24%;min-height:30px"> Przedmiot </div>
		<div style="float:left;background-color:;width:19.5%;min-height:30px;"> Oceny </div>
		<div style="float:left;background-color:;width:10%;min-height:30px;text-align:center;"> Średnia </div>
		<div style="float:left;background-color:;width:10%;min-height:30px;text-align:center;"> Ocena Wys </div>
		<div style="cleat:both" id="clear"> </div>
		<?php
		require "baza.php";
		$klasa= $_SESSION['kl'];
		$lekcja=$_SESSION['xdlekcja'];
		if ($result = $wynik->query("SELECT * FROM `klasy` WHERE id='$klasa'"))
		{
			while($w=$result->fetch_assoc())
			{
				$numer=$w['numer'];
				$nazwa=$w['nazwa'];
			}
		}
		if ($result = $wynik->query("SELECT * FROM `lekcje` WHERE id='$lekcja'"))
		{
			while($w=$result->fetch_assoc())
			{
				$lekcjaaa=$w['lekcja'];
			}
		}
		$j=0;
		if ($result = $wynik->query("SELECT * FROM `loginy` WHERE klasa='$klasa'"))
		{
			while($w=$result->fetch_assoc())
			{
				$login=$w['id'];
				$_SESSION['pompom'][$j]=0;
		?>
		<div class="div-css" style="float:left;background-color:;width:19%;min-height:80px;border:1px dotted black" id="login"> <?php echo $w['login']; ?> </div>
		<div class="div-css" style="float:left;background-color:;width:8%;min-height:80px;border:1px dotted black" id="klasa"> <?php echo $klasssa ?> </div>
		<div class="div-css" style="float:left;background-color:;width:20%;min-height:80px;border:1px dotted black" id="przedmiot"> <?php echo $lekcjaaa ?> </div>
		<div class="div-css" style="float:left;background-color;min-width:30%;min-height:80px;border:1px dotted black" id="Oceny"> <?php $oceny="oceny"; require "Skryptocen.php"; ?> </div>
	  	<div class="div-css" style="float:left;background-color:;width:8%;min-height:80px;border:1px dotted black" id="klasa"> <?php  echo round($suma/$lp,1) ?> </div>
		<div class="div-css" style="float:left;background-color:;width:8%;min-height:80px;border:1px dotted black" id="klasa"> <?php require "UkazanieOcenSemestralnych.php"; ?> </div>
		<div  style="float:left;background-color;width:3.5%;min-height:80px;border:1px dotted black" id="Input"> <input class="input-css" maxlength="1" placeholder="0" name="hej[]" > </div>
		<div style="cleat:both" id="clear"> </div>
		<?php 
		?>
		<br>
		<?php 
			//echo $_SESSION['pompom'][$j];
			$j++;
			}
		}
		?>
		<input type='submit' style="height:100px" class="input-css" style=""value="wyslij">
	</div>
</form>
<div style="height:200px;width:100%;"></div>
 
<?php
//for($i=0;$i<3;$i++)
	//  echo $d[1];
?>
 
</div>
</div>
</body>
</html>