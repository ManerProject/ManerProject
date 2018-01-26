<?php
session_start();  


mysql_query=("update loginy set (`email={$_POST["email"]},haslo={$_POST["haslo"]},klasa={$_POST["klasa"]},login={$_POST["login"]},typ={$_POST["typ"]}`) where typ="uczen"");

    
?>