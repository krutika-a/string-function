

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



<?php
echo"<br>";
$str="THIS Is cASE In-SENSitive";
echo strrichr($str,"case"); //case-insensitive use strichr 

?>

<?php
echo"<br>";
$str="THIS Is cASE IN-SENSitive";
echo strrichr($str,"in");
?>

<?php
echo"<br>";
$str="THIS Is cASE IN-SENSitive";
echo strrichr($str,"is");
?>