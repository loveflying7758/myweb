<html>

<body>

	<?php
	echo '这是第 " ' . __LINE__ . ' " 行';
	?>

	<?php
	echo '该文件位于 " ' . __FILE__ . ' " ';
	?>

	<?php
	echo '该文件位于 " ' . __DIR__ . ' " ';
	?>

	<?php

	function test() {
		echo '函数名为：' . __FUNCTION__;
	}
	test();
	?>

	<?php
	class make_love {
		function _print() {
			echo '类名为：' . __CLASS__ . "<br>";
			echo '函数名为：' . __FUNCTION__;
		}
	}
	$t = new make_love();
	$t->_print();
	?>


</body>
</html>