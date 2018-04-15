<?php
session_start();
$data= date('Y.m.d');
for($j=0;$j<strlen($data);$j++)
{
	if($data[$j]=='.')
	{
		$data[$j]='-';
	}
}
require "baza.php";
$kl= $_SESSION['kl'];
echo $kl;
$lek=$_SESSION['xdlekcja'];
$zaco=$_POST['zaco'];

$id=0;
$i=0;
$nau= $_SESSION['nauczycielid'];
if ($result = $wynik->query("SELECT * FROM `loginy` WHERE klasa='$kl'"))
{
	while($w=$result->fetch_assoc())
	{
		$gg = trim($_POST['hej'][$i]);
		if(  $_POST['hej'][$i]<7  )
		{
			if( $_POST['hej'][$i]==0)
			{
				echo $w['login'];
			}
			else
			{
				$ocena=$_POST['hej'][$i];
				$nick=$w['id'];
				$wynik->query("INSERT INTO `oceny` (`id`, `oceny`, `idlekcja`, `idlogin`, `zaco`,`idklasa`,`Data`,`idnauczyciel`) VALUES (NULL, '$ocena', '$lek', '$nick', '$zaco','$kl','$data','$nau')");
			}
		}
		$i++;
	}
}
header ('Location:nau.php');
$wynik->close();
?>