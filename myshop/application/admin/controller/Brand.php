<?php


namespace app\admin\controller;


use think\Controller;
use think\Request;
use app\admin\Controller\Common;
use app\admin\model\Node;
use app\admin\model\Role;
use think\paginator;
use think\Db;
use think\View;
// require'thinkphp/library/think/db/Query.php';

// require 'thinkphp/library/think/paginator/Collection.php';

// require 'thinkphp/library/think/paginator/driver/Bootstrap.php';

class Brand extends Common
{
      public function index()
    {
         return view('index');
    }
    public function insert()
    {
         $request = Request::instance();
        $data = $request->post();

        // print_r($data);die;
        $res = Db::table('brand')->insertGetId($data);
        if ($res)
        {
            $this->success('添加成功','brand/show');
        }
        else
        {
            $this->error();
        }
    }
    public function show()
    {
         $list = Db::table('brand')->paginate(3);
        $this->assign('arr',$list);
        return $this->fetch('showbrand');
    }
    public function delete()
    {
        $request = Request::instance();
        $id = $request->get('id');
        // echo $id;die;
        $res = Db::table('brand')->where(['brand_id'=>$id])->delete();
         if ($res)
        {
            $this->success('删除成功','brand/show');
        }
        else
        {
            $this->error();
        }
    }
    public function update()
    {
        $request = Request::instance();
        $id = $request->get('id');
        // echo $id;die;
        $data = Db::table('brand')->where(['brand_id'=>$id])->find();
        return $this->fetch('update',['res'=>$data]);
    }
    public function save()
    {
        $request = Request::instance();
        $data = $request->post();

        // print_r($data);die;
        $res = Db::table('brand')->where(['brand_id'=>$data['brand_id']])->update($data);
        if ($res)
        {
            $this->success('更新成功','brand/show');
        }
        else
        {
            $this->error();
        }
    }
}