<?php

Class Controller_Pricing extends Controller_Base{
	public function index() {


		if ($step = "two") {
			return $this->stepOne();
		}

		
		//$this->template->view("index");
	}

	public function stepOne() {

		require_once(SITE_PATH . "/views/pricing/stepone.php");

		return true;
	}

	public function stepTwo() {

		Model_Window::addMaterial($_POST["radio"]);

		if (!empty($_POST["radio"]) && $_POST["radio"] != "plastic") {
			$this->stepThree();
			return;
		}

		Model_Window::addProfile($_POST["radio"]);

		require_once(SITE_PATH . "/views/pricing/steptwo.php");

		return true;
		
	}
	public function stepThree() {
		
		if ($_SESSION["material"] == "plastic") {
			$this->stepThreePlastic();
		}
		
	}

	public function stepThreePlastic() {

		$_SESSION["profile"] = $_POST["radio"];

		require_once(SITE_PATH . "/views/pricing/stepthreeplastic.php");

		return true;
	}

	public function stepFour() {

		// Цена профиля за квадратный метр
		$profilePrice = Model_Window::getProfilePrice($_SESSION["profile"]);

		// Получаем размер сторон окна
		$width = explode(" ", $_POST["window-width"])[0] / 1000;
		$height = explode(" ", $_POST["window-height"])[0] / 1000;

		// Площадь окна
		$windowArea = $width * $height;

		$povorot = 1;

		// Поворотно-откидная?
		if ($_POST["povorot"] == "Y") {
			$povorot = 1.3;
		}

		// Тип окна как множитель
		$windowType = $_POST["window-type"];
		$typeMultiply = Model_Window::getTypeMultiply($windowType);

		$totalPrice = $profilePrice * $windowArea * $povorot * $typeMultiply;

		$windowDescribing = Model_Window::getWindowDescribing($windowType);
		$povorotDescribing = Model_Window::getPovorot($windowType);

		require_once(SITE_PATH . "/views/pricing/stepfour.php");

		return true;
	}
}