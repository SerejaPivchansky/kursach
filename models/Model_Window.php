<?php

class Model_Window extends Model_Base {

	// Добавляем тип окна
	public static function addMaterial($material) {

		$_SESSION["material"] = $material;

		return true;
	}

	// Добавляем тип профиля
	public static function addProfile($profile) {

		$_SESSION["profile"] = $profile;

		return true;
	}

	// Полечаем цену профиля
	public static function getProfilePrice($profile) {
		
		$pdo = Db::getConnection();

		$sql = "SELECT price FROM profiles WHERE profile = :profile";

		$res = $pdo->prepare($sql);
		$res->bindParam(":profile", $profile, PDO::PARAM_STR);
		$res->execute();

		$res = $res->fetch(PDO::FETCH_ASSOC);

		return $res["price"];
	}

	public static function getTypeMultiply($windowType) {

		$pdo = Db::getConnection();

		$sql = "SELECT multiply FROM window_types WHERE window_type = :windowType";

		$res = $pdo->prepare($sql);
		$res->bindParam(":windowType", $windowType, PDO::PARAM_STR);
		$res->execute();

		$res = $res->fetch(PDO::FETCH_ASSOC);

		return $res["multiply"];
	}

	public static function getWindowDescribing($windowType) {
		$pdo = Db::getConnection();

		$sql = "SELECT describing FROM window_types WHERE window_type = :windowType";

		$res = $pdo->prepare($sql);
		$res->bindParam(":windowType", $windowType, PDO::PARAM_STR);
		$res->execute();

		$res = $res->fetch(PDO::FETCH_ASSOC);

		return $res["describing"];
	}

	public static function getPovorot($windowType) {

		switch ($windowType) {
			case "s1":
			case "d1":
			case "t1":
				return "Глухое";
				break;
			case "b":
				return "";
				break;
			default:
				if ($_POST["povorot"] == "Y") {
					return "С поворотно-откидным механизмом";
				} else {
					return "С поворотным механизмом";
				}
				break;
		}
	}
}