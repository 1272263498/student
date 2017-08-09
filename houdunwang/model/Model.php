<?php
/**
 * Created by PhpStorm.
 * User: my
 * Date: 2017/8/2
 * Time: 9:43
 */

namespace houdunwang\model;


class Model{
    public static function __callStatic( $name, $arguments ) {
//        get_called_class:获取静态绑定后的类名
        $className = get_called_class();
        //system\model\Arc
        //strrchr字符串截取 变成 \Arc
        //ltrim 去除左边的\ 变成 Arc
        //strtolower 变成 arc
        $table = strtolower(ltrim(strrchr($className,'\\'),'\\'));

        return call_user_func_array([new Base($table),$name],$arguments);
    }
}