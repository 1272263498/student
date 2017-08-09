<?php
/**
 * Created by PhpStorm.
 * User: my
 * Date: 2017/8/2
 * Time: 20:51
 */

namespace app\admin\controller;
use houdunwang\core\Controller;

class Common extends Controller{
    public function __construct(){
//    如果没有登陆后台页面
        if(!isset($_SESSION['user'])){
            go('?s=admin/login/index');
        }
    }
}