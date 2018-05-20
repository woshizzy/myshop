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

class Goodsattr extends Common
{
      public function index()
    {

         $res = Db::table('gtype')->select();
         return view('index',['type'=>$res]);
    }

    public function gettype()
    {
        $request = Request::instance();
        $id = $request->get('id');
        // echo $id;die;
        $data = Db::table('attr')->where(['type_id'=>$id])->select();
        // print_r($data);die;
        if (empty($data))
        {
            return [
                         'cod'=>1,
                         'message'=>'属性为空'
                     ];
        }
        return [
                    'cod'=>0,
                    'res'=>$data
                ];
    }

    public function insert()
    {
         $request = Request::instance();
        $data = $request->post();

        // print_r($data);die;
        $res = Db::table('attr')->insertGetId($data);
        if ($res)
        {
            $this->success('添加成功','attr/show');
        }
        else
        {
            $this->error();
        }
    }
    public function show()
    {
         $list = Db::table('attr')->paginate(3);
        $this->assign('arr',$list);
        return $this->fetch('show');
    }
    public function delete()
    {
        $request = Request::instance();
        $id = $request->get('id');
        // echo $id;die;
        $res = Db::table('attr')->where(['attr_id'=>$id])->delete();
         if ($res)
        {
            $this->success('删除成功','attr/show');
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
        $data = Db::table('attr')->where(['attr_id'=>$id])->find();
        return $this->fetch('update',['data'=>$data]);
    }
    public function save()
    {
        $request = Request::instance();
        $data = $request->post();

        // print_r($data);die;
        $res = Db::table('attr')->where(['attr_id'=>$data['attr_id']])->update($data);
        if ($res)
        {
            $this->success('更新成功','attr/show');
        }
        else
        {
            $this->error();
        }
    }
}