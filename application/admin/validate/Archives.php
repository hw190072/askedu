<?php
namespace app\admin\validate;
use think\Validate;

class Archives extends Validate{
	protected $rule = [
		'cate_id'      => 'require|number',
		'title' => 'require|min:3|max:60|unique:archives',
	];
	protected $message = [
		'cate_id.require'      => '请选择栏目',
		'cate_id.number'       => '栏目错误',
		'title.require' => '请填写文章标题',
		'title.min'     => '文章标题过短',
		'title.max'     => '文章标题过长',
		'title.unique'  => '文章标题重复',
	];
	//tp5.1验证场景，前面加上scene，自动匹配验证;remove为要删除的规则
	public function sceneAdd(){
		return $this->only(['cate_id','title']);
	}
	public function sceneEdit(){
		return $this->only(['cate_id','title'])->remove('title',['require']);
	}
}