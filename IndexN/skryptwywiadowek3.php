<?php 
session_start();
 ?>
<?php
 
require "baza.php";

$test=$_POST['sele'];

 $wynik-> query("UPDATE `wywiadowka` SET aktywna='1' WHERE ID='$test'");
  
 header ("Location:nau.php");

?>