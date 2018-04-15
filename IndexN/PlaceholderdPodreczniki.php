<?php
if ($result = $wynik->query("SELECT * FROM `podreczniki` WHERE `idklasy`='$klasa' and `idlekcja`='$lekcja'"))
{
    while($w=$result->fetch_assoc())
	{
		echo $w[$pom];
		if($pom=="NazwaPodrecznika")
		{
			$_SESSION['$isset1']=1;
		}
		if($pom=="NazwaCzwiczen")
		{
			$_SESSION['$isset2']=1;
		}	
	}
}
?>