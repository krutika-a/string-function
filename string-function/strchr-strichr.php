

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



<?php
echo"<br>";
$str="THIS Is cASE In-SENSitive";
echo strichr($str,"case"); //case-insensitive use strichr 

?>

<?php
echo"<br>";
$str="THIS Is cASE IN-SENSitive";
echo strichr($str,"in");
?>

<?php
echo"<br>";
$str="THIS Is cASE IN-SENSitive";
echo strichr($str,"is");
?>