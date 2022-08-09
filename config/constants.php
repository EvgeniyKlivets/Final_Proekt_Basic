<?php
const DB_HOST = "localhost"; /*server DB*/
const DB = "Final"; /*folder DB*/
const DB_CHARSET = "utf8"; /* code DB*/
const DB_USER = "root"; /*name user*/
const DB_PASSWORD = "root"; /*passwor user*/
const DB_DSN = "mysql:host=" . DB_HOST . ";dbname=" . DB . ";charset=" . DB_CHARSET;

/*вывести на экран с сервера*/
define("DOMAIN", $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['HTTP_HOST']);

const ASSETS_URI = DOMAIN . '/assets';
const PARTS_DIR = ROOT_DIR . '/parts';
const PAGES_DIR = ROOT_DIR . '/pages';
const APP_DIR = ROOT_DIR . '/app';

/*define("ASSETS_URI", $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['HTTP_HOST'] . '/assets/');*/
/*echo '<pre>' . print_r($_SERVER, return :true) . '</pre>';*//*подключается через браузер*/

/*const SRC_URI = DOMAIN . "/final_project/src/";
const PARTS_DIR = ROOT_DIR . '/parts';*/
