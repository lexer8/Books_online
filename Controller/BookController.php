<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 02.07.15
 * Time: 19:54
 */

class BookController extends Controller {
    public function indexAction(){
        //return 'BookController -> indexAction';
        return $this -> render('index');
    }

} 