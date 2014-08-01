<style>
  html body nav {
    width: 90%;
    margin: 0 auto;
  }
  html body nav span#welcome {
    display: block;
    padding-top: 2.5em;
    padding-right: 1.5em;
    font-size: .8em;
  }
</style>

<?php
  if ($user['role'] != 'ADMIN' && $user['role'] != 'DOC') {
?>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
  <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Healthy</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="user.php">用户页</a></li>
        <li><a href="#">更改密码</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><span id="welcome">欢迎您 <?php echo $_SESSION['user']['username'] ?> ! 您不是 <a href="sign.php"><?php echo $_SESSION['user']['username'] ?>?</a></span></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<?php
  }
  else {
?>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
  <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Healthy</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="admin.php">搜索用户</a></li>
        <li><a href="disease.php">疾病信息管理</a></li>
        <li><a href="#">更改密码</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><span id="welcome">欢迎您 <?php echo $_SESSION['user']['username'] ?> ! 您不是 <a href="sign.php"><?php echo $_SESSION['user']['username'] ?>?</a></span></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<?php
  }
?>