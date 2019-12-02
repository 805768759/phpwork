<?php
	include_once("config.php");
	$time = time();
	$content = $_POST['content'];
	@$uid = $_SESSION['uid'];
	@$res = $link -> query("insert into posts(uid,content,time) values('$uid','$content','$time')");
	if($res){
		echo "<script>alert('发布成功!')</script>";
        echo '正在跳转...';
        header("refresh:1;url=index.php");
	}else{
		echo "<script>alert('留言失败!请检查是否登录')</script>";
        echo '正在跳转...';
		header("refresh:1;url=index.php");
	}
?>