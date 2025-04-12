<html>

<body>
	<?php

	/*	function test() {
			$a = 'hello';
			return function ( $a )use( $a ) {
				echo $a . $a;
			};
		}
		$b = test();
		$b( 'world' ); //结果是hellohello


		function test() {
			$a = 18;
			$b = "Ly";
			$fun = function ( $num, $name )use( & $a, & $b ) {
				$a = $num;
				$b = $name;
			};
			echo "$b:$a<br/>";
			$fun( 30, 'wq' );
			echo "$b:$a<br/>";
		}
		test();


	$msg = [ 1, 2, 3 ];
	$func = function ()use( $msg ) {
		print_r( $msg );
	};

	$func();
	//运行输出 Array ( [0] => 1 [1] => 2 [2] => 3 )
		*/

	//引用传值
	$msg = [ 1, 2, 3 ];
	$func = function ()use( & $msg ) {
		$msg[ 0 ]++;
		print_r( $msg );
	};


	$func();

	print_r( $msg );

	//传递object类型变量，不使用引用传值&也会改变外部变量的值
	$msg = new ArrayObject( [ 1, 2, 3 ], ArrayObject::ARRAY_AS_PROPS );
	$func = function ()use( $msg ) {
		$msg[ 0 ]++;
		print_r( $msg );
	};

	$func();
	print_r( $msg );

	?>
</body>
</html>