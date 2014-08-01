
define(['control/event.center', 'model/user.model', 'model/disease.model', 'util/disease', 'dtpicker-local'], 
  function(_Event, _User, _Disease, _Util) {
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
            var checkers = $(form).find('input:checkbox:checked').map(function() {
              if ($(this).attr('operation') == 'Y') {
                return {
                  id: $(this).attr('value'),
                  operate_date: $(form).find('input[for=' + $(this).attr('value') + ']').val()
                };
              }
              return {id: $(this).attr('value')};
            }).get();
            var u = new _User({
              'height': $(form).find('#input-height').val(),
              'weight': $(form).find('#input-weight').val(),
              'disease_list': _Util.disease_to_str(checkers)
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
            //form.find('#input-disease').val(user.disease);
            var check_list_form = form.find('#disease-checkbox-list');
            check_list_form.html('');
            var d = new _Disease();
            d.get_list({
              if_ok: function(l) {
                for (var i = l.length - 1; i >= 0; i--) {
                  var item_li = $('<li></li>');
                  item_li.append(
                    $('<div class="checkbox"></div>').append(
                      $('<label></label>').append(
                        $('<input type="checkbox"></input>').attr({'value': l[i].id, 'operation': l[i].operation}),
                        l[i].name
                      )
                    )
                  );
                  if (l[i].operation == 'Y') {
                    item_li.append(
                      $('<label></label>').html('手术时间').attr('for', 'disease' + l[i].id),
                      $('<input class="form-control"></input>').attr({'for': l[i].id, 'id': 'disease' + l[i].id}).datetimepicker({
                        autoclose: true,
                        minView: 2,
                        language: 'zh-CN',
                        format: 'yyyy-mm-dd'
                      })
                    );
                  };
                  check_list_form.append(item_li);
                };
                var disease_list = _Util.str_to_disease(user.disease_list);
                for (var i = disease_list.length - 1; i >= 0; i--) {
                  var d_item = disease_list[i];
                  $('input:checkbox[value=' + d_item.id + ']').attr('checked', true);
                  if (d_item.operate_date) {
                    $('input#disease' + d_item.id).val(d_item.operate_date);
                  }
                };
              }
            })
            option.health_elem.modal('show');
          },
          if_failed: function() {

          }
        }, this);
      };
    })();
  }
);