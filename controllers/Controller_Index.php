<?php

// Контроллер
Class Controller_Index extends Controller_Base {
	// Шаблон
	public $layouts = "index";

	//Экшен
	function index() {
		$this->template->view("index");
	}
}