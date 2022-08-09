<?php

$url = trim($_SERVER['REQUEST_URI'], '/');

switch ($url) {
    case "":
        require_once PAGES_DIR . '/main.php';
        break;
    case "register":
        require_once PAGES_DIR . '/register.php';
        break;
    case "login":
        require_once PAGES_DIR . '/login.php';
        break;
    default:
        /*dd($url);*/
}
