
require(['requirejs.config'] , function() {
  require(['jquery', 'bootstrap'], function($) {
    $(function(){
      require(['view/pressure.list.view', 'view/pressure.dialog.view'], 
        function(_Pressure_List_View, _Pressure_Dialog_View) {
          _Pressure_List_View.init({elem: $('#panel-pressure-list')});
          _Pressure_Dialog_View.init({elem: $('#modal-add-pressure')});

      });
    });
  });
});