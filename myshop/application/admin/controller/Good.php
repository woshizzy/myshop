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

class Good extends Common
{
      public function index()
    {
         // $brand = Db::table('brand')->select();
         $data = Db::table('cate')->select();
         // print_r($cate);die;
         $cate = $this->getCateTree($data,$pid=0);
         // print_r($cate);die;
         $attr =  Db::table('attr')->select();
         $brand =  Db::table('brand')->select();
         // print_r($attr);die;
         return  $this->fetch('index',['cate'=>$cate,'brand'=>$brand,'attr'=>$attr]);
    }
     public function insert()
    {
        $request = Request::instance();
        $data = $request->post();
        // print_r($data);die;
        $file = request()->file('file');
         if($file){
        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
       // print_r($info);die;////
        if($info){
            // 成功上传后 获取上传信息
            // 输出 jpg
            echo $info->getExtension();
            // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
            echo $info->getSaveName();
            // 输出 42a79759f284b767dfcb2a0197904287.jpg
            echo $info->getFilename();
        }else{
            // 上传失败获取错误信息
            echo $file->getError();
        }
      }
      $data['file'] = 'uploads/'.date("Ymd").'/'.$info->getFilename();
    // print_r($data);die;
      $data['attr_id'] = implode(',',$data['attr_id']);
       $res = Db::table('goods')->insertGetId($data);
       if ($res)
       {
           return $this->success('添加成功','good/show');
       }
       else
       {
           return $this->error();
       }
    }

    public function show()
    {
        $list = Db::table('goods')->paginate(3);
        $this->assign(['arr'=>$list]);
        return $this->fetch('show');
    }

    public function delete()
    {
        $request = Request::instance();
        $id = $request->get('id');
        // echo $id;die;
        $res = Db::table('goods')->where(['goods_id'=>$id])->delete();
         if ($res)
       {
           return $this->success('删除成功','good/show');
       }
       else
       {
           return $this->error();
       }
    }

    public function update()
    {
         $brand = Db::table('brand')->select();
         $data = Db::table('cate')->select();
         // print_r($cate);die;
         $cate = $this->getCateTree($data,$pid=0);
         // print_r($cate);die;
         $attr =  Db::table('attr')->select();
        $request = Request::instance();
        $id = $request->get('id');
        $data = Db::table('goods')->where(['goods_id'=>$id])->find();
        return $this->fetch('update',['data'=>$data,'brand'=>$brand,'cate'=>$cate,'attr'=>$attr]);
    }
    public function save()
    {
        $request = Request::instance();
        $data = $request->post();
        // print_r($data);die;
         $file = request()->file('file');
         if($file){
        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
       // print_r($info);die;////
        if($info){
            // 成功上传后 获取上传信息
            // 输出 jpg
            echo $info->getExtension();
            // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
            echo $info->getSaveName();
            // 输出 42a79759f284b767dfcb2a0197904287.jpg
            echo $info->getFilename();
        }else{
            // 上传失败获取错误信息
            echo $file->getError();
        }
      }
      $data['file'] = 'uploads/'.date("Ymd").'/'.$info->getFilename();
    // print_r($data);die;
      $data['attr_id'] = implode(',',$data['attr_id']);

      $res = Db::table('goods')->where(['goods_id'=>$data['goods_id']])->update($data);
       if ($res)
       {
           return $this->success('修改成功','good/show');
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