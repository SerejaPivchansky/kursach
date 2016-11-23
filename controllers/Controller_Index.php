<?php

// Контроллер
Class Controller_Index Extends Controller_Base {
	// Шаблон
	public $layouts = "index";

	//Экшен
	function index() {
		$model = new Model_User();
		$userInfo = $model->getUser();
		$this->template->vars("userInfo", $userInfo);
		$this->template->view("index");
	}
}