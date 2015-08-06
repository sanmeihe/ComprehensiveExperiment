<?php
	class indexController{
		function index(){
			$newsobj = M('news');
			$data = $newsobj->get_news_list();
			VIEW::assign(array('data'=>$data));/* 调用smarty函数 */
			VIEW::display('index/index.html');
		}
		function newsshow(){/* 显示文章详情控制层函数 */
			$data = M('news')->getnewsinfo($_GET['id']);
			VIEW::assign(array('data'=>$data));/* 调用smarty函数 */
			VIEW::display('index/newsshow.html');
		}
	}
?> 