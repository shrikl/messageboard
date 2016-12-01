<?php 
	class CityAction extends Action{
		public function bj() {
			// $m = M('City');
			// $arr = $m->select();
			// $this->assign('list', $arr);
			// $this->display();
			/*
			 *代码与Index模块下的index方法相同
			 */
			$oi = new IndexAction();
			$oi->index();
		}
		public function sh() {
			$oi = new IndexAction();
			$oi->index();
		}
		public function gz() {
			$oi = new IndexAction();
			$oi->index();
		}
		/*
		 *空操作处理
		 *_empty($name);
		 *name: 空操作名
		 **/
		public function _empty($name) {
			$this->error("$name 不存在");
		}
	}
?>