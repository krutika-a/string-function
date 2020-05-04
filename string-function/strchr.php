

<?php
echo"<br>";
$str="this is case sensitive";
echo strchr($str,"case");  //case-sensitive use strchr 
?>

<?php
echo"<br>";
$str="this is case sensitive";
echo strchr($str,"this");
?>

<?php
echo"<br>";
$str="this is case sensitive";
echo strchr($str,"is");
?>
