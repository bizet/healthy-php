
define(['datatables'], 
  function() {
    return new (function() {
      this.init = function(_opt) {
        var option = _opt;
        var elem = option.elem;
        elem.find('#pressure-list').dataTable({
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
      }
    })();
  }
);