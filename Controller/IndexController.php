<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 02.07.15
 * Time: 19:53
 */

class IndexController extends Controller {

    public function indexAction(){

        $data = array(
            'content' => 'Welcome!!!'
        );

        return $this -> render('index', $data);

    }
    public function aboutAction(){
        $data = array(
            'content' => 'About Us!!!'
        );
        return $this -> render('about', $data);
    }
    public function contactAction(){
        //return 'IndexController -> contactAction';
        return $this -> render('contact');

        /*
        $data = array();
        if ($_POST){
            $data['content'] = $_POST;
        }
        $this -> render('contact',$data);*/
        //if ($_POST)
    }
} 