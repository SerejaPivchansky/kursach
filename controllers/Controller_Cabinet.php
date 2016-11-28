<?php

Class Controller_Cabinet extends Controller_Base {
	public function index() {

		// Получаем id пользователя из сессии
		$userId = Model_User::checkLog();

		// Получаем всю информацию о пользователе
		$user = Model_User::getUserById($userId);


		require_once(SITE_PATH . "/views/cabinet/index.php");

		return true;
	}

	public function edit() {

		$userId = Model_User::checkLog();

		$res = false;

		if (isset($_POST) && !empty($_POST)) {
			$name = trim(strip_tags($_POST["name"]));
			$password = trim(strip_tags($_POST["password"]));

			$errors = false;

			if (!Model_User::checkName($name)) {
				$errors[] = "Имя не может быть короче 2-х символов";
			}

			if (!Model_User::checkPassword($password)) {
				$errors[] = "Пароль не может быть короче 6-ти символов";
			}

			if ($errors == false) {
				$res = Model_User::edit($userId, $name, password_hash($password, PASSWORD_DEFAULT));
			}
		}

		require_once(SITE_PATH . "/views/cabinet/edit.php");

		return true;
	}

	public function orders() {
		$userId = Model_User::checkLog();

		$orders = Model_Order::getOrdersListByUserId($userId);

		require_once(SITE_PATH . "/views/cabinet/orders.php");

		return true;
	}
}