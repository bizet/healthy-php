
define(["util/conn"], function(_c) {
  function User(_user) {
    var user = _user || {};
    this.id = user.id || '';
    this.username = user.username || '';
    this.password = user.password || '';
    this.real_name = user.real_name || '';
    this.sex = user.sex || '';
    this.cell = user.cell || '';
    this.telephone = user.telephone || '';
    this.address = user.address || '';
    this.height = user.height || '';
    this.weight = user.weight || '';
    this.disease_list = user.disease_list || '';
  };
  User.prototype.reg = function(_opt, object) {
    _c.send_to_server({
      url: '/user/reg',
      username: this.username,
      password: this.password,
      real_name: this.real_name,
      sex: this.sex,
      cell: this.cell,
      telephone: this.telephone,
      address: this.address
    }, function(_b) {
      if (_b.result == 'ok') {
        _opt.if_ok.call(object);
      }
      else {
        if (_b.message == 'username exists') {
          _opt.if_username_already_exists.call(object);
        }
        else {
          _opt.if_error.call(object);
        }
      }
    }, this);
  };
  User.prototype.login = function(_opt, object) {
    _c.send_to_server({
      url: '/user/login',
      username: this.username,
      password: this.password
    }, function(_b) {
      if (_b.result == 'ok') {
        _opt.if_ok.call(object);
      }
      else {
        _opt.if_failed.call(object);
      }
    }, this);
  };
  User.prototype.get_info_by_id = function(_opt, object) {
    _c.send_to_server({
      url: '/user/get_info_by_id',
      user_id: this.id
    }, function(_b) {
      if (_b.result == 'ok') {
        _opt.if_ok.call(object, _b.data);
      }
      else {
        _opt.if_failed.call(object);
      }
    }, this);
  };
  User.prototype.search = function(_opt, object) {
    _c.send_to_server({
      url: '/user/search',
      by_what: _opt.search_by,
      search_value: _opt.search_value
    }, function(_b) {
      if (_b.result == 'ok') {
        _opt.if_ok.call(object, _b.data);
      }
      else {
        _opt.if_failed.call(object);
      }

    }, this);
  };
  User.prototype.update_health = function(_opt, object) {
    _c.send_to_server({
      url: '/user/update_health',
      height: this.height,
      weight: this.weight,
      disease_list: this.disease_list
    }, function(_b) {
      if (_b.result == 'ok') {
        _opt.if_ok.call(object, _b.data);
      }
      else {
        _opt.if_failed.call(object);
      }
    }, this);
  };
  User.prototype.update_account = function(_opt, object) {
    _c.send_to_server({
      url: '/user/update_account',
      real_name: this.real_name,
      sex: this.sex,
      cell: this.cell,
      telephone: this.telephone,
      address: this.address
    }, function(_b) {
      if (_b.result == 'ok') {
        _opt.if_ok.call(object, _b.data);
      }
      else {
        _opt.if_failed.call(object);
      }
    }, this);
  };

  return User;
});

