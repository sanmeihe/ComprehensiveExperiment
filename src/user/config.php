<?php
	$config = array(
		'viewconfig' => array(
			'left_delimiter' => '{',  'right_delimiter' => '}',  'template_dir' => 'tpl',  'compile_dir' => 'data/template_c'),
		'dbconfig' => array(
			'host' => 'localhost', 'username'=>'root', 'psw' => '146147mzy' , 'dbname' => 'article', 'dbcharset' => 'utf8')
	);
	header("Content-type: text/html;charset=utf-8");
	define('HOST','localhost');
	define('NAME','root');
	define('PASSWORD','146147mzy');
?>