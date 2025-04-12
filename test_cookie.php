<?php
$expire=time()+60*60*24*30;
setcookie("user", "简约科技", $expire);
?>

<html>
<head>
<meta charset="utf-8">
<title>测试cookie</title>
</head>
<body>

<?php
if (isset($_COOKIE["user"]))
    echo "欢迎 " . $_COOKIE["user"] . "!<br>";
else
    echo "普通访客!<br>";
?>

</body>
</html>