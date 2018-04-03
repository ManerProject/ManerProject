<?php
session_start();
require "baza.php";
$kl=$_SESSION['klasaplanu'];
echo 
$j=0;
$pom=0;

if ($result = $wynik->query("SELECT * FROM `planlekcji` where klasa='$kl'")) 
{
	while($w=$result->fetch_assoc())
	{
		$id=$w['id'];
		$pom++;
		for($i=1;$i<10;$i++)
		{
			if($i==1)
				$lek=$_POST['pl1'][$j];
			if($i==2)
				$lek=$_POST['pl2'][$j];
			if($i==3)
				$lek=$_POST['pl3'][$j];
			if($i==4)
				$lek=$_POST['pl4'][$j];
			if($i==5)
				$lek=$_POST['pl5'][$j];
			if($i==6)
				$lek=$_POST['pl6'][$j];
			if($i==7)
				$lek=$_POST['pl7'][$j];
			if($i==8)
				$lek=$_POST['pl8'][$j];
			if($i==9)
				$lek=$_POST['pl9'][$j];
			
			$wynik->query("UPDATE `planlekcji` SET `lekcja$i`='$lek' WHERE `id`='$id'");
			echo "lekcja";
			echo $pom;
			echo " ";
		}
		$j++;
	}
}
header ('Location:planlekcji.php'); 
?>