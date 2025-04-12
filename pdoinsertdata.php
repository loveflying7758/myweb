<form action="" method="post">
	<table style="border:solid black 1px;">
		<thead>
			<tr>
				<th colspan="2">用户注册<br><br></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>编　　号: </td>
				<td><input type="text" name="id">
				</td>
			</tr>
			<tr>
				<td>用 户 名: </td>
				<td><input type="text" name="username">
				</td>
			</tr>
			<tr>
				<td>密　　码: </td>
				<td><input type="text" name="password">
				</td>
			</tr>
			<tr>
				<td>重复密码：</td>
				<td><input type="text" name="password1">
				</td>
			</tr>
		</tbody>
		<tfoot>
			<tr>
				<td align="center" colspan="2"><br><input type="submit" value="提　交">　　　<input type="button" value="放　弃">
				</td>
			</tr>
		</tfoot>
	</table>
</form>

<?php

$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "myDB";

try {
	$pdo = new PDO( "mysql:host=$servername;dbname=$dbname", $username, $password );
	// 设置 PDO 错误模式，用于抛出异常
	$pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

	//预处理
	$stmt = $pdo->prepare( "INSERT INTO passport (id,username,password) VALUES (:id,:username,:password)" );
	$stmt->bindParam( ':id', $id );
	$stmt->bindParam( ':username', $username );
	$stmt->bindParam( ':password', $password );


	$id = isset( $_POST[ 'id' ] ) ? htmlspecialchars( $_POST[ 'id' ] ) : '';
	$username = isset( $_POST[ 'username' ] ) ? htmlspecialchars( $_POST[ 'username' ] ) : '';
	$password = isset( $_POST[ 'password' ] ) ? htmlspecialchars( $_POST[ 'password' ] ) : '';
	$password1 = isset( $_POST[ 'password1' ] ) ? htmlspecialchars( $_POST[ 'password1' ] ) : '';
	if ( $id ) {
		if ( $password === $password1 ) {
			$stmt->execute();
			echo "插入记录成功";
		} else {
			echo "两次密码输入不相符！";
		}
	}
} catch ( PDOException $e ) {
	echo $sql . "<br>" . $e->POSTMessage();
}
$pdo = null;
?>