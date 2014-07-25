<style>
  #panel-pressure-list .panel-heading {
    height: 3.5em;
  }
  #panel-pressure-list .panel-heading button {
    height: 2em;
    line-height: 1em;
  }
  #panel-pressure-list .panel-heading span {
    text-align: right;
    font-size: 1.5em;
  }
  #panel-pressure-list .panel-body table {
    width: 90%;
    margin: .2em auto;
  }
  #modal-add-pressure li {
    list-style: none;
    width: 80%;
    margin: .2em auto;
  }
  #modal-add-pressure li label {
    display: inline-block;
    width: 40%;
  }
  #modal-add-pressure li input {
    display: inline-block;
    width: 50%;
  }
</style>

<div id="panel-pressure-list" class="panel panel-default">
  <div class="panel-heading">
    <?php
      if ($user_id == $_SESSION['user']['id']) {
    ?>
    <button class="btn btn-small btn-primary" id=""  data-toggle="modal" data-target="#modal-add-pressure"> 增加一条记录 </button>
    <?php
      }
    ?>
    <span class="pull-right">血压测量历史</span>
  </div>
  <div class="panel-body">
    <table id="pressure-list">
      <thead>
        <th>测量时间</th>
        <th>收缩压</th>
        <th>舒张压</th>
        <th>心率</th>
      </thead>
      <tbody></tbody>
    </table>
  </div>
</div>

<div class="modal fade" id="modal-add-pressure">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">新增一条血压记录</h4>
      </div>
      <div class="modal-body">
        <form>
          <li>
            <label>测量时间: </label>
            <input class="form-control" placeholder="请输入测试日期时间" id="input-time" name="input-time">
          </li>
          <li>
            <label>收缩压: </label>
            <input class="form-control" placeholder="请输入数字" id="input-systolic" name="input-systolic">
          </li>
          <li>
            <label>舒张压: </label>
            <input class="form-control" placeholder="请输入数字" id="input-diastolic" name="input-systolic">
          </li>
          <li>
            <label>心率: </label>
            <input class="form-control" placeholder="请输入数字" id="input-heart-rate" name="input-heart-rate">
          </li>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
        <button type="button" class="btn btn-primary" id="submit-add-pressure">保存</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
