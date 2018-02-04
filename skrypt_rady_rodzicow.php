<?php
session_start();
?>
<!DOCTYPE html>

<html>
<head>
<meta lang="pl"/>
<meta charset="utf-8"/>

</head>
<body>
	<?php
	 require "baza.php";
		$prz=$_POST['przewodniczacy'];
		$wprz=$_POST['wiceprzewodniczacy'];
		$skar=$_POST['skarbnik'];
		$klasa=$_SESSION['klasa'];
			if ($result = $wynik->query("SELECT * FROM rady_rodzicow WHERE klasa='$klasa'")) {
			$ile=$result->num_rows;
			if($ile>0)
			{
				$rez=$wynik->query("DELETE FROM rady_rodzicow WHERE klasa='$klasa'");
			}
			if ($resultat = $wynik->query("INSERT INTO rady_rodzicow (`rodzic`, `pozycja`, `klasa`) VALUES ('$prz', '0', '$klasa')")) {
			}
			if ($resultat = $wynik->query("INSERT INTO rady_rodzicow (`rodzic`, `pozycja`, `klasa`) VALUES ('$wprz', '1', '$klasa')")) {
			}
			if ($resultat = $wynik->query("INSERT INTO rady_rodzicow (`rodzic`, `pozycja`, `klasa`) VALUES ('$skar', '2', '$klasa')")) {
			}
}
header('Location: klasa.php');
	?>

</body>
</html>