<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:81:"E:\phpStudy\WWW\1511phpM\myshop\public/../application/admin\view\good\update.html";i:1526612504;s:71:"E:\phpStudy\WWW\1511phpM\myshop\application\admin\view\public\base.html";i:1526610685;}*/ ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>后台管理</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- basic styles -->
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="/assets/css/font-awesome.min.css" />

        <!--[if IE 7]>
          <link rel="stylesheet" href="/assets/css/font-awesome-ie7.min.css" />
        <![endif]-->

        <!-- page specific plugin styles -->

        <!-- fonts -->
        <!-- ace styles -->

        <link rel="stylesheet" href="/assets/css/ace.min.css" />
        <link rel="stylesheet" href="/assets/css/ace-rtl.min.css" />
        <link rel="stylesheet" href="/assets/css/ace-skins.min.css" />

        <!--[if lte IE 8]>
          <link rel="stylesheet" href="/assets/css/ace-ie.min.css" />
        <![endif]-->

        <!-- inline styles related to this page -->

        <!-- ace settings handler -->

        <script src="/assets/js/ace-extra.min.js"></script>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

        <!--[if lt IE 9]>
        <script src="/assets/js/html5shiv.js"></script>
        <script src="/assets/js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <div class="navbar navbar-default" id="navbar">
            <script type="text/javascript">
                try {
                    ace.settings.check('navbar', 'fixed')
                } catch (e) {
                }
            </script>

            <div class="navbar-container" id="navbar-container">
                <div class="navbar-header pull-left">
                    <a href="/#" class="navbar-brand">
                        <small>
                            <i class="icon-leaf"></i>
                            后台管理
                        </small>
                    </a><!-- /.brand -->
                </div><!-- /.navbar-header -->

                <div class="navbar-header pull-right" role="navigation">
                    <ul class="nav ace-nav">


                        <li class="light-blue">
                            <a data-toggle="dropdown" href="/#" class="dropdown-toggle">
                                <img class="nav-user-photo" src="/assets/avatars/user.jpg" alt="Jason's Photo" />
                                <span class="user-info">
                                    <small>欢迎光临,</small>
                                    ADMIN
                                </span>

                                <i class="icon-caret-down"></i>
                            </a>

                            <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                                <li>
                                    <a href="/#">
                                        <i class="icon-cog"></i>
                                        设置
                                    </a>
                                </li>

                                <li>
                                    <a href="/#">
                                        <i class="icon-user"></i>
                                        个人资料
                                    </a>
                                </li>

                                <li class="divider"></li>

                                <li>
                                    <a href="/#">
                                        <i class="icon-off"></i>
                                        退出
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul><!-- /.ace-nav -->
                </div><!-- /.navbar-header -->
            </div><!-- /.container -->
        </div>

        <div class="main-container" id="main-container">
            <script type="text/javascript">
                try {
                    ace.settings.check('main-container', 'fixed')
                } catch (e) {
                }
            </script>

            <div class="main-container-inner">
                <a class="menu-toggler" id="menu-toggler" href="/#">
                    <span class="menu-text"></span>
                </a>

                <div class="sidebar" id="sidebar">
                    <script type="text/javascript">
                        try {
                            ace.settings.check('sidebar', 'fixed')
                        } catch (e) {
                        }
                    </script>

                    <div class="sidebar-shortcuts" id="sidebar-shortcuts">

                        <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                            <span class="btn btn-success"></span>

                            <span class="btn btn-info"></span>

                            <span class="btn btn-warning"></span>

                            <span class="btn btn-danger"></span>
                        </div>
                    </div><!-- #sidebar-shortcuts -->

                    <ul class="nav nav-list">
                        <li class="active">
                            <a href="/index.html">
                                <i class="icon-dashboard"></i>
                                <span class="menu-text"> 后台控制台 </span>
                            </a>
                        </li>

                        <li>
                            <a href="/#" class="dropdown-toggle">
                                <i class="icon-desktop"></i>
                                <span class="menu-text"> 房源管理 </span>

                                <b class="arrow icon-angle-down"></b>
                            </a>

                            <ul class="submenu">
                                <li>
                                    <a href="/release.html">
                                        <i class="icon-double-angle-right"></i>
                                        发布房源
                                    </a>
                                </li>

                                <li>
                                    <a href="/record.html">
                                        <i class="icon-double-angle-right"></i>
                                        发布记录
                                    </a>
                                </li>

                                <li>
                                    <a href="/refresh.html">
                                        <i class="icon-double-angle-right"></i>
                                        刷新记录
                                    </a>
                                </li>

                                <li>
                                    <a href="/copy.html">
                                        <i class="icon-double-angle-right"></i>
                                        复制房源
                                    </a>
                                </li>

                                <li>
                                    <a href="/#" class="dropdown-toggle">
                                        <i class="icon-double-angle-right"></i>

                                        账号设置
                                        <b class="arrow icon-angle-down"></b>
                                    </a>

                                    <ul class="submenu">
                                        <li>
                                            <a href="/account.html">
                                                <i class="icon-leaf"></i>
                                                账号记录
                                            </a>
                                        </li>

                                        <li>
                                            <a href="/addaccount.html">
                                                <i class="icon-leaf"></i>
                                                添加账号
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="/#" class="dropdown-toggle">
                                <i class="icon-list"></i>
                                <span class="menu-text">商品管理</span>

                                <b class="arrow icon-angle-down"></b>
                            </a>

                            <ul class="submenu">
                                <li>
                                    <a href="<?php echo url('good/index'); ?>">
                                        <i class="icon-double-angle-right"></i>
                                        商品添加
                                    </a>
                                </li>

                                <li>
                                    <a href="<?php echo url('good/show'); ?>">
                                        <i class="icon-double-angle-right"></i>
                                        商品列表
                                    </a>
                                </li>

                            </ul>
                        <li>
                            <a href="/#" class="dropdown-toggle">
                                <i class="icon-list"></i>
                                <span class="menu-text">品牌管理</span>

                                <b class="arrow icon-angle-down"></b>
                            </a>

                            <ul class="submenu">
                                <li>
                                    <a href="<?php echo url('brand/index'); ?>">
                                        <i class="icon-double-angle-right"></i>
                                        品牌添加
                                    </a>
                                </li>

                                <li>
                                    <a href="<?php echo url('brand/show'); ?>">
                                        <i class="icon-double-angle-right"></i>
                                        品牌列表
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li>
                            <a href="/#" class="dropdown-toggle">
                                <i class="icon-list"></i>
                                <span class="menu-text">分类管理</span>

                                <b class="arrow icon-angle-down"></b>
                            </a>

                            <ul class="submenu">
                                <li>
                                    <a href="<?php echo url('cate/index'); ?>">
                                        <i class="icon-double-angle-right"></i>
                                        分类添加
                                    </a>
                                </li>

                                <li>
                                    <a href="<?php echo url('cate/show'); ?>">
                                        <i class="icon-double-angle-right"></i>
                                        分类列表
                                    </a>
                                </li>

                            </ul>
                             <li>
                            <a href="/#" class="dropdown-toggle">
                                <i class="icon-list"></i>
                                <span class="menu-text">属性管理</span>

                                <b class="arrow icon-angle-down"></b>
                            </a>

                            <ul class="submenu">
                                <li>
                                    <a href="<?php echo url('attr/index'); ?>">
                                        <i class="icon-double-angle-right"></i>
                                        属性添加
                                    </a>
                                </li>

                                <li>
                                    <a href="<?php echo url('attr/show'); ?>">
                                        <i class="icon-double-angle-right"></i>
                                        属性列表
                                    </a>
                                </li>

                            </ul>
                             <li>
                            <a href="/#" class="dropdown-toggle">
                                <i class="icon-list"></i>
                                <span class="menu-text">类型管理</span>

                                <b class="arrow icon-angle-down"></b>
                            </a>

                            <ul class="submenu">
                                <li>
                                    <a href="<?php echo url('gtype/index'); ?>">
                                        <i class="icon-double-angle-right"></i>
                                        类型添加
                                    </a>
                                </li>

                                <li>
                                    <a href="<?php echo url('gtype/show'); ?>">
                                        <i class="icon-double-angle-right"></i>
                                        类型列表
                                    </a>
                                </li>

                            </ul>

                        <li>
                            <a href="/#" class="dropdown-toggle">
                                <i class="icon-edit"></i>
                                <span class="menu-text"> 用户权限管理 </span>

                                <b class="arrow icon-angle-down"></b>
                            </a>

                            <ul class="submenu">
                                <li>
                                    <a href="<?= url('user/index')?>">
                                        <i class="icon-double-angle-right"></i>
                                        用户管理
                                    </a>
                                </li>

                                <li>
                                    <a href="<?= url('role/index')?>">
                                        <i class="icon-double-angle-right"></i>
                                        角色管理
                                    </a>
                                </li>

                                <li>
                                    <a href="<?php echo url('node/index'); ?>">
                                        <i class="icon-double-angle-right"></i>
                                        权限管理
                                    </a>
                                </li>

                            </ul>
                        </li>

                    </ul><!-- /.nav-list -->

                    <div class="sidebar-collapse" id="sidebar-collapse">
                        <i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
                    </div>

                    <script type="text/javascript">
                        try {
                            ace.settings.check('sidebar', 'collapsed')
                        } catch (e) {
                        }
                    </script>
                </div>

                
<div class="main-content">
    <div class="breadcrumbs" id="breadcrumbs">
        <script type="text/javascript">
            try {
                ace.settings.check('breadcrumbs', 'fixed')
            } catch (e) {
            }
        </script>

        <ul class="breadcrumb">
            <li>
                <i class="icon-home home-icon"></i>
                <a href="#">首页</a>
            </li>
        </ul><!-- .breadcrumb -->
    </div>

    <div class="page-content">
        <div class="row">


            <div class="col-xs-12">

                <form class="form-horizontal" role="form" method='post' action="<?php echo url('good/save'); ?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 商品名称 </label>

                        <div class="col-sm-9">
                            <input type="hidden" name="goods_id" value="<?php echo $data['goods_id'] ?>" />
                            <input type="text" value="<?php echo $data['goods_name'] ?>" name='goods_name' id="form-field-1" placeholder="商品名称" class="col-xs-10 col-sm-5" />
                        </div>
                    </div>

                    <div class="space-4"></div>

                    <div class="form-group">

                        <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 商品图片 </label>

                        <div class="col-sm-9">
                            <input type="file" name='file' id="form-field-2" placeholder="商品图片" class="col-xs-10 col-sm-5" />
                        </div>
                        <img src="/<?php echo $data['file'] ?>" width="100px" alt="" />
                    </div>
<div class="space-4"></div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 商品品牌 </label>

                        <div class="col-sm-9">
                           <select name="brand_id" id="">
                               <?php foreach ($brand as $k=>$v) : ?>
                                <option value="<?php echo $v['brand_id'] ?>"><?php echo $v['brand_name'] ?></option>
                               <?php endforeach; ?>
                           </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 分类 </label>

                        <div class="col-sm-9">
                           <!--  <input type="text" name='input_mode' id="form-field-2" placeholder="模式" class="col-xs-10 col-sm-5" /> -->
                           <select name="cate_id" id="">
                         <?php foreach($cate as $k =>$v ) : ?>
                               <option value="<?php echo $v['cate_id'] ?>"><?php echo $v['cate_name'] ?></option>
                                <?php foreach($v['child'] as $key =>$val ) : ?>
                                   <option value="<?php echo $val['cate_id'] ?>">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $val['cate_name'] ?></option>


                                    <?php endforeach; endforeach; ?>


                           </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 商品属性 </label>

                       <!--  <div class="col-sm-9"> -->
                        <?php foreach($attr as $k =>$v ) : ?>
                            <input type="checkbox" name='attr_id[]' id="form-field-2" value="<?php echo $v['attr_id'] ?>" placeholder="商品属性" <?php
                             in_array('attr_id',$v) ?'checked' : ''?> /><?php echo $v['attr_name'] ?><?php echo $v['value'] ?>
                        <!-- </div> -->
                        <?php endforeach; ?>
                    </div>
 <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 商品价格 </label>

                        <div class="col-sm-9">
                            <input type="text" value="<?php echo $data['goods_price'] ?>" name='goods_price' id="form-field-1" placeholder="商品价格" class="col-xs-10 col-sm-5" />
                        </div>
                    </div>
<div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 库存 </label>

                        <div class="col-sm-9">
                            <input type="text" value="<?php echo $data['kucun'] ?>"  name='kucun' id="form-field-1" placeholder="库存" class="col-xs-10 col-sm-5" />
                        </div>
                    </div>


                    <div class="clearfix form-actions">
                        <div class="col-md-offset-3 col-md-9">
<input type="submit" value="添加" />

                            &nbsp; &nbsp; &nbsp;
                            <button class="btn" type="reset">
                                <i class="icon-undo bigger-110"></i>
                                重置
                            </button>
                        </div>
                    </div>

                    <div class="hr hr-24"></div>



                </form>
            </div><!-- /span -->
        </div><!-- /row -->

    </div><!-- /.page-content -->
</div><!-- /.main-content -->



                <div class="ace-settings-container" id="ace-settings-container">
                    <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                        <i class="icon-cog bigger-150"></i>
                    </div>

                    <div class="ace-settings-box" id="ace-settings-box">
                        <div>
                            <div class="pull-left">
                                <select id="skin-colorpicker" class="hide">
                                    <option data-skin="default" value="#438EB9">#438EB9</option>
                                    <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                                    <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                                    <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                                </select>
                            </div>
                            <span>&nbsp; 选择皮肤</span>
                        </div>

                        <div>
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
                            <label class="lbl" for="ace-settings-navbar"> 固定导航条</label>
                        </div>

                        <div>
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
                            <label class="lbl" for="ace-settings-sidebar"> 固定滑动条</label>
                        </div>

                        <div>
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
                            <label class="lbl" for="ace-settings-breadcrumbs">固定面包屑</label>
                        </div>

                        <div>
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
                            <label class="lbl" for="ace-settings-rtl">切换到左边</label>
                        </div>

                        <div>
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
                            <label class="lbl" for="ace-settings-add-container">
                                切换窄屏
                                <b></b>
                            </label>
                        </div>
                    </div>
                </div><!-- /#ace-settings-container -->
            </div><!-- /.main-container-inner -->

            <a href="/#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="icon-double-angle-up icon-only bigger-110"></i>
            </a>
        </div><!-- /.main-container -->

        <!-- basic scripts -->

        <!--[if !IE]> -->

        <script src="/assets/js/jquery-2.0.3.min.js"></script>

        <!-- <![endif]-->

        <!--[if IE]>
<script src="/http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

        <!--[if !IE]> -->

        <script type="text/javascript">
                            window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>" + "<" + "script>");
        </script>

        <!-- <![endif]-->

        <!--[if IE]>
<script type="text/javascript">
window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"script>");
</script>
<![endif]-->

        <script type="text/javascript">
            if ("ontouchend" in document)
                document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "script>");
        </script>
        <script src="/assets/js/bootstrap.min.js"></script>
        <script src="/assets/js/typeahead-bs2.min.js"></script>

        <!-- page specific plugin scripts -->

        <!--[if lte IE 8]>
          <script src="/assets/js/excanvas.min.js"></script>
        <![endif]-->

        <script src="/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
        <script src="/assets/js/jquery.ui.touch-punch.min.js"></script>
        <script src="/assets/js/jquery.slimscroll.min.js"></script>
        <script src="/assets/js/jquery.easy-pie-chart.min.js"></script>
        <script src="/assets/js/jquery.sparkline.min.js"></script>
        <script src="/assets/js/flot/jquery.flot.min.js"></script>
        <script src="/assets/js/flot/jquery.flot.pie.min.js"></script>
        <script src="/assets/js/flot/jquery.flot.resize.min.js"></script>

        <!-- ace scripts -->

        <script src="/assets/js/ace-elements.min.js"></script>
        <script src="/assets/js/ace.min.js"></script>

        <!-- inline scripts related to this page -->

        
    </body>
</html>

