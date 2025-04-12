<html>
<body>

<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
数学：<input type="text" name="math"><br>
语文：<input type="text" name="chinese"><br>
<input type="submit">
</form>

<?php
//计算两个数的和
function add($a,$b){
    $count = $a + $b;
    return $count;
}

//计算小明的数学成绩和语文成绩的和（这个也可以使用在从数据库中读取数据并且做加运算）
function count_score($m,$y){
    $sum = add($m,$y);
    echo "小明的总成绩是".$sum;
}

$math = $_REQUEST['math'];
$chinese=$_REQUEST['chinese'];
count_score($math,$chinese);
?>

</body>
</html>