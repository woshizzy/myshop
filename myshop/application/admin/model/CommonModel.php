<?php

namespace app\admin\model;

use think\Model;

abstract class CommonModel extends Model {

    var $priKey = 'id';
    var $defaultWhere = [
        'status' => 1
    ];

    const ON_STATUS = 1;
    const OFF_STATUS = 0;

    abstract public function dataAdd(array $param);

    abstract public function deleteOne(int $id);

    public static function getStatus($status) {
        $statusArray = [
            self::ON_STATUS => '启用',
            self::OFF_STATUS => '禁用'
        ];
        return $statusArray[$status];
    }

    public function getList() {
        return $this->where($this->defaultWhere)->select()->toArray();
    }

}
