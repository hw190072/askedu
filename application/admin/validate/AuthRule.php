<?php
namespace app\admin\validate;
use think\Validate;

class AuthRule extends validate
{
	protected $rule=[
		'title'=>'require|unique:auth_rule',
		'name'=>'require',
		'pid'=>'require|number',
		'status'=>'require|number',
	];

	protected $message=[
		'title.require'=>'规则名称不得为空！',
		'title.unique'=>'规则名称不得重复！',
		'name.require'=>'规则值不得为空！',
		'name.unique'=>'规则值不得重复！',
		'pid.number'=>'上级规则值必须是数字！',
		'pid.require'=>'上级规则值不得为空！',
		'status.number'=>'规则状态值必须是数字！',
		'status.require'=>'规则状态值不得为空！',
	];

	public function sceneAdd(){
		return $this->only(['title','name','pid','status']);
	}
	public function sceneEdit(){
		return $this->only(['title','name','pid','status']);
	}

}