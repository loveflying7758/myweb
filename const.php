<!DOCTYPE html>
<html lang="en">
<body>

<?php
// 区分大小写的常量名
define("hello", "朋友你好！",true);     //true使大小写不敏感
 
function myTest() {
    echo hello;    // 输出 "朋友你好！"
    echo '<br>';
    echo Hello;
}
 
myTest();

?>

</body>
</html>