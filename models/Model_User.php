<?php

Class Model_User extends Model_Base {
	public function getUser() {
		return array(
			"id" => "Id",
			"first_name" => "First_name",
			"last_name" => "Last name");
	}

	// Проверка наличия открытой сессии у пользователя
	public static function isGuest() {
		if(isset($_SESSION["user"])) {
			return false;
		}

		return true;
	}
}