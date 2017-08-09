<?php
/**
 * Created by PhpStorm.
 * User: my
 * Date: 2017/8/2
 * Time: 8:57
 */

namespace app\admin\controller;

use houdunwang\core\Controller;
use houdunwang\view\View;

class Entry extends Common{
    public function index(){
        return View::make();
    }

}