<?php

namespace app\admin\controller;

use app\admin\controller\Common;

class Node extends Common {
    
    const TOP_PID = 0;

    public function index() {
        $model = model('node_model');
        $model->defaultWhere['pid'] = input('id') ?? self::TOP_PID;
        $list = $model->getList();
        return view('index', [
            'data' => $list
        ]);
    }

}
