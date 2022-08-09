<?php
const ROOT_DIR = __DIR__;

if (!session_id()) {
    session_start();
}

/* Configuration status*/
require_once __DIR__ . '/config/constants.php'; /*обращение к файлу*/
require_once __DIR__ . '/config/DB.php'; /*обращение файлу БД*/
require_once __DIR__ . '/app/index.php';

if (!empty($_POST)) {
    require_once APP_DIR . '/form_script/controller.php'; /*какая функция должна обрабатывать запрос*/

} else {
/*Play html*/
    /* $_SESSION['alert'] =[
    'class' =>'success',
    'text'=>'Wow'
    ]; перенос в  бай*/

    require_once PARTS_DIR . '/header.php';

    require_once __DIR__ . '/config/router.php';

    //require_once PAGES_DIR . '/main.php'; /*All section in one faile*/

    require_once PARTS_DIR . '/footer.php';

}

//require_once PARTS_DIR . '/style.css';//

/*echo ROOT_DIR;
echo PARTS_DIR;*/

/*$authorName=*/

/*DB:: connect()-> запрос к БД*/
/*$query =DB:: connect()-> prepare(query 'SELECT * from authors where name ={$authorName}'): //==$dbh->prepare(); запрос к классу
$query->execute(); /*исполняет переменную
$result = $query ->execute();
$result = $query ->fethALL();
echo '<pre>';
var_dump($result);*/
