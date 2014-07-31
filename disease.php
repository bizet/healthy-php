<?php
  session_start();
  if (!isset($_SESSION['user'])) {
    header("Location: sign.php?ref=".urlencode("admin.php"));
    exit();
  }
  $user = $_SESSION['user'];
  if ($user['role'] != 'ADMIN' && $user['role'] != 'DOC') {
    header("Location: user.php");
    exit();
  }
?>
<html>
<head>
  <title>疾病信息管理</title>
  <meta http-equiv="X-UA-Compatible" content="IE=EDGE" />
  <meta charset='utf-8' />
  <meta http-equiv="Pragma" content="no-cache" />
  <meta http-equiv="Cache-Control" content="no-cache,must-revalidate" />
  <meta http-equiv="Expires" content="0" />
  <!--link rel="stylesheet" href="//ajax.aspnetcdn.com/ajax/bootstrap/3.2.0/css/bootstrap.min.css"-->
  <link rel="stylesheet" href="//apps.bdimg.com/libs/bootstrap/3.2.0/css/bootstrap.min.css">
  <!--link rel="stylesheet" href="//ajax.aspnetcdn.com/ajax/bootstrap/3.2.0/css/bootstrap-theme.min.css"-->
  <link rel="stylesheet" href="//apps.bdimg.com/libs/bootstrap/3.2.0/css/bootstrap-theme.min.css">
  <!--[if lt IE 9]>
    <script src="//apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
    <script src="//apps.bdimg.com/libs/respond.js/1.4.2/respond.js"></script>
  <![endif]-->
  <style type="text/css">
    
    #list-disease {
      width: 60%;
      margin: 2em auto;
      margin-top: 6em;
    }
    #list-group-disease li label {
      width: 45%;
    }
    #modal-add-disease li {
      list-style: none;
      width: 80%;
      margin: .2em auto;
    }
    #modal-add-disease li label {
      display: inline-block;
      width: 40%;
    }
    #modal-add-disease li input,
    #modal-add-disease li select {
      display: inline-block;
      width: 50%;
    }
  </style>
</head>
<body>
  <?php require(dirname(__FILE__).'/nav.php'); ?>
  <section id="list-disease">
    <button class="btn btn-primary" data-toggle="modal" data-target="#modal-add-disease">增加新的疾病信息</button>
    <ul class="list-group" id='list-group-disease'></ul>
  </section>

  <div class="modal fade" id="modal-add-disease">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">新增一条疾病信息</h4>
      </div>
      <div class="modal-body">
        <form>
          <li>
            <label>疾病名称: </label>
            <input class="form-control" placeholder="" id="input-name" name="input-name">
          </li>
          <li>
            <label>是否需要填写手术日期: </label>
            <select class="form-control" id="input-operation" name="input-operation">
              <option value='Y'>需要</option>
              <option value='N'>不需要</option>
            </select>
          </li>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
        <button type="button" class="btn btn-primary" id="submit-add-disease">保存</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

</body>
</html>
<script data-main="public/js/disease.main" src='//bizet-cn.com/public/js/lib/require.min.js'>
  require.config({
      urlArgs: "bust=" + (new Date()).getTime()
  });
</script>
