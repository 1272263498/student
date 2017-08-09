<?php
/**
 * Created by PhpStorm.
 * User: my
 * Date: 2017/8/2
 * Time: 20:30
 */

namespace app\admin\controller;

use Gregwar\Captcha\PhraseBuilder;
use Gregwar\Captcha\CaptchaBuilder;
use houdunwang\core\Controller;
use houdunwang\view\View;
use system\model\User;

class Login extends Controller{
    /**
     * 后台登录页面
     */
    public function index(){
            if(IS_POST){
//                1.用户名不存在
                $post=$_POST;
//                p($post);exit;
                $data = User::where("username='{$_POST['username']}'")->get();//?
                if($data[0]['username']!=$_POST['username']){
                    return $this->error('用户名不存在');
                }
//                2.密码不一致
                if(!password_verify($_POST['password'],$data[0]['password'])){
                    return $this->error('输入密码错误');
                }
//                3.验证码不一致
                if($_SESSION['captcha']!= strtolower($_POST['captcha'])){
                        return $this->error('验证码错误！');
                }

//                4.七天免登陆
                if(isset($_POST['auto'])){
                    setcookie(session_name(),session_id(),time()+7*24*3600,'/');
                }else{
                    setcookie(session_name(),session_id(),0,'/');
                }
//                保存到session
                $_SESSION['user']=[
                  'uid'         =>  $data[0]['uid'],
                  'username'    =>  $data[0]['username']
                ];
                return $this->setRedirect('?s=admin/entry/index')->success('登陆成功！');
            }
//        载入模版
        return View::make();
    }
    /**
     * 验证码
     */
    public function captcha(){
//        发送声明内容类型为jpg
        header('Content-type:image/jpg');
//        把格式化加密的时间戳截取2位数
        $str=substr(md5(microtime(true)),0,3);
        $captcha=new CaptchaBuilder($str);
//        创建验证码
        $captcha->build();
//        输出验证码
        $captcha->output();
//        把生成的转小写的验证码保存到session里
        $_SESSION['captcha']=strtolower($captcha->getPhrase());
    }
    /**
     * 退出管理
     */
    public function out(){
        session_unset();
        session_destroy();
        return $this->setRedirect('?s=admin/login/index')->success('退出成功！');
    }
}