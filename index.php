<!-- <?php
  @include_once("config.php");
  @$res = $link->query("select * from posts as p,userinfo as u where p.uid = u.uid");
 
?> -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>日志</title>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <div class="top">
    <div class="container">
      <div class="top-nav">
        <a class="curr" href="index.html">首页</a>
      </div>
      <div class="top-right">
        <?php
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
        <?php
         $data = $res -> fetch_all();
          foreach($data as $k => $v){
            echo '<div class="wp-l-lst">';
            echo '<div class="wp-l-author">';
            echo '<div class="wp-l-author-name">';
            echo '    <img src="./images/noavatar.gif">';
            echo '    <a href="">'.$v[5].'</a>';
            echo '  </div>';
            echo '  <div class="wp-l-author-time">'.date("Y-m-d H:i:s",$v[2]).'</div>';
            echo '</div>';
            echo '<div class="wp-l-content">';
            echo '  <a href="show.html?id=2" target="_blank">'.$v[1].'</a>';
            echo '</div>';
            echo  '</div>';
          }
        ?>
       


        <div class="wp-l-page"></div>
      </div>
      <div class="wp-r js-slide">
        <div class="wp-r-post">
          <div class="wp-r-post-w">
              <div class="wp-r-post-btn">发布</div>
              <div class="wp-r-post-b">
                <a class="wp-r-post-bl" href="add.php">发布</a>
              </div>
            </div>
          </div>
      </div>      
    </div>
  </div>
  <div class="footer"></div>
</body>
</html>



