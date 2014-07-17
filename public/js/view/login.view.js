
define(['model/user.model', 'lib/jquery/localization/messages_zh.min'], 
  function(_User) {
    return new (function() {
      this.init = function(_opt) {
        var option = _opt;
        var elem = option.elem;
        var validator = elem.validate({
          rules: {
            login_input_username: {
              required: true,
              minlength: 3
            },
            login_input_password: {
              required: true,
              minlength: 5
            }
          },
          submitHandler: function() {
            var user = new _User({
              username: $('#login_input_username').val(),
              password: $('#login_input_password').val()
            });
            user.login({
              if_ok: function() {
                window.location = $('#ref').val(); return;
              },
              if_failed: function() {
                this.showErrors({
                  'login_input_password': '用户名或密码错误'
                });
              }
            }, this);
          }

        });
      };
    })();
  }
);

