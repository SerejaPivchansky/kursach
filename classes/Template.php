<?php

Class Template {
	private $template;
	private $controller;
	private $layouts;
	private $vars = array();

	function __construct($layouts, $controllerName) {
		$this->layouts = $layouts;
		
		$this->controller = $controllerName;
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
		//$layoutFolder = lcfirst(explode("_", $this->controller)[1]); // Имя_Контроллера -> Имя Контроллера -> контроллера
		//$pathLayout = SITE_PATH . "/views/" . $layoutFolder . "/" . $this->layouts . ".php";
		$pathLayout = SITE_PATH . "/views/" . $this->layouts . "/" . $name . ".php";
		//$contentPage = SITE_PATH . "/views/" . $this->controller . "/" . $name . ".php";
		
		if (file_exists($pathLayout) == false) {
			trigger_error("Layout `" . $this->layouts . "` does not exist.", E_USER_NOTICE);
			return false;
		}
		/*if (file_exists($contentPage) == false) {
			trigger_error("Template `" . $name . "` does not exist.", E_USER_NOTICE);
			return false;
		}*/

		foreach ($this->vars as $key => $value) {
			$$key = $value;
		}

		require_once($pathLayout);
	} 
}