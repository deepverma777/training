<!DOCTYPE html>
<html>
<body>

<?php
$States = array (
  array("State", City),
  array("Haryana",Chandigarh ),
  array("Punjab",Chandigarh),
  array("Assam",Dispur,),
  array("Goa", Panaji,),

);


echo $States[0][0]."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$States[0][1].$States[0][2]."<br><br>";
echo $States[1][0]."&nbsp =>  ".$States[1][1].$States[1][2]."<br>";
echo $States[2][0]."&nbsp =>  ".$States[2][1].$States[2][2]."<br>";
echo $States[3][0]."&nbsp =>  ".$States[3][1].$States[3][2]."<br>";
echo $States[4][0]."&nbsp  =>  ".$States[4][1].$States[4][2]."<br>";

?>

</body>
</html>