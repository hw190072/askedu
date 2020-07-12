<?php
namespace app\admin\validate;
use think\Validate;

class Admin extends Validate
{
	protected $rule=[
		'username' => 'require|max:30|unique:admin',
		'nickname' => 'require|max:10|unique:admin',
		'email'    => 'require|email|unique:admin',
		'password' => 'require|length:6,16|alphaNum',
		'group_id' => 'require',
	];

	protected $message=[
		'username.require' => '账户名称必须填写',
		'username.max'     => '账户名称不能大于30',
		'username.unique'  => '账户已经注册',
		'nickname.require' => '昵称必须填写',
		'nickname.max'     => '昵称不能大于过长',
		'nickname.unique'  => '昵称重复',
		'email.require'    => '邮箱必须填写',
		'email.email'      => '不是正确的邮箱格式',
		'email.unique'     => '邮箱已经存在',
		'password.require' => '密码必须填写',
		'password.length'  => '密码必须大于6位而且小于16位',
		'password.alphaNum'=> '密码由字母和数字组成',
		'group_id'         =>  '请选择用户组',
	];

	public function sceneAdd(){
		return $this->only(['username','nickname','email','password','group_id']);
	}
	public function sceneEdit(){
		return $this->only(['nickname','email','group_id']);
	}
	public function sceneEditpwd(){
		return $this->only(['password']);
	}
}