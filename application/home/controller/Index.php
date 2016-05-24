<?php
namespace app\home\controller;
use think\Controller;
use think\Db;


class Index extends base
{
    /**
     * 加载首页
     * @return [type] [description]
     */
    public function index() {
        return $this->fetch();
    }

    public function test() {
      $User = new \app\home\model\User;
    	return $User::userChcekLogin();
    }

    public function tt($home = 'world') {
      $data = Db::name('user')->find();
      $this->assign('result', $data);
      return $this->fetch();
    }
}
