<?php
	include_once ("./config.php");
	$username=$_POST['username'];//获取表单提交的数据
	$password=$_POST['password'];
	$repassword=$_POST['repassword'];
	$telephone = $_POST['telephone'];	
	if($username == '' || $password == '' || $repassword == ''|| $telephone == ''){
		echo "<script>alert('选项不许为空')</script>";
		link_reg();
	}
	//正则表达式
	$pattern_ph = '/^1[34578]\d{9}$/';
	if(!preg_match($pattern_ph,$telephone)){
		echo "<script>alert('手机号码格式不正确！')</script>";
		link_reg();
	}elseif($repassword!=$password){
		echo "<script>alert('两次密码不一致！')</script>";
		link_reg();
	}
	$row = $link->query("select * from `userinfo` where username='$username'");
	$result = $row->fetch_all();
	if($result){
		echo "<script>alert('用户已存在')</script>";
		link_reg();
	}else{
	 	$row=$link->query("insert into `userinfo`( `username`, `password`,`telephone`) values('$username','$password','$telephone')");
	 	if($row){
	 		echo '注册成功';
			link_login();
	 	}else{
			echo '注册失败';
			link_reg();
	 	}
	}
?>