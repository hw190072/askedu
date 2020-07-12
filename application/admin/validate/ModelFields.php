<?php 
namespace app\admin\validate;
use think\Validate;

class ModelFields extends Validate{
	protected $rule = [
		'field_enname' => 'require|unique:model_fields|max:25|alphaNum',
		'field_cnname' => 'require|unique:model_fields|max:25|chsAlphaNum',
		'field_type'   => 'require|max:10|number',
		'model_id'     => 'require|max:10|number',
	];
	protected $message = [
		'field_enname.require' => '字段英文名称不能为空', 
		'field_enname.unique'  => '字段名英文称重复',
		'field_enname.max'     => '字段英文名称过长',
		'field_enname.alphaNum'=> '字段英文名称只能为字母和数字',
		'field_cnname.require' => '字段中文名称不能为空',	
		'field_cnname.chsAlphaNum'     => '字段中文名只能为中文和数字、字母',  
		'field_cnname.unique'  => '字段中文名称重复',
		'field_cnname.max'     => '字段中文名称不能过长',
		'field_type.require'   => '请选择字段类型',
		'field_type.max'   	   => '字段类型过长',
		'field_type.number'    => '字段类型错误',
		'model_id.require'     => '请选择模型',
		'model_id.max'   	   => '模型过长',
		'model_id.number'      => '模型错误',
	];
	protected $scene = [
		'add'  => ['field_enname','field_cnname','field_type','model_id'],
		'edit' => [
			'field_enname' => 'unique:model_fields|max:25|alphaNum',
			'field_cnname' => 'unique:model_fields|max:25|chsAlphaNum',
			'field_type'   => 'max:10|number',
			'model_id'     => 'max:10|number',
		],
	];
}