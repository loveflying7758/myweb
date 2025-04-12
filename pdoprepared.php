<?php
$servername="localhost";
$username="root";
$password="123456";
$dbname="myDB";

try{
    $conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    //设置PDO错误模式为异常
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    //预处理SQL并绑定参数
    $stmt=$conn->prepare("INSERT INTO MyGuests (firstname,lastname,email) VALUES (:firstname,:lastname,:email)");
    $stmt->bindParam(':firstname',$firstname);
    $stmt->bindParam(':lastname',$lastname);
    $stmt->bindParam(':email',$email);

    //插入行
    $firstname="关";
    $lastname="敏";
    $email="gm@163.com";
    $stmt->execute();

    $firstname="刘";
    $lastname="娟";
    $email="2gf@163.com";
    $stmt->execute();

    echo "新记录插入成功";
}
catch(PDOException $e)
{
    echo "出错：".$e->getMessage();
}
$conn=null;
?>