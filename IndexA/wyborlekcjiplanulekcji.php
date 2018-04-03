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
plan lekcji
<img style="height:125px;width:200px;margin-top:-20px;float:left"  src="../Grafika/logomm.png"> </img>

<form action="../wyloguj.php" method="_POST" >
  <input style="float:right;background-color:#191919;:width:50px;height:100px;position:relative;
    bottom: 40px;cursor:pointer;color:white;font-family: 'Audiowide', cursive;border-left:0px dotted #1F1F1F;border-top:0;border-right:0;border-bottom:0" type="submit" value="WYLOGUJ"/>
</form>
</div>

<form method="post" action="admin.php">
	<input type='submit' style="height:30px; margin:1%" value="Powrót do głównego panelu">
</form>

<div id="okno">
<?php $_SESSION['klasaplanu']=$_POST['sele'];?>
<form method="post"  action="skryptplanulekcji.php">
	<div  style="margin-left:25%;"id="glowny">
		<div  style="border:1px solid black;float:left;width: 20px;height: 30px;"id="nr"> nr</div> 
		<div  style="border:1px solid black;float:left;height: 30px;width: 120px;"id="pn"> Poniedzialek</div> 
		<div  style="border:1px solid black;float:left;height: 30px;width: 120px;"id="wt"> wtorek </div> 
		<div  style="border:1px solid black;float:left;height: 30px;width: 120px;"id="sr"> sroda</div> 
		<div  style="border:1px solid black;float:left;height: 30px;width: 120px;"id="cz"> czwartek </div> 
		<div  style="border:1px solid black;float:left;height: 30px;width: 120px;"id="pt">piatek </div> 
		<div  style="clear:both"> </div>
		
		<div  style="border:1px solid black;float:left;width: 20px; height: 30px;"id="nr"> 1</div> 
		<div  style="border:1px solid black;float:left;"id="pn"> <?php $plan="pl1"; require "doplanulekcji.php"; ?></div> 
		<div  style="border:1px solid black;float:left;"id="wt"> <?php require "doplanulekcji.php"; ?> </div> 
		<div  style="border:1px solid black;float:left;"id="sr"> <?php require "doplanulekcji.php"; ?></div> 
		<div  style="border:1px solid black;float:left;"id="cz"> <?php require "doplanulekcji.php"; ?> </div> 
		<div  style="border:1px solid black;float:left;"id="pt"><?php require "doplanulekcji.php"; ?> </div> 
		<div  style="clear:both"> </div>
		
		<div  style="border:1px solid black;float:left;width: 20px;height: 30px;"id="nr"> 2</div> 
		<div  style="border:1px solid black;float:left;"id="pn"> <?php $plan="pl2";require "doplanulekcji.php"; ?></div> 
		<div  style="border:1px solid black;float:left;"id="wt"> <?php require "doplanulekcji.php"; ?> </div> 
		<div  style="border:1px solid black;float:left;"id="sr"> <?php require "doplanulekcji.php"; ?></div> 
		<div  style="border:1px solid black;float:left;"id="cz"> <?php require "doplanulekcji.php"; ?> </div> 
		<div  style="border:1px solid black;float:left;"id="pt"><?php require "doplanulekcji.php"; ?> </div> 
		<div  style="clear:both"> </div>
		
		<div  style="border:1px solid black;float:left;width: 20px;height: 30px;"id="nr"> 3</div> 
		<div  style="border:1px solid black;float:left;"id="pn"> <?php $plan="pl3";require "doplanulekcji.php"; ?></div> 
		<div  style="border:1px solid black;float:left;"id="wt"> <?php require "doplanulekcji.php"; ?> </div> 
		<div  style="border:1px solid black;float:left;"id="sr"> <?php require "doplanulekcji.php"; ?></div> 
		<div  style="border:1px solid black;float:left;"id="cz"> <?php require "doplanulekcji.php"; ?> </div> 
		<div  style="border:1px solid black;float:left;"id="pt"><?php require "doplanulekcji.php"; ?> </div> 
		<div  style="clear:both"> </div>
		
		<div  style="border:1px solid black;float:left;width: 20px;height: 30px;"id="nr"> 4</div> 
		<div  style="border:1px solid black;float:left;"id="pn"> <?php $plan="pl4";require "doplanulekcji.php"; ?></div> 
		<div  style="border:1px solid black;float:left;"id="wt"> <?php require "doplanulekcji.php"; ?> </div> 
		<div  style="border:1px solid black;float:left;"id="sr"> <?php require "doplanulekcji.php"; ?></div> 
		<div  style="border:1px solid black;float:left;"id="cz"> <?php require "doplanulekcji.php"; ?> </div> 
		<div  style="border:1px solid black;float:left;"id="pt"><?php require "doplanulekcji.php"; ?> </div> 
		<div  style="clear:both"> </div>
		
		<div  style="border:1px solid black;float:left;width: 20px;height: 30px;"id="nr"> 5</div> 
		<div  style="border:1px solid black;float:left;"id="pn"> <?php $plan="pl5"; require "doplanulekcji.php"; ?></div> 	
		<div  style="border:1px solid black;float:left;"id="wt"> <?php require "doplanulekcji.php"; ?> </div> 
		<div  style="border:1px solid black;float:left;"id="sr"> <?php require "doplanulekcji.php"; ?></div> 
		<div  style="border:1px solid black;float:left;"id="cz"> <?php require "doplanulekcji.php"; ?> </div> 
		<div  style="border:1px solid black;float:left;"id="pt"><?php require "doplanulekcji.php"; ?> </div> 
		<div  style="clear:both"> </div>
		
		<div  style="border:1px solid black;float:left;width: 20px;height: 30px;"id="nr"> 6</div> 
		<div  style="border:1px solid black;float:left;"id="pn"> <?php $plan="pl6"; require "doplanulekcji.php"; ?></div> 
		<div  style="border:1px solid black;float:left;"id="wt"> <?php require "doplanulekcji.php"; ?> </div> 
		<div  style="border:1px solid black;float:left;"id="sr"> <?php require "doplanulekcji.php"; ?></div> 
		<div  style="border:1px solid black;float:left;"id="cz"> <?php require "doplanulekcji.php"; ?> </div> 
		<div  style="border:1px solid black;float:left;"id="pt"><?php require "doplanulekcji.php"; ?> </div> 
		<div style="clear:both"> </div>
		
		<div  style="border:1px solid black;float:left;width: 20px;height: 30px;"id="nr"> 7</div> 
		<div  style="border:1px solid black;float:left;"id="pn"> <?php $plan="pl7"; require "doplanulekcji.php"; ?></div> 
		<div  style="border:1px solid black;float:left;"id="wt"> <?php require "doplanulekcji.php"; ?> </div> 
		<div  style="border:1px solid black;float:left;"id="sr"> <?php require "doplanulekcji.php"; ?></div> 
		<div  style="border:1px solid black;float:left;"id="cz"> <?php require "doplanulekcji.php"; ?> </div> 
		<div  style="border:1px solid black;float:left;"id="pt"><?php require "doplanulekcji.php"; ?> </div> 
		<div style="clear:both"> </div>
		
		<div  style="border:1px solid black;float:left;width: 20px;height: 30px;"id="nr"> 8</div> 
		<div  style="border:1px solid black;float:left;"id="pn"> <?php $plan="pl8"; require "doplanulekcji.php"; ?></div> 
		<div  style="border:1px solid black;float:left;"id="wt"> <?php require "doplanulekcji.php"; ?> </div> 
		<div  style="border:1px solid black;float:left;"id="sr"> <?php require "doplanulekcji.php"; ?></div> 
		<div  style="border:1px solid black;float:left;"id="cz"> <?php require "doplanulekcji.php"; ?> </div> 
		<div  style="border:1px solid black;float:left;"id="pt"><?php require "doplanulekcji.php"; ?></div> 
		<div style="clear:both"> </div>
		
		<div  style="border:1px solid black;float:left;width: 20px;height: 30px;"id="nr"> 9</div> 
		<div  style="border:1px solid black;float:left;"id="pn"> <?php $plan="pl9"; require "doplanulekcji.php"; ?></div> 
		<div  style="border:1px solid black;float:left;"id="wt"> <?php require "doplanulekcji.php"; ?> </div> 
		<div  style="border:1px solid black;float:left;"id="sr"> <?php require "doplanulekcji.php"; ?></div> 
		<div  style="border:1px solid black;float:left;"id="cz"> <?php require "doplanulekcji.php"; ?></div> 
		<div  style="border:1px solid black;float:left;"id="pt"><?php require "doplanulekcji.php"; ?> </div> 
		<div style="clear:both"> </div>
	</div>
	<br>
	<input type='submit' style="height:30px;"value="Wprowadź nowy plan lekcji">
</form>

</div>
</div>
</body>
</html>