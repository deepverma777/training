<!DOCTYPE html>
<html>
<body>

<?php
$States = array (
  array('Id', State, City),
  array('1',Haryana,Chandigarh ),
  array('2',Punjab,Chandigarh),
  array('3',Assam,Dispur,),
  array('4',Goa, Panaji,),

);


echo $States[0][0]."&nbsp&nbsp&nbsp".$States[0][1]."&nbsp&nbsp&nbsp".$States[0][2]."<br><br>";
echo $States[1][0].".&nbsp&nbsp".$States[1][1]." => ".$States[1][2]."<br>";
echo $States[2][0].".&nbsp&nbsp".$States[2][1]." => ".$States[2][2]."<br>";
echo $States[3][0].".&nbsp&nbsp".$States[3][1]." => ".$States[3][2]."<br>";
echo $States[4][0].".&nbsp&nbsp".$States[4][1]." => ".$States[4][2]."<br>";
print_r($array);
?>

</body>
</html>