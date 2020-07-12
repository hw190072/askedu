<?php
namespace app\admin\model;
use think\Model;
class Alldata extends Model
{
 public function getalldata($data){
     $this->select();
 }
}
