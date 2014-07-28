
define(['model/user.model', 'valid-local'], 
  function(_User) {
    return new (function() {
      this.init = function(_opt) {
        var option = _opt;
        var elem = option.elem;
        elem.validate({
          rules: {
            reg_input_username: {
              required: true,
              minlength: 3
            },
            reg_input_password: {
              required: true,
              minlength: 5
            },
            reg_input_password_confirm: {
              required: true,
              minlength: 5,
              equalTo: "#reg_input_password"
            },
          },
          submitHandler: function(form) {
            var user = new _User({
              username: $('#reg_input_username').val(),
              password: $('#reg_input_password').val(),
              real_name: $('#reg_input_real_name').val(),
              sex: $('#reg_input_sex').val(),
              cell: $('#reg_input_cell').val(),
              telephone: $('#reg_input_telephone').val(),
              address: $('#reg_input_address').val()
            });
            user.reg({
              if_ok: function() {
                window.location = $('#ref').val(); return;
              },
              if_username_already_exists: function() {

              },
              if_error: function() {

              }
            }, this);
          }

        });
      };
    })();
  }
);


