<?php
	class ReplyModel extends RelationModel{
		protected $_auto = array(
			array("time", "time", 1, "function"),
			array("fid", "getId", 1, "callback"),
		);
		protected $_link = array(
			// "Message" => array(
			// 	'mapping_type' => BELONGS_TO,
			// 	// 'class_name' => 'User',
			// 	'foreign_key' => 'mid',
			// 	'mapping_name' => 'message',
			// 	// 'mapping_fields' => 'username',
			// 	// 'as_fields' => 'username:uname',
			// ),
			"User" => array(
				'mapping_type' => BELONGS_TO,
				'foreign_key' => 'fid',
				'mapping_name' => 'user',
				'as_fields' => 'username:fname',
			),
		);
		protected function getId() {
			return $_SESSION['id'];
		}
	}
?>