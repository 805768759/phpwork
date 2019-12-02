
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>发布内容 - 日志</title>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <div class="top">
  <div class="container">
    <div class="top-nav">
              <a class="curr" href="index.php">首页</a>
    </div>
    <div class="top-right">
      <?php
          session_start();

          if(isset($_SESSION['username'])){
            echo '<label style="color:#fff;">你好，'.$_SESSION['username'].'  </label>';
            echo '<a href="doexit.php">&nbsp;&nbsp;退出登录</a>';
          }else{
            echo '<a href="login.html">登录</a><i></i><a href="register.html">注册</a>';
          }
      ?>
    </div>
  </div>
</div> 
  <div class="main container">
    <div class="wp">
      <div class="wp-l">
        <div class="wp-l-subject"><a href="#">发布</a></div>
        <div class="wp-l-post">
          <form method="post" action="doadd.php">
            <p>文字内容：</p>
            <textarea class="wp-l-post-text" name="content" placeholder="1000个字以内"></textarea>
            <input class="ui-btn" type="submit" value="发布">
          </form>
        </div>
      </div>
      <div class="wp-r js-slide">
        <div class="wp-r-post">
          <div class="wp-r-post-w">
            <div class="wp-r-post-btn">发布</div>
            <div class="wp-r-post-b">
              <a class="wp-r-post-bl" href="add.php">发文</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="footer"></div>
</body>
</html>