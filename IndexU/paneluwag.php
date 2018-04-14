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
Uwagi
<img style="height:125px;width:200px;margin-top:-20px;float:left"  src="../Grafika/logomm.png">

<form action="../wyloguj.php" method="POST">
  <input style="float:right;background-color:#191919;width:80px;height:70px;position:relative;
    bottom:40px;cursor:pointer;color:white;font-family:'Audiowide', cursive;border-left:0px dotted #1F1F1F;border-top:0;border-right:0;border-bottom:0; margin-right:1%;" type="submit" value="WYLOGUJ"/> 
</form>
</div>

<form method="post" action="index1.php">
	<input type='submit' style="height:30px; margin:1%" value="Powrót do głównego panelu">
</form>
<div id="okno">
	<form method="post" action="skryptuwag.php" style="font-size:15px;">
		<select style="width:120px;height:30px;border-radius:400px;" name='sele'>
		<?php
		require "baza.php";
		//$klasa=$_SESSION['klasa'];
		$klasa=9;
		if ($result = $wynik->query("SELECT * FROM `nau` WHERE `idklasa`='$klasa'"))
		{
			$l=0;
			$k=0;
			while($w=$result->fetch_assoc())
			{
				$id=$w['nau'];
				for($i=0;$i<$l;$i++)
				{
					if($id==$tab[$i])
					{
						$k=1;
						break;
					}
				}
				if($k==0)
				{
					$tab[$l]=$id;
					$l++;
				}
				else if($k==1)
				{
					$k=0;
					continue;
				}
				if($rez=$wynik->query("SELECT * FROM `loginy` WHERE id='$id' AND typ='teacher'"))
				{
					while($s=$rez->fetch_assoc())
					{
						echo "<option value=".$s['login'].">".$s['imie']." ".$s['nazwisko']."</option>";      
					}
				}
			}
		}	
		?>
		</select>
		<input name="tytul" style="height:25px;border-radius:4px;" placeholder="tytuł wiadomości" value="">
		<input name="tresc" style="height:25px;border-radius:4px;" placeholder="tresc" value="">
		<input type='submit' style="height:50px;border-radius:400px;" value="Wyślij">
    </form>
</br>
</div>
</div>
 
</body>
</html>