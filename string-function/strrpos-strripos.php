case sensitive but serch from last end & count from starting of string.

<?php          
echo"<br>";
$str="This is an example which is simple string";
echo strrpos($str,"simple");
?>

<?php          
echo"<br>";
$str="This is an example which is simple string";
echo strrpos($str,"is");
?>

<?php          
echo"<br>";
$str="This is an example which is simple string";
echo strrpos($str,"which");
echo"<br>";
echo"<br>";


?>

case-insensitive but serch from last end & count from starting of string.

<?php
echo"<br>";
$str="This IS AN EXAmple which IS SIMPLE string";
echo strripos($str,"is");
?>

<?php
echo"<br>";
$str="This IS AN EXAmple which IS SIMPLE string";
echo strripos($str,"string");
?>

<?php
echo"<br>";
$str="This IS AN EXAmple which IS SIMPLE string";
echo strripos($str,"wh");
?>
