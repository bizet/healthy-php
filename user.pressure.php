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

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="public/js/lib/jquery/jquery.datatables.min.js"></script>
<script>
  $('#pressure-list').DataTable({
    'serverSide': true,
    'ajax': {
      'url': 'control/route.php',
      'data': {
        'url': '/pressure/get_all_list',
        'user_id': <?php echo $_SESSION['user']['id'] ?>
      },
      'type': 'POST',
      'dataSrc': function(_b) {
        if (_b.result == 'ok') {
          var result = [];
          for (var i = _b.data.length - 1; i >= 0; i--) {
            var r = [];
            r.push(_b.data[i]['time']);
            r.push(_b.data[i]['systolic']);
            r.push(_b.data[i]['diastolic']);
            r.push(_b.data[i]['heart_rate']);
            result.push(r);
          };
          return result;
        }
        return [];
      }

    }
  });
</script>