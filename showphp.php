<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
姓名：<input type="text" name="fname"><br>
年龄：<input type="text" name="fage"><br>
<input type="submit">
</form>

<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
课程：<input type="text" name="subject"><br>
在哪：<input type="text" name="where"><br>
<input type="submit">
</form>

<a href="test_get.php?subject=javascript&where=your bed.">测试 $_GET</a>

<?php 
$name = $_REQUEST['fname'];
$age=$_REQUEST['fage'];
$subject=$_GET['subject'];
$where=$_GET['where'];
echo "<br>";
echo "你叫".$name."，今年".$age."岁。";
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo "你喜欢在".$where."学".$subject;
?>



</body>
</html>