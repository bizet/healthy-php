define(["util/conn"], function(_c) {
  function Pressure(_p) {
    var pressure = _p || {};
    this.time = pressure.time || '';
    this.systolic = pressure.systolic || '';
    this.diastolic = pressure.diastolic || '';
    this.heart_rate = pressure.heart_rate || '';
  };
  Pressure.prototype.add = function(_opt, object) {
    _c.send_to_server({
      url: '/disease/add',
      name: this.name,
      operation: this.operation
    }, function(_b) {
      if (_b.result == 'ok') {
        _opt.if_ok.call(object);
      }
      else {
        _opt.if_error.call(object);
      }
    }, this);
  };
  Pressure.prototype.get_list = function(_opt, object) {
    _c.send_to_server({
      url: '/disease/get_list'
    }, function(_b) {
      if (_b.result == 'ok') {
        _opt.if_ok.call(object, _b.data);
      }
      else {
        _opt.if_error.call(object);
      }
    }, this);
  };
  return Pressure;
});