;define(['control/event.center', 'model/user.model'], 
  function(_Event, _User) {
    return new (function() {
      var option = {};
      this.init = function(_opt) {
        option = _opt;
        this.update();
        option.health_elem.find('#btn-update-health').click(function() {
          _Event.trigger('user.info.dialog', 'health.show');
        });
        _Event.register('user.info', this);
        _Event.on('user.info', 'update', this.update);
      };
      this.update = function() {
        var user = new _User({
          id: $("#user_id").val()
        });
        user.get_info_by_id({
          if_ok: function(user) {
            option.account_elem.find('#span-username').html(user.username);
            option.account_elem.find('#span-real_name').html(user.real_name);
            sexstr = '男';
            if (user.sex == 'F') sexstr = '女';
            option.account_elem.find('#span-sex').html(sexstr);
            option.account_elem.find('#span-cell').html(user.cell);
            option.account_elem.find('#span-telephone').html(user.telephone);
            option.account_elem.find('#span-address').html(user.address);
            option.health_elem.find('#span-height').html(user.height);
            option.health_elem.find('#span-weight').html(user.weight);
            var height = parseFloat(user.height);
            var weight = parseFloat(user.weight);
            var bmi = height ? (weight / (height * height / 10000)).toFixed(2) : 0;
            option.health_elem.find('#span-bmi').html(bmi);
            option.health_elem.find('#span-disease').html(user.disease_list);
          }
        });
      };
    })();
  }
);

