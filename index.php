<?php

error_reporting(E_ALL); // Отображение всех ошибок

require_once("config.php");


try {
	$DBO = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);

	$DBO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$DBO->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

	$DBO->query("set names utf8");
} catch(PDOException $e) {
	print $e->getMessage();
}

require_once(SITE_PATH . "/core/core.php");

// Загружаем router
$router = new Router();
// задаем путь до папки контроллеров.
$router->setPath(SITE_PATH . "/controllers");
// запускаем маршрутизатор
$router->start();


