<select style="width:120px;height:30px;border-radius:400px;"  name="<?php echo $plan;  ?>[]">
<?php
require "baza.php"; 
if ($result = $wynik->query("SELECT * FROM `lekcje` "))
{
    while($w=$result->fetch_assoc())
	{
        echo "<option  value=".$w['lekcja'].">".$w['lekcja']."</option>";        
    }
	$result->close();
	$wynik->close();
}
?>
</select>