<?php 
require('reqnau.php');
require "baza.php";
	$id=$_SESSION['id'];
	$numer=$_POST['numer'];
	$data=$_POST['data'];
	$miejsce=$_POST['miejsce'];
	$pesel=$_POST['pesel'];
	$zamieszkanie=$_POST['zamieszkanie'];
	$wm=$_POST['wm'];
	$imie_m=$_POST['imie_m'];
	$nazwisko_m=$_POST['nazwisko_m'];
	$imie_t=$_POST['imie_t'];
	$nazwisko_t=$_POST['nazwisko_t'];
	$adres=$_POST['adres'];
	$telefon=$_POST['tel'];
	$email=$_POST['email'];
	if($rezultat=$wynik->query("UPDATE dane_osobowe SET `numer_ewidencyjny`='$numer', `data_urodzenia`='$data', `miejsce_urodzenia`='$miejsce', `PESEL`='$pesel', `miejsce_zamieszkania`='$zamieszkanie', `wies/miasto`='$wm', `imie_matki`='$imie_m', `nazwisko_matki`='$nazwisko_m', `imie_ojca`='$imie_t', `nazwisko_ojca`='$nazwisko_t', `adres_rodzicow`='$adres', `telefon_kontaktowy`='$telefon', `email_rodzicow`='$email' WHERE `id_ucznia`='$id';"))
	{
		header("Location: panel_dane_osobowe.php");
	}
?>