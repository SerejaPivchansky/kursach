<?php

Class Router {
	private $path;
	private $args = array();

	// Задаём путь до папки с контроллерами
	function setPath($path) {
		$path = trim($path, "/\\");
		$path .= "/";

		// если путь не существует, сигнализируем об этом
		if(is_dir($path) == false) {
			throw new Exception ("Invalid controller path: `" . $path . "`");
		}
		$this->path = $path;
	}

	// Определение контроллера и экшена из урла
	private function getController(&$file, &$controller, &$action, &$args) {
		$route = (empty($_SERVER["REQUEST_URI"])) ? "" : $_SERVER["REQUEST_URI"];
		unset($_SERVER["REQUEST_URI"]);

		if (empty($route)) {
			$route = "index";
		}

		// Получаем части урла
		$route = trim($route, "/\\");
		$parts = explode("/", $route);

		// Находим контроллер
		$cmd_path = $this->path;

		foreach ($parts as $part) {
			$fullpath = $cmd_path . $part;
			// Проверка существования папки
			if (is_dir($fullpath)) {
				$cmd_path .= $part . "/";
				array_shift($parts);
				continue;
			}
			
			if (is_file($cmd_path . "Controller_" . ucfirst($part) . ".php")) {
				$controller = $part;
				array_shift($parts);
				break;
			}
		}
		
		// если урле не указан контролер, то испольлзуем поумолчанию index
		if (empty($controller)) {
			$controller = "Index";
		}

		// Получаем экшен
		$action = array_shift($parts);
 		
		if (empty($action)) {
			$action = "index";
		}

		$file = $cmd_path . "Controller_" . ucfirst($controller) . ".php";
		$args = $parts;
	}

	function start() {
		// Анализируем путь
		$this->getController($file, $controller, $action, $args);
		
		// Проверка существования файла, иначе 404
		if (is_readable($file) == false) {
			die ("404 Not Found");
		}

		// Подключаем файл
		require_once($file);

		// Создаём экземпляр контроллера
		$class = "Controller_" . $controller;
		$controller = new $class();

		// Если экшен не существует - 404
		if (is_callable(array($controller, $action)) == false) {
			die ("404 Not Found");
		}

		// Выполняем экшен
		$controller->$action();
	}

}

