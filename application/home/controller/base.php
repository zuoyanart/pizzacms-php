<?php
namespace app\home\controller;
use think\Controller;
use think\Db;
use think\Cookie;


class base extends Controller {
    public function _initialize() {
        $id = Cookie::get('id');
        if($id == '') {
            // $this->redirect('/index.php/login/index/index');
        }
    }
}
