<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 30.06.15
 * Time: 19:03
 */

//Изменение 17:07


ERROR_REPORTING_DISPLAY_ALL;

require 'config.php';

function __autoload($className){

    $file = $className . '.php';
    if (file_exists(MODEL_DIR.$file)){
        require MODEL_DIR . $file;
    } elseif (file_exists(CONTROLLER_DIR.$file)){
        require CONTROLLER_DIR . $file;
    } elseif (file_exists(LIB_DIR.$file)){
        require LIB_DIR . $file;
    } else {
        //die("{$file} Not Found");
        throw new Exception("Site doesn`t work!");
    }

}

//require MODEL_DIR . 'Menu.php';


// Проверка налияися ГЕТ запроса и присвоение значение контроллера по-умолчанию
$_controller = isset($_GET['controller']) ? $_GET['controller'] : 'index';  // Тернарный оператор
$_controller = ucfirst(strtolower($_controller));
$_controller .= 'Controller';
//print_r($_controller); echo "<br/>";

// Проверка налияися ГЕТ запроса и присвоение значение action по-умолчанию
$_action = isset($_GET['action']) ? $_GET['action'] : 'index';              // Тернарный оператор
$_action = strtolower($_action);
$_action .= 'Action';
//print_r($_action); echo "<br/>";



// блок try пишется перед этапом первого создания экземпляра класса
try {
    $menu = new Menu;
    $menu = $menu -> getMenuUrl();
//print_r($menu);

$_controller = new $_controller;

//$content = $_controller -> $_action();
if (method_exists($_controller, $_action)){
    $content = $_controller -> $_action();
} else {
    //die("{$_action} does not found");
    throw new Exception("Site doesn`t work!");
}




} catch (Exception $e){
    //die('Site doesn`t work');
    $content = $e -> getMessage();
}



$data = array(                      // Все сгенерированные данные, которые оформляются в layout.phtml
    'site_name' => $site_name,      // Передается с config.php
    'menu' => $menu,                //
    'content' => $content,          //
);










require VIEW_DIR.'layout.phtml';