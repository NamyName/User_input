<?php
$white_array = array("page1", "page2", "page3");
if (!(array_key_exists('HTTP_X_ACCESS_TOKEN', $_SERVER))){
    echo "Запрещено, не задан токен";
    die();
}
if ($_SERVER['HTTP_X_ACCESS_TOKEN']!=='SECRET_TOKEN'){
    echo "Запрещено, неверный токен";
    die();
}
if ($_SERVER['REQUEST_METHOD']!=='POST'){
    echo "Запрещено, неверный метод";
    die();
}
if (!(array_key_exists('page', $_GET))){
    echo "Ошибка, не задан тип страницы";
    die();
}
echo "Запрошена страница [".htmlentities($_GET['page'])."]<br>";
if (array_search($_GET['page'], $white_array)===false){
    echo "Ошибка, недопустимая страница";
    die();
}
if (!(array_key_exists('CONTENT_TYPE', $_SERVER))or $_SERVER['CONTENT_TYPE']!=="application/x-www-form-urlencoded"){
    echo "Ошибка, неверный тип данных";
    die();
}
if (count($_POST)==0){
    echo "Ошибка, данные не заданы";
    die();
}
echo "Через POST передано ".htmlentities(count($_POST))." переменных<br>";
foreach ($_POST as $key=>$value){
    echo "Значение[".htmlentities($key)."]:".htmlentities($value)."<br>";
}
