define(['control/event.center', 'model/user.model'], 
  function(_Event, _User) {
    return new (function() {
      var option = {};
      this.init = function(_opt) {
        option = _opt;
        option.elem.find('#search-input').change(this.update);
      };
      var update_lists = function(users) {
        var d_list = option.elem.find('#search-list');
        d_list.html('');
        for (var i = users.length - 1; i >= 0; i--) {
          d_list.append(
            $('<li></li>').append(
              $('<a></a>').html(users[i].real_name).attr({'href': 'user.php?user_id=' + users[i].id, 'target': '_blank'})
            )
          )
        };
      };
      this.update = function() {
        var user = new _User({
          id: $("#user_id").val()
        });
        user.search({
          search_by: 'real_name',
          search_value: option.elem.find('#search-input').val(),
          if_ok: function(users) {
            update_lists(users);
          },
          if_failed: function() {

          }
        });
      };
    })();
  }
);
