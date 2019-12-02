<?php
	header("Content-Type:text/html;charset=utf-8");
	date_default_timezone_set('PRC');
	$link = new mysqli('127.0.0.1','root','','mydata','3306');
	$res = mysqli_set_charset($link,'utf8');
	session_start();
	// 注册页面跳转
	function link_reg(){
		echo '页面跳转中...';
		header("refresh:3.0;url=register.html");
		exit;
	}
	// 登录页面跳转
	function link_login(){
		echo '页面跳转中...';
		header("refresh:3.0;url=login.html");
		exit;
	}
	echo '<pre>';
?>