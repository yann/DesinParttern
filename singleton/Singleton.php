<?php
/**
 * Created by PhpStorm.
 * User: yangyue
 * Date: 16-11-5
 * Time: 下午9:30
 * 单例模式
 */

class singleTon{

    private static $_instance;

    private function __construct(){
        echo 'This is a Constructed method;';
    }
    public function __clone()
    {
        trigger_error('Clone is not allow!',E_USER_ERROR);
    }
    public static function getInstance(){

        if (!(self::$_instance instanceof self)){
            self::$_instance = new self;
        }
        return self::$_instance;
    }
    public function test(){
        echo "succeed";
    }
}

$a = singleTon::getInstance();
 $a->test();