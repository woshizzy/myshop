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

class Gtype extends Common
{
      public function index()
    {
         // $brand = Db::table('brand')->select();
         $data = Db::table('cate')->select();
         // print_r($cate);die;
         $cate = $this->getCateTree($data,$pid=0);
         // print_r($cate);die;

         // print_r($attr);die;
         return  $this->fetch('index',['cate'=>$cate]);
    }
     public function insert()
    {
        $request = Request::instance();
        $data = $request->post();
        // print_r($data);die;

       $res = Db::table('gtype')->insertGetId($data);
       if ($res)
       {
           return $this->success('添加成功','gtype/show');
       }
       else
       {
           return $this->error();
       }
    }

    public function show()
    {

$list = Db::table('gtype')
->alias('a')
->join('cate c','a.cate_id = c.cate_id')
// ->join('think_card c','a.card_id = c.id')
->paginate(3);;
        // print_r($this->getLastSql($list));die;
        // // print_r($list);die;
        // $list = Db::table('gtype')->paginate(3);
        $this->assign(['arr'=>$list]);
        return $this->fetch('show');
    }

    public function delete()
    {
        $request = Request::instance();
        $id = $request->get('id');
        // echo $id;die;
        $res = Db::table('gtype')->where(['type_id'=>$id])->delete();
         if ($res)
       {
           return $this->success('删除成功','gtype/show');
       }
       else
       {
           return $this->error();
       }
    }

    public function update()
    {

         $data = Db::table('cate')->select();
         // print_r($cate);die;
         $cate = $this->getCateTree($data,$pid=0);
         // print_r($cate);die;
                $request = Request::instance();
        $id = $request->get('id');
        $data = Db::table('gtype')->where(['type_id'=>$id])->find();
        return $this->fetch('update',['cate'=>$cate,'data'=>$data]);
    }
    public function save()
    {
        $request = Request::instance();
        $data = $request->post();


      $res = Db::table('gtype')->where(['type_id'=>$data['type_id']])->update($data);
       if ($res)
       {
           return $this->success('修改成功','gtype/show');
       }
       else
       {
           return $this->error();
       }


    }
     protected function getCateTree($data,$pid=0)
    {
         $array = [];
        foreach ($data as $val)
        {
              if ($val['pid'] == $pid )
              {
                  $val['child'] = $this->getCateTree($data,$val['cate_id']);
                  $array[] = $val;
              }
        }
        return $array;



    }
}