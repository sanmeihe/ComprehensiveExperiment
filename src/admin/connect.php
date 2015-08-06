<?php
	require_once('config.php');
	if(!$conn = mysql_connect(HOST,NAME,PASSWORD)){
		echo mysql_error();
	};
	if(!mysql_select_db('article')){
		echo mysql_error();
	}
	if(!mysql_query('set names utf8')){
		echo mysql_error();
	}
	
?>