<?php
$str="This is an example of string";
echo substr($str,8);
echo "<br>";
echo substr($str,6,5);//s-6position & from e is in 5 but not print
echo "<br>";
echo substr($str,2,0);
echo "<br>";
echo substr ($str,4,8);//problem 4 position 0& from that e position is7
echo "<br>";
?>
