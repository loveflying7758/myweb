<?php
$servername = "localhost";
$username = "root";
$password = "123456";
 
// 创建mysqli面向对象连接
$conn = new mysqli($servername, $username, $password);
 
// 检测连接
if ($conn->connect_error) {
    die("MySQLi面向对象连接失败: " . $conn->connect_error."<br>");
} 
echo "MySQLi面向对象连接成功"."<br>";

// 创建mysqli面向过程连接
$conn1 = mysqli_connect($servername, $username, $password);
 
// 检测连接
if (!$conn1) {
    die("MySQLi面向过程Connection failed: " . mysqli_connect_error()."<br>");
}
echo "MySQLi面向过程连接成功"."<br>";

//创建PDO连接
try {
    $conn2 = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
    echo "PDO连接成功"."<br>";
    echo '<script>alert("请不要在24小时内重复投票！");</script>';
}
catch(PDOException $e)
{
    echo $e->getMessage()."<br>";    
}

?>