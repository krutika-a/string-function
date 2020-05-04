Case sensitive use strpos


<?php
echo"<br>";
$str="This is an example which is simple string";
echo strpos($str,"is");
?>


<?php          
echo"<br>";
$str="This is an example which is simple string";
echo strpos($str,"simple");
echo"<br>";
?>

Case-in sensitive use stripos

<?php
echo"<br>";
$str="This IS AN EXAmple which IS SIMPLE string";
echo stripos($str,"an");
?>


<?php
echo"<br>";
$str="This IS AN EXAmple which IS SIMPLE string";
echo stripos($str,"example");
?>


<?php
echo"<br>";
$str="This IS AN EXAmple which IS SIMPLE string";
echo stripos($str,"is");
?>


