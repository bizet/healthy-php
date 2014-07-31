define(['control/event.center', 'model/disease.model'], 
  function(_Event, _Disease) {
    return new (function() {
      var option = {};
      this.init = function(_opt) {
        option = _opt;
        this.update();
        _Event.register('disease.list', this);
        _Event.on('disease.list', 'update', this.update);
      };
      var update_list = function(list) {
        var d_list = option.elem.find('#list-group-disease');
        d_list.html('');
        for (var i = list.length - 1; i >= 0; i--) {
          d_list.append(
            $('<li class="list-group-item"></li>').append(
              $('<label></label>').html(list[i].name),
              $('<label></label>').html(list[i].operation == 'Y' ? '需要填写手术日期':'不需要填写手术日期')
            )
          )
        };
      };
      this.update = function() {
        var disease = new _Disease({
          id: $("#user_id").val()
        });
        disease.get_list({
          if_ok: function(l) {
            update_list(l);
          },
          if_error: function() {

          }
        });
      };
    })();
  }
);
