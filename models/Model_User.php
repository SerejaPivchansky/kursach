<?php

Class Model_User extends Model_Base {

	//Регистрация пользователя
	public static function register($name, $email, $password) {
		$pdo = Db::getConnection();

		$sql = "INSERT INTO users (name, email, password)
			VALUES(:name, :email, :password)";

		$pdo->prepare($sql);

		$res = $pdo->prepare($sql);

		$res->bindParam(":name", $name, PDO::PARAM_STR);
		$res->bindParam(":email", $email, PDO::PARAM_STR);
		$res->bindParam(":password", $password, PDO::PARAM_STR);

		return $res->execute();
	}


	// Проверка наличия открытой сессии у пользователя
	public static function isGuest() {
		if(isset($_SESSION["user"])) {
			return false;
		}

		return true;
	}

	// Проверка имени на корректность
	public static function checkName($name) {
		if (strlen($name) > 1) {
			return true;
		}

		return false;
	}

	//Проверка почтового ящика
	public static function checkEmail($email) {
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			return true;
		}

		return false;
	}

	public static function checkEmailExists() {
		$pdo = Db::getConnection();

		$sql = "SELECT count(*) FROM users WHERE email = :email";

		$res = $pdo->prepare($sql);
		$res->bindParam(":email", $email, PDO::PARAM_STR);
		$res->execute();
		var_dump($res->fetchColumn());
		if ($res->fetchColumn()) {
			return true;
		}

		return false;
	}

	// Проверка пароля
	public static function checkPassword($password) {
		if (strlen($password) >= 6) {
			return true;
		}

		return false;
	}


	// Проверка на существовние введенных данных при авторизации
	public static function checkUserData($email, $password) {
		$pdo = Db::getConnection();

		$sql = "SELECT id, name, email, password, role FROM users WHERE email = :email";

		$res = $pdo->prepare($sql);
		$res->bindParam(":email", $email, PDO::PARAM_STR);

		$res->execute();

		$user = $res->fetch();
		var_dump($user);
		if (password_verify($password, $user["password"])) {
			return $user["id"];
		}

		return false;
	}

	public static function auth($userId) {
		$_SESSION["user"] = $userId;
	}

}