

<?php
echo"<br>";
$str="this is case sensitive";
echo strrchr($str,"case");  //case-sensitive use strchr 
?>

<?php
echo"<br>";
$str="this is case sensitive";
echo strrchr($str,"this");
?>

<?php
echo"<br>";
$str="this is case sensitive";
echo strrchr($str,"is");
?>
