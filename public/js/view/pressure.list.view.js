
define(['control/event.center', 'datatables'], 
  function(_Event) {
    return new (function() {
      var option = {};
      this.init = function(_opt) {
        option = _opt;
        var elem = option.elem;
        option.datatable = elem.find('#pressure-list').dataTable({
          /*
          'bProcessing': true,
          "bServerSide": true,
          "sAjaxSource": "control/route.php",
          "sServerMethod": "POST",
          "aoColumns": [
            { "mData": "time" },
            { "mData": "systolic" },
            { "mData": "diastolic" },
            { "mData": "heart_rate" }
          ],
          "fnServerParams": function ( aoData ) {
            aoData.push({"name": "url", "value": "/pressure/get_all_list"});
            aoData.push({"name": "user_id", "value": $('#user_id').val()});
          }
          */
          'searching': false,
          'ordering': false,
          'processing': true,
          'serverSide': true,
          'ajax': {
            'url': 'control/route.php',
            'data': {
              'url': '/pressure/get_list',
              'user_id': $('#user_id').val()
            },
            'type': 'POST'
          },
          'columns': [
            {'data': 'time'},
            {'data': 'systolic'},
            {'data': 'diastolic'},
            {'data': 'heart_rate'}
          ]
        });
        _Event.register('pressure.list', this);
        _Event.on('pressure.list', 'update', this.update);
      };
      this.update = function() {
        option.datatable.ajax.reload();
      };
    })();
  }
);