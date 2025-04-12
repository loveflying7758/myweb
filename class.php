<!DOCTYPE html>
<html>

<body>

  <?php
  class Car
  {
    var $brand, $color;
    function Car($brand, $color = "green")
    {
      $this->brand = $brand;
      $this->color = $color;
    }
    function what_color()
    {
      return $this->color;
    }
  }

  function print_vars($obj)
  {
    foreach ($obj as $p => $v) {
      echo "$p = $v<br/>";
    }
  }

  // 实例一个对象
  $herbie = new Car("BMW", "white");

  // 显示 herbie 属性
  echo "herbie: Properties<br/>";
  print_vars($herbie);
  echo $herbie->what_color() . "<br/>";

  $arr = array("1" => "111", "2" => "222", "3" => "333");

  foreach ($arr as $key => $value) {
    echo $key . "=>" . $value . "<br/>";
  }

  ?>

</body>

</html>