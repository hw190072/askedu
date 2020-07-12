<?php 
namespace app\admin\validate;
use think\Validate;

class Model extends Validate{
	protected $rule = [
		'model_name' => 'require|unique:model|max:25',
		'table_name' => 'require|unique:model|max:15|alphaDash',
	];
	protected $message = [
		'model_name.require' => '模型名称不能为空',
		'model_name.unique'  => '模型名称重复',
		'model_name.max'     => '模型名称不能过长',
		'table_name.require' => '表名称不能为空',
		'table_name.unique'  => '表名称重复',
		'table_name.max'     => '表名称不能过长',
		'table_name.alphaDash' => '表名称错误',
	];
	protected $scene = [
		'add'  => ['model_name','table_name'],
		'edit' => [
			'model_name' => 'unique:model|max:25',
			'table_name' => 'unique:model|max:15|alphaDash',
		],
	];
}