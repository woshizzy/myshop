<?php

namespace app\admin\controller;

use app\admin\controller\Common;

class Role extends Common {

    public function setUser() {
        $id = input('id');
        $roleUsers = model('user_model')->getRoleUsers($id);
        return view('set_user', [
            'data' => $roleUsers
        ]);
    }

    public function addUser(){
        $user_id = input('user_id');
        $role_id = input('role_id');
        $model = model('role_model');
        if($model->addUser($role_id, $user_id)){
            $this->success('操作成功', url('setUser', ['id' => $role_id]));
        }
        $this->error($model->getError());
    }

    public function setNode() {
        if (\think\Request::instance()->isPost())
        {
             $role_id = input('id');
            // $role_id = 1;
            // echo $role_id;die;
            $node_ids = input('post.');
            // print_r($node_ids);die;
            $model = model('role_model');
            if ($model->addNode($role_id,$node_ids['node_id']))
            {
                $this->success('操作成功',url('index'));
            }
            $this->error($model->getError());
        }
        $id = input('id');
        $roleNodes = model('node_model')->grtRoleNodes($id);
        // echo "<pre>";
        // print_r($roleNodes);die;
        $nodeTree = $this->getNodesTree($roleNodes['all_node']);
        // print_r($nodeTree);die;
        $role_node = array_flip($roleNodes['role_node']);
         // print_r($role_node);die;
        //  echo "<pre>";
        // print_r($role_node);die;
        return view(
                 'set_node',
                 [
                     'role_node'=>$role_node,
                     'node_tree'=>$nodeTree

                 ]


            );


    }
    protected function getNodesTree($data,$pid=0)
    {
         $array = [];
        foreach ($data as $val)
        {
              if ($val['pid'] == $pid )
              {
                  $val['child'] = $this->getNodesTree($data,$val['id']);
                  $array[] = $val;
              }
        }
        return $array;
    }


}
