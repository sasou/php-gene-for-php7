<?php
header("Content-type: text/html; charset=UTF-8");
define('APP_ROOT', __dir__ . '/app/');

function geneHandler($e) {
	\Gene\Router::displayExt('error');
}

$app = new \gene\application();
$app
->load("router.ini.php")
->load("config.ini.php")
->setMode(1,1)
->run();
