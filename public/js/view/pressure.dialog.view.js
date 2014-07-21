
define(['dtpicker-local'], 
  function() {
    return new (function() {
      this.init = function(_opt) {
        var option = _opt;
        var elem = option.elem;
        elem.find('#input_time').datetimepicker({
          format: 'yyyy-mm-dd hh:ii'
        });
        elem.find('form').validate({
          rules: {
            'input-systolic': {
              required: true,
              number: true,
              range: [0, 500]
            },
            'input-diastolic': {
              required: true,
              number: true,
              range: [0, 500]
            },
            'input-heart-rate': {
              required: true,
              number: true,
              range: [0, 500]
            },
          },
          submitHandler: function(form) {
            var p = new Pressure({
              'time': form.find('#input-time').val(),
              'systolic': form.find('#input-systolic').val(),
              'diastolic': form.find('#input-diastolic').val(),
              'heart-rate': form.find('#input-heart-rate').val()
            });
            p.add({
              if_ok: function() {
                
              },
              if_err: function() {

              }
            }, this);
          }

        });
      }
    })();
  }
);