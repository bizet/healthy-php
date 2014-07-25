
define(['control/event.center', 'model/user.model'], 
  function(_Event, _User) {
    return new (function() {
      var option = null;
      this.init = function(_opt) {
        option = _opt;
        var health_elem = option.health_elem;
        health_elem.find('#submit-update-health').click(function(){
          health_elem.find('form').submit();
        });
        health_elem.find('form').validate({
          rules: {
            'input-height': {
              required: true,
              number: true,
              range: [0, 500]
            },
            'input-weight': {
              required: true,
              number: true,
              range: [0, 500]
            },
            'input-disease': {
            }
          },
          submitHandler: function(form) {
            var u = new _User({
              'height': $(form).find('#input-height').val(),
              'weight': $(form).find('#input-weight').val(),
              'disease': $(form).find('#input-disease').val()
            });
            u.update_health({
              if_ok: function() {
                health_elem.modal('hide');                
                _Event.trigger('user.info', 'update'); 
                return;
              },
              if_failed: function() {

              }
            }, this);
          }

        });

        _Event.register('user.info.dialog', this);
        _Event.on('user.info.dialog', 'health.show', this.health_show);
      };
      this.health_show = function() {
        var u = new _User({
          id: $('#user_id').val()
        });
        u.get_info_by_id({
          if_ok: function(user) {
            var form = option.health_elem.find('form');
            form.find('#input-height').val(user.height);
            form.find('#input-weight').val(user.weight);
            form.find('#input-disease').val(user.disease);
            option.health_elem.modal('show');
          },
          if_failed: function() {

          }
        }, this);
      };
    })();
  }
);