<?php
class IndexAction extends Action {
    /*
     *前置操作 判断是否登录
     **/
    public function _before_index() {
        if(!isset($_SESSION['username']) || $_SESSION['username'] == "") {
            $this->redirect('Login/index');
        }
    }
    public function index() {
        $m = M('City');
        $arr = $m->select();
        $this->assign('list', $arr);
        $this->display();
    }
}