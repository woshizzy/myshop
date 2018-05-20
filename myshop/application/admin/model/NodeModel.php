<?php

namespace app\admin\model;

use app\admin\model\CommonModel;

class NodeModel extends CommonModel {

    public $table = 'ms_node'; //定义表名

    public function dataAdd(array $param) {
        list($this->node_name, $this->controller_name, $this->action_name, $this->pid) = array_values($param);
        $this->controller_name = strtolower($this->controller_name);
        $this->action_name = strtolower($this->action_name);
        if ($this->nodeOnly()) {
            $this->error = '权限已存在';
            return false;
        }
        if ($this->save()) {
            return $this->{$this->priKey};
        }
        $this->error = '添加失败';
        return false;
    }

    public function nodeOnly() {
        return $this->where([
                    'controller_name' => $this->controller_name,
                    'action_name' => $this->action_name,
                ])->value($this->priKey);
    }

    public function deleteOne(int $id) {
        if ($this->getChildren($id)) {
            $this->error = '该权限下有子权限无法直接删除';
            return false;
        }
        $res = $this->where([$this->priKey => $id])->delete();
        if ($res) {
            return true;
        }
        $this->error = '删除失败';
        return false;
    }

    public function getChildren($pid) {
        $count = $this->where([
                    'status' => self::ON_STATUS,
                    'pid' => $pid
                ])->count();
        return $count;
    }
    public function grtRoleNodes($id)
    {
        $roleNodes = $this->table('ms_role_node')->where(['role_id'=>$id])->column('node_id');
        // print_r($roleNodes);die;
        $allNodes = $this->where($this->defaultWhere)->select()->toArray();
        // print_r($allNodes);die;
        return
        [
            'role_node'=>$roleNodes,
            'all_node'=>$allNodes
        ];
    }



}
