<!DOCTYPE html>
<html lang="pl">
 <?php 
session_start()
 ?>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Centrum Kształcenia Zawodowego i Ustawicznego w Brodnicy">
    <meta name="keywords" content="ckziu brodnica, technikum, zawodówka">
    <title>CKZiU w Brodnicy</title>
  
  </head>
 
  <body>

<?php 


 $haslo =$_POST['haslo'];
 $login =$_POST['login'];
 $email = $_POST['email'];
  $klasa = $_POST['klasa'];
 $typ ='uczen';
$emailB = filter_var($email, FILTER_SANITIZE_EMAIL);
require "baza.php";

if(isset($_POST['zawod']))
	    {
			
				$typ=$_POST['zawod'];
	
	
		}
$result32 = $wynik->query("select login from loginy where login='$login'");
	if($result32->num_rows==1 )
	{
	    $_SESSION['blad']="Login istnieje";
		$_SESSION['login1']=$_POST['login'];
		 $result32->close();
		
	}
	else
		if(strlen($email) ==0 )
		{
			$_SESSION['blad']= "Nie wpisales  emaila";
		$_SESSION['email1']=$_POST['email'];
			;
		}
		else
		
		if ((filter_var($emailB, FILTER_VALIDATE_EMAIL)==false) || ($emailB!=$email))
		{
			$_SESSION['blad']="Podaj poprawny adres email";
			$_SESSION['email1']=$_POST['email'];
				
		}
		else
	    if(strlen($haslo) ==0 )
	    {$_SESSION['blad']= "Nie wpisales  hasla";
		
	    }
        else
		if(strlen($haslo) < 3)

		{$_SESSION['blad']= "Za krotkie lub za dlugie haslo";

		}
		else
		if(strlen($login) ==0 )
		{$_SESSION['blad']= "nie wpisales  loginu";
		$_SESSION['login1']=$_POST['login'];
		
		}
		
		else
	    if(!isset($_POST['rek']))
	    {$_SESSION['blad']= "zakceptuj regulamin";
	
	
	
		}
		else
	    if(!isset($_POST['klasa']))
	    {$_SESSION['blad']= "Nie wybrales klasy";

	
	
	
		}
	     else
		if ($result2 = $wynik->query("INSERT INTO loginy(`login`,`haslo`,`email`,`typ`,`klasa`) VALUES('$login','$haslo','$email','$typ','$klasa')"))
		{
		header("location:login.php"); 
		exit();
		}
		
	
header("location:zarejestruj.php");

?> 

 
 
 
  </body>
 </html>