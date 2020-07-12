<?php
namespace app\admin\validate;
use think\Validate;

class Links extends Validate{
	protected $rule = [
		'title' => 'require|max:60|unique:links',
		'url' => 'require|max:60|url|unique:links',
	];
	protected $message = [
		'title.require' => '标题不能为空',
		'title.max' => '标题过长',
		'title.unique' => '标题重复',
		'url.require' => 'url不能为空',
		'url.max' => 'url过长',
		'url.unique' => 'url重复',
		'url.url' => '不是正确的url',
 	];
 	protected $scene = [
 		'add'  => ['title','url'],
 		'edit' =>[
 			'title'=>'max:60|unique:links',
 			'url'=>'max:60|url|unique:links',
 		],
 	];
}