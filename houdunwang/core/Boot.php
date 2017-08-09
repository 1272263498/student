<?php
/**
 * Created by PhpStorm.
 * User: my
 * Date: 2017/7/31
 * Time: 21:13
 */
//boot类所在的空间名
namespace houdunwang\core;
//创建Boot类来完成框架的初始化和载入模版的操作
class Boot{
	//    创建一个run方法来完成框架的初始化和执行应用的操作
	public static function run(){
//        调用初始化方法完成框架初始化来开启session设置时区一些操作
		self::init();
//        调用appRun方法实现模版载入和调用应用类的操作
		self::appRun();
	}
	/**
	 * 初始化方法
	 */
//    创建一个框架的初始化方法init()，比如开启session和设置时区;
	public static function init(){
//        判断有没有session_id如果有表示已经开启了seesion，如果没有就开启session
		session_id() || session_start();
//        为防止页面时区异常，设置时区为中国时区；
		date_default_timezone_set('PRC');
//        定义用户是否通过POST方式提交信息，用三元表达式来判断；
		define('IS_POST',$_SERVER['REQUEST_METHOD'] == 'POST' ? true : false);
	}

	/**
	 * 框架应用方法
	 */
//    创建一个框架一个框架应用方法
	public static function appRun(){
//        三元表达式判断get参数s的值存不存在，如果不存在就默认为home/entry/index，也就是默认调用的为app目录
//        中的home中controller文件夹中的entry文件中的entry类中的index方法，载入主页面；
		$s=isset($_GET['s']) ? strtolower($_GET['s']) : "home/entry/index";
//        将$s转换为数组，方便组合自动调用方法时调用的对应空间的类名和调用对应的方法名
//        默认调用的类是app目录下的home也就是转换为数组后$arr[0]的参数，下的conrtoller下
//        的entry也就是数组$arr[1]文件的entry方法中的index方法方法名也就是$arr[2];
		$arr=explode('/',$s);
//        p($arr);exit;
//        Array
//        (
//            [0] => home
//            [1] => entry
//            [2] => index
//         )
//        1.把数组$arr的下标的元素定义为常量，因为常量不存在使用范围的限制；
//        2.在houdunwang/view/View.php文件里的View类的make方法组合模板路径，需要用的应用比如:home的名字
//        home是默认应用，有可能为admin后台应用，所以不能写死home
		define('APP',$arr[0]);
//        在houdunwang\View空间的base类组建模版引入路径时使用，默认的主页路径是../app/home/view/entry/index.php,相当于
//        是../app/$arr[0]/view/$arr[1]/$arr[2].php;所以将$arr【1】的值存到常量中；
		define('CONTROLLER',$arr[1]);
//        在houdunwang\View空间的base类组建模版引入路径时使用，默认的主页路径是../app/home/view/entry/index.php,相当于
//        是../app/$arr[0]/view/$arr[1]/$arr[2].php;所以将$arr【2】的值存到常量中；
		define('ACTION',$arr[2]);
//        组合调用的类的空间名和类名，因为类名字首字母为大写，因为调用的类名也就是$arr[1]所以要将$arr[1]的首字母改为大写
//        \app\home\controller\Entry
		$className="\app\\{$arr[0]}\controller\\".ucfirst($arr[1]);
//         自动调用控制器里的方法，默认为调用app\home\controller空间下的entry类中的index方法，因为输出对象时会
//         触发__tostring方法，所以要将返回的对象输出,从而触发__tostring方法完成载入应用模版和提示信息。
		echo call_user_func_array([new $className,$arr[2]],[]);
	}
}