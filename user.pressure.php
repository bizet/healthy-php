<style>
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
</style>

<div id="panel-pressure-list" class="panel panel-default">
  <div class="panel-heading">
    <button class="btn btn-small btn-primary" id=""> 增加一条记录 </button>
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

<div class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">新增一条血压记录</h4>
      </div>
      <div class="modal-body">
        <form>
          <li>
            <label>测量时间</label>
          </li>
          <label>收缩压</label>
          <label>舒张压</label>
          <label>心率</label>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

