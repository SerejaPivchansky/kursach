<?php

define("DS", DIRECTORY_SEPARATOR); //разделитель для путей к файлам
$sitePath = realpath(dirname(__FILE__) . DS);
define ("ROOT", $sitePath); // Путь у корню сайта

define("DB_USER", "root");
define("DB_PASS", "qqq");
define("DB_HOST", "kursach");
define("DB_NAME", "kursach");

