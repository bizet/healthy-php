define(function() {
  return (function() {require.config({
    baseUrl: 'public/js',
    paths: {
      'jquery': '//apps.bdimg.com/libs/jquery/1.9.1/jquery.min',
      'bootstrap': '//apps.bdimg.com/libs/bootstrap/3.2.0/js/bootstrap.min',
      'datatables': '//bizet-cn.com/public/js/lib/jquery/jquery.dataTables.min',
      'dtpicker': '//bizet-cn.com/public/js/lib/datetimepicker/bootstrap-datetimepicker.min',
      'dtpicker-local': '//bizet-cn.com/public/js/lib/datetimepicker/locales/bootstrap-datetimepicker.zh-CN',
      'valid': '//bizet-cn.com/public/js/lib/jquery/jquery.validate.min',
      'valid-local': '//bizet-cn.com/public/js/lib/jquery/localization/messages_zh.min',
    },
    shim: {
      'bootstrap': ['jquery'],
      'datatable': ['jquery'],
      'dtpicker': ['bootstrap'],
      'dtpicker-local': ['dtpicker'],
      'valid': ['jquery'],
      'valid-local': ['valid']
    }
    //urlArgs: "bust=" + (new Date()).getTime()
  });})();
});
