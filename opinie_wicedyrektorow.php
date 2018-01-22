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
	width:100px;
	
	height:100px;
	margin-left:15%;
}
  
  </style>

<div id="all">
<div id="logo">
Panel wicedyrektora
<img style="height:125px;width:200px;margin-top:-20px;float:left"  src="../Grafika/logomm.png"> </img>
<form action="../wyloguj.php" method="_POST" >
 

  <input style="float:right;background-color:#191919;:width:50px;height:100px;position:relative;
    bottom: 40px;cursor:pointer;color:white;font-family: 'Audiowide', cursive;border-left:2px dotted #1F1F1F;border-top:0;border-right:0;border-bottom:0" type="submit" value="WYLOGUJ"/>
 
 
 </form>
</div>
<form   method="post" action="panel_wyboru_lekcji_do_dodania_Ocen.php" style="font-size:25px;">
<input type='submit' style="width:100px; height:30px;margin-left:15%"value="Powrot do glownego panelu">
</form>


 	<div style="margin-left:9%;font-size:25px;float:left;">Wybierz klasę</div>
	 </br>
<form   method="post" style="font-size:25px;">
<select name="klasa">
<?php
require "baza.php";
$id=$_SESSION['id'];
$_SESSION['id']=$id;
if ($result1 = $wynik->query("SELECT * FROM klasy")) {
    while($w=$result1->fetch_assoc()){
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
<input type='submit' name="a" style="width:100px; height:30px;margin-left:15%"value="Wybierz">

</form>	

<?php
if(isset($_POST['a']))
{
	$klasa=$_POST['klasa'];
	$rezult=$wynik->query("SELECT * FROM wizyty_wicedyrektorow WHERE `klasa`='$klasa'");
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
		echo "<td>wicedyrektor</td>";
		for($i=0;$i<$ile;$i++)
		{
			echo "<tr>";
			$w=$rezult->fetch_assoc();
			$lekcja=$w['lekcja'];
			$data=$w['data'];
			$opinia=$w['opis'];
			$wd=$w['wicedyrektor'];
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
    
</body>
</html>