<!DOCTYPE html>
<html>
<body>

<?php
$city = array("Hisar", "Sirsa", "Bhiwani"); 
echo "Arrays of citys <br> <br>";


echo "$city[0] <br>";
echo "$city[1] <br>";
echo "$city[2] <br><br>";



array_pop($city);
print_r($city);


?>

</body>
</html>