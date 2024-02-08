<?php

require_once __DIR__ . '/../vendor/autoload.php';

use app\controller\Home as HomeController;

session_start();
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url){
    case '':
    case '/':
        header('Location: /home');
        break;
    case '/home':
        (new HomeController())->execute();
        break;
}