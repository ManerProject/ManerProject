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
 
 <form method="post" action="skrypt_dodawania_wycieczki2.php">
	<?php
	 require "baza.php";
		$dni=$_POST['dni'];
		$godz=$_POST['godz'];
		$klasa=$_SESSION['klasa'];
		$cel=$_POST['cel'];
		$program=$_POST['program'];
		$data=$_POST['data'];
		$liczba=$_POST['liczba'];
		$nau=$_POST['nauczyciel'];
		$ile=$_POST['ile'];
		for($i=1;$i<=$ile;$i++)
		{
			echo "<select name='opiekun$i'>";
			if ($result = $wynik->query("SELECT * FROM loginy WHERE typ='teacher'")) {
   
			while($w=$result->fetch_assoc()){
				 $imie=$w['imie'];
				 $nazwisko=$w['nazwisko'];
				 $id=$w['id'];
				echo "<option value='$id'>";
				echo $imie.' '.$nazwisko;
				echo "</option>";
			}
			echo "</select>";
			echo "<br>";
}
		}
		$_SESSION['ile']=$ile;
		$_SESSION['dni']=$dni;
		$_SESSION['godz']=$godz;
		$_SESSION['klasa']=$klasa;
		$_SESSION['cel']=$cel;
		$_SESSION['program']=$program;
		$_SESSION['data']=$data;
		$_SESSION['liczba']=$liczba;
		$_SESSION['nau']=$nau;
		$_SESSION['ile']=$ile;

	?>
	<input type="submit" value="wyslij"/>
 </form>

</body>
</html>