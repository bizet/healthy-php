
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
          'processing': true,
          'serverSide': true,
          'ajax': {
            'url': 'control/route.php',
            'data': {
              'url': '/pressure/get_all_list',
              'user_id': $('#user_id').val()
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
      }
    })();
  }
);