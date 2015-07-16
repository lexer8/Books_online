<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 30.06.15
 * Time: 19:13
 */

define('DS',DIRECTORY_SEPARATOR);   // В винде каталоги отделяются \, а в линукс /
                                    // xampp . 'DS' . htdocs

define('ROOT',__DIR__.DS);          // Определяем корневую директорию проекта C://xampp/htdocs

define('VIEW_DIR',ROOT.'View'.DS);  // Определяем адрес папки шаблонов (вьюх)

define('MODEL_DIR',ROOT.'Model'.DS);// Определяем адрес модели

define('CONTROLLER_DIR', ROOT.'Controller'.DS); // Определяем адрес папки с контроллерами

define('LIB_DIR',ROOT.'Lib'.DS);    // Определяем адрес папки с библиотеками

$site_name = 'Books On-line';       // title сайта