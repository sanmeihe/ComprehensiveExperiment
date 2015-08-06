<?php
	class newsModel{

		public $_table = 'news';

		function findAll_orderby_dateline(){/* 数据库函数 */
			$sql = 'select * from '.$this->_table.' order by dateline desc';
			return DB::findAll($sql);
		}

		function findOne_by_id($id){/* 数据库函数 */
			$sql = 'select * from '.$this->_table.' where id='.$id;
			return DB::findOne($sql);
		}

		function del_by_id($id){/* 数据库函数 */
			return DB::del($this->_table, 'id='.$id);
		}

		function count(){/* 数据库函数 */
			$sql = 'select count(*) from '.$this->_table;
			return DB::findResult($sql, 0, 0);
		}

		function insert($data){/* 数据库函数 */
			return DB::insert($this->_table, $data);
		}

		function update($data, $id){/* 数据库函数 */
			return DB::update($this->_table, $data, 'id='.$id);
		}
		function get_news_list(){
			$data = $this->findAll_orderby_dateline();
			foreach($data as $key=>$news){
				$data[$key]['content'] = mb_substr(strip_tags($data[$key]['content']),0,200);
			}
			return $data;
		}
		function getnewsinfo($id){
			if(!empty($id)){
				$id = intval($id);
				$sql = 'select * from '.$this->_table.' where id='.$id;
				return DB::findOne($sql);
			}else{
				return array();
			}
		}
		
	}
?>