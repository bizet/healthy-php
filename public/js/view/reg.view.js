
define(['model/user.model', 'model/input_alert.model', 'lib/jquery/localization/messages_zh.min'], 
  function(_User_Control, _Input_Alert) {
    return new (function() {
      this.init = function(_opt) {
        var option = _opt;
        var elem = option.elem;
        elem.validate({
          rules: {
            reg_input_username: "required"
          }
        });
      };
    })();
  }
);


