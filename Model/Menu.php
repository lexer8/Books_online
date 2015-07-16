<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 30.06.15
 * Time: 20:15
 */

class Menu {
    private $menu = array(
        'Home' => array(
            'controller' => 'index',
            'action' => 'index',
        ),
        'About' => array(
            'controller' => 'index',
            'action' => 'about',
        ),
        'Books' => array(
            'controller' => 'book',
            'action' => 'index',
        ),
        'Contact' => array(
            'controller' => 'index',
            'action' => 'contact',
        ),
    );

    public function getMenuUrl(){
        $urls = array();
        foreach ($this->menu as $k => $v){
            $c = $v['controller'];
            $a = $v['action'];
            $urls[$k]="/index.php?controller={$c}&action={$a}";
        }
        return $urls;
    }
} 