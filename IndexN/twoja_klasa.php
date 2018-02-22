<?php
require('reqnau.php');
?>
<img style="height:125px;width:200px;margin-top:-20px;float:left"  src="../Grafika/logomm.png"> </img>
<form action="../wyloguj.php" method="_POST" >
 

  <input style="float:right;background-color:#191919;:width:50px;height:100px;position:relative;
    bottom: 40px;cursor:pointer;color:white;font-family: 'Audiowide', cursive;border-left:2px dotted #1F1F1F;border-top:0;border-right:0;border-bottom:0" type="submit" value="WYLOGUJ"/>
 
 
 </form>
</div>
<?php
$klasa=$_SESSION['klasa'];
$_SESSION['klasa']=$klasa;
?>
 
 </div>
 <br>
<form action="jezyki.php" method="post">
	<input type='submit' value="Języki, których uczą się uczniowie twojej klasy">
</form>
<form action="uwagi.php" method="post">
	<input type='submit' value="Pochwały/Uwagi uczniów">
</form>


</br>




 </div>
    
 </div>
</body>
</html>
