<?php
namespace app\admin\validate;
use think\Validate;

class Cate extends Validate{
	protected $rule = [
		'pid'      => 'require|number',
		'catename' => 'require|min:3|max:60|unique:cate',
		'title'    => 'require|min:3|max:60',
	];
	protected $message = [
		'pid.require'      => '请选择上级栏目',
		'pid.number'       => '上级栏目id错误',
		'catename.require' => '请填写栏目名称',
		'catename.min'     => '栏目名称过短',
		'catename.max'     => '栏目名称过长',
		'catename.unique'  => '栏目名称重复',
		'title.require'    => '请填写栏目标题',
		'title.min'        => '栏目标题过短',
		'title.min'        => '栏目标题过长',
	];
	//tp5.1验证场景，前面加上scene，自动匹配验证;remove为要删除的规则
	public function sceneAdd(){
		return $this->only(['pid','catename','title']);
	}
	public function sceneEdit(){
		return $this->only(['catename','title'])->remove('catename',['require','unique']);
	}
}