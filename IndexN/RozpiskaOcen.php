<?php
if ($result4 = $wynik->query("SELECT COUNT(`oceny`) FROM oceny WHERE `oceny`=$lp and `idlogin`='$login'"))
{ 
	while($w=$result4->fetch_assoc())
	{
		$a=$w['COUNT(`oceny`)'];
	}
}
echo $a;
?>