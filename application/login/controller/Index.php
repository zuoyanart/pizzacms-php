<?php
namespace app\login\controller;
use think\Controller;
use think\Db;


class Index extends Controller
{
    public function index()
    {
        return $this->fetch();
    }

    public function test() {
    	return '<h1>test</h1>';
    }

    public function tt($home = 'world') {
      $data = Db::name('user')->find();
      $this->assign('result', $data);
      return $this->fetch();
    }
}
