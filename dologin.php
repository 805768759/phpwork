<?php
    include_once("config.php");
    $username=$_POST['username'];
    $password=$_POST['password'];

    $result=$link->query("select * from `userinfo` where username='$username' and password='$password'");
    $row = $result->fetch_assoc();
    if ($row) 
        echo "<script>alert('用户登录成功!')</script>";
        $_SESSION['username'] = $row['username'];
        $_SESSION['uid'] = $row['uid'];
        echo '正在跳转...';
        header("refresh:1;url=index.php");
    }else{
        echo "<script>alert('用户名或密码错误!')</script>";
        link_login();
    }
?>