<?php
require('reqnau.php');
?>
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
	$_SESSION['nauczycielid']= $id;
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
						<form action='panel_wycieczek.php' method='post'>
						<input type='submit' style='width:100px; height:50px;border-radius:400px;' value='wycieczki'>
						</form>
						<form action='panel_wydarzen.php' method='post'>
						<input type='submit' style='height:50px;border-radius:400px;' value='wydarzenia w klasie'>
						</form>
</div>
<hr>
<form action='opinie_dyrektorow.php' method='post'>
		<input type='submit' style='width:100px; height:50px;border-radius:400px;' value='opinie o klasach'>
</form>
<hr>	
<form   method="post" action="tonau.php">
			<br>

<select name="tak">
 <?php
$nauczyciel=$_SESSION['nauczycielid'];
if ($result = $wynik->query("SELECT * from `nau` where `nau`='$nauczyciel' ")) {
   $ile=$result->num_rows;
   echo $ile;
   for($i=0;$i<$ile;$i++)
   {
	   $w=$result->fetch_assoc();
		$przedmiot=$w['przedmiot1'];
		$klasa=$w['idklasa'];
		if ($resultt = $wynik->query("SELECT * from `lekcje` where `id`='$przedmiot' ")) {
			while($ww=$resultt->fetch_assoc()){
				$lekcja=$ww['lekcja'];
			}
		}
		if ($resultet = $wynik->query("SELECT * from `klasy` where `id`='$klasa' ")) {
			while($www=$resultet->fetch_assoc()){
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
 
}
 
?>

    </select>
	<input type='submit' style="width:40px; height:30px;"value="ok ">
</form>
		
	

	    
		 
		  
	
	
<?php

	$result1->close();

 
?>



</br>




 </div>
    
 </div>
</body>
</html>
