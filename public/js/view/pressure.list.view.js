
define(['datatable'], 
  function() {
    return new (function() {
      this.init = function(_opt) {
        var option = _opt;
        var elem = option.elem;
        elem.find('#pressure-list').DataTable({
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