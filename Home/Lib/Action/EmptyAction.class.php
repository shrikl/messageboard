<?php
	/**
	 * 空模块处理
	 * EmptyAction类
	 * 常量MODULE_NAME: 空模块名
	 */
	class EmptyAction extends Action{
		public function index() {
			$name = MODULE_NAME;
			$m = M('City');
        	$arr = $m->select();
        	$this->assign('list', $arr);
			// $this->display("City" + $name); //display()方法不能实现空模板和空操作的并行
			$this->redirect("City/$name");     //利用redirect重定向跳转实现空模板和空操作的并行
		}
	}
?>