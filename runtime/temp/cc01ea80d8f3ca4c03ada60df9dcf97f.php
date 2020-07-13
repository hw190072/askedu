<?php /*a:3:{s:61:"D:\phpstudy\WWW\askedu\application\admin\view\tpl\newdata.htm";i:1594621364;s:57:"D:\phpstudy\WWW\askedu\application\admin\view\tpl\top.htm";i:1593337599;s:58:"D:\phpstudy\WWW\askedu\application\admin\view\tpl\left.htm";i:1594634138;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>文档列表</title>
    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="/static/assets/css/bootstrap.css" rel="stylesheet">
    <link href="/static/assets/css/font-awesome.css" rel="stylesheet">
    <link href="/static/assets/css/weather-icons.css" rel="stylesheet">
    <!--Beyond styles-->
    <link id="beyond-link" href="/static/assets/css/beyond.css" rel="stylesheet" type="text/css">
    <link href="/static/assets/css/demo.css" rel="stylesheet">
    <link href="/static/assets/css/typicons.css" rel="stylesheet">
    <link href="/static/assets/css/animate.css" rel="stylesheet">
    <link href="/static/assets/css/dataTables.bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="/static/assets/layui/css/layui.css" media="all">
    <style type="text/css">
        .artcenter {
            display: table-cell;
            vertical-align: middle !important;
            text-align: center;
        }
        .select-style{
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <!-- 头部 -->
    	<!-- 头部 -->
	<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="<?php echo url('Index/index'); ?>" class="navbar-brand">
                    <small>
                        爱尚课教务管理
                    </small> 
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                                <a class=" dropdown-toggle" data-toggle="dropdown" title="Help" href="#">
                                    <i class="icon fa fa-warning"></i>
                                </a>
                                <!--Notification Dropdown-->
                                <ul class="pull-right dropdown-menu dropdown-arrow dropdown-notifications">
                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <div class="notification-icon">
                                                    <i class="fa fa-phone bg-themeprimary white"></i>
                                                </div>
                                                <div class="notification-body">
                                                    <span class="title">Skype meeting with Patty</span>
                                                    <span class="description">01:00 pm</span>
                                                </div>
                                                <div class="notification-extra">
                                                    <i class="fa fa-clock-o themeprimary"></i>
                                                    <span class="description">office</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <div class="notification-icon">
                                                    <i class="fa fa-check bg-darkorange white"></i>
                                                </div>
                                                <div class="notification-body">
                                                    <span class="title">Uncharted break</span>
                                                    <span class="description">03:30 pm - 05:15 pm</span>
                                                </div>
                                                <div class="notification-extra">
                                                    <i class="fa fa-clock-o darkorange"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <div class="notification-icon">
                                                    <i class="fa fa-gift bg-warning white"></i>
                                                </div>
                                                <div class="notification-body">
                                                    <span class="title">Kate birthday party</span>
                                                    <span class="description">08:30 pm</span>
                                                </div>
                                                <div class="notification-extra">
                                                    <i class="fa fa-calendar warning"></i>
                                                    <i class="fa fa-clock-o warning"></i>
                                                    <span class="description">at home</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <div class="notification-icon">
                                                    <i class="fa fa-glass bg-success white"></i>
                                                </div>
                                                <div class="notification-body">
                                                    <span class="title">Dinner with friends</span>
                                                    <span class="description">10:30 pm</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="dropdown-footer ">
                                     <iframe allowtransparency="true" frameborder="0" width="317" height="28" scrolling="no" src="//tianqi.eastday.com/plugin/widget_v1.html?sc=3&z=1&t=1&v=0&d=1&bd=0&k=&f=&q=1&a=1&c=54511&w=317&h=28&align=center"></iframe>
                                    </li>
                                </ul>
                                <!--/Notification Dropdown-->
                            </li>
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="/static/assets/images/admin.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><font style="color:red; font-weight:bold;"><?php echo htmlentities(app('request')->session('nickname')); ?>钉钉</font>，你好</h2>

                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('admin/logout'); ?>">
                                            退出登录
                                        </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('admin/editpwd',array('id'=>app('request')->session('id'))); ?>">
                                            修改密码
                                        </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>

	<!-- /头部 -->
    <!-- /头部 -->
    <div class="main-container container-fluid">
        <div class="page-container">
            <!-- Page Sidebar -->
            <!-- Page Sidebar -->
<div class="page-sidebar" id="sidebar">
    <!-- Sidebar Menu -->
    <ul class="nav sidebar-menu">
        <!--Dashboard-->
        <li>
            <a href="<?php echo url('index'); ?>" class="menu-dropdown">
                <i class="menu-icon typcn typcn-home"></i>
                <span class="menu-text">首页</span>
                <i class="menu-expand"></i>
            </a>
        </li>
        <li <?php if($cont == 'Alldata'): ?>class="open" <?php endif; ?>>
            <a href="<?php echo url('Alldata/index'); ?>" class="menu-dropdown">
                <i class="menu-icon fa fa-folder-o"></i>
                <span class="menu-text">文件管理</span>
                <i class="menu-expand"></i>
            </a>
        </li>
        <li <?php if($cont == 'Alldata'): ?>class="open" <?php endif; ?>>
            <a href="<?php echo url('Alldata/index'); ?>" class="menu-dropdown">
                <i class="menu-icon fa fa-bar-chart-o"></i>
                <span class="menu-text">全部数据</span>
                <i class="menu-expand"></i>
            </a>
        </li>
        <li <?php if($cont == 'Newdata'): ?>class="open" <?php endif; ?>>
            <a href="<?php echo url('Newdata/index'); ?>" class="menu-dropdown">
                <i class="menu-icon fa fa-check"></i>
                <span class="menu-text">领取数据</span>
                <i class="menu-expand"></i>
            </a>
        </li>
        <li <?php if($cont == 'Admin'): ?> class="open" <?php endif; ?>>
            <a href="<?php echo url('Admin/lst'); ?>" class="menu-dropdown">
                <i class="menu-icon fa fa-tags"></i>
                <span class="menu-text">核准制</span>
                <i class="menu-expand"></i>
            </a>
        </li>
        <li <?php if($cont == 'Admin'): ?> class="open" <?php endif; ?>>
            <a href="<?php echo url('Admin/lst'); ?>" class="menu-dropdown">
                <i class="menu-icon fa fa-book"></i>
                <span class="menu-text">积分制</span>
                <i class="menu-expand"></i>
            </a>
        </li>
        <li <?php if($cont == 'Admin'): ?> class="open" <?php endif; ?>>
            <a href="<?php echo url('Admin/lst'); ?>" class="menu-dropdown">
                <i class="menu-icon fa fa-briefcase"></i>
                <span class="menu-text">留学生</span>
                <i class="menu-expand"></i>
            </a>
        </li>
        <li <?php if($cont == 'Admin'): ?> class="open" <?php endif; ?>>
            <a href="<?php echo url('Admin/lst'); ?>" class="menu-dropdown">
                <i class="menu-icon fa fa-user-md"></i>
                <span class="menu-text">应届生</span>
                <i class="menu-expand"></i>
            </a>
        </li>
        <li <?php if($cont == 'Admin'): ?> class="open" <?php endif; ?>>
            <a href="<?php echo url('Admin/lst'); ?>" class="menu-dropdown">
                <i class="menu-icon fa fa-file-text"></i>
                <span class="menu-text">预约现场名单</span>
                <i class="menu-expand"></i>
            </a>
        </li>
        <li <?php if($cont == 'Admin'): ?> class="open" <?php endif; ?>>
            <a href="<?php echo url('Admin/lst'); ?>" class="menu-dropdown">
                <i class="menu-icon fa fa-check-square-o"></i>
                <span class="menu-text">学员录入</span>
                <i class="menu-expand"></i>
            </a>
        </li>
        <li <?php if($cont == 'Admin'): ?> class="open" <?php endif; ?>>
            <a href="<?php echo url('Admin/lst'); ?>" class="menu-dropdown">
                <i class="menu-icon fa fa-envelope-o"></i>
                <span class="menu-text">短信服务</span>
                <i class="menu-expand"></i>
            </a>
        </li>
        <li <?php if($cont == 'Admin'): ?> class="open" <?php endif; ?>>
            <a href="<?php echo url('Admin/lst'); ?>" class="menu-dropdown">
                <i class="menu-icon fa  fa-users"></i>
                <span class="menu-text">管理员</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('Admin/lst'); ?>">
                        <i class="menu-expand"></i>
                        <span class="menu-text">
                            用户列表
                        </span>

                    </a>
                </li>
                <li>
                    <a href="<?php echo url('AuthRule/lst'); ?>">
                        <span class="menu-text">
                            权限规则 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('AuthGroup/lst'); ?>">
                        <span class="menu-text">
                            配置权限 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li <?php if($cont == 'Conf'): ?> class="open" <?php endif; ?>>
            <a href="<?php echo url('conf/conflist'); ?>" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">系统管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('conf/conflist'); ?>">
                        <span class="menu-text">
                            网站配置
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('conf/lst'); ?>">
                        <span class="menu-text">
                            配置列表
                        </span>
                        <i class="menu-expand"></i>
                    </a>

                </li>
            </ul>

        </li>

    </ul>
    <!-- /Sidebar Menu -->
</div>
<!-- /Page Sidebar -->
            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <a href="<?php echo url('/admin'); ?>">系统</a>
                        </li>
                        <li class="active">客户管理</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <div class="widget">
                                <div class="widget-body">
                                    <div class="fixed-table-toolbar">
                                        <div class="bs-bars pull-left form-group col-lg-8">
                                            <form action="" method="POST" id="searchForm">
                                            <div id="toolbar" class="toolbar form-group col-lg-12">
                                                <div class="pull-left search"><input class="form-control" type="text" name="name"
                                                        placeholder="搜索关键词"></div>
                                                <div class="pull-left" style="margin-left:5px;"><a class="btn btn-default" type="button"
                                                      title="搜索" onclick="searchForm('index');"><i
                                                            class="glyphicon glyphicon-search"></i></a></div>
                                                <div class="form-group col-lg-8">
                                                    <a href="<?php echo url('alldata/add'); ?>" class="btn btn-success btn-add " title="添加"><i
                                                            class="fa fa-plus"></i> 添加</a>
                                                    <a href="javascript:;" class="btn btn-warning"
                                                        title="导出"><i class="fa fa-pencil"></i> 导出</a>
                                                    <!-- <form action="<?php echo url('alldata/uploadExcel'); ?>" enctype="multipart/form-data" method="post">
                                                    <input name="file" title="导入Excel" type="file">
                                                        <button  type="submit">提交</button>
                                                    </form> -->
                                                    <a href="javascript:;" class="btn btn-blue" id="uploadExcel"
                                                        title="导入Excel"><i class="fa fa-pencil"></i> 上传Excel</a>
                                                    <a onclick="listSubmit('batchdel');" class="btn btn-danger btn-del btn-disabled"
                                                        title="删除"><i class="fa fa-trash"></i> 删除</a> 
                                                </div> 
                                                <div class="form-group form-option">
                                                    <select class="pull-left select-style" style="width:15%;" name="audit">
                                                        <option value='' disabled selected style='display:none;'>审核方式</option>
                                                        <option value="核准" >核准制</option>
                                                        <option value="积分" >积分制</option>
                                                        <option value="留学生" >留学生</option>
                                                        <option value="应届生" >应届生</option>
                                                    </select>
                                                    <select class="pull-left select-style" style="width:15%;" name="progress">
                                                        <option value='' disabled selected style='display:none;'>工作进度</option>
                                                        <option value="待录" >待录</option>
                                                        <option value="核对资料" >核对资料</option>
                                                        <option value="已体检" >已体检</option>
                                                        <option value="一审" >一审</option>
                                                        <option value="审核通过" >审核通过</option>
                                                        <option value="办理准迁证" >办理准迁证</option>
                                                        <option value="办理迁移证" >办理迁移证</option>
                                                        <option value="办理身份证" >办理身份证</option>
                                                        <option value="已办理完结" >已办理完结</option>
                                                        <option value="办理准迁证" >待录客户</option>
                                                        <option value="办理迁移证" >资格认证</option>
                                                        <option value="办理身份证" >审批通过</option>
                                                        <option value="已办理完结" >改派报到证中</option>
                                                        <option value="办理身份证" >网上报道</option>
                                                        <option value="已办理完结" >办理完结</option>
                                                        <option value="已办理完结" >退费</option>
                                                    </select>
                                                    <select class="pull-left select-style" style="width:15%;" name="declare">
                                                        <option value='' disabled selected style='display:none;'>申报方式</option>
                                                        <option value="单位申报" >单位申报</option>
                                                        <option value="个人申报" >个人申报</option>
                                                        <option value="未知" >未知</option>
                                                    </select>
                                                    <select class="pull-left select-style" style="width:15%;" name="entrance">
                                                        <option value='' disabled selected style='display:none;'>申报窗口</option>
                                                        <option value="待定" >待定</option>
                                                        <option value="福田外服（窗口）" >福田外服（窗口）</option>
                                                        <option value="福田八卦岭（窗口）" >福田八卦岭（窗口）</option>
                                                        <option value="龙华分部（窗口）" >龙华分部（窗口）</option>
                                                        <option value="龙岗分部（窗口）" >龙岗分部（窗口）</option>
                                                        <option value="宝安分部（窗口）" >宝安分部（窗口）</option>
                                                        <option value="南山分部（窗口）" >南山分部（窗口）</option>
                                                        <option value="罗湖分部（窗口）" >罗湖分部（窗口）</option>
                                                        <option value="光明分部（窗口）" >光明分部（窗口）</option>
                                                        <option value="坪山分部（窗口）" >坪山分部（窗口）</option>
                                                    </select>
                                                    <div class="col-lg-3">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-calendar"></i>
                                                            </span><input type="text" class="form-control" placeholder="日期范围" name="update_time"
                                                                id="update_time" autocomplete="off">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                    <form action="" method="post" id="listForm" >
                                    <div class="flip-scroll" style="margin-top: 10px;">
                                        <table class="table table-bordered table-hover">
                                            <thead class="">
                                                <tr>
                                                    <th class="text-center">
                                                        <label>
                                                            <input type="checkbox" id="checkall" class="itembox">
                                                            <span class="text"></span>
                                                        </label>
                                                    </th>
                                                    <th class="text-center">姓名</th>
                                                    <th class="text-center">手机号码</th>
                                                    <th class="text-center">证件号码</th>
                                                    <th class="text-center">申报方式</th>
                                                    <th class="text-center">审核方式</th>
                                                    <th class="text-center">工作进度</th>
                                                    <th class="text-center">申报窗口</th>
                                                    <th class="text-center">归属用户</th>
                                                    <th class="text-center">创建人</th>
                                                    <th class="text-center">操作时间</th>
                                                    <th class="text-center">创建时间</th>
                                                    <th class="text-center">操作</th>
                                                </tr>
                                            </thead>
                                            <tbody class="searchall">
                                                <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                                <tr>
                                                    <td align="center" class="artcenter">
                                                        <label>
                                                            <input name="itmbox[]" type="checkbox" value="<?php echo htmlentities($vo['id']); ?>" class="itembox">
                                                            <span class="text"></span>
                                                        </label>
                                                    </td>
                                                    <td align="center" class="artcenter"><?php echo htmlentities($vo['name']); ?></td>
                                                    <td align="center" class="artcenter"><?php echo htmlentities($vo['phone']); ?></td>
                                                    <td align="center" class="artcenter"><?php echo htmlentities($vo['idcard']); ?></td>
                                                    <td align="center" class="artcenter"><?php echo htmlentities($vo['declare']); ?></td>
                                                    <td align="center" class="artcenter"><?php echo htmlentities($vo['audit']); ?></td>
                                                    <td align="center" class="artcenter"><?php echo htmlentities($vo['progress']); ?></td>
                                                    <td align="center" class="artcenter"><?php echo htmlentities($vo['entrance']); ?></td>
                                                    <td align="center" class="artcenter"><?php echo htmlentities($vo['belong']); ?></td>
                                                    <td align="center" class="artcenter"><?php echo htmlentities($vo['founder']); ?></td>
                                                    <td align="center" class="artcenter"><?php echo htmlentities(date("Y-m-d H:i:s",!is_numeric($vo['update_time'])? strtotime($vo['update_time']) : $vo['update_time'])); ?></td>
                                                    <td align="center" class="artcenter"><?php echo htmlentities(date("Y-m-d H:i:s",!is_numeric($vo['create_time'])? strtotime($vo['create_time']) : $vo['create_time'])); ?></td>
                                                    <td align="center" class="artcenter">
                                                        <a href="<?php echo url('alldata/look',['id'=>$vo['id']]); ?>" class="btn btn-xs btn-success btn-editone"
                                                            data-toggle="tooltip" title="" data-table-id="table"
                                                            data-field-index="11" data-row-index="0"
                                                            data-button-index="1" data-original-title="查看"><i
                                                                class="fa fa-eye"></i></a>
                                                        <a href="<?php echo url('alldata/edit',['id' => $vo['id']]); ?>" class="btn btn-xs btn-danger btn-editone"
                                                        data-toggle="tooltip" title="" data-table-id="table"
                                                        data-field-index="11" data-row-index="0"
                                                        data-button-index="1" data-original-title="编辑"><i
                                                            class="fa fa-pencil"></i></a>
                                                    </td>
                                                </tr>
                                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    </form>
                                    <div class="row DTTTFooter">
                                        <div class="col-sm-6">
                                            <div class="dataTables_info" id="simpledatatable_info" role="alert"
                                                aria-live="polite" aria-relevant="all">显示第 0 到第 10 页的记录，总共 <?php echo htmlentities($list->total()); ?> 条记录，每页显示
                                                10 条记录
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="dataTables_paginate paging_bootstrap"
                                                id="simpledatatable_paginate">
                                                <ul class="pagination">
                                                    <?php echo $list; ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Body -->
                </div>
                <!-- /Page Content -->
            </div>
        </div>
        <!--layui2.5.6 Scripts-->
        <script src="/static/assets/layui/layui.js" charset="utf-8"></script>

        <!--Basic Scripts-->
        <script src="/static/assets/js/jquery_002.js"  type="text/javascript"></script>
        <script src="/static/assets/js/bootstrap.js"></script>
        <script src="/static/assets/js/jquery.js"></script>
        <!--Beyond Scripts-->
        <script src="/static/assets/js/beyond.min.js"></script>
        <!--Beyond Scripts-->
        <script src="/static/assets/js/beyond.js"></script>

        <script>
            layui.use(['form','jquery','layer','laydate','upload'], function () {
                var laydate = layui.laydate
                    ,form = layui.form
                    ,$ = layui.jquery
                    ,layer = layui.layer
                    ,upload = layui.upload; //得到 upload 对象
                // 日期范围
                laydate.render({
                    elem: '#update_time'
                    , range: true
                }); 
                //指定允许上传的文件类型
                upload.render({
                    elem: '#uploadExcel'
                    ,url: "<?php echo url('alldata/uploadExcel'); ?>" //此处为所上传的请求路径
                    ,accept: 'file' //普通文件
                    ,exts: 'xls|excel|xlsx' //只允许上传压缩文件
                    ,done: function(res){
                        if(res.code===1){
                            layer.open({
                                title:"信息"
                                ,icon:6
                                ,content:res.msg
                                ,time: 5000
                                ,yes: function(index, layero){
                                    self.location="<?php echo url('alldata/index'); ?>";//跳到指定页面
                                },cancel: function(index,layero){ //按右上角“X”按钮
                                    self.location="<?php echo url('alldata/index'); ?>";//跳到指定页面
                                },
                            });
                        }else{
                            layer.msg('解析失败',{icon:5});
                        }
                    }
                });
            });

            function searchForm(a)
            {
                var searchForm = $('#searchForm');
                var action = searchForm.attr('action');
                if($("input[name='name']:text").length == 0){
                    alert('请输入要搜索的信息!');
                    return false;
                }else{
                    //批量删除
                    if (a == 'index')
                    {
                        searchForm.attr('action',action+''+a);
                        searchForm.submit();
                    }
                }
            }
            //全选
            $(function(){
                $("#checkall").click(function(){
                    $(".searchall input[name='itmbox[]']").prop("checked",this.checked);
                });     
            });
            function listSubmit(a)
            {
                var listForm = $('#listForm');
                var action = listForm.attr('action');
                if($("input[name='itmbox[]']:checked").length == 0){
                    alert('没有选中的信息!');
                    return false;
                }else{
                    //批量删除
                    if (a == 'batchdel')
                    {
                        listForm.attr('action',action+''+a);
                        if (confirm("删除是不可恢复的，你确认要删除吗？"))
                        {
                            listForm.submit();
                        }
                        else
                        {
                            return false;
                        }
                    }
                }
            }
        </script>

</body>

</html>