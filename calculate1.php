<!DOCTYPE html>
<html lang="zn">
<body>

<?php
$test = '菜鸟教程';
// 普通写法
$username = isset($test) ? $test : 'nobody';
echo $username, "<br/>";
 
// PHP 5.3+ 版本写法
$username = $test ?: 'nobody';
echo $username, "<br/>";


// 如果 $_GET['user'] 不存在返回 'nobody'，否则返回 $_GET['user'] 的值
$username = $_GET['user'] ?? 'nobody';
echo $username, "<br/>";
// 类似的三元运算符
$username = isset($_GET['user']) ? $_GET['user'] : 'nobody';
echo $username, "<br/>";

$a = 1;
$b = 2;
$c = 3;
$d = $a + $b * $c;
echo "<br/>";
echo $d;
$e = ($a + $b) * $c;  // 使用括号
echo "<br/>";
echo $e;

?>

</body>
</html>