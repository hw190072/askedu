<?php /*a:3:{s:65:"D:\phpstudy\WWW\askedu\application\admin\view\tpl\alldata_add.htm";i:1593857848;s:57:"D:\phpstudy\WWW\askedu\application\admin\view\tpl\top.htm";i:1593337599;s:58:"D:\phpstudy\WWW\askedu\application\admin\view\tpl\left.htm";i:1593424734;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>添加客户</title>
    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-cate" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="/static/assets/css/bootstrap.css" rel="stylesheet">
    <link href="/static/assets/css/font-awesome.css" rel="stylesheet">
    <link href="/static/assets/css/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="/static/assets/css/beyond.css" rel="stylesheet" cate="text/css">
    <link href="/static/assets/css/demo.css" rel="stylesheet">
    <link href="/static/assets/css/typicons.css" rel="stylesheet">
    <link href="/static/assets/css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="/static/assets/layui/css/layui.css" media="all">
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
        <li <?php if($cont == 'Cate'): ?>class="open" <?php endif; ?>>
            <a href="<?php echo url('Cate/lst'); ?>" class="menu-dropdown">
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
                        <li>
                            <a href="<?php echo url('alldata/index'); ?>">客户管理</a>
                        </li>
                        <li class="active">添加客户</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">

                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <div class="widget">
                                <div class="widget-header bordered-bottom bordered-blue">
                                    <span class="widget-caption">添加客户</span>
                                </div>
                                <div class="widget-body">
                                    <div id="horizontal-form">
                                        <form class="form-horizontal layui-form" role="form" action="" method="post">
                                            <div class="form-group col-lg-12"></div>
                                            <div class="form-group col-lg-3">
                                                <img src="/static/assets/images/userpic.jpg" alt="" class="pull-right">
                                            </div>
                                            <div class="form-group col-lg-9">
                                                <div class="form-group col-lg-4">
                                                    <label for="username"
                                                        class="col-sm-5 control-label padding-left">姓名：</label>
                                                    <div class="col-sm-6">
                                                        <input class="form-control" id="name" placeholder="" name="name" lay-verify="required"
                                                            type="text" required>
                                                    </div>
                                                    <p class="col-sm-1 red">* </p>
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label for="group_id"
                                                        class="col-sm-5 control-label padding-left">性别：</label>
                                                    <div class=" col-sm-6">
                                                        <select class="form-control" name="gender" id="gender" lay-verify="required">
                                                            <option value="">请选择</option>
                                                            <option value="男">男</option>
                                                            <option value="女">女</option>
                                                            <option value="未知">未知</option>
                                                        </select>
                                                    </div>
                                                    <p class="col-sm-1 red">* </p>
                                                </div>
                                                <div class="form-group col-lg-4 pull-left">
                                                    <label for="group_id"
                                                        class="col-sm-3 control-label padding-left">年龄：</label>
                                                    <div class="col-sm-6">
                                                        <input class="form-control" id="age" placeholder="" name="age"
                                                            type="text" value="" />
                                                    </div>
                                                    <p class="col-sm-1 red">* </p>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="form-group col-lg-4">
                                                    <label for="group_id"
                                                        class="col-sm-5 control-label padding-left">身份证号：</label>
                                                    <div class="col-sm-6">
                                                        <input class="form-control" id="idcard" placeholder="" name="idcard" lay-verify="required|idcard"
                                                            type="text">
                                                    </div>
                                                    <p class="col-sm-1 red">* </p>
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label for="group_id"
                                                        class="col-sm-5 control-label padding-left">出生日期：</label>
                                                    <div class="col-sm-6">
                                                        <div class="input-group"><input type="text" class="form-control" placeholder="出生日期"
                                                                id="birth" name="birth">
                                                        </div>
                                                    </div>
                                                    <p class="col-sm-1 red">* </p>
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label for="group_id"
                                                        class="col-sm-3 control-label padding-right">民族：</label>
                                                    <div class="col-sm-6">
                                                        <select name="nation" id="nation">
                                                            <option value="" disabled selected style='display:none;'>请选择
                                                            </option>
                                                            <option value="汉族">汉族</option>
                                                            <option value="回族">回族</option>
                                                            <option value="朝鲜族">朝鲜族</option>
                                                        </select>
                                                    </div>
                                                    <p class="col-sm-1 red">* </p>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="form-group col-lg-4">
                                                    <label for="group_id"
                                                        class="col-sm-5 control-label padding-left">婚姻状况：</label>
                                                    <div class="col-sm-6">
                                                        <select name="marriage" id="marriage" lay-verify="required">
                                                            <option value="">请选择</option>
                                                            <option value="未婚">未婚</option>
                                                            <option value="已婚">已婚</option>
                                                            <option value="复婚">复婚</option>
                                                            <option value="再婚">再婚</option>
                                                            <option value="离异">离异</option>
                                                            <option value="丧偶">丧偶</option>
                                                        </select>
                                                    </div>
                                                    <p class="col-sm-1 red">* </p>
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label for="group_id"
                                                        class="col-sm-5 control-label padding-left">手机号码：</label>
                                                    <div class="col-sm-6">
                                                        <div class="input-group"><input type="text" class="form-control" placeholder="" lay-verify="required|phone"
                                                                name="phone">
                                                        </div>
                                                    </div>
                                                    <p class="col-sm-1 red">* </p>
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label for="group_id"
                                                        class="col-sm-3 control-label padding-left">职业：</label>
                                                    <div class="col-sm-6">
                                                        <select name="job" id="job">
                                                            <option value="" disabled selected style='display:none;'>请选择
                                                            </option>
                                                            <option value="自由职业">自由职业</option>
                                                            <option value="已婚">学生</option>
                                                            <option value="待业人员">待业人员</option>
                                                            <option value="在职">在职</option>
                                                            <option value="其他">其他</option>
                                                        </select>
                                                    </div>
                                                    <p class="col-sm-1 red">* </p>
                                                </div>
                                                <div class="form-group col-lg-8">
                                                    <label for="group_id"
                                                        class="col-sm-2 control-label padding-left">户口所在地：</label>
                                                    <div class="col-sm-9">
                                                        <div class="layui-form-item" id="area-picker">
                                                            <div class="col-sm-4" >
                                                                <select name="province" class="province-selector" data-value="" lay-verify="required" lay-filter="province-1">
                                                                    <option value="">请选择省</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-sm-4" >
                                                                <select name="city" class="city-selector" data-value="" lay-filter="city-1">
                                                                    <option value="">请选择市</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-sm-4" >
                                                                <select name="county" class="county-selector" data-value="" lay-filter="county-1">
                                                                    <option value="">请选择区</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="col-sm-1 red">* </p>
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label for="group_id"
                                                        class="col-sm-4 control-label padding-left">详细地址：</label>
                                                    <div class="col-sm-7">
                                                        <div class="input-group"><input type="text" class="form-control" placeholder=""
                                                                name="detailed">
                                                        </div>
                                                    </div>
                                                    <p class="col-sm-1 red">* </p>
                                                </div>
                                                
                                            </div>
                                            <div class="form-group col-lg-12 pull-right">
                                                <label for="group_id"
                                                    class="col-sm-12 text-center h4">其他信息</label></div>
                                            <div class="form-group col-lg-10 pull-right">
                                                <div class="form-group col-lg-4">
                                                    <label for="group_id"
                                                        class="col-sm-4 control-label padding-right">学历：</label>
                                                    <div class="col-sm-7">
                                                        <select name="education" id="education">
                                                            <option value="" disabled selected style='display:none;'>请选择
                                                            </option>
                                                            <option value="大专">大专</option>
                                                            <option value="本科">本科</option>
                                                            <option value="硕士">硕士</option>
                                                            <option value="博士">博士</option>
                                                            <option value="高中">高中</option>
                                                            <option value="其他">其他</option>
                                                        </select>
                                                    </div>
                                                    <p class="col-sm-1 red">* </p>
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label for="group_id"
                                                        class="col-sm-4 control-label padding-left">毕业院校：</label>
                                                    <div class="col-sm-7">
                                                        <div class="input-group"><input type="text" class="form-control" placeholder=""
                                                                id="school" name="school">
                                                        </div>
                                                    </div>
                                                    <p class="col-sm-1 red"></p>
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label for="group_id"
                                                        class="col-sm-4 control-label padding-left">现工作单位：</label>
                                                    <div class="col-sm-7">
                                                        <div class="input-group"><input type="text" class="form-control" placeholder=""
                                                                id="company" name="company">
                                                        </div>
                                                    </div>
                                                    <p class="col-sm-1 red"></p>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="form-group col-lg-4">
                                                    <label for="group_id"
                                                        class="col-sm-4 control-label padding-right">专业：</label>
                                                        <div class="col-sm-7">
                                                            <div class="input-group"><input type="text" class="form-control" placeholder=""
                                                                    id="major" name="major">
                                                            </div>
                                                        </div>
                                                    <p class="col-sm-1 red"></p>
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label for="group_id"
                                                        class="col-sm-4 control-label padding-right">现单位社保数：</label>
                                                        <div class="col-sm-7">
                                                            <div class="input-group"><input type="text" class="form-control" placeholder=""
                                                                    id="social" name="social">
                                                            </div>
                                                        </div>
                                                    <p class="col-sm-1 red">* </p>
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label for="group_id"
                                                        class="col-sm-4 control-label padding-right">通讯地址：</label>
                                                        <div class="col-sm-7">
                                                            <div class="input-group"><input type="text" class="form-control" placeholder=""
                                                                    id="address" name="address">
                                                            </div>
                                                        </div>
                                                    <p class="col-sm-1 red"></p>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="form-group col-lg-4">
                                                    <label for="group_id"
                                                        class="col-sm-4 control-label padding-right">小孩随迁数：</label>
                                                    <div class="col-sm-7">
                                                        <select name="child" id="child">
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                    <p class="col-sm-1 red"></p>
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label for="group_id"
                                                        class="col-sm-4 control-label padding-right">人保账号：</label>
                                                        <div class="col-sm-7">
                                                            <div class="input-group"><input type="text" class="form-control" placeholder=""
                                                                    id="social_acct" name="social_acct">
                                                            </div>
                                                        </div>
                                                    <p class="col-sm-1 red"> </p>
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label for="group_id"
                                                        class="col-sm-4 control-label padding-right">人保密码：</label>
                                                        <div class="col-sm-7">
                                                            <div class="input-group"><input type="text" class="form-control" placeholder=""
                                                                    id="social_pwd" name="social_pwd">
                                                            </div>
                                                        </div>
                                                    <p class="col-sm-1 red"></p>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="form-group col-lg-4">
                                                    <label for="group_id"
                                                        class="col-sm-4 control-label padding-right">E-mail：</label>
                                                        <div class="col-sm-7">
                                                            <div class="input-group"><input type="text" class="form-control" placeholder=""
                                                                    id="email" name="email">
                                                            </div>
                                                        </div>
                                                    <p class="col-sm-1 red"></p>
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label for="group_id"
                                                        class="col-sm-4 control-label padding-right">学信网账号：</label>
                                                        <div class="col-sm-7">
                                                            <div class="input-group"><input type="text" class="form-control" placeholder=""
                                                                    id="chsi_acct" name="chsi_acct">
                                                            </div>
                                                        </div>
                                                    <p class="col-sm-1 red"> </p>
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label for="group_id"
                                                        class="col-sm-4 control-label padding-right">学信网密码：</label>
                                                        <div class="col-sm-7">
                                                            <div class="input-group"><input type="text" class="form-control" placeholder=""
                                                                    id="chsi_pwd" name="chsi_pwd">
                                                            </div>
                                                        </div>
                                                    <p class="col-sm-1 red"></p>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-12 pull-right">
                                                <label for="group_id"
                                                    class="col-sm-12 text-center h4">订单信息</label></div>
                                            <div class="form-group col-lg-10 pull-right">
                                                <div class="form-group col-lg-8">
                                                    <div class="form-group col-lg-6">
                                                        <label for="group_id"
                                                            class="col-sm-4 control-label padding-right">总费用：</label>
                                                        <div class="col-sm-7">
                                                            <div class="input-group"><input type="text" class="form-control" placeholder="0"
                                                                    id="total" name="total">
                                                            </div>
                                                        </div>
                                                        <p class="col-sm-1 red">* </p>
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <label for="group_id"
                                                            class="col-sm-4 control-label padding-left">来源：</label>
                                                        <div class="col-sm-7">
                                                            <select name="source" id="source">
                                                                <option value="" disabled selected style='display:none;'>请选择
                                                                </option>
                                                                <option value="无">无</option>
                                                                <option value="百度">百度</option>
                                                                <option value="360">360</option>
                                                                <option value="搜狗">搜狗</option>
                                                                <option value="转介绍">转介绍</option>
                                                                <option value="神马">神马</option>
                                                                <option value="合作方">合作方</option>
                                                                <option value="其他">其他</option>
                                                            </select>
                                                        </div>
                                                        <p class="col-sm-1 red">*</p>
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <label for="group_id"
                                                            class="col-sm-4 control-label padding-right">已缴纳：</label>
                                                        <div class="col-sm-7">
                                                            <div class="input-group"><input type="text" class="form-control" placeholder="0"
                                                                    id="pay" name="pay">
                                                            </div>
                                                        </div>
                                                        <p class="col-sm-1 red">* </p>
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <label for="group_id"
                                                            class="col-sm-4 control-label padding-left">审核方式：</label>
                                                        <div class="col-sm-7">
                                                            <select name="audit" id="audit" lay-verify="required">
                                                                <option value="">请选择</option>
                                                                <option value="核准制">核准制</option>
                                                                <option value="积分制">积分制</option>
                                                                <option value="留学生">留学生</option>
                                                                <option value="应届生">应届生</option>
                                                            </select>
                                                        </div>
                                                        <p class="col-sm-1 red">*</p>
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <label for="group_id"
                                                            class="col-sm-4 control-label padding-right">未缴纳：</label>
                                                        <div class="col-sm-7">
                                                            <div class="input-group"><input type="text" class="form-control" placeholder="0"
                                                                    id="unpaid" name="unpaid">
                                                            </div>
                                                        </div>
                                                        <p class="col-sm-1 red">* </p>
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <label for="group_id"
                                                            class="col-sm-4 control-label padding-left">申报窗口：</label>
                                                        <div class="col-sm-7">
                                                            <select name="entrance" id="entrance" lay-verify="required">
                                                                <option value="">请选择</option>
                                                                <option value="待定">待定</option>
                                                                <option value="福田外服（窗口）">福田外服（窗口）</option>
                                                                <option value="福田八卦岭（窗口）">福田八卦岭（窗口）</option>
                                                                <option value="龙华分部（窗口）">龙华分部（窗口）</option>
                                                                <option value="龙岗分部（窗口）">龙岗分部（窗口）</option>
                                                                <option value="宝安分部（窗口）">宝安分部（窗口）</option>
                                                                <option value="南山分部（窗口）">南山分部（窗口）</option>
                                                                <option value="罗湖分部（窗口）">罗湖分部（窗口）</option>
                                                                <option value="光明分部（窗口）">光明分部（窗口）</option>
                                                                <option value="坪山分部（窗口）">坪山分部（窗口）</option>
                                                            </select>
                                                        </div>
                                                        <p class="col-sm-1 red">*</p>
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <label for="group_id"
                                                            class="col-sm-4 control-label padding-right">付款方式：</label>
                                                        <div class="col-sm-7">
                                                            <select name="payment" id="payment" lay-verify="required">
                                                                <option value="">请选择</option>
                                                                <option value="现金">现金</option>
                                                                <option value="收钱吧">收钱吧</option>
                                                                <option value="POS机">POS机</option>
                                                                <option value="支付宝">支付宝</option>
                                                                <option value="微信">微信</option>
                                                                <option value="银行转账">银行转账</option>
                                                                <option value="对公">对公</option>
                                                                <option value="刷卡">刷卡</option>
                                                                <option value="其他">其他</option>
                                                                <option value="校宝">校宝</option>
                                                            </select>
                                                        </div>
                                                        <p class="col-sm-1 red">* </p>
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <label for="group_id"
                                                            class="col-sm-4 control-label padding-left">申报方式：</label>
                                                        <div class="col-sm-7">
                                                            <select name="declare" id="declare" lay-verify="required">
                                                                <option value="">请选择</option>
                                                                <option value="个人申报">个人申报</option>
                                                                <option value="单位申报">单位申报</option>
                                                                <option value="未知">未知</option>
                                                            </select>
                                                        </div>
                                                        <p class="col-sm-1 red">*</p>
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <label for="group_id"
                                                            class="col-sm-4 control-label padding-right">迁入地：</label>
                                                        <div class="col-sm-7">
                                                            <select name="transfer" id="transfer" lay-verify="required">
                                                                <option value="">请选择</option>
                                                                <option value="窗口集体户">窗口集体户</option>
                                                                <option value="自己房产">自己房产</option>
                                                                <option value="亲友房产">亲友房产</option>
                                                                <option value="单位集体户">单位集体户</option>
                                                                <option value="我们提供">我们提供</option>
                                                                <option value="派出所">派出所</option>
                                                                <option value="未知">未知</option>
                                                            </select>
                                                        </div>
                                                        <p class="col-sm-1 red">* </p>
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <label for="group_id"
                                                            class="col-sm-4 control-label padding-left">工作进度：</label>
                                                        <div class="col-sm-7">
                                                            <div class="input-group"><input type="text" class="form-control" readonly="true"
                                                                    id="progress" name="progress" value="无">
                                                            </div>
                                                        </div>
                                                        <p class="col-sm-1 red"></p>
                                                    </div>

                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <textarea name="remark" id="remark"  class="form-group col-lg-10" rows="15"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-5 col-sm-5">
                                                    <button cate="submit" lay-submit="" class="btn btn-success">保存信息</button>
                                                </div>
                                            </div>
                                        </form>
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
    <script src="/static/assets/js/jquery_002.js" type="text/javascript"></script>

    <!--Basic Scripts-->
    <script src="/static/assets/js/bootstrap.js"></script>
    <script src="/static/assets/js/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="/static/assets/js/beyond.min.js"></script>
    <script src="/static/assets/js/beyond.js"></script>
    <script cate="text/javascript">
        //配置插件目录
        layui.config({
            base: '/static/assets/layui/lay/modules/'
            , version: '1.0'
        });
        layui.use(['layer','form','layarea','laydate'], function () {
            var form = layui.form
            ,layer = layui.layer
            ,layarea = layui.layarea
            ,laydate = layui.laydate;
            // 日期选择
            laydate.render({
                elem: '#birth'
            });
            layarea.render({
                elem: '#area-picker',
                data: {}
            });
            //自定义验证规则
            form.verify({
                idcard: [/(^\d{15}$)|(^\d{17}(x|X|\d)$)/, "请输入正确的身份证号"]
            });
            $("#idcard").change(function(){
                //设置身份证号生日联动
                $("#birth").val($("#idcard").val().substring(6,10)+"-"+$("#idcard").val().substring(10,12)+"-"+$("#idcard").val().substring(12,14));
                //设置年龄联动
                var idcard = $('#idcard').val();
                var myDate = new Date();
                var month = myDate.getMonth() + 1;
                var day = myDate.getDate();
                var age = myDate.getFullYear() - idcard.substring(6, 10) - 1;
                if (idcard.substring(10, 12) < month || idcard.substring(10, 12) == month && idcard.substring(12, 14) <= day) {
                    age++;
                }
                $('#age').val(age);
                //设置性别联动
                $("#gender").val((($("#idcard").val().substring(16,17))%2==0)?'女':'男');
                form.render('select');
             });
        });
    </script>
</body>

</html>