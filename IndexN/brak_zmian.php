<?php 
session_start();
require "baza.php";

$klasa= $_SESSION['kl'];
$data= date('Y.m.d');
$antyspam=0;
for($j=0;$j<strlen($data);$j++)
{
	if($data[$j]=='.')
	{
		$data[$j]='-';
	}
}
$numer2=$_SESSION['numer'];
if ($_SESSION['antyspam']==0)
{
	$_SESSION['antyspam']=1;
	if ($numer2<9)
	{
		$numer2++;
?>
<?php
	require "baza.php";
	$numer=$_SESSION['numer'];
	$numer2=$numer;
	$numer2++;
	if ($result = $wynik->query("SELECT * FROM obeconsc WHERE data='$data' AND klasa='$klasa' AND numer_lekcji='$numer'")) 
	{
		while($w=$result->fetch_assoc())
		{
?>
<br>
<?php
	 echo $w['data'];
	 $data=$w['data'];
?>
<br>
<?php
	 echo $w['obecnosc'];
	 $obecnosc=$w['obecnosc'];
	 if ($obecnosc=='3')
	 {
		 $obecnosc=1;
	 }
?>
<br>
<?php
	 echo $w['uczen'];
	 $uczen=$w['uczen'];
?>
<br>
<?php
	 echo $w['klasa'];
	 $klasa=$w['klasa'];
?>
<br>
<?php
	 echo $w['dzienTygodnia'];
	 $dzien=$w['dzienTygodnia'];
?>
<br>
<?php
	 echo $numer2;
?>
<br>
<?php
		$wynik-> query("INSERT INTO `obeconsc`(`data`, `obecnosc`, `numer_lekcji`, `uczen`, `klasa`, `dzienTygodnia`) VALUES ('$data', '$obecnosc', '$numer2', '$uczen', '$klasa', '$dzien')");	
	}
	header ("Location:obecnosc.php"); 
	}
}
else
{
	header ("Location:obecnosc.php");
}
}
else
{
	header ("Location:nau.php");
}
?>