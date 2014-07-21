
define(['dtpicker-local'], 
  function() {
    return new (function() {
      this.init = function(_opt) {
        var option = _opt;
        var elem = option.elem;
        elem.find('#input_time').datetimepicker({
          format: 'yyyy-mm-dd hh:ii'
        });
      }
    })();
  }
);