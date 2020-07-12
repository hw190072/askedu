<?php
namespace app\admin\controller;

use think\Controller;
use think\facade\Request;
use think\DB;

class Common extends Controller
{
    protected function initialize(){
        $request = Request::instance();
        $cont = $request->controller();
        $this->assign([
            'cont' => $cont
        ]);
    }
}