<?php

Class Db {
	public static function getConnection() {
	
	$params = include(SITE_PATH . "/dbparams.php");

	try {
		//$pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
		$pdo = new PDO("mysql:host={$params['host']};dbname={$params['dbname']}", $params["user"], $params["password"]);

		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

		$pdo->query("set names utf8");
	} catch(PDOException $e) {
		print $e->getMessage();
	}
	return $pdo;
	}

}