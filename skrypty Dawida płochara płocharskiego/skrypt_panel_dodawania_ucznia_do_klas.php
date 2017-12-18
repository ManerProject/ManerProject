<?php 
session_start();
?>

<?php 
echo $_POST['sele'];
?>

<?php 
echo $_POST['sele1'];
 ?>
 
 
<!DOCTYPE html>

<html>
<?php 
require "baza.php";

 ?>
<head>
<meta lang="pl"/>
<meta charset="utf-8"/>

</head>
<body>
 <?php 
 $klasy=$_POST['sele'];
 $loginy=$_POST['sele1'];
if(isset($klasy))
{
    $wynik->query("UPDATE loginy SET `id_loginy_klasy`='$klasy' WHERE login='$loginy'");
	  
}

 header ('Location:panel_dodawania_ucznia_do_klas.php'); 

		 

?>

</body>
</html>
