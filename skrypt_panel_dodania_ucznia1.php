<?php
session_start();  
require "baza.php";
$_SESSION['ilosc']=$_POST['ilosc'];
header('Location: panel_dodania_ucznia.php');
    
?>
