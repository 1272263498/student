<?php
/**
 * Created by PhpStorm.
 * User: my
 * Date: 2017/8/2
 * Time: 9:41
 */

namespace houdunwang\view;


class View{

    public static function __callStatic( $name, $arguments ) {
        return call_user_func_array([new Base(),$name],$arguments);
    }

}