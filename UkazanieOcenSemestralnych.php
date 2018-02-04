<?php


if ($result3 = $wynik->query("SELECT * FROM `ocenysemestralne` WHERE `idklasy`='$klasa' and `idlekcja`='$lekcja' and `iducznia`='$login'")) {
   
    while($w=$result3->fetch_assoc()){
		 echo $w['Ocena'];
		 $_SESSION['pompom'][$j]=1;
		

	
}
}

if( $_SESSION['pompom'][$j]!=1)
{
	echo "Brak";

	
	$_SESSION['pompom'][$j]=0;
}

	



?>