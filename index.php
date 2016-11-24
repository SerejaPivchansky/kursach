<?php

error_reporting(E_ALL); // Отображение всех ошибок

session_start();

define ("SITE_PATH", dirname(__FILE__));

require_once(SITE_PATH . "/core/core.php");

// Загружаем router
$router = new Router();
// задаем путь до папки контроллеров.
$router->setPath(SITE_PATH . "/controllers");
// запускаем маршрутизатор
$router->start();


