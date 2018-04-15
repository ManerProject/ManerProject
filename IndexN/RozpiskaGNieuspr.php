<?php
if ($result1 = $wynik->query("SELECT COUNT(`obecnosc`) FROM obeconsc WHERE `obecnosc`='$lp' and `uczen`='$login'"))
{
    while($w=$result1->fetch_assoc())
	{
		$a=$w['COUNT(`obecnosc`)'];
	}
}
echo $a;
?>