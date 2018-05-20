<?php

namespace app\admin\model;

use app\admin\model\CommonModel;

class UserModel extends CommonModel {

    public $table = 'ms_user';//定义表名
    
    public function dataAdd(array $param) {
        list($this->username, $this->password) = array_values($param);
        if ($this->userOnly()) {
            $this->error = '用户名已存在';
            return false;
        }
        $this->password = md5($this->password);
        if ($this->save()) {
            return $this->{$this->priKey};
        }
        $this->error = '添加失败';
        return false;
    }

    public function userOnly() {
        return $this->where(['username' => $this->username])->value($this->priKey);
    }

    
    public function deleteOne(int $id){
        $res = $this->where([$this->priKey => $id])->delete();
        if($res){
            return true;
        }
        $this->error = '删除失败';
        return false;
    }
    
    public function getRoleUsers($roleID){
        $usersID = $this->table('ms_user_role')->where(['role_id' => $roleID])->column('user_id');
        $roleUsers = $this->select($usersID)->toArray();
        $notRoleUsers = $this->where(['id' => ['not in', $usersID]])->select()->toArray();
        return [
            'in' => $roleUsers,
            'not_in' => $notRoleUsers
        ];
    }
}
