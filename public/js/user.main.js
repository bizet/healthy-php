
require(['requirejs.config'] , function() {
  require(['jquery', 'bootstrap'], function($) {
    $(function(){
      require(['view/pressure.list.view'], 
        function(_Pressure_List_View) {
        _Pressure_List_View.init({elem: $('#panel-pressure-list')});
      });
    });
  });
});