<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 07.07.15
 * Time: 18:48
 */

class Controller {

    protected function render($viewName, $data=array()){
        $c = str_replace('Controller', '', get_class($this));
        //$a = str_replace('Action', '', __FUNCTION__) . '.phtml';
        $path = VIEW_DIR . $c . DS . $viewName . '.phtml';            // View/Index/index.phtml - путь к шаблону

        if (!file_exists($path)){
            //die("{$path} not found");
            throw new Exception("{$path} not found");
        }



        ob_start();
            require $path;
        return ob_get_clean();
    }
} 