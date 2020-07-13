<?php
namespace app\admin\controller;

use vendor\phpoffice\phpexcel\Classes\PHPExcel;
use think\facade\Env;

class Newdata extends Common
{
    public function index()
    {
        // $belong = array('exp','is null');
        $list = db('alldata')->where('belong','is null')->paginate(15);
        if (Request()->isPost()) {
            $data = input('post.');
            $table = 'alldata';
            $field = ['id', 'name', 'phone', 'idcard', 'declare', 'audit', 'progress', 'entrance', 'belong', 'founder', 'update_time', 'create_time'];
            if (!isset($data['name'])) {
                $data['name'] = '';
            }
            if (!isset($data['audit'])) {
                $data['audit'] = '';
            }
            if (!isset($data['progress'])) {
                $data['progress'] = '';
             }
            if (!isset($data['declare'])) {
                $data['declare'] = '';
            }
            if (!isset($data['entrance'])) {
                $data['entrance'] = '';
            }
            if ($data['update_time']) {
                //分割日期，转换并设置开始和结束日期
                $arrtime = explode(' - ', $data['update_time']);
                $starttime = strtotime($arrtime[0]);
                $endtime = strtotime($arrtime[1]);
            } else {
                // 转换并设置开始和结束日期
                $starttime = strtotime('1970-01-01');
                $endtime = strtotime('2100-01-01');
            }
            $map = [
                ['name', 'like', '%' . $data['name'] . '%'],
                ['audit', 'like', '%' . $data['audit'] . '%'],
                ['progress', 'like', '%' . $data['progress'] . '%'],
                ['declare', 'like', '%' . $data['declare'] . '%'],
                ['entrance', 'like', '%' . $data['entrance'] . '%'],
                ['update_time', 'between time', [$starttime, $endtime]],
            ];
            $list = db($table)->field($field)->where($map)->paginate(15);
        }
        $this->assign([
            'list' => $list,
        ]);
        return view('tpl/newdata');
    }
    //添加客户
    public function add()
    {
        if (Request()->isPost()) {
            $data = input('post.');
            $data['create_time'] = time();
            $data['update_time'] = time();
            $res = db('alldata')->insert($data);
            if ($res) {
                $this->success('添加客户成功！', 'index');
            } else {
                $this->error('添加客户失败！');
            }
        }
        return view('tpl/alldata_add');
    }
    //修改客户
    public function edit(){
        $id=input('id');
        $alldataRes = db('alldata')->find($id);
        if(request()->isPost()){
            $data = input('post.');
            $data['update_time'] = time();
            $save = db('alldata')->update($data);
            if($save !== false){
                $this->success('修改成功！','index');
            }else{
                $this->error('修改失败！');
            }
        }
        $this->assign([
            'alldataRes' => $alldataRes,
        ]);
       return $this->fetch('tpl/alldata_edit');
    }
    public function look(){
        $id = input('id');
        $alldataRes = db('alldata')->find($id);
        $this->assign([
            'alldataRes' => $alldataRes
        ]);
        return view('tpl/alldata_look');
    }
    //批量删除
    public function batchdel()
    {
        if(Request()->isPost()) {
            $data = input('post.');
            if (empty($data['itmbox'])) {
                $this->error('请选择要删除的客户！');
            } else {
                $data['id'] = $data['itmbox'];
                $res = db('alldata')->delete($data['id']);
                if ($res) {
                    $this->success('删除成功！', 'index');
                } else {
                    $this->error('删除失败！');
                }
            }
        }
    }
    /**
     * 进行excel文件的上传读取操作
     * @param Request $request
     */
    public function uploadExcel(){
        if(request() -> isPost())
        {
            // require("PHPExcel.PHPExcel"); //方法一
            // Loader::import('PHPExcel.PHPExcel');
            $objPHPExcel =new \PHPExcel();
            //获取表单上传文件
            $file = request()->file('file');
             //上传验证后缀名,以及上传之后移动的地址 
            $info = $file->validate(['ext' => 'xlsx,xls'])->move(Env::get('root_path')."public".DIRECTORY_SEPARATOR."uploads".DIRECTORY_SEPARATOR."excel"); 
            if($info)
            {
                //获取文件名
                $exclePath = $info->getSaveName();
                $file_name = Env::get('root_path') . 'public' . DIRECTORY_SEPARATOR ."uploads". DIRECTORY_SEPARATOR."excel" . DIRECTORY_SEPARATOR . $exclePath;//上传文件的地址
                $file_types = explode ( ".", $_FILES ['file'] ['name'] );
                $file_type = $file_types [count ( $file_types ) - 1];
                if($file_type=='xls'){
                    $objReader =\PHPExcel_IOFactory::createReader("Excel5");
                }else if($file_type=='xlsx'){
                    $objReader =\PHPExcel_IOFactory::createReader("Excel2007");
                }
                $obj_PHPExcel =$objReader->load($file_name, $encode = 'utf-8');  //加载文件内容,编码utf-8
                $excel_array=$obj_PHPExcel->getSheet(0)->toArray();   //转换为数组格式
                array_shift($excel_array);  //删除第一个数组(标题);
                $data = [];
                $i=0;
                foreach($excel_array as $k=>$v) {
                    if(empty(array_filter($v))){
                        continue;
                    }
                    (string) $v[7];
                    $data[$k]['name'] = $v[0];
                    $data[$k]['idcard'] = $v[1];
                    $data[$k]['phone'] = $v[2] ;
                    $data[$k]['social_acct'] = $v[3];
                    $data[$k]['social_pwd'] = $v[4];
                    $data[$k]['chsi_acct'] = $v[5];
                    $data[$k]['chsi_pwd'] = $v[6];
                    $data[$k]['entrance'] = $v[7];
                    $data[$k]['declare'] = $v[8];
                    $data[$k]['audit'] = $v[9];
                    $data[$k]['progress'] = $v[10];
                    $data[$k]['belong'] = $v[11];
                    $data[$k]['remark'] = $v[12];
                    $data[$k]['update_time'] = time();
                    $data[$k]['create_time'] = time();
                    if($v[7] == ''){
                        $data[$k]['entrance'] = "待定";
                    }
                    $i++;
                }
                $res = Db("alldata")->insertAll($data);
                if($res){
                    $msg=[
                        'code'=>1,
                        'msg'=>'上传信息成功',
                    ];
                    return json_encode($msg);
                }else{
                    $msg=[
                        'code'=>0,
                        'msg'=>'上传信息失败',
                    ];
                    return json_encode($msg);
                }
            }else{
                echo $file->getError();
            }
        }
        return $this->fetch('tpl/alldata');
    }
}
