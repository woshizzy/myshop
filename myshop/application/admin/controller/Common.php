<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;

class Common extends Controller {

    protected $uid = NULL;

    public function _initialize() {
        if (!$this->isLogin()) {
           $this->error('请先登录', url('/login'));
        }
        if (!$this->auth())
        {
            $this->error('没有权限');
        }
        // echo 1;die;
    }

    protected function isLogin() {
        // return $this->uid = session('user_auth');
        return $this->uid = 2;
    }
    private function auth()
    {
        $controller = Request::instance()->controller();
        $action = Request::instance()->action();
        $isAuth = model('role_model')->authUser($this->uid,$controller,$action);
        return $isAuth;
    }
    public function index() {
        $controller = Request::instance()->controller();
        $model = model($controller . '_model');
        $list = $model->getList();
        return view('index', [
            'data' => $list
        ]);
    }

    public function add() {
        if (Request::instance()->isPost()) {
            $controller = Request::instance()->controller();
            $model = model($controller . '_model');
            $res = $model->dataAdd(input('post.'));
            if ($res) {
                $this->success('操作成功', url('index', ['id' => input('id')]));
            } else {
                $this->error($model->getError());
            }
        }
        return view('add');
    }

    public function delete() {
        $id = input('id');
        $controller = Request::instance()->controller();
        $model = model($controller . '_model');
        if ($model->deleteOne($id)) {
            $this->success('删除成功', url('index'));
        }
        $this->error($model->getError());
    }

}
