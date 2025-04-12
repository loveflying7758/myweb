<!DOCTYPE html>
<html lang="zn">

<body>

    <?php
    $cars = array("Volvo", "BMW", "Toyota");
    echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".<br/>";
    echo count($cars) . "<br/>";
    for ($x = 0; $x < count($cars); $x++) {
        echo $cars[$x] . "<br/>";
    }

    $ages = array("Peter" => "35", "Ben" => "37", "Joe" => "43", "老王" => "41");
    echo "老王今年" . $ages['老王'] . "岁。<br/>";

    foreach ($ages as $key => $value) {
        echo "Key=" . $key . ", Value=" . $value . "<br/>";
    }

    ?>

</body>

</html>