<?php
session_start();

if(isset($_SESSION['views']))
{
    $_SESSION['views']++;
}
else
{
    $_SESSION['views']=1;
}
echo "浏览量：". $_SESSION['views']."<br>";
echo exp(1);
?>

<html>
<head>
<meta charset="utf-8">
<title>测试session</title>
</head>
<body>

</body>
</html>