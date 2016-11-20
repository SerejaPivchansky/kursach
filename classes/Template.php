<?php

Class Template {
	private $template;
	private $controller;
	private $layouts;
	private $vars = array();

	function __construct($layouts, $controllerName) {
		$this->layouts = $layouts;
		$arr = explode("_", $controllerName);
		$this->controller = strtolower($arr[1]);
	}

	// установка переменных, для отображения
	function vars($varname, $value) {
		if(isset($this->vars[$varname]) == true) {
			trigger_error ("Unable to set var `" . $vatname . "`. Already set, and overwrite not allowed.", E_USER_NOTICE);
		}
		$this->vars[$varname] = $value;
		return true;
	}

	// Отображение
	function view($name) {
		$pathLayout = SITE_PATH . "/views/layouts/" . $this->layouts . ".php";
		$contentPage = SITE_PATH . "/views/" . $this->controller . "/" . $name . ".php";

		if (file_exists($pathLayout) == false) {
			trigger_error("Layout `" . $this->layouts . "` does not exist.", E_USER_NOTICE);
			return false;
		}
		if (file_exists($contentPage) == false) {
			trigger_error("Template `" . $name . "` does not exist.", E_USER_NOTICE);
			return false;
		}

		foreach ($this->vars as $key => $value) {
			$$key = $value;
		}

		include($pathLayout);
	} 
}