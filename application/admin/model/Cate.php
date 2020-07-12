<?php
namespace app\admin\model;
use think\Model;

class Cate extends Model{
	public function catetree($cateRes){
		return $this->sort($cateRes);
	}
	public function sort($cateRes,$pid=0,$level=0){
		static $arr = array();
		foreach ($cateRes as $k => $v) {
			if($v['pid'] == $pid){
				$v['level'] = $level;
				$arr[] = $v;
				$this->sort($cateRes,$v['id'],$level+1);
			}
		}
		return $arr;
	}
	//获取子栏目id
	public function childid($cateid){
		$data = $this->field('id,pid')->select();
		return $this->_childid($data,$cateid);
	}
	private function _childid($data,$cateid){
		static $arr = array();
		foreach ($data as $k => $v) {
			if($v['pid'] == $cateid){
				$arr[] = $v['id'];
				$this->_childid($data,$v['id']);
			}
		}
		return $arr;
	}
	//批量获取子栏目id,并软删除栏目
	public function batchdel($cateid){
		foreach($cateid as $k => $v) {
			$childidarr[] = $this->childid($v);
			$childidarr[] = (int)$v;
		}
		$_childidarr = array();
		foreach ($childidarr as $k => $v) {
			if(is_array($v)){
				foreach ($v as $k1 => $v1) {
					$_childidarr[] = $v1;
				}
			}else{
				$_childidarr[] = $v;
			}
		}
		$_childidarr = array_unique($_childidarr);
		$this->destroy($_childidarr);
	}
	//批量获取子栏目id
	public function allchild($cateid){
		foreach($cateid as $k => $v) {
			$childidarr[] = $this->childid($v);
			$childidarr[] = (int)$v;
		}
		$_childidarr = array();
		foreach ($childidarr as $k => $v) {
			if(is_array($v)){
				foreach ($v as $k1 => $v1) {
					$_childidarr[] = $v1;
				}
			}else{
				$_childidarr[] = $v;
			}
		}
		$_childidarr = array_unique($_childidarr);
		return $_childidarr;
	}
}
