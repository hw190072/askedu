<?php
namespace app\admin\validate;
use think\Validate;

class AuthGroup extends validate
{
	protected $rule=[
		'title'=>'require|unique:auth_group',
		'status'=>'require|number',
	];

	protected $message=[
		'title.require'=>'用户组名称不得为空！',
		'title.unique'=>'用户组名称不得重复！',
		'status.number'=>'用户组状态值必须是数字！',
		'status.require'=>'用户组状态值不得为空！',
	];
	public function sceneAdd(){
		return $this->only(['title','status']);
	}
	public function sceneEdit(){
		return $this->only(['title','status']);
	}

}