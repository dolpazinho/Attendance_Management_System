
<?php
	$host = 'localhost';
	$db = 'attendance_db';
	$username = 'root';
	$password = 'Wisdom';
	$charset = 'utf8mb4';
	$dsn = "mysql:host=$host;database=$db;charset=$charset";
	try {
		$pdo = new PDO($dsn, $username, $password);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "<h5 class='text-success'>Database Connected </h5>";
	} catch (PDOException $e) {
		throw new PDOException($e->getMessage());
	}
	require_once 'crud.php';
	$crud = new crud($pdo);

