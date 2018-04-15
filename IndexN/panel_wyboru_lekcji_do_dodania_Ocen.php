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

<div id="okno">
<?php
require "baza.php";
$login= $_SESSION['login'];

if ($result1 = $wynik->query("SELECT * FROM loginy WHERE login='$login'"))
{
    while($w=$result1->fetch_assoc())
	{
		$id=$w['id'];
    }
}
if ($result = $wynik->query("SELECT * FROM dyrektorzy WHERE nauczyciel='$id'"))
{
	if($wynik=$result->fetch_assoc())
	{
		if($wynik>0)
		{
			echo "<form action='panel_dyrektora.php' method='post'>
				<input type='submit' style='width:100px; height:50px;border-radius:400px;' value='panel dyrektora'>
			</form>";
		}
	}
}	
$_SESSION['nauczycielid']= $id;
echo "<br>";
require "baza.php";
if($resultt = $wynik->query("SELECT * FROM wychowawcy WHERE nauczyciel='$id'"))
{
	$_SESSION['div']="none";
    if($w=$resultt->fetch_assoc())
	{
		if($w>0)
		{
			$kl=$w['klasa'];
			if ($resultw = $wynik->query("SELECT * FROM klasy WHERE id='$kl'"))
			{
				if($ww=$resultw->fetch_assoc())
				{
					echo "Jesteś wychowawcą klasy ".$ww['numer']." ".$ww['nazwa'];
					$_SESSION['nr']=$ww['numer'];
					$_SESSION['nazwa']=$ww['nazwa'];
					$_SESSION['login']=$login;
					$_SESSION['klasa']=$kl;
					$_SESSION['div']="block";
				}
			}
		} 
    }
}
?>
<div style="display: <?php echo $_SESSION['div']; ?>">
	<form action='twoja_klasa.php' method='post'>
		<input type='submit' name='tak' style='width:100px; height:50px;border-radius:400px;' value='twoja klasa'>
	</form>
	<form action='panel_dodawania_ucznia_do_klas.php' method='post'>
		<input type='submit' style='width:100px; height:50px;border-radius:400px;' value='dodaj uczniow'>
	</form>
	<form action='panel_wycieczek.php' method='post'>
		<input type='submit' style='width:100px; height:50px;border-radius:400px;' value='wycieczki'>
	</form>
	<form action='panel_wydarzen.php' method='post'>
		<input type='submit' style='height:50px;border-radius:400px;' value='wydarzenia w klasie'>
	</form>
	<form method="POST" action="dane_klasy_samorzad.php">
		<input  type="submit" style='height:50px;border-radius:400px;' value="Dane samorządu klasowego">
	</form>
	<form method="POST" action="dane_rady_rodzicow.php">
		<input  type="submit" style='height:50px;border-radius:400px;' value="Dane rady rodziców">
	</form>
</div>
<hr>
<form action='opinie_dyrektorow.php' method='post'>
	<input type='submit' style='width:100px; height:50px;border-radius:400px;' value='opinie o klasach'>
</form>
<hr>	

<form   method="post" action="tonau.php">
	<select name="tak">
		<?php
		$nauczyciel=$_SESSION['nauczycielid'];
		if ($result = $wynik->query("SELECT * from `nau` where `nau`='$nauczyciel' ")) 
		{
			$ile=$result->num_rows;
			echo $ile;
			for($i=0;$i<$ile;$i++)
			{
				$w=$result->fetch_assoc();
				$przedmiot=$w['przedmiot1'];
				$klasa=$w['idklasa'];
				if ($resultt = $wynik->query("SELECT * from `lekcje` where `id`='$przedmiot' "))
				{
					while($ww=$resultt->fetch_assoc())
					{
						$lekcja=$ww['lekcja'];
					}
				}
				if ($resultet = $wynik->query("SELECT * from `klasy` where `id`='$klasa' "))
				{
					while($www=$resultet->fetch_assoc())
					{
						$numer=$www['numer'];
						$nazwa=$www['nazwa'];
					}
				}
				$kod="";
				$kod=$kod.$klasa;
				$kod=$kod.",";
				$kod=$kod.$przedmiot;
				echo "<option value='$kod'>".$lekcja.", klasa ".$numer.''.$nazwa."</option>";      
			}
			$_SESSION['nauczycielid']=$nauczyciel;
		}
		?>
    </select>
	<input type='submit' style="height:30px;"value="Przejdź">
</form>

</div>
</div>
</body>
</html>