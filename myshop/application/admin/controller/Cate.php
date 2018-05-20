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

class Cate extends Common
{
      public function index()
    {
         return view('index');
    }
    public function insert()
    {
        $request = Request::instance();
        $data = $request->post();
        $data['time'] = date("Y-m-d H:i:s");
        // print_r($data);die;
        $res = Db::table('cate')->insertGetId($data);
        if ($res)
        {
            $this->success('添加成功','cate/show');
        }
        else
        {
            $this->error();
        }
    }
    public function show()
    {
        $data = Db::table('cate')->select();
        // print_r($data);die;
        return $this->fetch('show',['arr'=>$data]);
    }
    public function delete()
    {
        $request = Request::instance();
        $id = $request->get('id');
        // echo $id;
        $res = Db::table('cate')->where(['cate_id'=>$id])->delete();
        if ($res)
        {
            $this->success('删除成功','cate/show');
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
        $data = Db::table('cate')->where(['cate_id'=>$id])->find();
        // print_r($data);die;
        return $this->fetch('update',['data'=>$data]);
    }
    public function save()
    {
        $request = Request::instance();
        $id = $request->post('cate_id');
        // echo $id;
        $data = $request->post();
        // print_r($data);die;
        $res = Db::table('cate')->where(['cate_id'=>$id])->update($data);
        if ($res)
        {
            return $this->success('修改成功','cate/show');
        }
        else
        {
            return $this->error();
        }
    }
}
