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




if ($result = $wynik->query("SELECT * FROM loginy where login='$login' and haslo='$haslo'"))
{	
	if($result->num_rows==1 )
	{
	     $_SESSION['zaloguj']=true;
		 $result->close();
		header ('Location:IndexU/index1.php');
		
		  
	}
else 
{  
	header ('Location:login.php');
	session_unset();
}

	$result->close();
}
$mysqli->close();
?>
 
 
 
  </body>
 </html>