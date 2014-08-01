require(['requirejs.config'] , function() {
  require(['jquery', 'bootstrap'], function($) {
    $(function(){
      require([
        'view/pressure.list.view', 
        'view/pressure.dialog.view', 
        'view/user.info.view',
        'view/user.info.dialog.view'
      ], function(_Pressure_List_View, _Pressure_Dialog_View, _User_Info_View, _User_Dialog) {
          $('nav li').removeClass('active');
          $('a[href="user.php"]').parent().addClass('active');
          _User_Info_View.init({
            account_elem: $('#panel-account-info'),
            health_elem: $('#panel-health-info')
          });
          _Pressure_List_View.init({elem: $('#panel-pressure-list')});
          _User_Dialog.init({
            health_elem: $('#modal-update-health')
          });
          _Pressure_Dialog_View.init({elem: $('#modal-add-pressure')});
      });
    });
  });
});