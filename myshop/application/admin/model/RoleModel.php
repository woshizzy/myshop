<?php

namespace app\admin\model;

use app\admin\model\CommonModel;

class RoleModel extends CommonModel {

    public $table = 'ms_role'; //定义表名

    public function dataAdd(array $param) {
        list($this->role_name) = array_values($param);
        if ($this->roleOnly()) {
            $this->error = '角色已存在';
            return false;
        }
        if ($this->save()) {
            return $this->{$this->priKey};
        }
        $this->error = '添加失败';
        return false;
    }

    public function roleOnly() {
        return $this->where([ 'role_name' => $this->role_name])->value($this->priKey);
    }

    public function deleteOne(int $id) {
        $res = $this->where([$this->priKey => $id])->delete();
        if ($res) {
            return true;
        }
        $this->error = '删除失败';
        return false;
    }

    public function addUser($role_id, $user_id) {
        $data = [
            'user_id' => $user_id,
            'role_id' => $role_id
        ];
        $isHas = $this->table('ms_user_role')->where($data)->value('user_id');
        if($isHas){
            $this->error = '用户已存在当前用户组';
            return false;
        }
        $res = $this->table('ms_user_role')->insert($data);
        if($res){
            return true;
        }
        $this->error = '添加失败';
        return false;
    }
    public function addNode($role_id,$node_ids)
    {
        try{
                // echo "<pre>";
                // print_r($node_ids);die;
                $this->startTrans();
                foreach ($node_ids as  &$val)
                {
                    $val = [
                              'role_id' => $role_id,
                              'node_id' => $val
                           ];
                }

                // echo "<pre>";
                // print_r($node_ids);die;
                if (!$this->table('ms_role_node')->where(['role_id'=>$role_id])->delete())
                 {
                       throw new Exception ('操作失败');
                 }
                 if (!$this->table('ms_role_node')->insertAll($node_ids))
                 {
                     throw new Exception ('操作失败');
                 }
                 $this->commit();
                 return true;
            }


         catch(\Exception $e)
            {
                $this->rollback();
                $this->error = $e->getMessage();
                return false;
            };


    }
    public function authUser($uid,$controller,$action)
    {
        $role_id = $this->table('ms_user_role')->where(['user_id'=>$uid])->column('role_id');
        // print_r($role_id);die;
        $node_id = model('node_model')->where( [
                                                   'controller_name'=>$controller,
                                                   'action_name'=>$action,
                                                   'status'=>self::ON_STATUS
                                                ]   )->value('id');
        if (!$role_id || !$node_id)
        {
            return false;
        }

        return $this->table('ms_role_node')->where([
                                                      'role_id'=>['in',$role_id],
                                                      'node_id'=>$node_id,
                                                  ])->value('node_id');
    }

}
