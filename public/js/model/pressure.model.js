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
      url: '/pressure/add',
      time: this.time,
      systolic: this.systolic,
      diastolic: this.diastolic,
      heart_rate: this.heart_rate
    }, function(_b) {
      if (_b.result == 'ok') {
        _opt.if_ok.call(object);
      }
      else {
        _opt.if_error.call(object);
      }
    }, this);
  };
  return Pressure;
});