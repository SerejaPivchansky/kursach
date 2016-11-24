<?php

Class Controller_User extends Controller_Base {

	public function index() {

	}

	public function register() {
		$res = false;
		$name = "";
		$email = "";
		$password = "";

		if (isset($_POST) && !empty($_POST)) {
			$name = trim(strip_tags($_POST["name"]));
			$email = trim(strip_tags($_POST["email"]));
			$password = trim(strip_tags($_POST["password"]));

			$errors = false;

			if (!Model_User::checkName($name)) {
				$errors[] = "Имя не может быть короче двух символов";
			}

			if (!Model_User::checkEmail($email)) {
				$errors[] = "Некорректный Email";
			}

			if (Model_User::checkEmailExists($email)) {
				$errors[] = "Пользователь с таким e-mail уже существует";
			}

			if (!Model_User::checkPassword($password)) {
				$errors[] = "Пароль не может быть короче шести символов";
			}
			//var_dump($errors);
			if ($errors == false) {
				$res = Model_User::register($name, $email, password_hash($password, PASSWORD_DEFAULT));
			}
		}

		require_once(SITE_PATH . "/views/user/register.php");

		return true;
	}

	public function login() {
		ob_start();

		$email = "";
		$password = "";

		if(isset($_POST) and !empty($_POST)) {
			$email = trim(strip_tags($_POST["email"]));
			$password = $_POST["password"];

			$errors = false;

			if (!Model_User::checkEmail($email)) {
				$errors = "Некорректный Email";
			}

			$userId = Model_User::checkUserData($email, $password);

			if ($userId == false) {
				$errors[] = "Пользователя с таким email или паролем не существует";
			} else {
				Model_User::auth($userId); // Записываем поле в сессию

				header("Location : /cabinet/"); //Перенаправляем в личный кабинет
			}
		}

		require_once(SITE_PATH . "/views/user/login.php");

		return true;
	}
}