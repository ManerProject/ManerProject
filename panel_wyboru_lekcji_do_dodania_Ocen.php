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

<img style="height:125px;width:200px;margin-top:-20px;float:left"  src="../Grafika/logomm.png"> </img>
<form action="../wyloguj.php" method="_POST" >
 

  <input style="float:right;background-color:#191919;:width:50px;height:100px;position:relative;
    bottom: 40px;cursor:pointer;color:white;font-family: 'Audiowide', cursive;border-left:2px dotted #1F1F1F;border-top:0;border-right:0;border-bottom:0" type="submit" value="WYLOGUJ"/>
 
 
 </form>
</div>

 
 </div>
<?php
require "baza.php";
$login= $_SESSION['login'];
echo $login;
if ($result1 = $wynik->query("SELECT * FROM loginy WHERE login='$login'")) {
   
    while($w=$result1->fetch_assoc()){
			 $id=$w['id'];
      
    }
}
if ($result = $wynik->query("SELECT * FROM dyrektorzy WHERE nauczyciel='$id'")) {
	if($wynik=$result->fetch_assoc()){
			 if($wynik>0)
			 {
				 echo "<form action='panel_dyrektora.php' method='post'>
					<input type='submit' style='width:100px; height:50px;border-radius:400px;' value='panel dyrektora'>
					</form>";
			 }
	}
 }
 $_SESSION['id']=$id;
?>
<?php
require "baza.php";
$login= $_SESSION['login'];
if ($result1 = $wynik->query("SELECT * FROM loginy WHERE login='$login'")) {
   
    while($w=$result1->fetch_assoc()){
			 $id=$w['id'];
      
    }
	}
 echo "<br>";
 if ($resultt = $wynik->query("SELECT * FROM wychowawcy WHERE nauczyciel='$id'")) {
   $_SESSION['div']="none";
    if($w=$resultt->fetch_assoc()){
			 if($w>0)
			 {
				 $kl=$w['klasa'];
				  if ($resultw = $wynik->query("SELECT * FROM klasy WHERE id='$kl'")) {
   
						if($ww=$resultw->fetch_assoc()){
							echo "Jestes wychowawca klasy ".$ww['numer']." ".$ww['nazwa'];
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
<form action='klasa.php' method='post'>
						<input type='submit' name='tak' style='width:100px; height:50px;border-radius:400px;' value='twoja klasa'>
						</form>
						<form action='panel_dodawania_ucznia_do_klas.php' method='post'>
						<input type='submit' style='width:100px; height:50px;border-radius:400px;' value='dodaj uczniow'>
						</form>
						<form action='panel_dodawania_wycieczek.php' method='post'>
						<input type='submit' style='width:100px; height:50px;border-radius:400px;' value='dodaj wycieczke'>
						</form>
</div>
<hr>
<form action='opinie_dyrektorow.php' method='post'>
		<input type='submit' style='width:100px; height:50px;border-radius:400px;' value='opinie o klasach'>
</form>
<hr>
		<form   method="post" action="tonau.php" style="font-size:15px;">
			<br>
 Kl I<input type='radio' name="KL" style="width:100px; height:50px;border-radius:400px;margin-left:5%"value="I" >
 <?php
	$i=0;

		 if ($result134 = $wynik->query("SELECT * from klasy")) {
   
    while($w=$result134->fetch_assoc()){
			 $przedmiot1=$w['id'];
  ?>
		<br>
<input type='radio' name="KL" style="width:100px; height:50px;border-radius:400px;margin-left:15%"value="<?php 


echo $przedmiot1;


 ?>">
<?php

	 
	 
	 echo   $w['numer'];
	 echo	$w['nazwa'];
    }
	
	?>


		
	

	    
		 
		  
	
	
<?php

	$result134->close();
}
 
?>
	<?php
	$i=0;

		 if ($result1 = $wynik->query("SELECT lekcje.lekcja from lekcje,nau where nau.nau='$id' and nau.przedmiot1=lekcje.id")) {
   
    while($w=$result1->fetch_assoc()){
			 $przedmiot1=$w['lekcja'];
     
  ?>
		<br>
<input type='submit' name="tak" style="width:100px; height:50px;border-radius:400px;margin-left:15%"value="<?php 


echo $przedmiot1;


 ?>">
<?php

	 $i++;
	 echo  $i;
    }
	
	if(isset($_SESSION['blad1']) )
 { 
echo "</br>";

	 echo  $_SESSION['blad1'];
	 unset($_SESSION['blad1']);
	 
 }
	?>
</form>
		
	

	    
		 
		  
	
	
<?php

	$result1->close();
}
 
?>



</br>




 </div>
    
 </div>
</body>
</html>
