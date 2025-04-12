<!DOCTYPE html>
<html lang="zn">
<body>

<?php 
$txt1="Hello world!"; 
$txt2="What a nice day!";
$txt=$txt1."<br/>".$txt2;
echo $txt."<br/>";
echo '"中国人"长度是'.mb_strlen("中国人","utf-8")."<br/>";
echo strpos($txt2,"nice");
?>

</body>
</html>