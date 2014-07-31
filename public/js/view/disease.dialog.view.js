
define(['control/event.center', 'model/disease.model', 'valid-local'], 
  function(_Event, _Disease) {
    return new (function() {
      this.init = function(_opt) {
        var option = _opt;
        var elem = option.elem;
        elem.find('#submit-add-disease').click(function(){
          elem.find('form').submit();
        });
        elem.find('form').validate({
          rules: {
            'input-name': {
              required: true
            }
          },
          submitHandler: function(form) {
            var d = new _Disease({
              'name': $(form).find('#input-name').val(),
              'operation': $(form).find('#input-operation').val()
            });
            d.add({
              if_ok: function() {
                elem.modal('hide');                
                _Event.trigger('disease.list', 'update');
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