
define(['control/event.center', 'model/pressure.model', 'dtpicker-local', 'lib/jquery/localization/messages_zh.min'], 
  function(_Event, _Pressure) {
    return new (function() {
      this.init = function(_opt) {
        var option = _opt;
        var elem = option.elem;
        elem.find('#input-time').datetimepicker({
          format: 'yyyy-mm-dd hh:ii'
        });
        elem.find('#submit-add-pressure').click(function(){
          elem.find('form').submit();
        });
        elem.find('form').validate({
          rules: {
            'input-time': {
              required: true
            },
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
            var p = new _Pressure({
              'time': $(form).find('#input-time').val(),
              'systolic': $(form).find('#input-systolic').val(),
              'diastolic': $(form).find('#input-diastolic').val(),
              'heart_rate': $(form).find('#input-heart-rate').val()
            });
            p.add({
              if_ok: function() {
                elem.modal('hide');
                window.location.reload(); return;
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