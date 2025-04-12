<?php
$servername="localhost";
$username="root";
$password="123456";
$dbname="myDB";

//创建连接
$conn=new mysqli($servername,$username,$password,$dbname);

//检测连接
if ($conn->connect_error){
    die("连接失败：".$conn->connect_error);
}

//预处理及绑定
$stmt=$conn->prepare("INSERT INTO MyGuests(firstname,lastname,email) VALUES (?,?,?)");
$stmt->bind_param("sss",$firstname,$lastname,$email);

//设置参数并执行
$firstname="王";
$lastname="林";
$email="loveflying7758@163.com";
$stmt->execute();

$firstname="彭";
$lastname="佳";
$email="mywife@163.com";
$stmt->execute();

$firstname="蒋";
$lastname="文雯";
$email="mylover@163.com";
$stmt->execute();

echo "新记录插入成功";

$stmt->close();
$conn->close();
?>