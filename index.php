<?php

error_reporting(E_ALL); // Отображение всех ошибок

include("config.php");


try {
	$DBO = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);

	$DBO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$DBO->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

	$DBO->query("set names utf8");
} catch(PDOException $e) {
	print $e->getMessage();
}

include(SITE_PATH . "/core/core.php");

// Загружаем router
$router = new Router($registry);
// записываем данные в реестр
$registry->set("router", $router);
// задаем путь до папки контроллеров.
$router->setPath(SITE_PATH . "/controllers");
// запускаем маршрутизатор
$router->start();


