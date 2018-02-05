 <?php 
session_start()
 ?>
<!DOCTYPE html>
<html lang="pl">

  <head>
    <meta charset="utf-8">
    <meta name="description" content="Centrum Kształcenia Zawodowego i Ustawicznego w Brodnicy">
    <meta name="keywords" content="ckziu brodnica, technikum, zawodówka">
    <title>CKZiU w Brodnicy</title>
   <!--<link rel="stylesheet" href="style.css"/>-->
  </head>
 
  <body>
 <?php 
 $login =$_POST['login'];
 $haslo =$_POST['haslo'];
 $_SESSION['login']= $login ;
 $_SESSION['haslo']= $haslo ;

 echo  $login;
echo "</br>";
  echo  $haslo;
  echo "</br>";
  


require "baza.php";
if ($result = $wynik->query("SELECT * FROM `loginy` WHERE login='$login' and haslo='$haslo'"))
{	

	$w=$result->fetch_assoc();
	$t=$w['typ'];
	if($t=="nieprzydzielony")
	{
	header ('Location:pierwsze_logowanie.php');
	}
	if($t=="uczen")
	{
	
		header ('Location:IndexU/index1.php');
			
			  
	}
		else if($t=="teacher")
		{
			 
			header ('Location:IndexN/panel_wyboru_lekcji_do_dodania_Ocen.php');
			
			
			  
		}
		else if($t=="admin")
		{  
		header ('Location:IndexA/admin.php');
		}
	}


?>
 
 
 
  </body>
 </html>
