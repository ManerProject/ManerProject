<!DOCTYPE html>
<html>
<?php 
session_start()
 ?>
<head>
<meta lang="pl"/>
<meta charset="utf-8"/>
<link rel="stylesheet" href="CSS/rejestracja.css"/>
</head>
<?php require('skrypt_logo.php'); ?>
<!-- if ($result = $wynik->query("insert into loginy VALUES(null,'$login','$haslo','$email')") !-->
 <form action="rejestracja.php" method="POST" >
 Login <input type="text" name="login" value="<?php if(isset($_SESSION['login1']))
 { 
	  echo $_SESSION['login1'];
  unset($_SESSION['login1']);
 }	
 
  ?>"/>
  Hasło <input type="password" name="haslo"/></br>
  Email <input type="text" name="email" value="<?php if(isset($_SESSION['email1']))
 {echo $_SESSION['email1'];
  unset($_SESSION['email1']);
 }
  
?>" />
	Klasa
	I<input type="radio" name="klasa" value="I"/>
	II<input type="radio" name="klasa"value="II"/>
	III<input type="radio" name="klasa"value="III"/>
	</br>
</br><input type="checkbox" name="rek"/>
Regulamin</br>
<input type="submit" id="left" value="Wyślij"/>
 <?php if(isset($_SESSION['blad']) )
 { 
echo "</br>";

	 echo  $_SESSION['blad'];
	 unset($_SESSION['blad']);
	 
 }
 ?>
 
 </form>
 <form action="zaloguj.php" method="POST" >
  <input type="submit" value="Zaloguj"/>

</form>
</div>

</body>
</html>
