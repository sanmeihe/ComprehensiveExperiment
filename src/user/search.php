<?php
	require_once('config.php');
	require_once('connect.php');
	$key = $_GET['key'];
	$sql = "select * from news where title like '$key%' order by id";
	$query = mysql_query($sql);
	if($query&&mysql_num_rows($query)){
		while($row = mysql_fetch_assoc($query)){
			$data[] = $row;
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />

<title>悦文网_文章列表</title>
<meta name="description" content="校园文章分享系统" />
<meta name="keywords" content="悦文网" />
<link href="css.css" rel="stylesheet" type="text/css" />
</head>

<body>
 <div id="wrap">
 <div id="top">
 <p style="font-size:36px; font-style:">悦文网</p>
 </div>
 <div id="main" style="height: 800px;">
  <div class="mainleft">
   <ul>
	<li>
				<h2>Search</h2>
				<form method="get" action="search.php">
					<input type="text" id="s" name="key" value="" />
					<input type="submit" id="x" value="Search" />
				</form>
	</li>
	<li>
	</li>
    <li><a href="index.php" class="hover">文章列表 <span class="en">Article list</span></a></li>
	<li><a href="about us.html">关于我们 <span class="en">About Us</span></a></li>
   </ul>
  </div>
  <div class="mainright">
   <div class="content">
    <h3>文章列表<sub>ABOUT US</sub></h3>
	
	<div>
	<?php
		if(empty($data)){	
			echo "当前没有文章";
		}else{
			foreach($data as $value){
	?>
		<div>
			<h4><center><span>标题：</span><?php echo $value['title']?><span>&nbsp&nbsp&nbsp作者：</span><?php echo $value['author']?></center></h4>
			<div>
				<?php echo $value['description']?>
			</div>
			<div>
				<p><a href="index.php?controller=index&method=newsshow&id=<?php echo $value['id']?>">查看详细</a></p>
			</div>
		</div>
	<?php
			}
		}
	?>
	</div>
   </div>
  </div>
 </div>
</body>
</html>
