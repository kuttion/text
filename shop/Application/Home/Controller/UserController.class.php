<?php
 //前台用户控制器
 //父类controller
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller{
	//登陆功能
	public function Login(){
		// echo "i am login 登陆";	
		$this->display();
	}

	//注册功能
	public function register(){
		$this->display();
	}
}