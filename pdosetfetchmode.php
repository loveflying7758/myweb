<?php

$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "myDB";
$sql = 'SELECT name, color, calories FROM fruit';

try {
	$conn = new PDO( "mysql:host=$servername;dbname=$dbname", $username, $password );
	$stmt = $conn->query( $sql );
	$result = $stmt->setFetchMode( PDO::FETCH_NUM );
	while ( $row = $stmt->fetch() ) {
		print $row[ 0 ] . "\t" . $row[ 1 ] . "\t" . $row[ 2 ] . "<br>";
	}
} catch ( PDOException $e ) {
	print $e->getMessage();
}

?>