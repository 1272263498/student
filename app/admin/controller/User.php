<?php
/**
 * Created by PhpStorm.
 * User: my
 * Date: 2017/8/3
 * Time: 0:52
 */

namespace app\admin\controller;
use houdunwang\view\View;
use system\model\User as UserModel;

class User extends Common{
    /**
     * @return mixed
     * 修改密码
     */
    public function changePassword(){
    if(IS_POST){
//    1.比对旧密码
            $user=UserModel::where("uid=" . $_SESSION['user']['uid'])->get();
                $post=password_hash($_POST['oldPassword'],PASSWORD_DEFAULT);
//        p($post);exit;
            if(!password_verify($_POST['oldPassword'],$user[0]['password'])){
                return $this->error('旧密码错误！');
            }
//    2.两次输入的密码是否一致
            if($_POST['newPassword']!=$_POST['confirmPassword']){
                return $this->error('两次密码不一致！');
            }
//    3.修改
            $data=['password' => password_hash($_POST['newPassword'],PASSWORD_DEFAULT)];
            UserModel::where('uid='.$_SESSION['user']['uid'])->update($data);
//    4.修改成功，跳转重新登录
            session_unset();
            session_destroy();
            return $this->setRedirect('?s=admin/login/index')->success('修改成功！');
        }
//        载入模版
        return View::make();
    }

}