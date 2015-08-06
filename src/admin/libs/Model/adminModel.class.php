<?php
	class adminModel{

		public $table = 'superuser';

		function findOne_by_username($username){
			$sql = 'select * from '.$this->table.' where username="'.$username.'"';
			return DB::findOne($sql);
		}

		function count(){
			$sql = 'select count(*) from '.$this->table;
			return DB::findResult($sql, 0, 0);
		}
	}
?>