<?php
namespace app\admin\validate;
use think\Validate;

class Conf extends Validate{
	protected $rule = [
		'cnname' => 'require|max:60|unique:conf',
		'enname' => 'require|max:60|unique:conf',
		'dt_type' => 'require|number',
		'cf_type' => 'require|number',
	];
	protected $message = [
		'cnname.require' => '中文名称不能为空',
		'cnname.max' => '中文名称过长',
		'cnname.unique' => '中文名称重复',
		'enname.require' => '英文名称不能为空',
		'enname.max' => '英文名称过长',
		'enname.unique' => '英文名称重复',
		'dt_type.require' => '请选择配置类型',
		'dt_type.number' => '配置类型应为数字',
		'cf_type.require' => '请选择配置分类',
		'cf_type.number' => '配置分类应为数字',
 	];
 	public function sceneAdd(){
 		return $this->only(['cnname','enname','dt_type','cf_type']);
 	}
 	public function sceneEdit(){
 		return $this->only(['cnname','enname','dt_type','cf_type']);
 	}
}