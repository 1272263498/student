<?php
/**
 * Created by PhpStorm.
 * User: my
 * Date: 2017/7/31
 * Time: 22:59
 */
//Controller类所在的空间名
namespace houdunwang\core;


class Controller{
//   定义一个属性url默认值为window.history.back(),表示如果跳转地址没有传递默认跳转到上一级
	private $url = "window.history.back()";
//    定义一个template属性用来接收引入的提示模版路径
	private $template;
//    定义一个msg属性用来接收操作完成的提示信息
	private $msg;

	/**
	 * @param $url
	 * 跳转
	 * @return $this
	 */
//    创建一个setRedirect方法用来跳转到制定的页面，并将获得的跳转地址返回到/houdunwang/core中的boot类中的appRun方法触
//      发__tostring方法载入跳转页面完成跳转
	protected function setRedirect($url){
//        将跳转的地址接收并返回到appRun方法触发__toString方法载入跳转页面完成跳转
		$this->url="location.href='{$url}'";
//        返回当前对象
		return $this;
	}
	/**
	 * 成功的时候
	 * @param $msg
	 * @return $this
	 */
//    创建一个error方法完成一些操作错误或者失败的信息完成失败时的操作提示
	protected function success($msg){
//        将操作的提示信息接收并返回到当前对象，显示在要加载的提示页面
		$this->msg=$msg;
//        将提示要载入的提示页面地址赋值给template返回到当前对象，触发__tostring方法完成载入提示模版并显示提示信息
		$this->template="./view/success.php";
//        返回当前对象，触发__tostring方法
		return $this;
	}
	/**
	 * 失败的时候
	 * @return string
	 */
	protected function error($msg){
		$this->msg=$msg;
		$this->template='./view/error.php';
		return $this;

	}
//    创建一个
	public function __toString(){
//        触发__tostring方法时引入跳转页面，完成跳转，如果没有自动跳转就手动跳转到指定页面
		include $this->template;
//        因为__tostring方法返回的方式必须是字符串形式，所以要返回一个空字符串
		return " ";
	}
}