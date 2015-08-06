<?php
	class indexController{
		function index(){
			$newsobj = M('news');
			$data = $newsobj->get_news_list();
			VIEW::assign(array('data'=>$data));
			VIEW::display('index/index.html');
		}
		function newsshow(){
			$data = M('news')->getnewsinfo($_GET['id']);
			VIEW::assign(array('data'=>$data));
			VIEW::display('index/newsshow.html');
		}
	}
?> 